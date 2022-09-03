<?php
$servername = "localhost";
$username = "newuse";
$password = "gaurav";

// Create connection
$conn = mysqli_connect($servername, $username, $password,"socialmediapay");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
?>