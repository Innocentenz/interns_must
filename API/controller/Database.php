<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "must_interns";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
// $conn = mysqli_connect('localhost','root','','must_interns');
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
?>
