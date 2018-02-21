<!DOCTYPE html>
<html>
<head>
	<title>Input Your marks</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-image: url(skl.jpg); background-size: 100%; background-repeat: no-repeat;">
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
	<h3><B>Input your marks:</B></h3>
	<form class="form-group" style="text-align: center;" method="GET">
		<br>
		MATHS:
		<br>
		<input type="number" name="m">
		<br>
		ENGLISH:
		<br>
		<input type="number" name="e">
		<br>
		KISWAHILI:
		<br>
		<input type="number" name="k">
		<br>
		BIOLOGY:
		<br>
		<input type="number" name="b">
		<br>
		CHEMISTRY:
		<br>
		<input type="number" name="c">
		<br>
		PHYSICS:
		<br>
		<input type="number" name="p">
		<br>
		HUMANITY:
		<br>
		<input type="number" name="h">
		<br>
		TECHNICAL:
		<br>
		<input type="number" name="t">
		<br>
		<br>
		<button style="text-align: center;" class="btn btn-success">SUBMIT</button>
		<br>
		<?php
	
		$result=($_GET['m']+$_GET['e']+$_GET['k']+$_GET['c']+$_GET['p']+$_GET['b']+$_GET['t']+$_GET['h']);

		$grade=$result/8;
		echo "$grade";




	if (isset($_GET['grade'])) {
	 	# code...
	 	$grade=$_GET['grade'];
	 } 
	 if ($grade>80) {
	 	# code...
	 	echo "You have an A";
	 } elseif ($grade>=70) {
	 	# code...
	 	echo "You have an A-";
	 }
	 elseif ($grade>60) {
	 	# code...
	 	echo "You have a B+";
	 }
	 elseif ($grade>50) {
	 	# code...
	 	echo "You have a B";
	 }
	 elseif ($grade>40) {
	 	# code...
	 	echo "You have a B-";
	 }
	elseif ($grade>30) {
	# code...
	echo "You have a C+";
	}
	?>

		    
	</form>


		
	


</body>
</html>