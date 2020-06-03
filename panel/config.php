<?php
$servername = "localhost";
$username = "gagandeep95";
$password = "159753";
$db       = "cda_copy";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>

