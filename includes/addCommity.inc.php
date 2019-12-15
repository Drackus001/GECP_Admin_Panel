<?php
session_start();
include 'dbh.inc.php';
// INSERT INTO `commities`(`name`, `description`, `objectives`, `pdf_path`, `faculty_id`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5]);

if (isset($_POST['submit']) && isset($_SESSION['id']) && $_SESSION['type'] == 'ADMIN') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $objectives = $_POST['objectives'];
    $faculty_id = $_POST['faculty_id'];

    $file = $_FILES['file'];
    print_r($file);
    // // Array ( [name] => helo.pdf [type] => application/pdf [tmp_name] => /opt/lampp/temp/phpo5hgP2 [error] => 0 [size] => 583011 )

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileType = $_FILES['file']['type'];
    $fileError = $_FILES['file']['error'];
    $fileSize = $_FILES['file']['size'];


    $fileExt = explode('.', $fileName);
    // print_r($fileExt);
    // // Array ( [0] => helo [1] => png ) 
    #$fileName = $fileExt[0];
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('zip', 'pdf', 'ppt', 'pptx', 'doc', 'docx');

    if ($fileName == '') {
        $fileDestination = NULL;
        if ($objectives == '') {
            $objectives = NULL;
        }
        if ($faculty_id == 0) {
            $faculty_id = NULL;
        }
        #SQL code
        $sql = "INSERT INTO commities (name, description, objectives, pdf_path, faculty_id) VALUES(?, ?, ?, ?, ?);";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../add_commity.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "ssssi", $name, $description, $objectives, $fileDestination, $faculty_id);
            mysqli_stmt_execute($stmt);
            header('Location: ../index.php?commityAdded');
        }
    } else {


        if (in_array($fileActualExt, $allowed)) {
            if ($fileError == 0) {
                if ($fileSize < 5120000) { // 5mb
                    $fileName = $fileExt[0];
                    $fileNameNew = $fileName . "." . $fileActualExt;
                    $fileDestination = '../uploads/commities/' . $fileNameNew;
                    $fileDestination_final = 'uploads/commities/' . $fileNameNew;
                    if ($faculty_id == 0) {
                        $faculty_id = NULL;
                    }
                    if ($objectives == '') {
                        $objectives = NULL;
                    }

                    #SQL CODE
                    $sql = "INSERT INTO commities (name, description, objectives, pdf_path, faculty_id) VALUES(?, ?, ?, ?, ?);";
                    $stmt = mysqli_stmt_init($conn);
                    if (!mysqli_stmt_prepare($stmt, $sql)) {
                        header("Location: ../add_commity.php?error=sqlerror");
                        exit();
                    } else {
                        mysqli_stmt_bind_param($stmt, "ssssi", $name, $description, $objectives, $fileDestination_final, $faculty_id);
                        mysqli_stmt_execute($stmt);
                        // mysqli_stmt_store_result($stmt);
                        // header("Location: ../index.php?commityAdded");
                        // exit();
                    }


                    // $sql = "INSERT INTO commities (name, description, objectives, pdf_path, faculty_id) VALUES ($name, $description, $objectives, $fileDestination, $faculty_id);";
                    // $result = mysqli_query($conn, $sql);

                    // if ($result) {
                    //     echo 'inserted...';
                    // } else {
                    //     echo 'failed!!';
                    // }
                    // $resultCheck = mysqli_num_rows($result);

                    // if ($resultCheck > 0 && $resultCheck == 1) {
                    //     while ($row = mysqli_fetch_assoc($result)) {
                    //         //code
                    //         echo "executed";
                    //     }
                    // } else {
                    //     echo 'SQL ERROR';
                    // }

                    if (move_uploaded_file($fileTmpName, $fileDestination)) {
                        header('Location: ../index.php?commityAdded');
                        exit();
                    } else {
                        echo 'something weng wrong!!!!!';
                    }
                } else {
                    echo 'max 5mb file size is allowed.';
                }
            } else {
                echo 'There was an error while uploading your file.';
            }
        } else {
            echo 'you cannot upload file of this type.';
        }
    }
} else {
    header('Location: ../index.php');
    exit();
}
