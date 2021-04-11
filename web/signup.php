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