<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/aboutus.css?v=3">
    <title>About Us</title>
</head>

<body>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->

    <div class="jumbotron jumbotron-fluid" style="background-image:linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
    url('img/bg.jpg'); background-size:cover; height:45vh;">
        <nav class="navbar navbar-expand-lg navbar">
            <div class="container">
                <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="" srcset=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Log In</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sign Up</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="bg-title">ABOUT US</div>
    </div>

    <div class="vision-mission-container">
        <div class="grid-container">
            <div class="left-container">
                <div class="mission-statement">
                    <div class="mission-header">Our Mission</div>
                    <hr>
                    <div class="mission-details">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reprehenderit quisquam excepturi, fugit magnam ut corporis quis recusandae dolorem enim natus consectetur optio, architecto fugiat dolor, incidunt sunt soluta laborum! Sed?</div>

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
                    <div class="vision-details">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reprehenderit quisquam excepturi, fugit magnam ut corporis quis recusandae dolorem enim natus consectetur optio, architecto fugiat dolor, incidunt sunt soluta laborum! Sed?</div>
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