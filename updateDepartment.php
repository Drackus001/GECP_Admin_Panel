<!-- <html> -->
<?php
include_once './templates/head.php';
?>
</head>
<!-- </head> -->
<?php
if (!isset($_SESSION['id']) && !isset($_GET['dept'])) {
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
                        <h2 class="btn-info">Department Info.</h2>
                        <hr>
                        <?php
                        $dept = $_GET['dept'];

                            $sql = "SELECT * FROM departments WHERE id=" . $dept . ";";
                            $result = mysqli_query($conn, $sql);
                            // $resultCheck = mysqli_num_rows($result);
                            if (mysqli_num_rows($result)) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="card">
                                            <div class="card-header">
                                                <strong>

                                                    <?php echo $row['name']; ?>

                                                </strong> department

                                            </div>
                                            <div class="card-body card-block">


                                                <form action="./includes/department_photo_upload.inc.php" method="post" enctype="multipart/form-data" class="form-vertical">
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="text-input" class=" form-control-label">Department Image</label>
                                                        </div>

                                                        <div class="col-12 col-md-3">
                                                            <?php echo '<img src="' . $row['photo_path'] . '" alt="profile image not found" height="150px" width="150px"/>'; ?>
                                                        </div>
                                                        <div class="col-12 col-md-3">
                                                            <input type="file" name="file" />
                                                        </div>
                                                        <input type="text" name="id" value="<?php echo $row['id']; ?>" hidden />

                                                        <div class="col-12 col-md-3">
                                                            <button name="submit" type="submit" class="btn btn-info">
                                                                Submit
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <form action="./includes/updateDepartment.inc.php" method="post" enctype="multipart/form-data" class="form-horizontal">



                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="text-input" class=" form-control-label">Department ID</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <input type="text" id="text-input" name="id" placeholder="Department code (07,01 etc)" class="form-control" value="<?php echo $row['id']; ?>" disabled>
                                                        </div>
                                                    </div>

                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="text-input" class=" form-control-label">About</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <textarea id="textarea-input" name="about" placeholder="department info." class="form-control"><?php echo $row['about']; ?></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="text-input" class=" form-control-label">Vision</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <textarea id="textarea-input" name="vision" placeholder="department vision(dot(.) seperated)" class="form-control"><?php echo $row['vision']; ?></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="text-input" class=" form-control-label">Mission</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <textarea id="textarea-input" name="mission" placeholder="department mission(dot(.) seperated)" class="form-control"><?php echo $row['mission']; ?></textarea>
                                                        </div>
                                                    </div>


                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="text-input" class=" form-control-label">Program Education Objectivies</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <textarea id="textarea-input" name="peo" placeholder="department Program Education Objective(dot(.) seperated)" class="form-control"><?php echo $row['peo']; ?></textarea>
                                                        </div>
                                                    </div>


                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="text-input" class=" form-control-label">Program Specific Ooutcomes</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <textarea id="textarea-input" name="pso" placeholder="department Program Specific Outcomes(dot(.) seperated)" class="form-control"><?php echo $row['pso']; ?></textarea>
                                                        </div>
                                                    </div>

                                                    <hr>

                                                    <div class="row form-group">
                                                        <div class="col-3">
                                                        </div>
                                                        <div class="col-6">
                                                            <button name="submit" type="submit" class="btn btn-warning">
                                                                Update
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                        <?php
                                }
                            } else {
                                echo 'SQL ERROR';
                                // code
                            }
                            ?>
                        >
                    </div>
                    <!-- END MAIN CONTENT-->
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