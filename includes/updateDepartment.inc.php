<?php
session_start();

// UPDATE departments SET about=[value-3],vision=[value-4],mission=[value-5],peo=[value-6],pso=[value-7] WHERE id='$id';

if (isset($_SESSION['id'])) {
    require 'dbh.inc.php';

    // $username = $_POST['username'];
    $id = $_POST['id'];
    // $name = $_POST['name'];
    $about = $_POST['about'];
    $mission = $_POST['mission'];
    $vision = $_POST['vision'];
    $peo = $_POST['peo'];
    $pso = $_POST['pso'];
    // temp
    $user_id = $_SESSION['id'];

    $sql = "UPDATE departments SET about=?,vision=?,mission=?,peo=?,pso=? WHERE id=?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../index.php?error=sqlerror");
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "sssssi", $about, $vision, $mission, $peo, $pso, $id);
        if (mysqli_stmt_execute($stmt)) {
            header("Location: ../index.php?success=departmentUpdated");
            mysqli_close($conn);
            exit();
        } else {
            echo mysqli_stmt_error($stmt);
            mysqli_close($conn);
        }
        // mysqli_stmt_store_result($stmt);

    }


    // echo $id . '<br>';
    // $sql = "UPDATE users SET active=1 WHERE id='$id'";
    // $sql = "UPDATE users SET prefix='$prefix',first_name='$first_name',middle_name='$middle_name',last_name='$last_name',qualification='$qualification',area_of_interest='$area_of_interest',designation='$designation',email='$email',dob='$dob',mobile_no='$mobile_no',address_line_1='$address_line_1',address_line_2='$address_line_2',city='$city',pincode='$pincode' WHERE id='$user_id';";
    // $result = mysqli_query($conn, $sql);
    // if ($result) {
    //     echo 'User Activated successful.';
    // } else {
    //     echo 'SQL ERROR';
    //     exit();
    // }
    // header('Location: ../profile.php?profileUpdated');
    // mysqli_close($conn);
} else {
    header('Location: ../departments.php?error');
}
