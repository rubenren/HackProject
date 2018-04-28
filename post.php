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

$crop = $_POST["Crop"]; 
$sQfeet= $_POST["Sfeet"];
$Gal = $_POST["Gallons Used"];
$Zip = $_POST["Zipcode"];
$sql = "CREATE DATABASE UserInfo";
//CREATE Connection
$conn = new mysqli($servername, $username, $password);

//CHECK Connection
if($conn -> connect_error)
{
    die("Connection Failed: " . $conn -> connect_error);
}

Echo "Connected Sucessfully:";

//CREATE Database


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
    Sfeet VARCHAR(30) NOT NULL,
    Gallons Used VARCHAR(50),
    Zipcode VARCHAR(5) NOT NULL)";
    



//Insertion into Database
$sqlinsert = "INSERT INTO myGuests (Crop, Sfeet, Gallons Used, Zipcode) VALUES ('$crop','$sQfeet','$Gal','$Zip')";


$insert = mysqli_query($conn , $sqlinsert);



$conn -> close();
?>


</body>
</html>>
