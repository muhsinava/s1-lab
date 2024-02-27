
<?php
    if(isset($_POST['b5'])){
        $n1=$_POST['b1'];
        $t1=10*$n1;
        $n2=$_POST['b2'];
        $t2=5*$n2;
        $n3=$_POST['b3'];
        $t3=40*$n3;
        $n4=$_POST['b4'];
        $t4=2*$n4;
        $t5=$t1+$t2+$t3+$t4;
    }
    ?>
<html>
    <head>

        </head>
        <body>
            <center>
                <form>
                    <h3>ABC Supermarket</h3>
                    <h5>1/11/2023</h5>
                    <table border="1" height="30px">
                        <tr>
                            <td>SI No.</td>
                            <td>Item</td>
                            <td>Quantity</td>
                            <td>Unit Price</td>
                            <td>Total</td>
                        </tr>
                        <tr>
                            <td>1.</td>
                            <td>Pen</td>
                            <td><?php echo $n1,'<br>';?></td>
                            <td>10</td>
                            <td><?php echo $t1,'<br>';?></td>
                        </tr>
                         <tr>
                            <td>2.</td>
                            <td>Pencil</td>
                            <td><?php echo $n2,'<br>';?></td>
                            <td>5</td>
                            <td><?php echo $t2,'<br>';?></td>
                        </tr>
                         <tr>
                            <td>3.</td>
                            <td>Book</td>
                            <td><?php echo $n3,'<br>';?></td>
                            <td>40</td>
                            <td><?php echo $t3,'<br>';?></td>
                        </tr>
                         <tr>
                            <td>4.</td>
                            <td>A4 Sheet</td>
                            <td><?php echo $n4,'<br>';?></td>
                            <td>2</td>
                            <td><?php echo $t4,'<br>';?></td>
                        </tr>
                        <tr>
                            <td colspan="2">Total Amount</td>
                            <td colspan="3"><?php echo $t5,'<br>';?></td>
                        </tr>
                    </table>
                </form>
            </center>
        </body>
    </html>
    
    

