<?php require "NavBar.php";

$result = $_GET["CreateUser"];
?>

        <div>
            <h3>Your Username Is</h3>
            <?php
            if ($result == "fail"){
                echo "Account Creation Failed";
            }
            else{
                echo $result;
            }
            ?>
        </div>
    </body>
</html>