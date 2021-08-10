<?php
// used to connect to the database
$host = "localhost";
$db_name = "category";
$username = "root";
$password = "root";
$link = mysqli_connect($host,$db_name, $username, $password);
try {
    $con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
}
 
catch(PDOException $exception){
    echo "Connection error: " . $exception->getMessage();
}

?>