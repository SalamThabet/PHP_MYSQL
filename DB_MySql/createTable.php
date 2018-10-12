<?php 


$server = "localhost";
$username="root";
$password = "";
$db = "db3";

// Create connection
$conn = mysqli_connect($server, $username, $password,$db);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql_table = "CREATE TABLE USER (
id INT AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50))";

mysqli_query($conn,$sql_table);

// if(mysqli_query($conn,$sql_table)){
// 	 echo "DONE";
// }else {
//     echo "Error creating Table: " . mysqli_error($conn);
// }

?>