<!DOCTYPE html>
<html>
<head>
	<title>class revision scala</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>
<body>
		<h1>REVISION</h1>
		<div class="container-fluid">
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum
	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum..</p>
		</div>
		<div class="jumbotron">
		<?php 
		$sam=25;
		$frank=18;
		$answer=$sam*$frank;
		echo $answer;

		 ?>
		 <br>
		 <h3>Constants</h3>
		 <?php 
		 	define("migos","bablas",true);
		 	echo migos;
		 	echo "<br>";

		  ?>
		  <?php 
		  $date=22;
		  if ($date!==30) {
		  	# code...
		  	echo "today is not 22";
		  } else {
		  	# code...
		  	echo "today is 22";
		  }
		  
		   ?>
		   <form method="GET">
		   	number one:<br><input type="number" name="numberone"><br>
		   	number two:<br><input type="number" name="numbertwo"><br><br>
		   	<button type="submit" class="btn btn-success">submit</button>
		   	<button type="reset" class="btn btn-danger">reset</button>
		   	<?php
			   		$ded=$_GET['numberone'] ;
			   		$de=$_GET['numbertwo'];
			   		$beast=$ded/$de;
			   		echo $beast;

		   	 ?>


		   </form>
		   <br>
		   <h4>Else if conditional statement</h4>
		   <?php 
		   $niki=32;
		   $ona=44;
		   if ($ona>=50 && $niki<=40) {
		   	# code...
		   	echo "free";
		   } elseif ($ona>=50 || $niki<=40) {
		   	# code...
		   	echo "marry but";
		   } elseif ($ona>=50 xor $niki<=40) {
		   	# code...
		   	echo "go on";
		   } else{
		   	# code...
		   	echo "not happening";
		   }
		   


		    ?>
		    <br>
		    <h3>form valiation</h3>
		    <form method="GET">
		    	<input type="text" name="username">
		    	<input type="password" name="password">
		    	<input type="password" name="confirmpassword">
		    	<button class="btn btn-success">SUBMIT</button>
		    	<?php 
		    	$kiri=$_GET['username'];
		    	$bari=$_GET['password'];
		    	$sere=$_GET['confirm6password'];
		    	if ($bari===$sere) {
		    		# code...
		    		echo "";
		    	} else {
		    		# code...
		    		echo "try again";
		    	}
		    	



		    	 ?>
		  			
		    </form>


		</div>
</body>
</html>