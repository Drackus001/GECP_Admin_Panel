<!-- <html> -->
<?php
include_once './templates/head.php';
?>
</head>
<!-- </head> -->
<?php
if (!isset($_SESSION['id'])) {
    header('Location: login.php');
    exit();
} else {
?>

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
                <?php

                ?>
                <!-- MAIN CONTENT-->
                <div class="main-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Change Password</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="./includes/changePassword.inc.php" method="post" class="form-horizontal">

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Old Password</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="password" id="text-input" name="old_pass" placeholder="Your Old Password" class="form-control">
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">New Password</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="password" id="text-input" name="new_pass" placeholder="Your New Password" class="form-control">
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Confirm New Password</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="password" id="text-input" name="new_pass2" placeholder="Confirm New Password" class="form-control">
                                                </div>
                                            </div>


                                            <hr>

                                            <div class="row form-group">
                                                <div class="col-3">
                                                </div>
                                                <div class="col-6">
                                                    <button name="submit" type="submit" class="btn btn-primary">
                                                        Submit
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>

                            </div>
                        </div>

   <!-- START COPYRIGHT -->
   <?php
                            include './templates/copyright.php'
                            ?>
                            <!-- END COPYRIGHT -->
                    </div>
                </div> <!-- END MAIN CONTENT-->
            </div>
            <!-- END PAGE CONTAINER-->

        </div>
        <!-- END PAGE WRAPPER -->


        <!-- START <script> -->
        <?php
        include_once './templates/script.php'
        ?>
        <!-- END </script> -->
    </body>

    </html>
    <!-- end document-->
<?php } ?>