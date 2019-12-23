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
                                        <strong>ADD Education</strong> deatils
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="./includes/addEducation.inc.php" method="post" enctype="multipart/form-data" class="form-horizontal">

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Degree Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="degree" placeholder="(B.E or Phd or M.E etc)" class="form-control">
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Institute Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="institute_name" placeholder="Your Institute/College Name" class="form-control">
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Specialization (Stream)</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="specialization" placeholder="(Computer Engineering, Electrical Engineering etc)" class="form-control">
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Starting Date</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="date" name="joining_date" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Completion Date</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="date" name="completion_date" class="form-control">
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