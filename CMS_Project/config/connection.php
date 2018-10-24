<?php 
$conn = mysqli_connect("localhost","root","","cms");
if(!$conn){
    echo "Error".mysqli_connent_error();
}

?>