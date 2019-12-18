<!-- <html> -->
<?php
include_once './templates/head.php'
?>
</head>
<!-- </head> -->

<body class="animsition">
    <div class="page-wrapper">

        <!-- HEADER MOBILE-->
        <?php
        include_once './templates/headerMobile.php'
        ?>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <?php
        include './templates/menuSidebar.php'
        ?>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">

            <!-- HEADER DESKTOP-->
            <?php
            include './templates/headerDesktop.php'
            ?>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->

            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div>
                            <?php
                            if (!isset($_SESSION['username'])) {
                                echo "<p>you're logged out</p>";
                            } else {
                                if ($_SESSION['type'] == 'ADMIN') {
                                    echo "<p>you're logged in as ADMIN</p>";
                                } else if ($_SESSION['type'] == 'HOD') {
                                    echo "<p>you're logged in as HOD</p>";
                                } else if ($_SESSION['type'] == 'FACULTY') {
                                    echo "<p>you're logged in as FACULTY</p>";
                                } else {
                                    echo "<p>Account_type is not defined</p>";
                                }
                            }
                            ?>


                        </div>
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <a href="profile.php">
                                    <div class="card text-white bg-primary m-3" style="max-width: 18rem;">
                                        <div class="card-body">
                                            <div class="icon mx-5">
                                                <i class="fas fa-user fa-10x"></i>
                                            </div>
                                            <h3 class="card-title mt-3 mx-5">Profile</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <a href="#">
                                    <div class="card text-white bg-success m-3" style="max-width: 18rem;">
                                        <div class="card-body">
                                            <div class="icon mx-5">
                                                <i class="fas fa-plus-square fa-10x"></i>
                                            </div>
                                            <h3 class="card-title mt-3 mx-5">Add user</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <a href="college_info.php">
                                    <div class="card text-white bg-info m-3" style="max-width: 18rem;">
                                        <div class="card-body">
                                            <div class="icon mx-4">
                                                <i class="fas fa-home fa-10x"></i>
                                            </div>
                                            <h3 class="card-title mt-3 mx-5">College Info</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <a href="#">
                                    <div class="card text-white bg-warning m-3" style="max-width: 18rem;">
                                        <div class="card-body">
                                            <div class="icon mx-5">
                                                <i class="fas fa-refresh fa-8x"></i>
                                            </div>
                                            <h3 class="card-title mt-3 mx-5">Password Recovery</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <a href="#">
                                    <div class="card text-white bg-info m-3" style="max-width: 18rem;">
                                        <div class="card-body">
                                            <div class="icon mx-5">
                                                <i class="fas fa-edit fa-8x"></i>
                                            </div>
                                            <h3 class="card-title mt-3 mx-5">Change Password</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <a href="edit_user.php">
                                    <div class="card text-white bg-warning m-3" style="max-width: 18rem;">
                                        <div class="card-body">
                                            <div class="icon mx-5">
                                                <i class="fas fa-wrench fa-10x"></i>
                                            </div>
                                            <h3 class="card-title mt-3 mx-5">Edit user</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <a href="delete_user.php">
                                    <div class="card text-white bg-danger m-3" style="max-width: 18rem;">
                                        <div class="card-body">
                                            <div class="icon mx-5">
                                                <i class="fa fa-trash fa-10x"></i>
                                            </div>
                                            <h3 class="card-title mt-3 mx-5">Delete user</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <a href="#">
                                    <div class="card text-white bg-primary m-3" style="max-width: 18rem;">
                                        <div class="card-body">
                                            <div class="icon mx-5">
                                                <i class="fa  fa-share-square fa-10x"></i>
                                            </div>
                                            <h3 class="card-title mt-3 mx-5">Logout</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>
                        <a href="addExperience.php">Add Experience</a> <br>
                        <a href="addEducation.php">Add Education</a> <br>
                        <a href="addPublication.php">Add Publication</a> <br>
                        <a href="addLab.php">Add Lab</a> <br>
                        <a href="addCommity.php">Add Commities</a> <br>
                        <a href="addNews.php">Add News</a> <br>
                        <a href="active_req.php">Account Active Request</a> <br>
                        <a href="prof_upload.php">Change profile photo</a><br>
                        <a href="login.php">Login</a><br>
                        <a href="signup.php">Signup Page</a><br>

                        <!-- START COPYRIGHT -->
                        <?php
                        include './templates/copyright.php'
                        ?>
                        <!-- END COPYRIGHT -->

                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
        </div>
        <!-- END PAGE CONTAINER-->

    </div>

    <!-- START <script> -->
    <?php
    include_once './templates/script.php'
    ?>
    <!-- END </script> -->
</body>

</html>
<!-- end document-->