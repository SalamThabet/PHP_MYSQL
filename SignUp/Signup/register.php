<?php 
	include('header.php');
?>


<fieldset><legend>Sign up to get access</legend>
	
	<form action="" method="POST">
		
		<table width="100%" cellpadding="0" cellspacing="0">
			<tr>
				<td width="30%">Name</td>
				<td width="70%">
					<input type="text" name="fname">
				</td>
			</tr>
			<tr>
				<td width="30%">Email</td>
				<td width="70%">
					<input type="email" name="email" >
				</td>
			</tr>
			<tr>
				<td width="30%">password</td>
				<td width="70%">
					<input type="password" name="password">
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
	include('footer.php');

?>