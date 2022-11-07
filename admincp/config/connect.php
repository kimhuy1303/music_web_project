<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Kết nối lỗi " . $conn->connect_error);
}
echo "Connected successfully";
?>