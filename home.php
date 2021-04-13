<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require_once './web/header.php';
    ?>

    <link rel="stylesheet" href="css/home.css?v=3">
    <title>Home</title>
</head>

<body>
    <?php
    require_once './web/navbar.php';
    ?>

    <?php if (isset($_SESSION["uname"])) : ?>
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
            
            <?php 
            $conn = new mysqli("localhost", "root", "", "Artsthetics");
            $sql = "SELECT * FROM user_post";
            $stmt = $conn->prepare($sql);

            $stmt->execute();

            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()){
                    $_GET["post"] = 28;
                    echo '<div class="gallery-item">';
                    echo '    <img data-itemid='. $row["post_id"].' src=' .$row["post_img"]. '>';
                    echo '</div>';
                }
            }
            ?>
        </div>
        
    <?php else : ?>
        <div class="container">
            <div class="card">
                <div class="card-header">404 Page not found</div>
                <div class="card-body">404 Page not found</div>
            </div>
        </div>

    <?php endif; ?>
</body>

</html>