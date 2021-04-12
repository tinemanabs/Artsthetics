<div class="profile-popup" id="popup-profile">
    <div class="content">
        <ul>
            <li>
                <i class="fas fa-user-circle"></i>
                <a href="profile.php" style=" margin-left: 0.3rem;">Profile</a>
            </li>
            <li>
                <i class="fas fa-user-edit"></i>
                <a href="editprofile.php">Edit Profile</a>
            </li>
            <hr>
            <li style="margin-top: -1rem;">
                <i class="fas fa-sign-out-alt"></i>
                <a href="includes/logout.inc.php" style=" margin-left: 0.3rem;">Log Out</a>
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