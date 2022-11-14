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
function validation($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data; 
}
// echo "Connected successfully";
?>