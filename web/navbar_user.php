<nav class="navbar navbar-expand-lg navbar">
    <div class="container">
        <a class="navbar-brand" href="home.php"><img src="img/logo.png"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="home.php" style="display: none;"><i class="fas fa-home" id="homeIcon"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link-phone active " aria-current="page" href="home.php" id="homeText">Home</a>
                </li>
                <li class="nav-item">
                    <a class="profile-icon" href="#" onclick="profilePopup()"><i class="fas fa-user-circle" id="profileIcon"></i></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link-phone" href="">Profile</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link-phone" href="">Edit Profile</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link-phone" href="">Logout</a>
                </li>

            </ul>
        </div>
    </div>
</nav>

<div class="profile-popup" id="popup-profile">
    <div class="content">
        <ul>
            <li>
                <i class="fas fa-user-circle"></i>
                <a href="#" style=" margin-left: 0.3rem;">Profile</a>
            </li>
            <li>
                <i class="fas fa-user-edit"></i>
                <a href="#">Edit Profile</a>
            </li>
            <hr>
            <li style="margin-top: -1rem;">
                <i class="fas fa-sign-out-alt"></i>
                <a href="#" style=" margin-left: 0.3rem;">Log Out</a>
            </li>
        </ul>
    </div>
</div>

<script>
    function profilePopup() {
        document.getElementById("popup-profile")
            .classList.toggle("active");
    }
</script>