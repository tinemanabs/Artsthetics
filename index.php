<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css?=v4">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Artsthetics</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="js/main.js"></script>
</head>

<body>

    <?php
    require_once '../FinalProj/web/navbar.php';
    ?>

    <div class="index-container">
        <div class="row">
            <div class="col-1">
                <h2>Surround yourself with designers & creatives</h2>
                <h3>Artsthetics is an avenue to discover creative works and a safe space for showcasing the best design professionals and aspiring artists.</h3>

            </div>

            <div class="col-2">
                <img src="img/index_bg.png" class="indexBg">
                <div class="color-box"></div>
            </div>
        </div>
    </div>

    <div class="popup" id="popup-1">
        <div class="content">
            <div class="close-btn" onclick="togglePopup()">
                X</div>

            <img src="img/logo.png" alt="" srcset="">
            <div class="title">Welcome to Artsthetics!</div>
            <div class="caption">Safespace for Art Community</div>

            <form action="" method="post">
                <div class="input-field">
                    <input type="text" class="validate" placeholder="Username">
                </div>
                <div class="input-field">
                    <input type="password" class="validate" placeholder="Password">
                </div>


                <?php

                if (isset($_GET['error'])) {
                    if ($_GET['error'] == "emptyInput") {
                        echo '<div class="confirmData" id="confirmData">';
                        echo 'Fill in all the fields!';
                        echo '</div>';
                    }

                    if ($_GET['error'] == "wrongLogin") {
                        echo '<div class="confirmData" id="confirmData">';
                        echo 'Try Again!';
                        echo '</div>';
                    }
                }

                ?>

                <button class="second-button">Sign in</button>
                <p class="signup" onclick="toggleSignUp()">Don't have an account? Sign Up</p>
            </form>
        </div>
    </div>


    <div class="sign-up-popup" id="popup-2">
        <div class="content">
            <div class="close-btn" onclick="toggleSignUp()">
                X</div>

            <img src="img/logo.png" alt="" srcset="">
            <div class="title">Welcome to Artsthetics!</div>
            <div class="caption">Safespace for Art Community</div>


            <form action="" method="post">

                <div class="input-field">
                    <input type="text" class="validate" placeholder="Fullname">
                </div>

                <div class="input-field">
                    <input type="text" class="validate" placeholder="Birthday">
                </div>

                <div class="input-field">
                    <input type="text" class="validate" placeholder="Contact Number">
                </div>
                <div class="input-field">
                    <input type="text" class="validate" placeholder="Email">
                </div>

                <div class="input-field">
                    <input type="text" class="validate" placeholder="Username">
                </div>
                <div class="input-field">
                    <input type="password" class="validate" placeholder="Password">
                </div>

                <div class="input-field">
                    <input type="password" class="validate" placeholder="Confirm Password">
                </div>

                <?php

                if (isset($_GET['error'])) {
                    if ($_GET['error'] == "emptyInput") {
                        echo '<div class="confirmData" id="confirmData">';
                        echo 'Fill in all the fields!';
                        echo '</div>';
                    }

                    if ($_GET['error'] == "wrongLogin") {
                        echo '<div class="confirmData" id="confirmData">';
                        echo 'Try Again!';
                        echo '</div>';
                    }
                }

                ?>

                <button class="second-button" name="signIn">Sign Up</button>
                <p class="signup" onclick="togglePopup()">Already have an account? Login</p>
            </form>
        </div>
    </div>


</body>

</html>