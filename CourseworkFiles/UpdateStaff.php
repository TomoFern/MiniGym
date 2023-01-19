<?php 
require "AdminHomepage.php";
require_once "UpdateStaffSQL.php";

$errorfname = $errorlname = $errorstatus = $erroremail = $errorrole = "";
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

    if ($_POST["email"] == "") {
        $errordob = "Please Enter a Valid Email";
        $allFields = false;
    }

    if ($_POST["status"] == "") {
        $erroremail = "Please Enter a Valid Status";
        $allFields = false;
    }

    if ($_POST["role"] == "") {
        $errorpstcd = "Please Enter a Valid Role";
        $allFields = false;
    }

    if($allFields){
        $updateStaff = UpdateStaff();
        if($updateStaff == false){
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

                    <label>Email</label>
                    <input type="text" name="email">
                    <span><?php echo $erroremail; ?></span>

                    <br>
                    <br>

                    <label>Status</label>
                    <input type="text" name="status">
                    <span><?php echo $errorstatus; ?></span>

                    <br>
                    <br>

                    <label>Role</label>
                    <input type="text" name="role">
                    <span><?php echo $errorrole; ?></span>
                </div>
                <input type="submit" value="Enter" name="submit">
        </div>

    </body>
</html>