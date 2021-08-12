<?php

$insert = false;

$servername = "localhost";
$username = "root";
$password = "";
$database = "crud";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$id = $_GET['id'];

$sql = "DELETE FROM `product` WHERE `product`.`srno` = '$id'";
$result = mysqli_query($conn, $sql);

?>

<?php header("Location: index.php")?>