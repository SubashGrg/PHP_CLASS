<?php
// Database connection file

$server = "localhost";
$username = "root";
$password = "";
$database = "testdb"; // Make sure you create this database

// Create connection
$conn = mysqli_connect($server, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
