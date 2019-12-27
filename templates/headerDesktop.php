<header class="header-desktop">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="header-wrap">
                <h2>
                    <?php
                    if (!isset($_SESSION['username'])) {
                        echo "<p>Unknown</p>";
                    } else {
                        if ($_SESSION['type'] == 'ADMIN') {
                            echo "<strong> ~~ADMIN ACCOUNT~~</strong>";
                        } else if ($_SESSION['type'] == 'HOD') {
                            echo "<strong>~~HOD ACCOUNT~~</strong>";
                        } else if ($_SESSION['type'] == 'FACULTY') {
                            echo "<strong> ~~FACULTY ACCOUNT~~</strong>";
                        } else {
                            echo "<p>Account_type is not defined</p>";
                        }
                    }
                    ?>
                </h2>
                <div class="header-button">
                    <!-- <div class="noti-wrap">
                        <div class="noti__item js-item-menu">
                            <i class="zmdi zmdi-comment-more"></i>
                            <span class="quantity">1</span>
                            <div class="mess-dropdown js-dropdown">
                                <div class="mess__title">
                                    <p>You have 2 news message</p>
                                </div>
                                <div class="mess__item">
                                    <div class="image img-cir img-40">
                                        <img src="images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                    </div>
                                    <div class="content">
                                        <h6>Michelle Moreno</h6>
                                        <p>Have sent a photo</p>
                                        <span class="time">3 min ago</span>
                                    </div>
                                </div>
                                <div class="mess__item">
                                    <div class="image img-cir img-40">
                                        <img src="images/icon/avatar-04.jpg" alt="Diane Myers" />
                                    </div>
                                    <div class="content">
                                        <h6>Diane Myers</h6>
                                        <p>You are now connected on message</p>
                                        <span class="time">Yesterday</span>
                                    </div>
                                </div>
                                <div class="mess__footer">
                                    <a href="#">View all messages</a>
                                </div>
                            </div>
                        </div>
                        <div class="noti__item js-item-menu">
                            <i class="zmdi zmdi-email"></i>
                            <span class="quantity">1</span>
                            <div class="email-dropdown js-dropdown">
                                <div class="email__title">
                                    <p>You have 3 New Emails</p>
                                </div>
                                <div class="email__item">
                                    <div class="image img-cir img-40">
                                        <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                    </div>
                                    <div class="content">
                                        <p>Meeting about new dashboard...</p>
                                        <span>Cynthia Harvey, 3 min ago</span>
                                    </div>
                                </div>
                                <div class="email__item">
                                    <div class="image img-cir img-40">
                                        <img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                    </div>
                                    <div class="content">
                                        <p>Meeting about new dashboard...</p>
                                        <span>Cynthia Harvey, Yesterday</span>
                                    </div>
                                </div>
                                <div class="email__item">
                                    <div class="image img-cir img-40">
                                        <img src="images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                    </div>
                                    <div class="content">
                                        <p>Meeting about new dashboard...</p>
                                        <span>Cynthia Harvey, April 12,,2018</span>
                                    </div>
                                </div>
                                <div class="email__footer">
                                    <a href="#">See all emails</a>
                                </div>
                            </div>
                        </div>
                        <div class="noti__item js-item-menu">
                            <i class="zmdi zmdi-notifications"></i>
                            <span class="quantity">3</span>
                            <div class="notifi-dropdown js-dropdown">
                                <div class="notifi__title">
                                    <p>You have 3 Notifications</p>
                                </div>
                                <div class="notifi__item">
                                    <div class="bg-c1 img-cir img-40">
                                        <i class="zmdi zmdi-email-open"></i>
                                    </div>
                                    <div class="content">
                                        <p>You got a email notification</p>
                                        <span class="date">April 12, 2018 06:50</span>
                                    </div>
                                </div>
                                <div class="notifi__item">
                                    <div class="bg-c2 img-cir img-40">
                                        <i class="zmdi zmdi-account-box"></i>
                                    </div>
                                    <div class="content">
                                        <p>Your account has been blocked</p>
                                        <span class="date">April 12, 2018 06:50</span>
                                    </div>
                                </div>
                                <div class="notifi__item">
                                    <div class="bg-c3 img-cir img-40">
                                        <i class="zmdi zmdi-file-text"></i>
                                    </div>
                                    <div class="content">
                                        <p>You got a new file</p>
                                        <span class="date">April 12, 2018 06:50</span>
                                    </div>
                                </div>
                                <div class="notifi__footer">
                                    <a href="#">All notifications</a>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <!-- <img src="images/icon/avatar-01.jpg" alt="John Doe" /> -->

                    <!-- $name =  $row['prefix'] . " " . $row['first_name'] .  " " . $row['middle_name'] . " " . $row['last_name'] . "  (" . $row['department_id'] . ")"; -->

                    <div class="account-wrap ml-auto">
                        <div class="account-item clearfix js-item-menu">

                            <div class="image">
                                <?php
                                if (isset($_SESSION['username'])) {
                                    $sql = "SELECT * from users where id=" . $_SESSION['id'] . ";";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0 && $resultCheck == 1) {

                                        while ($row = mysqli_fetch_assoc($result)) {
                                            //code
                                            $name =  $row['prefix'] . " " . $row['first_name'] .  " "  . $row['last_name'];
                                            if ($row['profile_path'] == NULL) {
                                                echo '<img src="images/icon/logo.png" alt="Profile_photo" />';
                                            } else {
                                                echo '<img src="' . $row['profile_path'] . '" alt="profile_photo" />';
                                            }
                                            ?>

                            </div>
                            <div class="content">
                                <a class="js-acc-btn" href="#"><?php echo $name; ?></a>
                            </div>
                            <div class="account-dropdown js-dropdown">
                                <div class="info clearfix">
                                    <div class="image">
                                        <a href="#">
                                            <?php echo '<img src="' . $row['profile_path'] . '" alt="' . $name . '" />'; ?>

                                            <!-- <img src="images/icon/avatar-01.jpg" alt=<?php echo $name; ?> /> -->
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="name">
                                            <a href="#"><?php echo $name; ?></a>
                                        </h5>
                                        <span class="email"><?php echo $row['username']; ?></span>
                                    </div>
                                </div>


                    <?php

                            }
                        } else {
                            echo 'SQL ERROR';
                        }
                    } else {
                        //
                    }

                    ?>
                    <!-- </div>
                            <div class="content">
                                <a class="js-acc-btn" href="#">john doe</a>
                            </div>
                            <div class="account-dropdown js-dropdown">
                                <div class="info clearfix">
                                    <div class="image">
                                        <a href="#">
                                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="name">
                                            <a href="#">john doe</a>
                                        </h5>
                                        <span class="email">johndoe@example.com</span>
                                    </div>
                                </div> -->
                    <div class="account-dropdown__body">
                        <div class="account-dropdown__item">
                            <a href="profile.php">
                                <i class="zmdi zmdi-account"></i>Profile</a>
                        </div>
                        <div class="account-dropdown__item">
                            <a href="changePassword.php">
                                <i class="zmdi zmdi-edit"></i>Change Password</a>
                        </div>
                    </div>
                    <div class="account-dropdown__footer">
                        <a href="./includes/logout.inc.php">
                            <i class="zmdi zmdi-power"></i>Logout</a>
                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>