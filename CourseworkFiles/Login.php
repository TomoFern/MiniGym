<?php 
require "NavBar.php"; 
require_once "LoginUser.php";

$erroruname = $errorpass = "";
$allFields = true;

if (isset($_POST["submit"])) {

    if ($_POST["uname"] == "") {
        $erroruname = "Username Required";
        $allFields = false;
    }

    if ($_POST["pass"] == "") {
        $errorpass = "Password Required";
        $allFields = false;
    }

    if($allFields){
        $loginUser = LoginUser();
        if ($loginUser == true){
            echo "Login Successful";
            header("Location: Homepage.php");
        }
        else{
            echo "Username or Password Incorrect";
        }
    }
}
?>
        <div class="signupBox">
            <form method="post">
                <div class="signupForm">
                    <label>Username</label>
                    <input type="text" name="uname">
                    <span><?php echo $erroruname; ?></span>

                    <br>
                    <br>

                    <label>Password</label>
                    <input type="text" name="pass">
                    <span><?php echo $errorpass; ?></span>
                </div>
                <input type="submit" value="Enter" name="submit">
            </form>
        </div>
        <div class="signupBox">
            <a href="ForgotPassword.php">Forgot Password?</a>
        </div>
    </body>
</html>