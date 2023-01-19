<?php
require "AdminHomepage.php";
require_once "GetStaff.php";
?>
<div class="signupBox">
    <h2>View Users</h2><br>
        <div>
            <table>
                <thead>
                    <td>ID</td>
                    <td>First Name</td>
                    <td>Last Name</td>
                    <td>Email</td>
                    <td>Status</td>
                    <td>Role</td>
                    <td>Update</td>
                </thead>

                <?php
                $staff = getStaff();
                for ($i=0; $i<count($staff); $i++):
                ?>
                <tr>
                    <td><?php echo $staff[$i]['id']?></td>
                    <td><?php echo $staff[$i]['fname']?></td>
                    <td><?php echo $staff[$i]['lname']?></td>
                    <td><?php echo $staff[$i]['email']?></td>
                    <td><?php echo $staff[$i]['status']?></td>
                    <td><?php echo $staff[$i]['role']?></td>
                    <td><a href="UpdateStaff.php?uid=<?php echo $user[$i]['id'];
                    ?>">Update</a></td>
                </tr>
                <?php endfor;?>
            </table>
        </div>
</div>