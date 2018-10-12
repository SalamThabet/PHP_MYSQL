<?php 
// لمعرفة اصدار البي اتش بي 
echo 'Current PHP version: ' . phpversion()."<br>";


$server = "localhost";
$username="root";
$password = "";

// Create connection
$conn = mysqli_connect($server, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "CREATE DATABASE if not exists db3";
	
if(mysqli_query($conn,$sql)){
echo "OK";
}else {
    echo "Error creating database: " . mysqli_error($conn);
}

?>