<!DOCTYPE <!DOCTYPE html>
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

//CREATE Connection
$conn = new mysqli($servername, $username, $password);

//CHECK Connection
if($conn -> connect_error)
{
    die("Connection Failed: " . $conn -> connect_error);
}

Echo "Connected Sucessfully:";

//CREATE Database
$sql = "CREATE DATABASE UserInfo";
if($conn -> query($sql) === TRUE)
{
    echo "Database Created Sucessfully";
}
else
{
    echo "Error Creating Database: " .$conn -> error;
}

$conn -> close();
?>


</body>
</html>>
