<?php 
include("header.php");
include("includes/db.php");
session_start();
$errors='';
$Success='';
if (isset($_REQUEST['login'])) {
		$email = $_REQUEST['email'];
		$password = $_REQUEST['password'];


		if (empty($email)) {
			$errors .= 'Please Fill Your email <br>';
		} 
		if (empty($password)) {
			$errors .= 'Please Fill Your password <br>';
		}

		if (!empty($email) and !empty($password)) {
			$check = mysqli_query($connection,"SELECT * from member where email='$email' and password='$password'");

			if (mysqli_num_rows($check) >= 1) {
				$rs = mysqli_fetch_array($check);
				$_SESSION['member_id'] = $rs['id'];
				header("Location: index.php");
			}else{

$errors .= 'NOT MATCH';
			

					

					
				}
		}
	}
?>
<fieldset><legend>LOGIN to get access</legend>
	<?php  
	echo $errors; 
	echo $Success;
	?>
	<form action="" method="POST">
		
		<table width="100%" cellpadding="0" cellspacing="0">
			
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
					<input type="submit" name="login" value="login">
				</td>
			</tr>
			
		</table>

	</form>

</fieldset>
<?php
include("footer.php");
?>
