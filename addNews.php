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
                                        <strong>ADD NEWS</strong> deatils
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="./includes/addNews.inc.php" method="post" enctype="multipart/form-data" class="form-horizontal">

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="name" placeholder="News Name" class="form-control">

                                                </div>
                                            </div>



                                            <?php
                                                $sql = "SELECT * FROM departments;";

                                                $result = mysqli_query($conn, $sql);
                                                $resultCheck = mysqli_num_rows($result);
                                                if ($resultCheck > 0) {
                                                    echo '
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="select" class=" form-control-label">Department</label>
                                                    </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="department_id" id="select" class="form-control">
                                                        <option value="0">please select</option>
                                            ';
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        $name =  $row['name'] . " (" . $row['id'] . ")";
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