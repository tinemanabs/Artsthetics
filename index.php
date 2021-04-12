<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require_once './web/header.php';
    ?>

    <link rel="stylesheet" href="css/index.css?=v8">
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
    } else {
        echo '<div class="container"';
        echo '<div class="card"">';
        echo '    <div class="card-header">404 Page not found</div>';
        echo '    <div class="card-body">404 Page not found</div>';
        echo '</div>';
        echo '</div';
    }
    ?>
</body>

</html>