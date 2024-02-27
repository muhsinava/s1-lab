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

//table creation
$tbl="CREATE TABLE student(id INT(3) PRIMARY KEY,Name VARCHAR(30))";
if($c->query($tbl)===TRUE)
{
    echo 'Table created successfully';
}

?>
