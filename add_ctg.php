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



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iSportsInfo</title>
    <link rel="stylesheet" href="main1.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    
</head>
<body>
    <div class="box-area">
        <header>
            <div class="wrapper">
                <div class="logo">
                    <a href="#">iSportsInfo</a>
                </div>
                <nav>
                    <a href="index.php">Home</a>
                    <a href="#">About Us</a>
                    <a href="#">Sports Blog</a>
                    <a href="index_p.php">Products</a>
                    <a href="#">Contact Us</a>
                </nav>
            </div>
        </header>
        <div class="banner-area">
            <h2>Add Categories..</h2>
        </div>
        <form action="index.php"  onsubmit="return validateform()" method="POST">
            <div class="form-box">
                <h1>Category Name</h1>
                <div class="input-box">
                    <input type="text" name="Name" id="name" onblur="validatename()"  placeholder="Category name"><br>
                    <span id="err1"></span>
                </div>
                <br><hr>
    
                <button type="submit" class="save-btn">Save</button>
    
            </div>
        </form>
        
        
        <footer>
            <div class="cpy">
                <p>Created By @iSportsInfo |  ©2021 All Rights Reserved. | Follow on 
                <a href="#"><span class="fab fa-facebook-f"></span></a>
                <a href="#"><span class="fab fa-twitter"></span></a>
                <a href="#"><span class="fab fa-instagram"></span></a>
                <a href="#"><span class="fab fa-youtube"></span></a>
                </p>
            </div>
        </footer>
    </div>

    <script src="validate.js"></script>
</body>
</html>