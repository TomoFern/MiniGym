<?php 
require "Homepage.php";
require_once "UpdateMembership.php";

if (isset($_POST["submit"])) {

    $updateMem = UpdateMem();
    header("Location: SignUpSu");

}
?>
        <p>Update Your Membership</p>
        <div class="signupBox">
            <form method="post">
                <div class="signupForm">
                    <label>Membership</label>
                    <br>
                    <input type="radio" id="day" name="memType" value="day">
                    <label for="day">Day Pass</label><br>
                    <input type="radio" id="month" name="memType" value="month">
                    <label for="month">Month Pass</label><br>
                    <br>
                </div>
                <input type="submit" value="Enter" name="submit">
        </div>

    </body>
</html>