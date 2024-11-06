<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dodge";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("error " . mysqli_connect_error());
} else {
  header("Location:beranda.php");
  exit();
}
?>