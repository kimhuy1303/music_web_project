<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "musicweb";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Kết nối lỗi " . $conn->connect_error);
}
// echo "Connected successfully";
?>