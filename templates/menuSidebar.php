<?php
// include './includes/dbh.inc.php';
?>
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="index.php">
            <!-- <img src="images/icon/logo.png" alt="College logo" /> -->


            <span>
                <img src="images/icon/logo.png" alt="College_photo" /> GECP (USER PANEL)
            </span>
            <!-- 
                <?php
                // if (!isset($_SESSION['username'])) {
                //     echo "<p>Unknown</p>";
                // } else {
                //     if ($_SESSION['type'] == 'ADMIN') {
                //         echo "<strong> ADMIN ACCOUNT</strong>";
                //     } else if ($_SESSION['type'] == 'HOD') {
                //         echo "<strong>HOD ACCOUNT</strong>";
                //     } else if ($_SESSION['type'] == 'FACULTY') {
                //         echo "<strong> FACULTY ACCOUNT</strong>";
                //     } else {
                //         echo "<p>Account_type is not defined</p>";
                //     }
                // }
                // 
                ?> -->

            <?php
            // if (isset($_SESSION['username'])) {
            // $sql = "SELECT profile_path from users where id=" . $_SESSION['id'] . ";";
            // $result = mysqli_query($conn, $sql);
            // $resultCheck = mysqli_num_rows($result);
            // if ($resultCheck > 0 && $resultCheck == 1) {

            // while ($row = mysqli_fetch_assoc($result)) {
            // //code
            // if ($row['profile_path'] == '') {
            // echo '<img src="images/icon/logo.png" alt="Profile_photo" />';
            // } else {
            // echo '<img src="' . $row['profile_path'] . '" height="100" width="100" alt="profile_photo" />';
            // }
            // }
            // } else {
            // echo 'SQL ERROR';
            // }


            // echo '<span style="font-size: 30px">' . $_SESSION['username'] . '</span>';
            // } else {
            // // echo '<img src="images/icon/logo.png" alt="College logo" />';
            // echo '<span style="font-size: 30px">Unknown </span>';
            // }

            ?>

        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">

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
        </nav>
    </div>
</aside>