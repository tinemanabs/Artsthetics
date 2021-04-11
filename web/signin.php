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