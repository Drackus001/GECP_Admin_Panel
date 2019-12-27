<header class="header-mobile d-block d-lg-none">
    <div class="header-mobile__bar">
        <div class="container-fluid">
            <div class="header-mobile-inner">
                <a class="logo" href="index.php">

                    <span>
                        <h3><img src="images/icon/logo.png" alt="College_photo" /> Government Engineering College, Patan. (USER PANEL)</h3>
                    </span>

                </a>
                <button class="hamburger hamburger--slider" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <nav class="navbar-mobile">
        <div class="container-fluid">
            <ul class="navbar-mobile__list list-unstyled">
            <li class="active has-sub">
                <a class="js-arrow" href="index.php">
                        <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                </li>
                <li>
                    <a href="profile.php">
                        <i class="fas fa-user"></i>Profile</a>
                </li>
                <li>
                    <a href="changePassword.php">
                        <i class="fas fa-edit"></i>Change Password</a>
                </li>
                <?php
              if($_SESSION['type'] == 'ADMIN' || $_SESSION['type']=='HOD'){
                echo '<li>
                <a href="signup.php">
                    <i class="fas fa-plus-square"></i>Add user</a>
            </li>
            <li>
                <a href="edit_user.php">
                    <i class="fas fa-wrench"></i>Edit User</a>
            </li>
            <li>
                <a href="active_req.php">
                    <i class="fas fa-home"></i>Active Account Request</a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-refresh"></i>Password Recovery</a>
            </li>
            <li>
                <a href="delete_user.php">
                    <i class="fas fa-trash"></i>Delete User</a>
            </li>';
              }
              else{
                
            
              }
               ?>
                <li>
                    <a href="./includes/logout.inc.php">
                        <i class="fas fa-share-square"></i>Logout</a>
                </li>
            </ul>
        </div>
    </nav>
</header>