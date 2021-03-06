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


if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $Name = $_POST["Name"];

    $sql = "INSERT INTO `category` (`Name`) VALUES ('$Name')";
    $result = mysqli_query($conn, $sql);
    

    if($result){
        echo "The record has been inserted successfully...<br>";
        //$insert = true;
    }
    else{
        echo "The record was not inserted successfully because of this error -->". mysqli_error($conn);
    }
    

}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
     
    
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">  
    <script src="jquery-3.6.0.min.js"></script>  
    <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    

    <script>
        $(document).ready( function () {
        $('#myTable').DataTable();
        } );
    </script>

   

    <title>iSportsInfo</title>
    <link rel="stylesheet" href="main.css">
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
            <h2>Manage Categories..</h2>
        </div>

       

        <!--Applying CRUD-->
        <div class="container my-4" >

            <div id="crctg">
                <a href="add_ctg.php"><button class='add btn btn-sm btn-primary'>Create Category</button></a>
            </div>
    
    
            <table class="table" id="myTable">
                <thead>
                    <tr>
                        <th scope="col">srno</th>
                        <th scope="col">Name</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `category`";
                    $result = mysqli_query($conn, $sql);
                    $srno = 0;
                    while($row = mysqli_fetch_assoc($result)){
                        $srno = $srno + 1;
                        echo "<tr>
                        <th scope='row'>". $srno ."</th>
                        <td>". $row['Name'] ."</td>
                        <td> <a href='update.php?id=" . $row['srno'] . " '><button class='edit btn btn-sm btn-primary'>Edit</button></a> 
                        <a href='delete.php?id=" . $row['srno'] . " '><button class='delete btn btn-sm btn-primary'>Delete</button></a> </td>
                        
                    </tr>";
                       
                    }
                    
                    ?>
                    
                   
                </tbody>
            </table>



        </div>
        


        
        <footer>
            <div class="cpy">
                <p>Created By @iSportsInfo |  ??2021 All Rights Reserved. | Follow on 
                <a href="#"><span class="fab fa-facebook-f"></span></a>
                <a href="#"><span class="fab fa-twitter"></span></a>
                <a href="#"><span class="fab fa-instagram"></span></a>
                <a href="#"><span class="fab fa-youtube"></span></a>
                </p>
            </div>
        </footer>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>

    
</body>

</html>