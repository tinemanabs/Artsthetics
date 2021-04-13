<!DOCTYPE html>
<html lang="en">

<head>

    <?php
    require_once './web/header.php';
    ?>

    <link rel="stylesheet" href="css/editdashboard.css?v=3">
    <title>Profile</title>
</head>

<body>
    <?php
    require_once './web/navbar.php';
    ?>

    <?php
    require_once './web/optionspopup.php';
    ?>

    <?php if (isset($_SESSION["uname"])) : ?>
        <div class="edit-dashboard">
            <div class="container">
                <div class="edit-dashboard-container">
                    <div class="edit-db-header">Edit Dashboard</div>
                    <div class="edit-db-title">Your Uploaded Photos</div>

                    <form action="" method="post">
                        <div class="edit-db-grid">
                            <div class="edit-db-name">Image ID</div>
                            <div class="edit-db-name">Image</div>
                            <div class="edit-db-name">Action</div>
                        </div>

                        <?php
                        $conn = new mysqli("localhost", "root", "", "Artsthetics");
                        $sql = "SELECT * FROM user_post WHERE user_id = ?";
                        $stmt = $conn->prepare($sql);
                        $stmt->bind_param("i", $_SESSION["id"]);

                        $stmt->execute();

                        $result = $stmt->get_result();

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo '<div class="edit-db-grid">';
                                echo '<div class="edit-db-id">' . $row["post_id"] . '</div>';

                                echo '<div class="edit-db-img">';
                                echo '    <img src=' . $row["post_img"] . ' class="gallery-image" alt="">';
                                echo '</div>';

                                echo '<div class="edit-db-delbtn">';
                                echo '    <button name="deleteBtn" class="btn btn-danger">Delete</button>';
                                echo '</div>';

                                echo '</div>';
                            }
                        } ?>

        
                    </form>


                </div>
            </div>
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