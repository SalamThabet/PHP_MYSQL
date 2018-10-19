<?php 


session_start();
echo "User id is : ".$_SESSION['member_id'] ;
?>

<a href="logout.php">Logout</a>