<?php 

if (isset($_POST['sub1'])){
    $name=$_POST['n1'];
    $RollNo=$_POST['no1'];
    $Subject=$_POST['s1'];
    $Marks=$_POST['m1'];
    $arr=array($name[0],$RollNo[0],$Subject[0],$Marks[0]);
}
?>
<html>
    <body>
    <center>
        <form>
            <table border="3">
                <tr>
                    <td>RollNo.</td>
                    <td><?php echo $arr[1];?> </td>
                </tr>
                
                 <tr>
                    <td>Name</td>
                    <td><?php echo $arr[0];?> </td>
                </tr>
                
                <tr>
                    <td>S1 No.</td>
                    <td>Subject</td>
                    <td>Mark</td>
                    <td>Pass/Fail</td>
                </tr>
                
                <tr>
                    <td> </td>
                </tr>
            </table>
        </form>
    </center>
    </body>
</html>
