<?php
//INSERT INTO `category` (`s.no.`, `Name`) VALUES ('1', 'Cricket');
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
$sql = "SELECT * FROM `product` WHERE `product`.`srno` = '$id'" ;
$result = mysqli_query($conn, $sql);
$prod = mysqli_fetch_assoc($result);

?>
