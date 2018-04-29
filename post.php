<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DB</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="./Weather Data_files/material.min.js.download"></script>
        <link rel="stylesheet" href="./Weather Data_files/material.indigo-pink.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js">
    
    

    </script>
</head>
<body>
   <div class="centered"> 
<?php 
$servername = "localhost";
$username = "root";
$password = "";
//$dbname = "userinfo";
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
$sqlinsert = "INSERT INTO myguest (crop, price, zipcode) VALUES ('$crop',$price,$zip)";
$sqlfetch = "SELECT * FROM `userinfo`.`myguest` ";

$insert = mysqli_query($conn , $sqlinsert);
$fetch = mysqli_query($conn,$sqlfetch);


echo"<table border='1'";
echo"<tr><td>Crop</td><td>Price</td><td>zip</td></tr>";
 
while($row = mysqli_fetch_assoc($fetch)){
    
   
   echo"<tr>
	<td>{$row['crop']}</td>
	<td>{$row['price']}</td>
	<td>{$row['zip']}</td>
	</tr>";
}


//mysqli_fetch($fetch,mysqli_fetch_assoc);

//mysqli_fetch_result($fetch);
$conn -> close();
?>
</div> 
</ul>
</body>
</html>
