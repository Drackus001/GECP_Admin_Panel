<?php
session_start();
include 'dbh.inc.php';
// INSERT INTO news(name, date_of_creation, path, department_id, user_id) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6]);

if (isset($_POST['submit']) && isset($_SESSION['id']) && ($_SESSION['type'] == 'FACULTY' || $_SESSION['type'] = 'HOD')) {
    $name = $_POST['name'];
    $user_id = $_SESSION['id'];
    $date = date("Y-m-d");
    $department_id = $_POST['department_id'];



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

    $allowed = array('png', 'jpg', 'jpeg', 'pdf', 'zip', 'rar', 'doc', 'docx');

    // $allowed = array('zip', 'pdf', 'ppt', 'pptx', 'doc', 'docx');

    if ($fileName == '') {
        $fileDestination = NULL;
        if ($department_id == 0) {
            $department_id = NULL;
        }


        // INSERT INTO news(name, date_of_creation, path, department_id, user_id) VALUES (?, ?, ?, ?, ?);
        #SQL code
        $sql = "INSERT INTO news(name, date_of_creation, path, department_id, user_id) VALUES (?, ?, ?, ?, ?);";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../addNews.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "sssss", $name, $date, $fileDestination, $department_id, $user_id);
            mysqli_stmt_execute($stmt);
            header('Location: ../index.php?success=newsAdded');
            exit();
        }
    } else {


        if (in_array($fileActualExt, $allowed)) {
            if ($fileError == 0) {
                if ($fileSize < 5120000) { // 5mb
                    $fileName = $fileExt[0];
                    $fileNameNew = uniqid()  . "." . $fileActualExt;
                    $fileDestination = '../uploads/news/' . $fileNameNew;
                    $fileDestination_final = 'uploads/news/' . $fileNameNew;
                    if ($department_id == 0) {
                        $department_id = NULL;
                    }

                    // INSERT INTO news(name, date_of_creation, path, department_id, user_id) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6]);
                    #SQL CODE
                    $sql = "INSERT INTO news(name, date_of_creation, path, department_id, user_id) VALUES (?, ?, ?, ?, ?);";
                    $stmt = mysqli_stmt_init($conn);
                    if (!mysqli_stmt_prepare($stmt, $sql)) {
                        header("Location: ../addNews.php?error=sqlerror");
                        exit();
                    } else {
                        mysqli_stmt_bind_param($stmt, "sssss", $name, $date, $fileDestination_final, $department_id, $user_id);
                        mysqli_stmt_execute($stmt);
                        // mysqli_stmt_store_result($stmt);
                        // header("Location: ../index.php?success=newsAdded");
                        // exit();
                        if (move_uploaded_file($fileTmpName, $fileDestination)) {
                            header('Location: ../index.php?success=newsAdded');
                            exit();
                        } else {
                            echo 'something weng wrong!!!!!';
                        }
                    }


                    // $sql = "INSERT INTO commities (name, description, objectives, pdf_path, user_id) VALUES ($name, $description, $objectives, $fileDestination, $user_id);";
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
