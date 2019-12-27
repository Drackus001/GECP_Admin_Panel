<?php
session_start();
if (isset($_GET['deact']) && isset($_SESSION['id'])) {
    require 'dbh.inc.php';

    $id = $_GET['deact'];
    // echo $id . '<br>';
    $sql = "UPDATE users SET active=0 WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo 'User Deactivated successful.';
    } else {
        echo 'SQL ERROR';
        exit();
    }

    if($_SESSION['id']==$id){
        header('Location: logout.inc.php');
    }
    else{
        header('Location: ../delete_user.php?userDe-activated');
    }

    
    mysqli_close($conn);
} else {
    header('Location: ../index.php?error');
}
