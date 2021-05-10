<?php
$dbhost = "localhost";
$dbUser = "root";
$dbPass = "sreshtha";
$dbName = "project";

// connection to database.
$conn = mysqli_connect($dbhost,$dbUser,$dbPass,$dbName);

if(!$conn){
    die("Database connection failed !");
}
    
?>