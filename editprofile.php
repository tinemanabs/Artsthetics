<!DOCTYPE html>
<html lang="en">

<head>

    <?php
    require_once './web/header.php';
    ?>

    <link rel="stylesheet" href="css/editprofile.css?v=9">
    <title>Edit Profile</title>
</head>

<body>
    <?php
    require_once './web/navbar.php';
    ?>

    <?php if (isset($_SESSION["uname"])) : ?>
        <div class="edit-profile">
            <div class="edit-info">
                <div class="edit-info-container">
                    <div class="edit-info-header">Edit Profile</div>
                    <div class="edit-info-title">Personal Information</div>

                    <form action="" method="post">
                        <div class="edit-container-grid">

                            <div class="form-control">
                                <label for="">Full Name:</label>
                                <input type="text" class="input-edit-control" name="fname" id="" value="<?php echo $_SESSION['fullname'] ?>">
                            </div>

                            <div class="form-control">
                                <label for="">Birthday:</label>
                                <input type="text" class="input-edit-control" name="bday" id="" value="<?php echo $_SESSION['bday'] ?>">
                            </div>

                            <div class="form-control">
                                <label for="">Contact Number:</label>
                                <input type="text" class="input-edit-control" name="contactNum" id="" value="<?php echo $_SESSION['contact'] ?>">
                            </div>
                            <hr>
                            <div class="edit-info-title">Reset Password</div>
                            <div class="form-control">
                                <label for="">Confirm Password:</label>
                                <input type="password" class="input-edit-control" name="pwd" id="">
                            </div>

                            <div class="form-control">
                                <label for="">New Password:</label>
                                <input type="password" class="input-edit-control" name="newPwd" id="">
                            </div>

                            <div class="form-control">
                                <label for="">Repeat New Password:</label>
                                <input type="password" class="input-edit-control" name="repeatPwd" id="">
                            </div>

                        </div>


                        <?php
                        require_once("./includes/functions.inc.php");
                        if (isset($_POST['changeInfo'])) {
                            $fname = $_POST['fname'];
                            $bday = $_POST['bday'];
                            $num = $_POST['contactNum'];

                            $sessionpwd =  $_SESSION["pass"];
                            $conpw = $_POST['pwd'];
                            $newpw = $_POST['newPwd'];
                            $repeatPwd = $_POST['repeatPwd'];

                    
                            if (empty($conpw) || empty($newpw) || empty($repeatPwd)) {
                                echo "<script>";
                                echo "Swal.fire(";
                                echo "'Empty input fields!',";
                                echo "'Fill in all the required fields!',";
                                echo "'warning'";
                                echo ")";
                                echo "</script>";
                            } else if ($sessionpwd != $conpw) {
                                echo "<script>";
                                echo "Swal.fire(";
                                echo "'Passwords Mismatch!',";
                                echo "'Confirm password does not match to the old password!',";
                                echo "'warning'";
                                echo ")";
                                echo "</script>";
                            } else if ($newpw != $repeatPwd) {
                                echo "<script>";
                                echo "Swal.fire(";
                                echo "'Passwords Mismatch!',";
                                echo "'New password does not match to confirm password!',";
                                echo "'warning'";
                                echo ")";
                                echo "</script>";
                            } else{
                                echo "<script>";
                                echo "Swal.fire(";
                                echo "    'Changes Applied!',";
                                echo "    'Check your dashboard!',";
                                echo "    'success'";
                                echo ")";
                                echo "</script>";
                                updateUser($conpw, $newpw, $repeatPwd, $sessionpwd, $fname, $bday, $num);
                            }
                        }

                        ?>

                        <div class="form-btn">
                            <button type="submit" class="btn-form" id="back" name="back-btn"><a href="profile.php">Back</a></button>
                            <button type="submit" class="btn-form" id="submit" name="changeInfo">Apply Changes</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    <?php else : ?>
        <div class="container">
            <div class="card">
                <div class="card-header">404 Page not found</div>
                <div class="card-body">404 Page not found</div>
            </div>
        </div>

    <?php endif; ?>
</body>

</html>