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
$row = mysqli_fetch_assoc($result);
/*
if(isset($_POST['Name'])){
    $name = $_POST['Name'];
    $sql = "UPDATE `category` SET  `Name` = '$name' WHERE `category`.`srno` = '$id'";
    $result = mysqli_query($conn, $sql);
}*/

?>
<?/*php header("Location: index.php")*/?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iSportsInfo</title>
    <link rel="stylesheet" href="main2_p.css">
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
            <h2>Update Products...</h2>
        </div>
        <?php
        echo '<form  action="edit_p.php?id=" onsubmit="return validateform()" method="POST">';
            echo '<div class="form-box">';
                echo '<h1>Sr.No.</h1>';
                echo '<div class="input-box">';
                    echo '<input type="number" name="srn" value="'.$id.'" id="srn"  ><br>';
                    
                echo '</div>';
                echo '<h1>Product Name</h1>';
                echo '<div class="input-box">';
                    echo '<input type="text" name="Name" value="'.$row['pName'].'" id="name"   placeholder="Category name"><br>';
                    echo '<span id="err1"></span>';
                echo '</div>';
                
                
                echo '<br>';
                echo '<h1>Product Price</h1>
                <div class="input-box">
                    <input type="text" name="price" id="price" value="'.$row['pPrice'].'" onblur="validatename()"  placeholder="Product price"><br>
                    <span id="err2"></span>
                </div>
                <br>
                <h1>Upload Image</h1>
                <div class="input-box">
                    <input type="file" name="myimg" id="myimg" value="'.$row['pimg'].'" onblur="validatename()"  placeholder="No File chosen"><br>
                    <span id="err3"></span>
                </div>
                <br>
                <h1>Select Category</h1>
                <div class="input-box">
                    <select id="categ" name="categ" value="'.$row['pCategory'].'">
                        <option>Mobile</option>
                        <option>AutoMobile</option>
                    </select><br>
                    <span id="err4"></span>
                </div>
                <br><hr>';
                ?>
                <button type="submit" name="submit" class="save-btn">Update</button>
    
            <?php
            echo '</div>';
        echo '</form>';
        ?>

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

    <script src="validate_p.js"></script>
</body>
</html>

