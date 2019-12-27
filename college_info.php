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

                        <h2>College Info</h2>
                        <hr>

                        <?php
                            $sql = "SELECT * FROM college_info;";
                            $result = mysqli_query($conn, $sql);
                            $resultCheck = mysqli_num_rows($result);
                            if ($resultCheck > 0 and $resultCheck == 1) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo '</br><h3>Name: </h3>' . $row['name'];
                                    echo '</br></br><h3>Code: </h3>' . $row['code'];
                                    echo '</br></br><h3>Address_line_1: </h3>' . $row['address_line_1'];
                                    echo '</br></br><h3>Address_line_2: </h3>' . $row['address_line_2'];
                                    echo '</br></br><h3>City: </h3>' . $row['city'];
                                    echo '</br></br><h3>Telephone: </h3>' . $row['telephone_no'];
                                    echo '</br></br><h3>About: </h3>' . $row['about'];
                                    echo '</br></br><h3>Vision: </h3>' . $row['vision'];
                                    echo '</br></br><h3>Mission: </h3>' . $row['mission'];
                                    echo '</br></br><h3>Linkedin Link: </h3>' . $row['linkedin_link'];
                                    echo '</br></br><h3>Instagram Link: </h3>' . $row['instagram_link'];
                                    echo '</br></br><h3>Facebook Link: </h3>' . $row['facebook_link'];
                                    echo '</br></br><h3>Twitter Link: </h3>' . $row['twitter_link'];
                                    echo '</br></br><h3>Hostel Link: </h3>' . $row['hostel_link'];
                                }
                            } else {
                                echo 'SQL ERROR';
                            }

                            // <a href="#"><button class="btn btn-info">Edit</button></a>

                            ?>



                    </div>
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