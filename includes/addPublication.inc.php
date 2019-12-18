<?php
session_start();
require 'dbh.inc.php';
// INSERT INTO publications(name, description, date, user_id) VALUES ([value-2],[value-3],[value-4],[value-5]);
if (isset($_POST['submit']) && isset($_SESSION['id']) && ($_SESSION['type'] = 'HOD' || $_SESSION['type' == 'FACULTY'])) {



    $name = $_POST['name'];
    $description = $_POST['description'];
    $user_id = $_SESSION['id'];
    // $date = $_POST['date'];
    // $date = date("Y-m-d");

    $date = date("Y-m-d", strtotime($_POST['date']));

    $sql = "INSERT INTO publications(name, description, date, user_id) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../index.php?error=sqlerror");
        exit();
    } else {

        mysqli_stmt_bind_param($stmt, "ssss", $name, $description, $date, $user_id);
        mysqli_stmt_execute($stmt);
        // mysqli_stmt_store_result($stmt);
        header("Location: ../index.php?success=publicationAdded");
        exit();
    }
    // closing connection...
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else {
    header('Location: ../login.php');
    exit();
}
    

    


//     if (empty($username) || empty($email) || empty($pass1) || empty($pass2)) {
//         header("Location: ../signup.php?error=emptyfields&username=" . $username . "&email=" . $email);
//         exit();
//     } else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
//         header("Location: ../signup.php?error=invalid_username_and_email");
//         exit();
//     } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//         header("Location: ../signup.php?error=invalid_email&username=" . $username);
//         exit();
//     } elseif (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
//         header("Location: ../signup.php?error=invalid_username&email=" . $email);
//         exit();
//     } else if ($pass1 !== $pass2) {
//         header("Location: ../signup.php?error=password_mismatch&username=" . $username . "&email=" . $email);
//         exit();
//     } else {

//         $sql = "SELECT username from users where username=?";
//         $stmt = mysqli_stmt_init($conn);

//         if (!mysqli_stmt_prepare($stmt, $sql)) {
//             header("Location: ../signup.php?error=sqlerror");
//             exit();
//         } else {
//             mysqli_stmt_bind_param($stmt, "s", $username);
//             mysqli_stmt_execute($stmt);
//             mysqli_stmt_store_result($stmt);
//             $resultCheck = mysqli_stmt_num_rows($stmt);
//             if ($resultCheck > 0) {
//                 header("Location: ../signup.php?error=usertaken&email=" . $email);
//                 exit();

//                 // // department_id logic(only one HOD - one department)
//                 // } elseif() {
//                 //     $sql = "INSERT INTO users (username, password, account_type, department_id, email) VALUES(?, ?, ?, ?, ?);";

//             } else {
//                 $sql = "INSERT INTO users (username, password, account_type, department_id, email) VALUES(?, ?, ?, ?, ?);";
//                 $stmt = mysqli_stmt_init($conn);
//                 if (!mysqli_stmt_prepare($stmt, $sql)) {
//                     header("Location: ../signup.php?error=sqlerror");
//                     exit();
//                 } else {
//                     // hashing password
//                     $hashedPwd = password_hash($pass1, PASSWORD_DEFAULT);

//                     mysqli_stmt_bind_param($stmt, "sssis", $username, $hashedPwd, $account_type, $depart_id, $email);
//                     mysqli_stmt_execute($stmt);
//                     // mysqli_stmt_store_result($stmt);
//                     header("Location: ../signup.php?signup=success");
//                     exit();
//                 }
//             }
//         }
//     }
//     // closing connection...
//     mysqli_stmt_close($stmt);
//     mysqli_close($conn);
// } else {
//     header('Location: ../signup.php');
//     exit();
// }
