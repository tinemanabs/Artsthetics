<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require_once './web/header.php';
    ?>

    <link rel="stylesheet" href="css/index.css?=v7">
    <title>Artsthetics</title>
</head>

<body>

    <?php
    require_once './web/navbar.php';
    ?>

    <?php
    if (!isset($_SESSION['uname'])) {
        echo '<div class="index-container">';
        echo '    <div class="row">';
        echo '        <div class="col-1">';
        echo '            <h2>Surround yourself with designers & creatives</h2>';
        echo '            <h3>Artsthetics is an avenue to discover creative works and a safe space for showcasing the best design professionals and aspiring artists.</h3>';
        echo '        </div>';
        echo '        <div class="col-2">';
        echo '            <img src="img/index_bg.png" class="indexBg">';
        echo '            <div class="color-box"></div>';
        echo '        </div>';
        echo '    </div>';
        echo '</div> ';
        echo '<div class="bg-title">About Us</div>';
        echo '<div class="vision-mission-container">';

        echo ' <div class="grid-container">';
        echo '        <div class="left-container">';
        echo '            <div class="mission-statement">';
        echo '                <div class="mission-header">Our Mission</div>';
        echo '                <hr>';
        echo "               <div class='mission-details'>Build a better community by showcasing each
                            individual's creativity and artistry in all forms of medium and serve a platform that
                            engages artist into their passion, making the art community be appreciated in the society.</div>";
    
        echo '            </div>';
        echo '            <div class="mission-image">';
        echo '                <img id="missionImage" src="img/vision-image.png" alt="" srcset="">';
        echo '            </div>';
        echo '        </div>';
    
        echo '        <div class="right-container">';
        echo '            <div class="vision-image"><img id="visionImage" src="img/mission-image.png" alt="" srcset=""></div>';
        echo '           <div class="vision-statement">';
        echo '                <div class="vision-header">Our Vision</div>';
        echo '                <hr>';
        echo '               <div class="vision-details">Be the voice and the representation of art enthusiasts and artists
                            by allowing them to exhibit their creative works and masterpiece. Give artists the opportunity to influence
                            aspiring artists and even the society. </div>';
        echo '            </div>';
        echo '        </div>';
    
        echo '    </div>';
        echo '</div>';
    
        echo '<div class="our-team-container">';
        echo '    <div class="our-team-header">';
        echo '   Our Team';
        echo '    </div>';
        echo '    <div class="profiles">';
        echo '        <div class="profile">';
        echo '            <img src="img/rob.jpg" class="profile-img">';
    
        echo '            <h3 class="user-name">Robby De Leon</h3>';
        echo '            <p>Back-end Developer</p>';
        echo '        </div>';
        echo '        <div class="profile">';
        echo '            <img src="img/tine.jpg" class="profile-img">';
    
        echo '            <h3 class="user-name">Christine Manabat</h3>';
        echo '            <p>Front-End Developer</p>';
        echo '        </div>';
        echo '        <div class="profile">';
        echo '            <img src="img/cy.jpg" class="profile-img">';
    
        echo '            <h3 class="user-name">Cyrix Ponce</h3>';
        echo '            <p>UI and UX Designer</p>';
        echo '        </div>';
    
        echo '        <div class="profile">';
        echo '            <img src="img/theo.jpg" class="profile-img">';
    
        echo '            <h3 class="user-name">Theo Roldan</h3>';
        echo '            <p>UI and UX Designer</p>';
        echo '        </div>';
        echo '    </div>';
        echo '</div>';
    } else {
        echo '<div class="container"';
        echo '<div class="card"">';
        echo '    <div class="card-header">404 Page not found</div>';
        echo '    <div class="card-body">404 Page not found</div>';
        echo '</div>';
        echo '</div>';
    }
    ?>
</body>

</html>