<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        require_once './web/header.php';
    ?>
    
    <link rel="stylesheet" href="css/navbar.css?v=3">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img src="img/logo.png"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aboutus.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="togglePopup()">Log In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="toggleSignUp() ">Sign Up</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</body>

</html>