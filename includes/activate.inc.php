<?php
session_start();
if (isset($_GET['act']) && isset($_SESSION['id']) && $_SESSION['active'] == 1) {
    require 'dbh.inc.php';

    $id = $_GET['act'];
    // echo $id . '<br>';
    $sql = "UPDATE users SET active=1 WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo 'User Activated successful.';
    } else {
        echo 'SQL ERROR';
        exit();
    }
    header('Location: ../active_req.php?userActivated');
    mysqli_close($conn);
} else {
    header('Location: ../login.php?error=logout');
    exit();
}
