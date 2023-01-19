<?php 
require "StaffHomepage.php";
require_once "UpdateUserSQL.php";

$errorfname = $errorlname = $errordob = $erroremail = $errorpstcd = "";
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

    if($allFields){
        $updateUser = UpdateUser();
        if($updateUser == false){
            echo "Error Occured";
        }
        else{
            echo "Update Successful";
        }
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
                </div>
                <input type="submit" value="Enter" name="submit">
        </div>

    </body>
</html>