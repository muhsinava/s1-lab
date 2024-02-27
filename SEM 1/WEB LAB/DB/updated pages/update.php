<?php
//table connection
$c=new mysqli("localhost","root","","S1MCA");

//check connection
if($c->connect_error)
{
    die("connection failed".$c->connect_error);
}
else
//{
//    echo 'table connection success';
//}

    
$eid="";
$id="";
$name="";
if(isset($_GET["uid"]))
{
    $eid=$_GET["uid"];
    
    $sel="select * from student where id=$eid";
    $data=mysqli_query($c,$sel);
    $row=mysqli_fetch_assoc($data);
    $id=$row['id'];
    $name=$row['Name'];
            
}
?>
<html>
    <body>
    <center>
        
        <form method="post" action="" style="padding-top:50px;">
            <h2>Form1</h2>
        <table border="1">
            <tr>
                <th>Id</th>
                <th>Name</th>
                
            </tr>
            <tr>
                <td><input type="hidden" name="id" value="<?php echo $eid ?>">
                    <input type="text" name="id" value="<?php echo $id ?>"></td> 
                
                <td><input type="text" name="n" value="<?php echo $name ?>"></td>
            </tr>
            <tr>
                <td colspan="2"><center><input type="submit" name="s"></center></td>
            </tr>
            <tr>
                <td colspan="2"><center><a href="retrieval_table.php">Display</center></a></td>
            </tr>
        </table>
        </form>
    </center>
    </body>
</html>

<?php


    if(isset($_POST['s']))
    {
        $id=$_POST['id'];
        $name=$_POST['n'];
       
        
        if(isset($_GET["uid"]))
        {
            $id=$_POST['id'];
            $name=$_POST['n'];
            
        
            $updateQue="update student set id=$id,name='$name' where id=$eid";
            //echo $insQue;
            if(mysqli_query($c,$updateQue))
                echo "\nUpdated successfully\n";
            else
                echo " Failed";
        }
        else
        {   //"INSERT INTO student(id,Name)VALUES($id,'$name')"
            $insQue="insert into student(id,Name)values($id,'$name')";
            //echo $insQue;
            if(mysqli_query($c,$insQue))
                echo "\nInserted successfully\n";
            else
                echo " Failed";
        } 
    }
    


?>

