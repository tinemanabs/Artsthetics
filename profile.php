<!DOCTYPE html>
<html lang="en">

<head>

    <?php
    require_once './web/header.php';
    ?>

    <link rel="stylesheet" href="css/profile.css?v=7">
    <title>Profile</title>
</head>

<body>
    <?php
    require_once './web/navbar.php';
    ?>

    <?php
    require_once './web/optionspopup.php';
    ?>

    <?php if (isset($_SESSION["uname"])) : ?>
        <div class="profile-container">
            <div class="profile">
                <div class="profile-bio">
                    <div class="profile-bio-info">
                        <div class="profile-real-name">Welcome, <span><?php echo $_SESSION["fullname"] . "!" ?></span></div>
                        <div class="profile-user-name"><i class="fas fa-paint-brush"></i>@<?php echo $_SESSION["uname"] ?></div>
                        <hr style="display:none;">
                        <div class="profile-upload-form">
                            <form action="profile.php" method="post" class="profile-form" style="border: none;" enctype="multipart/form-data">
                                <input type="file" name="file" id="file">

                                <?php
                                if (isset($_POST["uploadsub"])) {
                                    $message = "";
                                    $filename = $_FILES["file"]["name"];
                                    $fileTmpPath = $_FILES["file"]["tmp_name"];
                                    $fileExt = $_FILES["file"]["type"];
                                    $filestr = explode('.', $filename);
                                    $filetype = strtolower(end($filestr));

                                    $fileExtAllowed = ['jpeg', 'jpg', 'png'];
                                    $dir = "uploads";
                                    $dir_handle = opendir($dir);

                                    if (is_dir($dir . "/" . $_SESSION["uname"]) === false) {
                                        is_resource($dir_handle);
                                        mkdir($dir . "/" . $_SESSION["uname"]);
                                    }

                                    $filepath = "uploads/" . $_SESSION['uname'] . "/" . $filename;

                                    if (in_array($filetype, $fileExtAllowed)) {
                                        if (move_uploaded_file($fileTmpPath, $filepath)) {
                                            $conn = new mysqli("localhost", "root", "", "Artsthetics");
                                            $sql = "INSERT INTO user_post (user_id, post_img) VALUES (?,?)";
                                            $stmt = $conn->prepare($sql);
                                            $stmt->bind_param("is", $_SESSION["id"], $filepath);
                                            $stmt->execute();
                                            $stmt->close();

                                            echo "<script>";
                                            echo "Swal.fire(";
                                            echo "    'Good job!',";
                                            echo "    'You clicked the button!',";
                                            echo "    'success'";
                                            echo ")";
                                            echo "</script>";
                                        } else {
                                            echo "<script>";
                                            echo "Swal.fire({";
                                            echo "    icon: 'error',";
                                            echo "    title: 'Oops...',";
                                            echo "    text: 'File not uploaded',";
                                            echo "    footer: '<a href>Why do I have this issue?</a>'";
                                            echo "})";
                                            echo "</script>";
                                        }
                                    } else {
                                        echo "<script>";
                                        echo "Swal.fire({";
                                        echo "    icon: 'error',";
                                        echo "    title: 'Oops...',";
                                        echo "    text: 'Something went wrong!',";
                                        echo "    footer: '<a href>Why do I have this issue?</a>'";
                                        echo "})";
                                        echo "</script>";
                                    }
                                }
                                ?>

                                <button class="profile-edit-btn" name="uploadsub" type="submit">Upload Photo </button>
                              

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of profile section -->
        </div>
        <!-- End of container -->


        <hr>


        <div class="profile-container">

            <div class="gallery">
                <?php
                $conn = new mysqli("localhost", "root", "", "Artsthetics");
                $sql = "SELECT * FROM user_post WHERE user_id = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("i", $_SESSION["id"]);

                $stmt->execute();

                $result = $stmt->get_result();

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="gallery-item" tabindex="0">';
                        echo '    <img src=' . $row["post_img"] . ' class="gallery-image" alt="">';
                        echo '<div class="gallery-item-info">';
                        echo '<ul>';
                        echo '<li> <button class="btn btn-danger">Delete</button></li>';
                        echo '</ul>';
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    echo "<script>";
                    echo "Swal.fire({";
                    echo "    title: '<strong>HTML <u>example</u></strong>',";
                    echo "    icon: 'info',";
                    echo "    html:";
                    echo "      '<b>No items to display yet!</b>, ' +";
                    echo "    showCloseButton: true,";
                    echo "    showCancelButton: true,";
                    echo "    focusConfirm: false,";
                    echo "    confirmButtonText:";
                    echo "      '<i class=\"fa fa-thumbs-up\"></i> Great!',";
                    echo "    confirmButtonAriaLabel: 'Thumbs up, great!',";
                    echo "    cancelButtonText:";
                    echo "      '<i class=\"fa fa-thumbs-down\"></i>',";
                    echo "    cancelButtonAriaLabel: 'Thumbs down'";
                    echo "  })";
                    echo "</script>";
                }
                ?>

            </div>
            <!-- End of gallery -->

        </div>
        <!-- End of container -->
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