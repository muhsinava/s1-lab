<?php
function area($v)
{
    return $v*$v*$v;
}
 ?>

<html>
    <head>
        <title>Function Trial</title>
    </head>
    <body>
        <form action="function.php" method="POST">
            Enter a side for cube
            <input type="number" name="v" >
            <input type="submit" name="bt" value="Submit">
            <?php
                            if(isset($_POST["bt"]))
                            {
                                $s=$_POST["v"];
                               
                                ?>
            
            <label>Volume of cube=</label>
         <input type="text" name="value1" value="<?php echo area($s); ?>" ><br>
            
             <?php
                                
                            }

                        ?>
        </form>
    </body>
</html>

<?php
function area2($l,$b){
    return $l*$b;
}

echo 'Area of square=',area2(2,3);

?>


