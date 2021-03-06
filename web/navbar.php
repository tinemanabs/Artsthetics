<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require_once './web/header.php';
    ?>

    <link rel="stylesheet" href="css/navbar.css?v=6">
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
        // Mobile View
        echo '                <li class="nav-item">';
        echo '                    <a class="nav-link " href="home.php" id="homeText">Home</a>';
        echo '                </li>';

        echo '                <li class="nav-item">';
        echo '                    <a class="nav-link " href="profile.php" id="profileText">Profile</a>';
        echo '                </li>';

        echo '                <li class="nav-item">';
        echo '                    <a class="nav-link " href="editprofile.php" id="editProfileText">Edit Profile</a>';
        echo '                </li>';

        echo '                <li class="nav-item">';
        echo '                    <a class="nav-link " href="includes/logout.inc.php" id="logoutText">Logout</a>';
        echo '                </li>';

        // Desktop View
        echo '                <li class="nav-item">';
        echo '                    <a class="nav-link" href="home.php"><i class="fas fa-home" id="homeIcon"></i></a>';
        echo '                </li>';
        echo '                <li class="nav-item dropdown">';
        echo '                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">';
        echo '                        <i class="fas fa-user-circle" id="profileIcon"></i>';
        echo '                    </a>';
        echo '                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">';
        echo '                        <li><a class="dropdown-item" href="profile.php"><i class="fas fa-user-circle"></i>Profile</a></li>';
        echo '                        <li><a class="dropdown-item" href="editprofile.php"> <i class="fas fa-user-edit"></i>Edit Profile</a></li>';
        echo '                      <li>';
        echo '                          <hr class="dropdown-divider">';
        echo '                      </li>';
        echo '                        <li><a class="dropdown-item" href="includes/logout.inc.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>';
        echo '                     </ul>';
        echo '                 </li>';
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
                                echo "<script>";
                                echo "Swal.fire(";
                                echo "    'Fields are empty!',";
                                echo "    'Password fields are not the same!',";
                                echo "    'warning'";
                                echo ")";
                                echo "</script>";
                            } else if (wrongCredentials($uname)) {
                                echo "<script>";
                                echo "Swal.fire(";
                                echo "    'Wrong Credentials!',";
                                echo "    'This user does not exist!',";
                                echo "    'warning'";
                                echo ")";
                                echo "</script>";
                            } else {
                                loginUser($uname, $pass);
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
                        require_once 'sendmail.php';

                        if (isset($_POST['regsub'])) {
                            $fname = $_POST["fname"];
                            $bday = $_POST["bday"];
                            $contact = $_POST["contact"];
                            $uname = $_POST["uname"];
                            $email = $_POST["email"];
                            $pass = $_POST["pass"];
                            $cpass = $_POST["cpass"];
                            $vcode = uniqid();

                            if ($fname == "" || $bday == "" || $contact == "" || $email == "" || $uname == "" || $pass == "" || $cpass == "") {
                                echo "<script>";
                                echo "Swal.fire(";
                                echo "    'Empty Fields!',";
                                echo "    'Some fields are empty!',";
                                echo "    'warning'";
                                echo ")";
                                echo "</script>";
                            } else if (emailExist($email)) {
                                echo "<script>";
                                echo "Swal.fire(";
                                echo "    'Email Exist!',";
                                echo "    'This email is already used by another person!',";
                                echo "    'warning'";
                                echo ")";
                                echo "</script>";
                            } else if (usernameExist($uname)) {
                                echo "<script>";
                                echo "Swal.fire(";
                                echo "    'Username Exist!',";
                                echo "    'This username is already used by another person!',";
                                echo "    'warning'";
                                echo ")";
                                echo "</script>";
                            } else if (passMismatch($pass, $cpass)) {
                                echo "<script>";
                                echo "Swal.fire(";
                                echo "    'Password Mismatch!',";
                                echo "    'Password fields are not the same!',";
                                echo "    'warning'";
                                echo ")";
                                echo "</script>";
                            } else {
                                $mail->SetFrom($gmailUsername, "Account Verification"); //Name of Sender: the "FEU-IT Admin" could be change and replace as the name of the sender
                                $mail->Subject = "Please verify your account!"; //Email Subject: to get the subject from the form
                                $mail->Body = "<h1>Welcome to my App!</h1>
                        <h3>Please click the link below to activate your account:<br/>
                            <a href='http://localhost/FinalProj/activateuser.php?vcode=$vcode'>ACTIVATE ACCOUNT</a> 
                        </h3>";
                                //Content of Message : to get the content or body of the email from form

                                $mail->AddAddress($email); //Recepient of email: to send whatever email you want to

                                if (!$mail->Send()) {
                                    echo "Mailer Error: " . $mail->ErrorInfo;
                                } else {
                                    echo "<script>";
                                    echo "Swal.fire(";
                                    echo "    'User Created!',";
                                    echo "    'You can log in to your new account!',";
                                    echo "    'success'";
                                    echo ")";
                                    echo "</script>";
                                    addUser($fname, $bday, $contact, $email, $uname, $pass, $vcode);
                                }
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