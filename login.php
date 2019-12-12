<?php
include_once './templates/head.php'
?>

<!-- <link rel="stylesheet" href="./css/validation_styles.css"> -->
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
                        <div class=" login-form">
                            <form action="./includes/login.inc.php" method="post">
                                <h2>LOGIN | PAGE</h2><br>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="au-input au-input--full" type="text" name="username" placeholder="Your Username">
                                    <!-- pattern="[a-zA-Z0-9]{5,20}" -->

                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Your Password">
                                    <!-- pattern="[a-zA-Z0-9@_-]{8,20}" title="Password must alphanumeric (@, _ and - are also allowed) and be 8 - 20 characters" -->

                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">Remember Me
                                    </label>
                                    <label>
                                        <a href="#">Forgotten Password?</a>
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" name="login-submit" type="submit">sign in</button>
                            </form>
                            <div class="register-link">
                                <p>
                                    Don't you have account?
                                    <a href="signup.php">Sign Up Here</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- START <script> -->
    <!-- <script type="text/javascript" src="./js/validation.js"></script> -->
    <?php
    include_once './templates/script.php'
    ?>
    <!-- END </script> -->

</body>

</html>
<!-- end document-->