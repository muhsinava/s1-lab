<?php 

if (isset($_POST['submit'])){
    $name=$_POST['n1'];
    $RollNo=$_POST['no1'];
    $MFC=$_POST['MFC1'];
    $ASE=$_POST['ASE1'];
    $DFCS=$_POST['DFCS1'];
    $ADS=$_POST['ADS1'];
    $arr=array($name[0],$RollNo[0],$MFC[0],$ASE[0],$DFCS[0],$ADS[0]);
}
?>
<html>
    <body>
    <center>
        <form>
            <table border="3">
                <tr>
                    <td colspan="" >RollNo.</td>
                    <td colspan="6"><?php echo $arr[1];?> </td>
                </tr>
                
                 <tr>
                    <td>Name</td>
                    <td colspan="6"> <?php echo $arr[0];?></td>
                </tr>
                
                <tr>
                    <td rowspan="2">S1 No.</td>
                    <td colspan="4">Subject</td>
                    <td rowspan="2">Total Mark</td>
                    <td rowspan="2">Pass/Fail</td>
                </tr>
                
                <tr>
                    
                    <td>MFC</td> <td>ASE</td> <td>DFCS</td> <td>ADS</td>
                    <td> </td>
                    <td> </td>
                    
                </tr>
                <tr>
                    <td>1.</td>
                    <td><?php echo $arr[2];?></td>
                    <td><?php echo $arr[3];?></td>
                    <td><?php echo $arr[4];?></td>
                    <td><?php echo $arr[5];?></td>
                    <td> </td>
                </tr>
            </table>
        </form>
    </center>
    </body>
</html>
