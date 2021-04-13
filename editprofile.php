<!DOCTYPE html>
<html lang="en">

<head>

    <?php
    require_once './web/header.php';
    ?>

    <link rel="stylesheet" href="css/editprofile.css?v=3">
    <title>Edit Profile</title>
</head>

<body>
    <?php
    require_once './web/navbar.php';
    ?>

    <?php
    require_once './web/optionspopup.php';
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
                                <input type="text" class="input-edit-control" name="fname" id="" value="<?php echo $_SESSION['fullname']?>">
                            </div>

                            <div class="form-control">
                                <label for="">Birthday:</label>
                                <input type="text" class="input-edit-control" name="bday" id="" value="<?php echo $_SESSION['bday']?>">
                            </div>

                            <div class="form-control">
                                <label for="">Contact Number:</label>
                                <input type="text" class="input-edit-control" name="contactNum" id="" value="<?php echo $_SESSION['contact']?>">
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

                        <div class="form-btn">
                            <button type="submit" class="btn-form" id="back" name="back-btn"><a href="profile.php">Back</a></button>
                            <button type="submit" class="btn-form" id="submit" name="changeInfo-btn">Apply Changes</button>
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