<?php

if (isset($_POST['login-submit'])) {

    require 'dbh.inc.php';

    $uname = $_POST['username'];
    $pass = $_POST['password'];
    $active = 1;

    $sql = "SELECT * FROM users WHERE username=? AND active=?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../login.php?error=sqlerror");
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "si", $uname, $active);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if ($row = mysqli_fetch_assoc($result)) {
            $pwdCheck = password_verify($pass, $row['password']);
            // echo "output is " . $pwdCheck;
            // echo $row['username'];
            // exit();

            if ($pwdCheck == false) {
                header('Location: ../login.php?error=wrong_pass');
                exit();
            } else if ($pwdCheck == true) {
                session_start();
                $_SESSION['id'] = $row['id'];
                $_SESSION['username'] = $row['username'];

                header('Location: ../index.php?login=success');
                exit();
            } else {
                header('Location: ../login.php?error=wrong_pass');
                exit();
            }
        } else {
            header('Location: ../login.php?error=not_active');
            exit();
        }
    }
} else {
    header('Location: ../login.php');
    exit();
}
