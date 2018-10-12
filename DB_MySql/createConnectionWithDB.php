<?php 

$server = "localhost";
$username="root";
$password = "";

// Create connection
$conn = mysqli_connect($server, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>