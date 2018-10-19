<?php 
include("header.php");
include("includes/db.php");
$errors='';
$Success='';


if (isset($_REQUEST['submit'])) {
		$name = $_REQUEST['fname'];
		$email = $_REQUEST['email'];
		$password = $_REQUEST['password'];

		if (empty($name)) {
			$errors .= 'Please Fill Your Name <br>';
		}
		if (empty($email)) {
			$errors .= 'Please Fill Your email <br>';
		} 
		if (empty($password)) {
			$errors .= 'Please Fill Your password <br>';
		}

		if (!empty($name) and !empty($email) and !empty($password)) {

			$query_ = "SELECT * from member where email='$email'";

			$check = mysqli_query($connection,$query_);

			// if (!filter_var($email,FILTER_VALIDATE_EMAIL)) 
				if(mysqli_num_rows($check) >= 1){
				$errors .= 'Please Enter different email';
			}else{


			$query = "INSERT INTO member SET id='',
				name='$name',
				email='$email',
				password='$password'	,

				date=NOW()
					";

					if (mysqli_query($connection,$query )) {
						$Success = 'Successfully created';
					}

					
				}
		}
	}
?>
<fieldset><legend>Sign up to get access</legend>
	<?php  
	echo $errors; 
	echo $Success;
	?>
	<form action="" method="POST">
		
		<table width="100%" cellpadding="0" cellspacing="0">
			<tr>
				<td width="30%">Name</td>
				<td width="70%">
					<input type="text" name="fname" value="<?=((isset($name))?$name:'')?>">
				</td>
			</tr>
			<tr>
				<td width="30%">Email</td>
				<td width="70%">
					<input type="email" name="email" value="<?=((isset($email))?$email:'')?>">
				</td>
			</tr>
			<tr>
				<td width="30%">password</td>
				<td width="70%">
					<input type="password" name="password" value="<?=((isset($password))?$password:'')?>">
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" name="submit" value="SignUp">
				</td>
			</tr>
			
		</table>

	</form>

</fieldset>
<?php
include("footer.php");
?>
