
<html>
    <body>
    <center>
        <form action="marks.php" method="post">
            <table border="3" width="200" height='100'>
                <tr>
                    <th rowspan="2">SI.No.</th>
                    <th rowspan="2">Name</th>
                    <th rowspan="2">Roll No.</th>
                    <th colspan="4">Internal Marks</th>

                    
                </tr>
                
                <tr>
                    <td>MFC</td>
                    <td>ASE</td>
                    <td>DFCS</td>
                    <td>ADS</td>
                </tr>
                
                <?php
                for($i =0;$i<5;$i++){
               ?>
                <tr>
                    
                    <td><?php echo $i+1?></td>
                    <td><input type='text' name='name[<?php $i ?>]' ></td>
                    <td><input type='text' name='rollno[<?php $i ?>]' size='4'></td>
                    <td><input type='text' name='MFC[<?php $i ?>]' size='4' ></td>
                    <td><input type='text' name='ASE[<?php $i ?>]' size='4' ></td>
                    <td><input type='text' name='DFCS[<?php $i ?>]' size='4' ></td>
                    <td><input type='text' name='ADS[<?php $i ?>]' size='4' ></td>
                    
                 </tr>
                <?php
                }?>
               
                <tr>
                    <td colspan="7" align="center"><input type="submit" name="sub1"></td>
                </tr>
            </table>
        </form>
    </center>
    </body>
</html>


