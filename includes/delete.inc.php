<?php
session_start();
if (isset($_GET['del']) && isset($_SESSION['id'])) {
    require 'dbh.inc.php';

    $id = $_GET['del'];
    // echo $id . '<br>';
    $sql = "DELETE FROM users WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo 'Deleted user success.';
    } else {
        echo 'SQL ERROR';
        exit();
    }
    header('Location: ../active_req.php?userDeleted');
    mysqli_close($conn);
} else {
    header('Location: ../index.php');
}
