<?php
//table connection
$c=new mysqli("localhost","root","","S1MCA");

//check connection
if($c->connect_error)
{
    die("connection failed".$c->connect_error);
}
else
{
    echo 'table connection success';
}

//insertion query
$insert1="INSERT INTO student(id,Name)VALUES(4,'thomas'),(3,'jas')";
if($c->query($insert1)==TRUE)
{
    echo 'Inserted successfully';
}
?>

