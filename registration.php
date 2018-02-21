<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">

</head>
<body style="background-image: url(skl.jpeg); background-size: 100%; background-repeat: no-repeat;">

	<h1 style="text-align: center;">REGISTRATION</h1>
<div class="container-fluid" >
	<div class="well well-lg"> 

		<form class="form-horizontal" method="POST" style="text-align: center;">
			<div class="form-group">
				<label for="First Name">First Name:</label>
				<input type="First Name">
				<label for="Last Name">Last Name:</label>
				<input type="Last Name">
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
			    <input type="Number" name="Day">
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
			      <input type="Password" name="Password" >
			      </form>

			       <br>
			      <br>
			      <form  action="style.php">
			      <label for="Confirm Password">Confirm Password:</label>
			      <input type="Password" name="Confirm Password">
			         <button class="btn-danger" type="re set">RESET</button>
			         	<br>
			         	<br>
			      <button class="btn-success">SUBMIT</button>
			      </form>
			      <?php  
			      	if ($_POST["Password"] === $_POST["Confirm Password"]) {
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