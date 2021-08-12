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
                    <a href="#">Home</a>
                    <a href="#">About Us</a>
                    <a href="#">Sports Blog</a>
                    <a href="#">Contact Us</a>
                </nav>
            </div>
        </header>
        <div class="banner-area">
            <h2>Add Products..</h2>
        </div>
        <form action="index.php"  onsubmit="return validateform()" method="POST">
            <div class="form-box">
                <h1>Product Name</h1>
                <div class="input-box">
                    <input type="text" name="Name" id="name" onblur="validatename()"  placeholder="Product name"><br>
                    <span id="err1"></span>
                </div>
                <br>
                <h1>Product Price</h1>
                <div class="input-box">
                    <input type="text" name="price" id="price" onblur="validatename()"  placeholder="Product price"><br>
                    <span id="err2"></span>
                </div>
                <br>
                <h1>Upload Image</h1>
                <div class="input-box">
                    <input type="file" name="myimg" id="myimg" onblur="validatename()"  placeholder="No File chosen"><br>
                    <span id="err3"></span>
                </div>
                <br>
                <h1>Select Category</h1>
                <div class="input-box">
                    <select id="categ" name="categ">
                        <option>Mobile</option>
                        <option>AutoMobile</option>
                    </select><br>
                    <span id="err4"></span>
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