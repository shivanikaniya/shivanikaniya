<?php
$host = "localhost";
$username = "root";
$password = "Yes";
$db_name = "category";
$conn = mysqli_connect($host, $username, $password, $db_name);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>