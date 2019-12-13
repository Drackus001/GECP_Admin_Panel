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
                        <h2>Delete user</h2>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
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
                                        <tbody>


                                            <?php
                                                $sql = "SELECT * FROM users WHERE account_type='HOD' OR account_type='FACULTY';";
                                                $no = 1;
                                                $result = mysqli_query($conn, $sql);
                                                $resultCheck = mysqli_num_rows($result);
                                                if ($resultCheck > 0) {
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        echo '
                                                        <tr class="tr-shadow">
                                                        <td><b>' . $no++ . '.</b>
                                                        
                                                        </td>
                                                        <td>' . $row['username'] . '</td><td>';

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
                                                        
                                                        <a href="./includes/deactivate.inc.php?deact=' . $id . '"><button class="btn btn-warning">Deactivate</button></a> &nbsp;&nbsp;
                                                        <a href="./includes/delete.inc.php?del=' . $id . '"><button class="btn btn-danger">Delete</button></a> &nbsp;|                                                                                                                                                                                   
                                                        </td>
                                                        </tr>
                                                        <tr class="spacer"></tr>';
                                                    }
                                                } else {
                                                    echo "SQL ERROR";
                                                }
                                                ?>



                                            <!-- <td>Lori Lynch</td>
                                            <td>
                                                <span class="block-email">lori@example.com</span>
                                            </td> -->


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