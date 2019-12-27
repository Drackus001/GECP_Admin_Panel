<?php
session_start();
if (isset($_POST['submit']) && isset($_SESSION['id']) && $_SESSION['active'] == 1) {

    require 'dbh.inc.php';


    $old_pass = $_POST['old_pass'];
    $new_pass = $_POST['new_pass'];
    $new_pass2 = $_POST['new_pass2'];


    // old password check logic--start

    $id = $_SESSION['id'];
    $sql = "SELECT * FROM users WHERE id=?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../changePassword.php?error=sqlerrorforoldpass");
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if ($row = mysqli_fetch_assoc($result)) {
            $pwdCheck = password_verify($old_pass, $row['password']);
            // echo "output is " . $pwdCheck;
            // echo $row['username'];
            // exit();

            if ($pwdCheck == false) {
                header('Location: ../changePassword.php?error=wrong_old_pass');
                exit();
            } else if ($pwdCheck == true) {
                // confirm password logic --start

                if ($new_pass !== $new_pass2) {
                    header("Location: ../changePassword.php?error=password_mismatch");
                    exit();
                } else {
                    //
                    $sql = "UPDATE users SET password=? WHERE id=?;";
                    $stmt = mysqli_stmt_init($conn);
                    if (!mysqli_stmt_prepare($stmt, $sql)) {
                        header("Location: ../changePassword.php?error=sqlerrorforchangepass");
                        exit();
                    } else {
                        // hashing password
                        $hashedPwd = password_hash($new_pass, PASSWORD_DEFAULT);
                        mysqli_stmt_bind_param($stmt, "si", $hashedPwd, $id);
                        if (mysqli_stmt_execute($stmt)) {
                            header("Location: ../index.php?success=passwordChangedSuccessfull");
                            exit();
                        } else {
                            echo mysqli_stmt_error($stmt);
                        }
                        // mysqli_stmt_store_result($stmt);

                    }
                    // confirm password logic --end
                }
            }
        } else {
            header('Location: ../changePassword.php?error=sql_error');
            exit();
        }
    }

    // old password check logic--end




    // closing connection...
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else {
    header('Location: ../login.php?error=logout');
    exit();
}
