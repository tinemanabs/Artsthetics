<!DOCTYPE html>
<html lang="en">

<head>

    <?php
    require_once './web/header.php';
    ?>

    <link rel="stylesheet" href="css/editprofile.css?v=8">
    <title>Edit Profile</title>
</head>

<body>
    <?php
    require_once './web/navbar.php';
    ?>

    <?php
    require_once './web/optionspopup.php';
    ?>

    <div class="edit-profile">
        <div class="edit-profile-container">
            <div class="edit-image">
                <div class="profile-image">
                    <img src="#" alt="" srcset="">
                </div>
                <form action="" method="post">
                    <input type="file" name="fileUpload" id="">

                    <div class="upload-image-btn">
                        <button class="upload-image" type="submit" name="uploadPhoto">Upload Photo</button>
                    </div>
                </form>
            </div>


            <div class="edit-info">
                <div class="edit-info-container">
                    <div class="edit-info-header">Edit Profile</div>
                    <div class="edit-info-title">Personal Information</div>

                    <form action="" method="post">
                        <div class="edit-container-grid">

                            <div class="form-control">
                                <label for="">Full Name:</label>
                                <input type="text" class="input-control" name="fname" id="">
                            </div>

                            <div class="form-control">
                                <label for="">Birthday:</label>
                                <input type="text" class="input-control" name="bday" id="">
                            </div>

                            <div class="form-control">
                                <label for="">Contact Number:</label>
                                <input type="text" class="input-control" name="contactNum" id="">
                            </div>
                            <hr>
                            <div class="edit-info-title">Reset Password</div>
                            <div class="form-control">
                                <label for="">Confirm Password:</label>
                                <input type="password" class="input-control" name="pwd" id="">
                            </div>

                            <div class="form-control">
                                <label for="">New Password:</label>
                                <input type="password" class="input-control" name="newPwd" id="">
                            </div>

                            <div class="form-control">
                                <label for="">Repeat New Password:</label>
                                <input type="password" class="input-control" name="repeatPwd" id="">
                            </div>

                        </div>

                        <div class="form-btn">
                            <button type="submit" class="btn-form" id="back" name="back-btn">Back</button>
                            <button type="submit" class="btn-form" id="submit" name="changeInfo-btn">Apply Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>