<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DB</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    
<?php 
$servername = "localhost";
$username = "root";
$password = "";

$crop = $_POST["crop"]; 
$price= $_POST["price"];
//$Gal = $_POST["Gallons Used"];
$zip = $_POST["zipcode"];
$sql = "CREATE DATABASE userinfo";
//CREATE Connection
$conn = new mysqli($servername, $username, $password);

//CHECK Connection
if($conn -> connect_error)
{
    die("Connection Failed: " . $conn -> connect_error);
}

Echo "Connected Sucessfully:";

//CREATE Database

/*
if($conn -> query($sql) === TRUE)
{
    echo "Database Created Sucessfully";
}
else
{
    echo "Error Creating Database: " .$conn -> error;
}

//CREATE Table
$sql = "CREATE TABLE MyGuests (
     
    Crop VARCHAR(30) NOT NULL,
    price VARCHAR(30) NOT NULL,
   Gallons Used VARCHAR(50),
    Zipcode VARCHAR(5) NOT NULL)";
  */  



//Insertion into Database
$sqlinsert = "INSERT INTO myguests (crop, price, zipcode) VALUES ('$crop','$price','$zip')";
$sqlfetch = "SELECT * FROM myguests ";

$insert = mysqli_query($conn , $sqlinsert);
$fetch = mysqli_query($conn,$sqlfetch);


$conn -> close();
?>


</body>
</html>
