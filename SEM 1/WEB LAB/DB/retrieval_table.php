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
            <table border="1" width="220px">
                <tr>
                    <th>ID</th>
                     <th>NAME</th>
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
                </tr>
                <?php
                 }
                }
                $c->close();
                ?>
            </table>
        </form>
    </center>
    </body>
</html>


