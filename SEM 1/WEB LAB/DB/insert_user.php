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

//insertion from variable
$id=2;
$N="Radha";

$insert1="INSERT INTO student(id,Name)VALUES($id,'$N')";
if($c->query($insert1)==TRUE)
{
    echo 'Inserted successfully';
}
else{
    echo 'already exist';
}
?>
