<html>
    <head>
        <title>Table</title>
        <script type="text/javascript">
         function ver()
         {
            if(document.forms.F1.fname.value=="")
            {
               window.alert("Enter First Name");
               document.forms.F1.fname.Focus();
            }
            else if(document.forms.F1.lname.value==""){
               window.alert("Enter lastname");
               document.forms.F1.lname.Focus();
            }
            else if(document.forms.F1.phone.value==""){
               window.alert("Enter Phonenumber")
               document.forms.F1.phone.Focus();
            }
            else if(document.forms.F1.dob.value==""){
               window.alert("Enter Date Of Birth")
               document.forms.F1.dob.Focus();
            }
            else if(document.forms.F1.mail.value==""){
               window.alert("Enter email id")
               document.forms.F1.mail.Focus();
            }

               return false;
         }
        </script>
    </head>
      <body>
        <center>
            <form id="F1" onsubmit= "return ver()" action="tableformphp.php" method="post">
        <table border="1" height="30px" bgcolor="">
             <br><br><br><br>

            <h1>REGISTRATION FORM</h1>

             <tr>
                <td>FirstName</td>
                <td><input type="text"  name="fname"></td>
             </tr>
              
             <tr>
                <td>LastName</td>
                <td><input type="text"  name="lname"></td>
             </tr> 

             <tr>
                <td>PhoneNo:</td>
                <td><input type="text"  name="phone"></td>
             </tr>
            
             <tr>
                <td>DOB</td>
                <td><input type="date"  name="dob"></td>
             </tr>

             <tr>
                <td>Email</td>
                <td><input type="email" name="mail"></td>
             </tr>

             <tr>
                <td>Password</td>
                <td><input type="password"  required></td>
             </tr> 

             <tr>
                
                <td colspan="2"><center><input type="submit" value="Sign In" name="btn"></center></td>
             </tr>

        </table>
        Already have an Account?  <a href="sample form.html">Login Here!</a>
        </center>
      </form>
        <!-- <img src="C:\Users\Administrator\Pictures\Screenshots\img1.png" alt="image" width="500px" height="400px"> -->
     

<?php
if(isset($_POST['btn'])){
    $f=$_POST['fname'];
    $l=$_POST['lname'];
    $p=$_POST['phone'];
    $d=$_POST['dob'];
    $m=$_POST['mail'];
?>
<table border="1" height="30px" bgcolor="">
    <tr>
                <td>FirstName</td>
                <td><?php echo $f,'<br>';?></td>
             </tr>
             
             <tr>
                <td>LastName</td>
                <td><?php echo $l,'<br>';?></td>
             </tr>
             
             <tr>
                <td>Phone no:</td>
                <td><?php echo $p,'<br>';?></td>
             </tr>
             
             <tr>
                <td>DOB</td>
                <td><?php echo $d,'<br>';?></td>
             </tr>
             
             <tr>
                <td>Email</td>
                <td><?php echo $m,'<br>';?></td>
             </tr>
</table>
             </body>
             <?php
             }
?>
</html>

