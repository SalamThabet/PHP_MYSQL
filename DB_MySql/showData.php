<?php 

$server = "localhost";
$username="root";
$password = "";
$db = "db3";

// Create connection
$conn = mysqli_connect($server, $username, $password,$db);
$sql_show = "select id, firstname, lastname FROM USER";
$result = mysqli_query($conn, $sql_show);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}


?>