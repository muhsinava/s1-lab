<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
echo "Hello World !";
$var1=10;
$var2=30;
$s=$var1+$var2;
echo'<br>';
echo 'The value is ',$s;
echo'<br> <br>';
echo 'Number Pyramid';
echo'<br>';
for($i=1;$i<=5;$i++){
    for($j=1;$j<=$i;$j++){
    echo $j," ";
}
echo'<br>';
}
?>
