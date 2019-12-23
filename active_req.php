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
                            <div class="col-md-12">
                                <h2 class="title-5 m-b-35"> <b>Account Active Request</b>
                                    <hr>
                                </h2>





                                <?php
                                    $sql = "SELECT * FROM users WHERE (account_type='HOD' OR account_type='FACULTY') AND active=0;";
                                    $no = 1;
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        echo '     <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Sr_no.</th>
                                                <th>User name</th>
                                                <th>name</th>
                                                <th>email</th>
                                                <th>Department_ID</th>
                                                <th>Account Type</th>
                                                <th>status</th>
                                                <th>action</th>
                                            </tr>
                                        </thead>
                                        <tbody>';
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo '
                                                        <tr class="tr-shadow">
                                                        <td><b>' . $no++ . '.</b>
                                                        
                                                        </td>
                                                        <td><span class="block-email">' . $row['username'] . '</span></td><td>';

                                            if ($row['first_name'] == '' and $row['last_name'] == '') {
                                                echo 'Not define';
                                            } else {
                                                echo $row['prefix'] . " " . $row['first_name'] . " " . $row['last_name'];
                                            }

                                            echo '</td>
                                                            <td>
                                                            <span class="block-email">' . $row['email'] . '</span>
                                                            </td>';
                                            echo '
                                                        <td class="desc">' . $row['department_id'] . '</td>
                                                        <td>' . $row['account_type'] . '</td>
                                                        <td>
                                                            ';
                                            if ($row['active'] == 1) {
                                                echo '<span style="color:green">Active</span>';
                                            } else {
                                                echo '<span style="color:red">Not Active</span>';
                                            }

                                            $id = $row['id'];
                                            echo '
                                                        </td>
                                                       
                                                        <td> |
                                                        <a href="./includes/activate.inc.php?act=' . $id . '"><button class="btn btn-success">Activate</button></a> &nbsp; &nbsp;
                                                        
                                                        <a href="./includes/delete.inc.php?del=' . $id . '" ><button class="btn btn-danger">Delete</button></a> &nbsp;|                                                                                                                                                                                   
                                                        </td>
                                                        </tr>
                                                        <tr class="spacer"></tr>';
                                        }
                                    } else {
                                        echo '<p style="color: red;">No Request Found!</p>';
                                    }
                                    ?>
                                </tbody>
                                </table>
                            </div>
                            <!-- END DATA TABLE -->
                        </div>
                    </div>


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