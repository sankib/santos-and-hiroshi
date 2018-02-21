<!DOCTYPE html>
<html>
<head>
	<title>SignUp</title>
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
<body>
		
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
	<div class="container-fluid" >
	<div class="well well-lg"> 

		<form class="form-horizontal" method="POST" style="text-align: center;">
			<div class="form-group">
				<label for="First Name">First Name:</label>
				<input type="First Name" required="">
				<label for="Last Name">Last Name:</label>
				<input type="Last Name" required="">
				<label for="Middle Name">Middle Name:</label>
				<input type="Middle Name">
			</div>
		</form>
	


				<form style="text-align: center;">
				D.O.B: 
				<label for="Month">Month:</label>

				<select>
				  
			      <option>Jan</option>
			      <option>Feb</option>
			      <option>Mar</option>
			      <option>Apr</option>
			      <option>May</option>
			      <option>Jun</option>
			      <option>Jul</option>
			      <option>Aug</option>
			      <option>Sep</option>
			      <option>Oct</option>
			      <option>Nov</option>
			      <option>Dec</option>
			    </select>
			    <label for="Day">Day:</label>
			    <input type="Number" name="Day" required="">
			    <select>
			    	

			    </select>
			    <label for="Year">Year:</label>
			    <input type="Number" name="Year">
			    <select>
			    	

			    </select>



			    


				</form>
		
			<br>
			<br>
		<div style="text-align: center;">
		
			        <li>Male<input type="radio" name=""></li>
			        <li>Female<input type="radio" name=""></li>
			        <li>Other/Choose not to state<input type="radio" name=""></li>
			     
	
			      <br>
			      <br>
			      <form>
			      	<label for="Phone Number">Phone Number:</label>
			      	<select>
			      	   <option>+254</option>
				      <option>+44</option>
				      <option>+231</option>
				      <option>+35</option>
				      <option>+90</option>
				      <option>+65</option>
				    </select>
			      
			      <input type="Number" name="Phone Number">
			      </form>
			      <br>
			      <br>
			      <form>
			      <label for="Email">Email:</label>
			      <input type="text" name="Email" >
			      </form>
			      <br>
			      <br>
			      <form method="GET">
			      <label for="Password">Password:</label>
			      <input type="Password" name="Password" required="">
			      </form>

			       <br>
			      <br>
			      <form  action="style.php">
			      <label for="Confirm Password">Confirm Password:</label>
			      <input type="Password" name="ConfirmPassword" required="">
			       
			         	<br>
			         	<br>
			      <a href="grades.php">SUBMIT</a>
			      </form>
			      <?php  
			      	if ($_POST["Password"] === $_POST["ConfirmPassword"]) {
					   // success!
			      		echo "dab";
					}
					else {
					   // failed :(
						echo "sorry";
					}
				?>
		</div>






</div>
</div>

</body>
</html>