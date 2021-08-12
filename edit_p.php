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
$pName = $_POST['Name'];
$price = $_POST['price'];
$myimg = $_POST['myimg'];
$categ = $_POST['categ'];
    

$sql = "UPDATE `product` SET `pName` = '$pName', `pPrice` = '$price', `pimg` = '$myimg', `pCategory` = '$categ' WHERE `product`.`srno` = '$srn'";
$result = mysqli_query($conn, $sql);



    header("Location: index_p.php")

?>