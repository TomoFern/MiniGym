<?php 
require "NavBar.php"; 
require_once "UpdatePassword.php";

$errorpass = "";
$allFields = true;

if (isset($_POST["submit"])) {

    if ($_POST["pass"] == "") {
        $errorpass = "Password Required";
        $allFields = false;
    }

    if($allFields){
        $updatePass = UpdatePass();
        if ($updatePass == true){
            header("Location: Login.php");
        }
        else{
            echo "Error";
        }
    }
}
?>
        <div class="signupBox">
            <form method="post">
                <div class="signupForm">
                    <label>New Password</label>
                    <input type="text" name="pass">
                    <span><?php echo $errorpass; ?></span>
                    <br>
                </div>
                <input type="submit" value="Enter" name="submit">
            </form>
        </div>
    </body>
</html>