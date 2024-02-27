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


?>
<html>
    <head>
        <style>
            h2 {
   color: lightblue;
  text-shadow: 2px 2px 4px #000000;
}
/*body {
  background-image: linear-gradient(to bottom right, pink,green);
}*/
/*table {
  background-image: linear-gradient(to right, pink, yellow);;
}*/
        </style>
    </head>
    <body>
    <center>
        
        <form method="post" action="inser_user2output.php" style="padding-top:50px;">
            <h2>Form1</h2>
        <table border="1">
            <tr>
                <th>Id</th>
                <th>Name</th>
                
            </tr>
            <tr>
                <td><input type="number" name="id"></td>
                <td><input type="text" name="n"></td>
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


