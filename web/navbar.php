<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require_once './web/header.php';
    ?>

    <link rel="stylesheet" href="css/navbar.css?v=5">
</head>

<body>
    <?php session_start();

    if (!isset($_SESSION["uname"])) {
        echo '<nav class="navbar navbar-expand-lg navbar">';
        echo '    <div class="container">';
        echo '        <a class="navbar-brand" href="index.php"><img src="img/logo.png"></a>';
        echo '        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">';
        echo '            <span class="navbar-toggler-icon"></span>';
        echo '        </button>';
        echo '        <div class="collapse navbar-collapse" id="navbarNavDropdown">';
        echo '          <ul class="navbar-nav">';
        echo '              <li class="nav-item">';
        echo '                  <a class="nav-link" href="index.php" id="activeHome">Home</a>';
        echo '              </li>';
        echo '              <li class="nav-item">';
        echo '                  <a class="nav-link" href="aboutus.php" id="activeAboutUs">About Us</a>';
        echo '              </li>';
        echo '              <li class="nav-item">';
        echo '                  <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#login">';
        echo '                      Login';
        echo '                  </a>';
        echo '              </li>';
        echo '              <li class="nav-item">';
        echo '                  <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#register">';
        echo '                      Sign Up';
        echo '                  </a>';
        echo '              </li>';
        echo '          </ul>';
        echo '    </div>';
        echo '    </div>';
        echo '</nav>';
    } else {
        echo '<nav class="navbar navbar-expand-lg navbar">';
        echo '    <div class="container">';
        echo '        <a class="navbar-brand" href="home.php"><img src="img/logo.png"></a>';
        echo '        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">';
        echo '            <span class="navbar-toggler-icon"></span>';
        echo '        </button>';
        echo '        <div class="collapse navbar-collapse" id="navbarNavDropdown">';
        echo '            <ul class="navbar-nav">';
        echo '                <li class="nav-item">';
        echo '                    <a class="nav-link" aria-current="page" href="home.php"><i class="fas fa-home" id="homeIcon"></i></a>';
        echo '                </li>';
        echo '                <li class="nav-item">';
        echo '                    <a class="nav-link active " aria-current="page" href="home.php" id="homeText">Home</a>';
        echo '                </li>';
        echo '                <li class="nav-item">';
        echo '                    <a class="profile-icon" href="#" onclick="profilePopup()"><i class="fas fa-user-circle" id="profileIcon"></i></a>';
        echo '                </li>';
        echo '                <li class="nav-item">';
        echo '                    <a class="nav-link-phone" href="profile.php">Profile</a>';
        echo '                </li>';
        echo '                <li class="nav-item">';
        echo '                    <a class="nav-link-phone" href="editprofile.php">Edit Profile</a>';
        echo '                </li>';
        echo '                <li class="nav-item">';
        echo '                    <a class="nav-link-phone" href="includes/logout.inc.php">Logout</a>';
        echo '                </li>';
        echo '            </ul>';
        echo '        </div>';
        echo '    </div>';
        echo '</nav>';
    }
    ?>



    <!--LOGIN MODAL-->
    <div class="modal fade" id="login" tabindex="-1" aria-labelledby="loginModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-img-logo"><img src="img/logo.png" alt="" srcset=""></div>
                    <div class="modal-title-header">Welcome to Artsthetics! </div>
                    <div class="modal-caption">Safespace for the Art Community</div>
                </div>
                <form action="" method="POST">
                    <div class="form-container">
                        <div class="modal-body">
                            <div class="input-control">
                                <label for="username">Username: </label>
                                <input type="text" class="input-form" id="uname" name="uname">
                            </div>
                            <div class="input-control">
                                <label for="pass">Password: </label>
                                <input type="password" class="input-form" id="pass" name="pass">
                            </div>
                        </div>
                        <?php
                        require_once("./includes/functions.inc.php");
                        if (isset($_POST['loginsub'])) {
                            $uname = $_POST['uname'];
                            $pass = $_POST['pass'];
                            if (loginEmpty($uname, $pass)) {
                                echo '<div class="error-login">';
                                echo '<i class="fas fa-exclamation-triangle"></i>';
                                echo 'Fill in all the fields!';
                                echo '</div>';
                            } else if (wrongCredentials($uname)) {
                                echo '<div class="error-login">';
                                echo '<i class="fas fa-exclamation-triangle"></i>';
                                echo 'Wrong Credentials!';
                                echo '</div>';
                                echo '<script>$("#uname").addClass(".input-error")</script>';
                            } else {
                                header("location: ../home.php");
                                loginUser($uname, $pass);
                                header("location: ../home.php");
                            }
                        }

                        ?>
                        <div class="modal-footer">
                            <button type="submit" name="cancel" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name="loginsub" class="btn btn-primary">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--REGISTER MODAL-->
    <div class="modal fade" id="register" tabindex="-1" aria-labelledby="registerModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-img-logo"><img src="img/logo.png" alt="" srcset=""></div>
                    <div class="modal-title-header">Welcome to Artsthetics! </div>
                    <div class="modal-caption">Safespace for the Art Community</div>
                </div>
                <form action="" method="POST">
                    <div class="form-container">
                        <div class="modal-body">
                            <div class="input-control">
                                <label for="username">Full Name: </label>
                                <input type="text" class="input-form" name="fname">
                            </div>
                            <div class="input-control">
                                <label for="bday">Birthday: </label>
                                <input type="text" class="input-form" name="bday">
                            </div>
                            <div class="input-control">
                                <label for="Contact">Contact: </label>
                                <input type="text" class="input-form" name="contact">
                            </div>
                            <div class="input-control">
                                <label for="">Email: </label>
                                <input type="email" class="input-form" name="email">
                            </div>
                            <div class="input-control">
                                <label for="">Username: </label>
                                <input type="text" class="input-form" name="uname">
                            </div>
                            <div class="input-control">
                                <label for="">Password: </label>
                                <input type="password" class="input-form" name="pass">
                            </div>
                            <div class="input-control">
                                <label for="">Confirm: </label>
                                <input type="password" class="input-form" name="cpass">
                            </div>
                        </div>
                        <?php
                        require_once("./includes/functions.inc.php");

                        if (isset($_POST['regsub'])) {
                            $fname = $_POST["fname"];
                            $bday = $_POST["bday"];
                            $contact = $_POST["contact"];
                            $uname = $_POST["uname"];
                            $email = $_POST["email"];
                            $pass = $_POST["pass"];
                            $cpass = $_POST["cpass"];

                            if ($fname == "" || $bday == "" || $contact == "" || $email == "" || $uname == "" || $pass == "" || $cpass == "") {
                                echo '<div class="error-login">';
                                echo '<i class="fas fa-exclamation-triangle"></i>';
                                echo 'Field(s) are empty!';
                                echo '</div>';
                            } else if (emailExist($email)) {
                                echo '<div class="error-login">';
                                echo '<i class="fas fa-exclamation-triangle"></i>';
                                echo 'Email already exists!';
                                echo '</div>';
                            } else if (usernameExist($uname)) {
                                echo '<div class="error-login">';
                                echo '<i class="fas fa-exclamation-triangle"></i>';
                                echo 'Username taken!';
                                echo '</div>';
                            } else if (passMismatch($pass, $cpass)) {
                                echo '<div class="error-login">';
                                echo '<i class="fas fa-exclamation-triangle"></i>';
                                echo 'Password mismatch!';
                            } else {
                                addUser($fname, $bday, $contact, $email, $uname, $pass);
                                echo "<script>";
                                echo "Swal.fire(";
                                echo "    'User Created!',";
                                echo "    'You can log in to your new account!',";
                                echo "    'success'";
                                echo ")";
                                echo "</script>";
                                header("location: index.php");
                            }
                        }
                        ?>
                        <div class="modal-footer">
                            <button type="submit" name="cancel" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name="regsub" class="btn btn-primary">Register</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</html>