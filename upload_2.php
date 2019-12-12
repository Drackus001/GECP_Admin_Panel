<?php
if (isset($_POST['submit'])) {
    $file = $_FILES['file'];
    print_r($file);
    // // Array ( [name] => helo.png [type] => image/png [tmp_name] => /opt/lampp/temp/phpo5hgP2 [error] => 0 [size] => 583011 )

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileType = $_FILES['file']['type'];
    $fileError = $_FILES['file']['error'];
    $fileSize = $_FILES['file']['size'];
    $fileName = $_FILES['file']['name'];

    $fileExt = explode('.', $fileName);
    // print_r($fileExt);
    // // Array ( [0] => helo [1] => png ) 
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png', 'pdf');

    if (in_array($fileActualExt, $allowed)) {
        if ($fileError == 0) {
            if ($fileSize < 5120000) { // 5mb
                $fileNameNew = uniqid('', true) . "." . $fileActualExt;
                $fileDestination = 'uploads/' . $fileNameNew;
                if (move_uploaded_file($fileTmpName, $fileDestination)) {
                    header('Location: index.php?uploadsuccess');
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
} else {
    header('./upload.php');
    exit();
}
