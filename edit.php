<?php


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

$srn = $_POST['srn'];
$Name = $_POST['Name'];
    

$sql = "UPDATE `category` SET  `Name` = '$Name' WHERE `category`.`srno` = '$srn'";
$result = mysqli_query($conn, $sql);



    header("Location: index.php")

?>