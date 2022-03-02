<?php


$servername = "localhost";
$username = "root";
$password = "root";
$database = "Spa";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("login failed: " . $conn->connect_error);
}
//echo "login successfully";
?>
