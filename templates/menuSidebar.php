<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src="images/icon/logo.png" alt="College logo" />
            <?php
            if (isset($_SESSION['username'])) {
                echo '<span style="font-size: 30px">' . $_SESSION['username'] . '</span>';
            } else {
                echo '<span style="font-size: 30px">Unknown </span>';
            }

            ?>

        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="active has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="index.php">Dashboard 1</a>
                        </li>
                        <li>
                            <a href="index2.php">Dashboard 2</a>
                        </li>
                        <li>
                            <a href="index3.php">Dashboard 3</a>
                        </li>
                        <li>
                            <a href="index4.php">Dashboard 4</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="profile.php">
                        <i class="fas fa-user"></i>Profile</a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-edit"></i>Change Password</a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-plus-square"></i>Add user</a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-wrench"></i>Edit User</a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-home"></i>College Info</a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-refresh"></i>Password Recovery</a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-trash"></i>Delete User</a>
                </li>
                <li>
                    <a href="./includes/logout.inc.php">
                        <i class="fas fa-share-square"></i>Logout</a>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-copy"></i>Pages</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="login.php">Login</a>
                        </li>
                        <li>
                            <a href="signup.php">Signup</a>
                        </li>
                        <li>
                            <a href="forget-pass.php">Forget Password</a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
    </div>
</aside>