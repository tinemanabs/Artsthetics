<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        require_once './web/header.php';
    ?>

    <link rel="stylesheet" href="css/index.css?=v4">
    <title>Artsthetics</title>
</head>

<body>

    <?php
    require_once './web/navbar.php';
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

    <?php 
    require_once("./web/signup.php");
    require_once("./web/signin.php");
    ?>


</body>

</html>