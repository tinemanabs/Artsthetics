<div class="sign-up-popup" id="popup-2">
    <div class="content">
        <div class="close-btn" onclick="toggleSignUp()">
            X</div>

        <img src="img/logo.png" alt="" srcset="">
        <div class="title">Welcome to Artsthetics!</div>
        <div class="caption">Safespace for Art Community</div>


        <form action="signup.php" method="post">

            <div class="input-field">
                <input type="text" class="validate" name="fname" placeholder="Fullname">
            </div>

            <div class="input-field">
                <input type="text" class="validate" name="bday" placeholder="Birthday">
            </div>

            <div class="input-field">
                <input type="text" class="validate" name="contact" placeholder="Contact Number">
            </div>
            <div class="input-field">
                <input type="text" class="validate" name="email" placeholder="Email">
            </div>

            <div class="input-field">
                <input type="text" class="validate" name="uname" placeholder="Username">
            </div>
            <div class="input-field">
                <input type="password" class="validate" name="pass" placeholder="Password">
            </div>

            <div class="input-field">
                <input type="password" class="validate" name="cpass" placeholder="Confirm Password">
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
            } else if (isset($_POST['signIn'])) {
                $fname = $_POST["fname"];
                $bday = $_POST["bday"];
                $contact = $_POST["contact"];
                $email = $_POST["email"];
                $uname = $_POST["uname"];
                $pass = $_POST["pass"];
                $cpass = $_POST["cpass"];

                
            }

            ?>

            <button class="second-button" name="signIn">Sign Up</button>
            <p class="signup" onclick="togglePopup()">Already have an account? Login</p>
        </form>
    </div>
</div>