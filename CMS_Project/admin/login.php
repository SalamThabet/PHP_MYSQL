<?php 
    
session_start();
require('../config/connection.php');
if(isset($_POST) and !empty($_POST)){
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $query = mysqli_query($conn,"SELECT * from users where email='$email' and password='$password'");

			if (mysqli_num_rows($query) >= 1) {
			//	$rs = mysqli_fetch_array($check);
                //echo "OKK";
				$_SESSION['email'] = $email;
				header("Location: index.php");
			}else{

                $errors = 'NOT MATCH';
				//	echo "error".mysqli_error($conn);
				}
}

?>
<html>
<head>
    <title>CMS - Login </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>
</head>
<body>
    <div class="container">
        <div class="row" >
            <div class="panel-heading " style="margin:auto; ">
              
                    <img src="../img/logo.jpg" width="300px" height="100px">
                
            </div>
            <form method="post" action="" class="main-login" style="margin:0 auto;margin-top:200px;">

                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" 
                           name="email"
                           id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" 
                           name="password" id="exampleInputPassword1" placeholder="Password">
                  </div>
                <?php if(isset($errors)){ ?> <div class="alert alert-danger" role="alert"><?php echo $errors; ?></div><?php } ?>

<!--
                  <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
-->
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
        </div>
    </div>
