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
/*echo $_SERVER['REQUEST_METHOD'];
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $Name = $_POST["Name"];

    $sql = "INSERT INTO `category` (`Name`) VALUES (`$Name`)";
    $result = mysqli_query($conn, $sql);
    

    if ($result){
        echo "The record has been inserted successfully...<br>";
    }
    else{
        echo "The record was not inserted successfully because of this error -->". mysqli_error($conn);
    }
    

}*/

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
            <h2>Add Categories..</h2>
        </div>
        <form action="index.php" method="POST">
            <div class="form-box">
                <h1>Category Name</h1>
                <div class="input-box">
                    <input type="text" name="Name" placeholder="Category name">
                </div>
                <br><hr>
    
                <button type="submit" class="save-btn">Save</button>
    
            </div>
        </form>
        
        <!--
        <footer>
            <div class="main-content">>
                <div class="left box">
                    <h2>About Us</h2>
                    <div class="content">
                        <p>This is the place where you will get all the info. related to sports.</p>
                        <div class="social">
                            <a href="#"><span class="fab fa-facebook-f"></span></a>
                            <a href="#"><span class="fab fa-twitter"></span></a>
                            <a href="#"><span class="fab fa-instagram"></span></a>
                            <a href="#"><span class="fab fa-youtube"></span></a>
                        </div>
                    </div>
                </div>

                <div class="center box">
                    <h2>Contact Info</h2>
                    <div class="content">
                        <div class="place">
                            <span class="fas fa-map-marker-alt"></span>
                            <span class="text">Surat, Gujarat, India.</span>
                        </div>
                        <div class="phone">
                            <span class="fas fa-phone-alt"></span>
                            <span class="text">+91-9999999999</span>
                        </div>
                        <div class="email">
                            <span class="fas fa-envelope"></span>
                            <span class="text">abc@isportsinfo.com</span>
                        </div>
                    </div>
                </div>

                <div class="right box">
                    <h2>Reach US</h2>
                    <div class="content">
                        <form action="#">
                            <div class="email">
                                <div class="text">Email *</div>
                                <input type="email" required>
                            </div>
                            <div class="msg">
                                <div class="text">
                                    Message *
                                </div>
                                <textarea name="name" rows="2" cols="20" required></textarea>
                            </div>
                            <div class="btn">
                                <button type="submit">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="cpy">
                <p>Created By @iSportsInfo |  ©2021 All Rights Reserved.</p>
            </div>
        </footer>-->
    </div>
</body>
</html>