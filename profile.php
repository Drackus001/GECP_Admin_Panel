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
                        <h2 class="btn-info">Personal Info.</h2>
                        <hr>
                        <?php

                            $sql = "SELECT * FROM users WHERE id=" . $_SESSION['id'] . ";";
                            $result = mysqli_query($conn, $sql);
                            $resultCheck = mysqli_num_rows($result);
                            if ($resultCheck > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="card">
                                            <div class="card-header">
                                                <strong>

                                                    Username:

                                                </strong>
                                                <?php echo $row['username']  . " (" . $row['account_type'] . ")"; ?>
                                            </div>
                                            <div class="card-body card-block">


                                                <form action="./includes/prof_upload.inc.php" method="post" enctype="multipart/form-data" class="form-vertical">
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="text-input" class=" form-control-label">Profile Image</label>
                                                        </div>

                                                        <div class="col-12 col-md-3">
                                                            <?php echo '<img src="' . $row['profile_path'] . '" alt="profile image not found" height="150px" width="150px"/>'; ?>
                                                        </div>
                                                        <div class="col-12 col-md-3">
                                                            <input type="file" name="file" />
                                                        </div>
                                                        <div class="col-12 col-md-3">
                                                            <button name="submit" type="submit" class="btn btn-info">
                                                                Submit
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <form action="./includes/profile_info_update.inc.php" method="post" enctype="multipart/form-data" class="form-horizontal">



                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="text-input" class=" form-control-label">Prefix</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <input type="text" id="text-input" name="prefix" placeholder="(MR. or DR. etc)" class="form-control" value="<?php echo $row['prefix']; ?>">
                                                        </div>
                                                    </div>

                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="text-input" class=" form-control-label">First Name</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <input type="text" id="text-input" name="first_name" placeholder="Your First Name" class="form-control" value="<?php echo $row['first_name']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="text-input" class=" form-control-label">Middle Name</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <input type="text" id="text-input" name="middle_name" placeholder="Middle Name" class="form-control" value="<?php echo $row['middle_name']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="text-input" class=" form-control-label">Last Name</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <input type="text" id="text-input" name="last_name" placeholder="Last Name" class="form-control" value="<?php echo $row['last_name']; ?>">
                                                        </div>
                                                    </div>

                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="text-input" class=" form-control-label">Designation</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <input type="text" id="text-input" name="designation" placeholder="(ASSOCIATE PROFESSOR, ASSISTANT PROFESSOR etc)" class="form-control" value="<?php echo $row['designation']; ?>">
                                                        </div>
                                                    </div>


                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="text-input" class=" form-control-label">Department ID</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <input type="text" id="text-input" name="department_id" placeholder="department id" class="form-control" value="<?php echo $row['department_id']; ?>" disabled>
                                                        </div>
                                                    </div>

                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="text-input" class=" form-control-label">Qualification</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <input type="text" id="text-input" name="qualification" placeholder="(BE, ME, PHD etc)" class="form-control" value="<?php echo $row['qualification']; ?>">
                                                        </div>
                                                    </div>

                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="text-input" class=" form-control-label">Area of Interest</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <input type="text" id="text-input" name="area_of_interest" placeholder="Area of Interest" class="form-control" value="<?php echo $row['area_of_interest']; ?>">
                                                        </div>
                                                    </div>

                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="text-input" class=" form-control-label">Email</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <input type="email" id="text-input" name="email" placeholder="Your Email" class="form-control" value="<?php echo $row['email']; ?>">
                                                        </div>
                                                    </div>

                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="text-input" class=" form-control-label">DOB</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <input type="date" name="dob" class="form-control" value="<?php echo $row['dob']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="text-input" class=" form-control-label">Mobile No.</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <input type="text" id="text-input" name="mobile_no" placeholder="India (+91- )" class="form-control" value="<?php echo $row['mobile_no']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="text-input" class=" form-control-label">Address Line-1</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <input type="text" id="text-input" name="address_line_1" placeholder="address line 1" class="form-control" value="<?php echo $row['address_line_1']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="text-input" class=" form-control-label">Address Line-2</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <input type="text" id="text-input" name="address_line_2" placeholder="address line 2" class="form-control" value="<?php echo $row['address_line_2']; ?>">
                                                        </div>
                                                    </div>

                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="text-input" class=" form-control-label">City</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <input type="text" id="text-input" name="city" placeholder="city name" class="form-control" value="<?php echo $row['city']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="text-input" class=" form-control-label">Pincode</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <input type="text" id="text-input" name="pincode" placeholder="Your pincode" class="form-control" value="<?php echo $row['pincode']; ?>">
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
                        <br><br>

                        <h2 class="btn-danger">Experience Info.</h2>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <a href="addExperience.php" class="btn btn-success">Add Experience <strong>+</strong> </a>
                                <br>
                                <br>


                                <?php
                                    $sql = "SELECT * FROM experience WHERE user_id=" . $_SESSION['id'] . " ORDER BY joining_date ;";
                                    $no = 1;

                                    $result = mysqli_query($conn, $sql);
                                    // $resultCheck = mysqli_num_rows($result);
                                    if (mysqli_num_rows($result)) {
                                        echo '     <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Sr_no.</th>
                                                <th>Designation</th>
                                                <th>Institute Name</th>
                                                <th>Joining Date</th>
                                                <th>Leaving Date</th>
                                                <th>Actions</th>                                                
                                            </tr>
                                        </thead>
                                        <tbody>';
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo '
                                                        <tr class="tr-shadow">
                                                        <td><b>' . $no++ . '.</b>      
                                                        </td>
                                                        <td><span class="block-email">' . $row['designation'] . '</span></td>';



                                            echo '<td> <span class="block-email">' . $row['institute_name'] . '</span></td>';
                                            echo '<td>' . $row['joining_date'] . '</td>';
                                            echo '<td>' . $row['leaving_date'] . '</td>';

                                            $id = $row['id'];

                                            // <a href="./includes/activate.inc.php?act=' . $id . '"><button class="btn btn-success">Activate</button></a> &nbsp; &nbsp;

                                            echo '</td>     
                                                        <td> |        
                                                        <a href="./includes/delete.inc.php?exp_del=' . $id . '" ><button class="btn btn-danger">Delete</button></a> &nbsp;|                                                                                                                                                                                   
                                                        </td>
                                                        </tr>
                                                      ';
                                        }
                                        echo '  </tbody>
                                        </table>
                                    </div>';
                                    } else {
                                        echo '<p style="color: red;">No Request Found!</p>';
                                    }
                                    ?>

                            </div>
                            <!-- END DATA TABLE -->
                        </div>

                        <br><br>
                        <div class="row">
                            <div class="col-md-12">

                                <h2 class="btn-info">Education Info.</h2>
                                <hr>

                                <a href="addEducation.php" class="btn btn-success">Add Education <strong>+</strong></a>
                                <br>
                                <br>

                                <?php
                                    $sql = "SELECT * FROM education WHERE user_id=" . $_SESSION['id'] . " ORDER BY joining_date DESC ;";
                                    $no = 1;

                                    $result = mysqli_query($conn, $sql);
                                    // $resultCheck = mysqli_num_rows($result);
                                    if (mysqli_num_rows($result)) {
                                        echo '     <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Sr_no.</th>
                                                <th>Degree</th>
                                                <th>Specialization</th>
                                                <th>Institute Name</th>
                                                <th>Joining Date</th>
                                                <th>Completion Date</th>
                                                <th>Actions</th>                                                
                                            </tr>
                                        </thead>
                                        <tbody>';
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo '
                                                        <tr class="tr-shadow">
                                                        <td><b>' . $no++ . '.</b>      
                                                        </td>
                                                        <td><span class="block-email">' . $row['degree'] . '</span></td>';

                                            echo '<td> <span class="block-email">' . $row['specialization'] . '</span></td>';
                                            echo '<td> <span class="block-email">' . $row['institute_name'] . '</span></td>';
                                            echo '<td>' . $row['joining_date'] . '</td>';
                                            echo '<td>' . $row['completion_date'] . '</td>';

                                            $id = $row['id'];

                                            // <a href="./includes/activate.inc.php?act=' . $id . '"><button class="btn btn-success">Activate</button></a> &nbsp; &nbsp;

                                            echo '</td>     
                                                        <td> |        
                                                        <a href="./includes/delete.inc.php?edu_del=' . $id . '" ><button class="btn btn-danger">Delete</button></a> &nbsp;|                                                                                                                                                                                   
                                                        </td>
                                                        </tr>';
                                        }
                                        echo '  </tbody>
                                        </table>
                                    </div>';
                                    } else {
                                        echo '<p style="color: red;">No Request Found!</p>';
                                    }
                                    ?>

                            </div>
                        </div>

                        <br><br>
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="btn-danger">Publication Info.</h2>
                                <hr>

                                <a href="addPublication.php" class="btn btn-success">Add Publication <strong>+</strong> </a>
                                <br>
                                <br>

                                <?php
                                    $sql = "SELECT * FROM publications WHERE user_id=" . $_SESSION['id'] . " ORDER BY date ;";
                                    $no = 1;

                                    $result = mysqli_query($conn, $sql);
                                    // $resultCheck = mysqli_num_rows($result);
                                    if (mysqli_num_rows($result)) {
                                        echo '     <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Sr_no.</th>
                                                <th>Name</th>
                                                <th>Publish Date</th>
                                                <th>Description</th>
                                                <th>Actions</th>                                                
                                            </tr>
                                        </thead>
                                        <tbody>';
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo '
                                                        <tr class="tr-shadow">
                                                        <td><b>' . $no++ . '.</b>      
                                                        </td>
                                                        <td><span class="block-email">' . $row['name'] . '</span></td>';



                                            echo '<td> <span class="block-email">' . $row['date'] . '</span></td>';
                                            echo '<td>  <input type="textarea" value="' . $row['description'] . '" /></td>';

                                            $id = $row['id'];

                                            // <a href="./includes/activate.inc.php?act=' . $id . '"><button class="btn btn-success">Activate</button></a> &nbsp; &nbsp;

                                            echo '</td>     
                                                        <td> |        
                                                        <a href="./includes/delete.inc.php?pub_del=' . $id . '" ><button class="btn btn-danger">Delete</button></a> &nbsp;|                                                                                                                                                                                   
                                                        </td>
                                                        </tr>';
                                        }
                                        echo '  </tbody>
                                        </table>
                                    </div>';
                                    } else {
                                        echo '<p style="color: red;">No Request Found!</p>';
                                    }
                                    ?>

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