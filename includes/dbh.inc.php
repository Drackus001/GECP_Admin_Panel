<?php
$dbservername = "localhost";
$dbUsername = "gecp";
$dbPassword = "gecp123";
$dbName = "gecp_db";

$conn = mysqli_connect($dbservername, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
