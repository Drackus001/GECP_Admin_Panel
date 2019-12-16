<?php
session_start();
include './includes/dbh.inc.php';
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php
    if (!isset($_SESSION['username'])) {
        echo "<p>you're logged out</p>";
    } else { ?>

        <h2>UPDATE PROFILE IMAGE</h2>
        <hr>
        <br>
        <form action="./includes/prof_upload.inc.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="file">
            <input type="submit" value="submit" name="submit" />
        </form>
    <?php } ?>

</body>

</html>