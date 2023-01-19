<?php 
require "NavBar.php";
require_once "CheckUser.php";

$erroruname = $errorpstcd = $erroremail = $errordob = "";
$allFields = true;

if (isset($_POST["submit"])) {

    if ($_POST["uname"] == "") {
        $erroruname = "Username Required";
        $allFields = false;
    }

    if ($_POST["pstcd"] == "") {
        $errorpstcd = "Postcode Required";
        $allFields = false;
    }

    if ($_POST["email"] == "") {
        $erroremail = "Email Required";
        $allFields = false;
    }

    if ($_POST["dob"] == "") {
        $errordob = "Date of Birth Required";
        $allFields = false;
    }

    if($allFields){
        $userCheck = checkUser();
        if ($userCheck == true){
            header("Location: ChangePassword.php");
        }
        else{
            echo "Details Incorrect";
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

                    <label>Postcode</label>
                    <input type="text" name="pstcd">
                    <span><?php echo $errorpstcd; ?></span>

                    <br>
                    <br>

                    <label>Email</label>
                    <input type="text" name="email">
                    <span><?php echo $erroremail; ?></span>

                    <br>
                    <br>

                    <label>DoB</label>
                    <input type="text" name="dob">
                    <span><?php echo $errordob; ?></span>
                </div>
                <input type="submit" value="Enter" name="submit">
            </form>
        </div>
    </body>
</html>