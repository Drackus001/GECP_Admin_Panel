<?php
session_start();

// UPDATE users SET prefix='$prefix',first_name='$first_name',middle_name='$middle_name',last_name='$last_name',qualification='$qualification',area_of_interest='$area_of_interest',designation='$designation',email='$email',dob='$dob',mobile_no='$mobile_no',address_line_1='$address_line_1',address_line_2='$address_line_2',city='$city',pincode='$pincode'" WHERE id=1;

if (isset($_SESSION['id'])) {
    require 'dbh.inc.php';

    // $username = $_POST['username'];
    $prefix = $_POST['prefix'];
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $last_name = $_POST['last_name'];
    $mobile_no = $_POST['mobile_no'];
    $qualification = $_POST['qualification'];
    $designation = $_POST['designation'];
    $address_line_1 = $_POST['address_line_1'];
    $address_line_2 = $_POST['address_line_2'];
    $city = $_POST['city'];
    $pincode = $_POST['pincode'];
    $email = $_POST['email'];
    $dob = date("Y-m-d", strtotime($_POST['dob']));
    $area_of_interest = $_POST['area_of_interest'];


    $user_id = $_SESSION['id'];

    $sql = "UPDATE users SET prefix=?,first_name=?,middle_name=?,last_name=?,qualification=?,area_of_interest=?,designation=?,email=?,dob=?,mobile_no=?,address_line_1=?,address_line_2=?,city=?,pincode=? WHERE id=?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../index.php?error=sqlerror");
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "sssssssssssssss", $prefix, $first_name, $middle_name, $last_name, $qualification, $area_of_interest, $designation, $email, $dob, $mobile_no, $address_line_1, $address_line_2, $city, $pincode, $user_id);
        if (mysqli_stmt_execute($stmt)) {
            header("Location: ../profile.php?success=profileUpdated");
            exit();
        } else {
            echo mysqli_stmt_error($stmt);
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
    header('Location: ../profile.php?error');
}
