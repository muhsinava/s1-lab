<?php
//table connection
$c=new mysqli("localhost","root","","S1MCA");

//check connection
if($c->connect_error)
{
    die("connection failed".$c->connect_error);
}
//else
//{
//    echo 'table connection success';
//}


//retrieval data
$ret="SELECT * FROM student";
$r=$c->query($ret);
?>
<html>
    <body>
    <center>
        <form>
            <table border="1"  width="220px">
                <tr>
                    <th>ID</th>
                     <th>NAME</th>
                     <th colspan="2">Action</th>
                </tr>
                <?php
                if($r->num_rows>0)
                {
                 while($row=$r->fetch_assoc())
                 {
                     ?>
                <tr>
                    <td><?php echo $row['id'] ;?> </td>
                     <td><?php echo $row['Name'] ;?></td>
                     <td><a href="retrieval_table.php?sid=<?php echo $row['id']?>">Delete</a></td>
                     <td><a href="update.php?uid=<?php echo $row['id']?>">Update</a></td>
                </tr>
                <?php
                 
                }
//                $c->close();
                ?>
            </table>
        </form>
    </center>
    </body>
</html>
<?php
}

else
{
    echo "Table Empty";
}
if(isset($_GET["sid"]))
{
    $id=$_GET["sid"];
    //echo $_GET["sid"];
    $del="delete from student where id=$id ";
    //echo $del;
    if(mysqli_query($c,$del))
    {
             echo "\nDeleted successfully\n";
              header("Location: retrieval_table.php");
    }  
        
        else
                echo " Failed";
        
}
?>


