<?php
session_start();
if($_SESSION["role"] == "staff"){
    require "StaffHomepage.php";
}
else{
    require "AdminHomepage.php";
}
require_once "GetCust.php";
?>
<div class="signupBox">
    <h2>View Users</h2><br>
        <div>
            <table>
                <thead>
                    <td>Username</td>
                    <td>First Name</td>
                    <td>Last Name</td>
                    <td>DoB</td>
                    <td>Email</td>
                    <td>Postcode</td>
                    <td>Update</td>
                </thead>

                <?php
                $user = getUsers();
                for ($i=0; $i<count($user); $i++):
                ?>
                <tr>
                    <td><?php echo $user[$i]['username']?></td>
                    <td><?php echo $user[$i]['fname']?></td>
                    <td><?php echo $user[$i]['lname']?></td>
                    <td><?php echo $user[$i]['datebirth']?></td>
                    <td><?php echo $user[$i]['email']?></td>
                    <td><?php echo $user[$i]['postcode']?></td>
                    <td><a href="UpdateUser.php?uid=<?php echo $user[$i]['username'];
                    ?>">Update</a></td>
                </tr>
                <?php endfor;?>
            </table>
        </div>
</div>