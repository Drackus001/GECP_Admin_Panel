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
                                        <strong>ADD COMMITY</strong> deatils
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="./includes/addCommity.inc.php" method="post" enctype="multipart/form-data" class="form-horizontal">

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="name" placeholder="Commity Name" class="form-control">
                                                    <small class="form-text text-muted">Enter new commity name here</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Description</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="description" id="textarea-input" rows="9" placeholder="Give description of this commity." class="form-control"></textarea>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Objectives</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="objectives" id="textarea-input" rows="9" placeholder="Give objectives detail of this commity" class="form-control"></textarea>
                                                </div>
                                            </div>
                                            <?php
                                                $sql = "SELECT * FROM users WHERE account_type!='ADMIN';";

                                                $result = mysqli_query($conn, $sql);
                                                $resultCheck = mysqli_num_rows($result);
                                                if ($resultCheck > 0) {
                                                    echo '
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="select" class=" form-control-label">Faculty Co-ordinator</label>
                                                    </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="faculty_id" id="select" class="form-control">
                                                        <option value="0">please select</option>
                                            ';
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        $name =  $row['prefix'] . " " . $row['first_name'] .  " " . $row['middle_name'] . " " . $row['last_name'] . "  (" . $row['department_id'] . ")";
                                                        echo "<option value=" . $row['id'] . ">$name</option>";
                                                    }
                                                } else {
                                                    echo "SQL ERROR";
                                                }
                                                ?>

                                            </select>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="file-input" class=" form-control-label">File input(PDF)</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="file" name="file" class="form-control-file">
                                    </div>
                                </div>
                                <hr>
                                <br>
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