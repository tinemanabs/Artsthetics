<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require_once './web/header.php';
    ?>

    <link rel="stylesheet" href="css/home.css?v=8">
    <title>Home</title>
</head>

<body>
    <?php
    require_once './web/navbar_user.php';
    ?>

    <li class="nav-item">
        <a class="nav-link" aria-current="page" href="home.php"><i class="fas fa-home" id="homeIcon"></i></a>
    </li>
    <li class="nav-item">
        <a class="nav-link active " aria-current="page" href="home.php" id="homeText">Home</a>
    </li>
    <li class="nav-item">
        <a class="profile-icon" href="#" onclick="profilePopup()"><i class="fas fa-user-circle" id="profileIcon"></i></a>
    </li>

    <li class="nav-item">
        <a class="nav-link-phone" href="profile.php">Profile</a>
    </li>

    <li class="nav-item">
        <a class="nav-link-phone" href="editprofile.php">Edit Profile</a>
    </li>

    <li class="nav-item">
        <a class="nav-link-phone" href="">Logout</a>
    </li>

    </ul>
    </div>
    </div>
    </nav>

    <?php
    require_once './web/optionspopup.php';
    ?>


    <div class="gallery">
        <div class="gallery-item">
            <img src="img/gallery/image.jpg">
        </div>

        <div class="gallery-item">
            <img src="img/gallery/image.png">
        </div>

        <div class="gallery-item">
            <img src="img/gallery/image2.jpg">
        </div>

        <div class="gallery-item">
            <img src="img/gallery/image4.jpg">
        </div>

        <div class="gallery-item">
            <img src="img/gallery/image5.jpg">
        </div>

        <div class="gallery-item">
            <img src="img/gallery/image6.jpg">
        </div>

        <div class="gallery-item">
            <img src="img/gallery/image7.jpg">
        </div>

        <div class="gallery-item">
            <img src="img/gallery/image8.jpg">
        </div>

        <div class="gallery-item">
            <img src="img/gallery/image9.jpg">
        </div>

        <div class="gallery-item">
            <img src="img/gallery/image10.jpg">
        </div>

        <div class="gallery-item">
            <img src="img/gallery/image11.jpg">
        </div>

        <div class="gallery-item">
            <img src="img/gallery/image12.jpg">
        </div>

        <div class="gallery-item">
            <img src="img/gallery/image13.jpg">
        </div>

        <div class="gallery-item">
            <img src="img/gallery/image14.jpg">
        </div>

        <div class="gallery-item">
            <img src="img/gallery/image15.jpg">
        </div>

        <div class="gallery-item">
            <img src="img/gallery/image16.jpg">
        </div>

        <div class="gallery-item">
            <img src="img/gallery/image17.jpg">
        </div>

        <div class="gallery-item">
            <img src="img/gallery/image18.jpg">
        </div>
    </div>


</body>

</html>