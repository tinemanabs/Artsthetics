<!DOCTYPE html>
<html lang="en">

<head>

    <?php
    require_once './web/header.php';
    ?>

    <link rel="stylesheet" href="css/profile.css?v=3">
    <title>Profile</title>
</head>

<body>
    <?php
    require_once './web/navbar.php';
    ?>

    <?php
    require_once './web/optionspopup.php';
    ?>


    <div class="profile-container" style="margin-top: -4.8rem;">
        <div class="profile">
            <div class="profile-image">
                <img src="img/rob.jpg" alt="">
            </div>
            <div class="profile-user-settings">
                <h1 class="profile-user-name">Leonardo Da Vinci</h1>

            </div>
            <div class="profile-stats">
                <ul>
                    <li><span class="profile-stat-count">12</span> posts</li>
                    <li><span class="profile-stat-count">0</span> followers</li>
                    <li><span class="profile-stat-count">0</span> following</li>

                </ul>

            </div>

            <div class="profile-bio">
                <div id="overlay"></div>
                <form action="" method="post" class="btn profile-edit-btn" style="border: none;">
                    <input type="file" name="" id="">

                    <button class="btn profile-edit-btn"><a href="">Upload Photo</a> </button>
                    <button class="btn profile-edit-btn" id="dashboard"><a href="">Edit Dashboard</a> </button>
                </form>
            </div>
        </div>
        <!-- End of profile section -->
    </div>
    <!-- End of container -->





    <div class="profile-container" style="margin-top: -4rem;">

        <div class="gallery">

            <div class="gallery-item" tabindex="0">
                <img src="img/rob.jpg" class="gallery-image" alt="">
                <div class="gallery-item-info">
                    <ul>
                        <li> Mona Lisa</li>
                        <li></li>
                    </ul>
                </div>
            </div>

            <div class="gallery-item" tabindex="0">
                <img src="img/rob.jpg" class="gallery-image" alt="">
                <div class="gallery-item-info">
                    <ul>
                        <li> Mona Lisa</li>
                        <li></li>
                    </ul>
                </div>
            </div>

            <div class="gallery-item" tabindex="0">
                <img src="img/rob.jpg" class="gallery-image" alt="">
                <div class="gallery-item-info">
                    <ul>
                        <li> Mona Lisa</li>
                        <li></li>
                    </ul>
                </div>
            </div>

            <div class="gallery-item" tabindex="0">
                <img src="img/rob.jpg" class="gallery-image" alt="">
                <div class="gallery-item-info">
                    <ul>
                        <li> Mona Lisa</li>
                        <li></li>
                    </ul>
                </div>
            </div>

        </div>
        <!-- End of gallery -->

        <div class="loader"></div>
    </div>
    <!-- End of container -->

</body>

</html>