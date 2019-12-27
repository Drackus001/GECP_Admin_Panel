<?php
include_once './templates/head.php'
?>
</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="images/icon/logo.png" alt="CoolAdmin">
                                <span style="font-size: 20px;">Government Engineering College, Patan</span>
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="includes/signup.inc.php" method="post">

                                <h2>REGISTER | PAGE</h2><br>
                                <?php
                                if(isset($_GET['error'])){
                                    $error_code = $_GET['error'];
                                    if($error_code == 'emptyfields'){
                                        $error = 'Please fill in all fields.';
                                    }elseif($error_code == 'password_mismatch'){
                                        $error = 'Password is not matched.';
                                    }elseif($error_code == 'sqlerror'){
                                        $error = 'Database error.';
                                    }
                                    elseif($error_code == 'usertaken'){
                                        $error = 'This username is already taken.';
                                    }
                                    echo '<div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                                        '.$error.'
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>';
                                }
                                ?>
                                <!-- Message alert -->
                            <!-- <div class="sufee-alert alert with-close alert-primary alert-dismissible fade show">
								<span class="badge badge-pill badge-primary">Success</span>
								    You successfully read this important alert.
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								    <span aria-hidden="true">&times;</span>
								</button>
						    </div> -->
                                <div class="form-group">
                                    <label>Username</label>
                                    <?php if(isset($_GET['username'])){
                                        $uname=$_GET['username'];
                                        echo '<input class="au-input au-input--full" type="text" name="username" placeholder="Username" value="'.$uname.'">';
                                    }else{
                                        echo '<input class="au-input au-input--full" type="text" name="username" placeholder="Username">';
                                    }
                                     ?>
                                    <!-- <input class="au-input au-input--full" type="text" name="username" placeholder="Username"> -->
                                </div>
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <?php if(isset($_GET['email'])){
                                        $email=$_GET['email'];
                                        echo '<input class="au-input au-input--full" type="email" name="email" placeholder="Email" value="'.$email.'">';
                                    }else{
                                        echo '<input class="au-input au-input--full" type="email" name="email" placeholder="Email">';
                                    }
                                     ?>
                                    <!-- <input class="au-input au-input--full" type="email" name="email" placeholder="Email"> -->
                                </div>
                                <div class="form-group">
                                    <span>Account_type:</span>&nbsp;
                                    <select name="account_type" id="">
                                        <option value="HOD">HOD</option>
                                        <option value="FACULTY">FACULTY</option>
                                    </select>
                                    <br><br>
                                    <span class="mt-3">Department: </span>

                                    <select class="form-group" name="department_id" id="">
                                        <option value="07">Computer Engineering</option>
                                        <option value="06">Civil Engineering</option>
                                        <option value="01">Centre of Excellence</option>
                                        <option value="0">General Department</option>
                                        <option value="09">Electrical Engineering</option>
                                        <option value="11">Electronics & Comm. Eng.</option>
                                        <option value="19">Mechanical Engineering</option>
                                    </select>

                                </div>

                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input class="au-input au-input--full" type="password" name="confirm_password" placeholder="Confirm Password">
                                </div>

                                <button name="signup-submit" class="au-btn au-btn--block au-btn--green m-b-20" type="submit">register</button>

                            </form>
                            <div class="register-link">
                                <p>
                                    Already have account?
                                    <a href="login.php">Sign In</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- START <script> -->
    <?php
    include_once './templates/script.php'
    ?>
    <!-- END </script> -->

</body>

</html>
<!-- end document-->