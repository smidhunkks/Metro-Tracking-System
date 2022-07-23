<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "metroadmin";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if ($data==false) {
  die("connection error");
}

?>