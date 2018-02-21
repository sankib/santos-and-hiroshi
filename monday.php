<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>
<body>

	<form style="text-align: center;">
		<h1>Log In</h1>
		<br>
		<br>
		<label>Email</label>
		<input type="Email" name="Email" required="">
		<br>
		<br>
		<label>Password</label>
		<input type="Password" name="Password" >
		<br>
		<br>
		<label>Confirm Password</label>
		<input type="Password" name="ConfirmPassword" required="">
		<br>
		<br>
		

		    <?php  
			      	if ($_GET['Password'] === $_GET['ConfirmPassword']) {
					   // success!
			      		echo "Welcome";
					}
					else {
					   // failed :(
						echo "Your password is incorrect.";
					}
				?>
				<br>
				<br>

		<button class="btn btn-success">LogIn</button>		

		



	</form>

</body>
</html>