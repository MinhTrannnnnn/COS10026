<?php
// Database connection settings
$host = "localhost";     // XAMPP runs the server locally
$user = "root";          // Default username for XAMPP's MySQL
$pwd = "";               // Default password is empty in XAMPP
$sql_db = "exhibition_db"; // Replace with your actual database name

// Create connection
$conn = mysqli_connect($host, $user, $pwd, $sql_db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>