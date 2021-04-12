<!doctype html>
<html lang="en">

<head>
    <?php
    require_once './web/header.php';
    ?>

    <link rel="stylesheet" href="css/aboutus.css?v=3">
    <title>About Us</title>
</head>

<body>
    <div class="jumbotron jumbotron-fluid" style="background-image:linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
    url('img/bg.jpg'); background-size:cover; height:45vh;">
        <?php 
            require_once "./web/navbar.php";
        ?>

        <div class="bg-title">ABOUT US</div>
    </div>

    <div class="vision-mission-container">
        <div class="grid-container">
            <div class="left-container">
                <div class="mission-statement">
                    <div class="mission-header">Our Mission</div>
                    <hr>
                    <div class="mission-details">Build a better community by showcasing each 
                        individual's creativity and artistry in all forms of medium and serve a platform that 
                    engages artist into their passion, making the art community be appreciated in the society.</div>

                </div>
                <div class="mission-image">
                    <img id="missionImage" src="img/vision-image.png" alt="" srcset="">
                </div>
            </div>

            <div class="right-container">
                <div class="vision-image"><img id="visionImage" src="img/mission-image.png" alt="" srcset=""></div>
                <div class="vision-statement">
                    <div class="vision-header">Our Vision</div>
                    <hr>
                    <div class="vision-details">Be the voice and the representation of art enthusiasts and artists
                        by allowing them to exhibit their creative works and masterpiece. Give artists the opportunity to influence
                    aspiring artists and even the society. </div>
                </div>
            </div>

        </div>
    </div>

    <div class="our-team-container">
        <div class="our-team-header">
            Our Team
        </div>
        <div class="profiles">
            <div class="profile">
                <img src="img/rob.jpg" class="profile-img">

                <h3 class="user-name">Robby De Leon</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum eveniet soluta hic sunt sit reprehenderit.</p>
            </div>
            <div class="profile">
                <img src="img/tine.jpg" class="profile-img">

                <h3 class="user-name">Christine Manabat</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam facilis sint quod.</p>
            </div>
            <div class="profile">
                <img src="img/cy.jpg" class="profile-img">

                <h3 class="user-name">Cyrix Ponce</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, eveniet!</p>
            </div>

            <div class="profile">
                <img src="img/theo.jpg" class="profile-img">

                <h3 class="user-name">Theo Roldan</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, eveniet!</p>
            </div>
        </div>
    </div>
</body>

</html>