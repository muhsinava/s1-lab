<html>
    <head>

        </head>
        <body>
            <center>
                <form action="new.php" method="POST">
                    <input type="text" name="Firstname" placeholder="Firstname"/>
                    <input type="submit" name="clickme"/>
                </form>
            </center>
        </body>
    </html>
    
    <?php
    if(isset($_POST['clickme'])){
        $n=$_POST['Firstname'];
        echo "welcome ",$n;
    }
    ?>


