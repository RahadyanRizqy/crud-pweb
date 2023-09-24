<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $username);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
