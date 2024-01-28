<?php
$servername = "localhost";
$username = "root";
$password = "P@ssw0rd";
$database = "school";
$port = 3306;

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database,$port);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>