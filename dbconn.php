<?php
session_start();
$dbservername = "localhost:3308";
$dbusername = "root";
$dbpassword = "";
// Create connection
$conn = mysqli_connect($dbservername, $dbusername, $dbpassword);
// Check connection
if (!$conn) {
    echo "Connected unsuccessfully";
    die("Connection failed: " . mysqli_connect_error());
}
?>
