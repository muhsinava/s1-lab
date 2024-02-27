<?php
//create a connection
$c=new mysqli("localhost","root","");

//check connection
if($c->connect_error)
{
    die("Connection failed".$c->connect_error);
}

// create db named S1MCA
$db1="CREATE DATABASE S1MCA";
if($c->query($db1)===TRUE)
{
    echo 'Database created successfully';
}
 else {
    echo 'already exist';    
}
?>
