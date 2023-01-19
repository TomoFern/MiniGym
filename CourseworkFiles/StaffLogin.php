<?php
session_start();
require "NavBar.php"; 
require_once "LoginStaff.php";

$erroremail = $errorid = "";
$allFields = true;

if (isset($_POST["submit"])) {

    if ($_POST["email"] == "") {
        $erroremail = "Email Required";
        $allFields = false;
    }

    if ($_POST["id"] == "") {
        $errorid = "ID Required";
        $allFields = false;
    }

    if($allFields){
        $loginUser = LoginStaff();
        if ($loginUser == true){
            echo "Login Successful";
            if ($_SESSION["role"] == "staff") {
                header("Location: StaffHomepage.php");
            }
            else{
                header("Location: AdminHomepage.php");
            }
        }
        else{
            echo "Email or ID Incorrect";
        }
    }
}
?>
        <div class="signupBox">
            <form method="post">
                <div class="signupForm">
                    <label>Email</label>
                    <input type="text" name="email">
                    <span><?php echo $erroremail; ?></span>

                    <br>
                    <br>

                    <label>ID</label>
                    <input type="text" name="id">
                    <span><?php echo $errorid; ?></span>
                </div>
                <input type="submit" value="Enter" name="submit">
            </form>
        </div>
    </body>
</html>