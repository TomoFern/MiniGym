<?php 
require "NavBar.php";
require_once "createUser.php";

$errorfname = $errorlname = $errordob = $erroremail = $errorpstcd = $errorpswrd = "";
$allFields = true;

if (isset($_POST["submit"])) {

    if ($_POST["fname"] == "") {
        $errorfname = "Please Enter a Valid First Name";
        $allFields = false;
    }

    if ($_POST["lname"] == "") {
        $errorlname = "Please Enter a Valid Last Name";
        $allFields = false;
    }

    if ($_POST["dob"] == "") {
        $errordob = "Please Enter a Valid Date of Birth";
        $allFields = false;
    }

    if ($_POST["email"] == "") {
        $erroremail = "Please Enter a Valid Email";
        $allFields = false;
    }

    if ($_POST["pstcd"] == "") {
        $errorpstcd = "Please Enter a Valid Postcode";
        $allFields = false;
    }

    if ($_POST["pswrd"] == "") {
        $errorpswrd = "Please Enter a Valid Password";
        $allFields = false;
    }

    if($allFields){
        $createUser = CreateUser();
        header("Location: SignUpSum.php?CreateUser=".$createUser);
    }
}
?>

        <div class="signupBox">
            <form method="post">
                <div class="signupForm">
                    <label>First Name</label>
                    <input type="text" name="fname">
                    <span><?php echo $errorfname; ?></span>

                    <br>
                    <br>

                    <label>Last Name</label>
                    <input type="text" name="lname">
                    <span><?php echo $errorlname; ?></span>

                    <br>
                    <br>

                    <label>Date Of Birth</label>
                    <input type="text" name="dob">
                    <span><?php echo $errordob; ?></span>

                    <br>
                    <br>

                    <label>Email</label>
                    <input type="text" name="email">
                    <span><?php echo $erroremail; ?></span>

                    <br>
                    <br>

                    <label>Postcode</label>
                    <input type="text" name="pstcd">
                    <span><?php echo $errorpstcd; ?></span>

                    <br>
                    <br>

                    <label>Password</label>
                    <input type="text" name="pswrd">
                    <span><?php echo $errorpswrd; ?></span>
                </div>
                <input type="submit" value="Enter" name="submit">
        </div>

    </body>
</html>