<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
		<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
  	form{
  		text-align: center;
  	}
  </style>
</head>
<body style="background-image: url(nkt.jpeg); background-size: 100%; background-repeat: no-repeat;">		
	<nav class="navbar navbar-default">
		  		<div class="container-fluid">
		    		<div class="navbar-header">
		      			<a class="navbar-brand" href="aboutus.php"><span>SKY ACADEMY</span></a>
		    		</div>
		    			<ul class="nav navbar-nav">
		      				<li class="active"><a href="cat.php">Home</a></li>
		      				<li><a href="grades.php">GetResults</a></li>
		    			</ul>
		        <ul class="nav navbar-nav navbar-right">
		       		<li><a href="sgnup.php"><span class="glyphicon glyphicon-user"></span> SignUp</a></li>
		      		<li><a href="lgin.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
		    	</ul>
		  </div>
		</nav>
		  </div>
		</nav>
		<form style="text-align: center;">
		<h1>Log In</h1>
		<br>
		<br>
		Email:
		<br>
		<input type="Email" name="Email" required="">
		<br>
		<br>
		Password:<br>
		<input type="Password" name="Password" >
		<br>
		<br>
		Confirm Password:
		<br>
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

	<a href="grades.php"><button>LOGIN</button></a>

		



	</form>

</body>
</html>