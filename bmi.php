<!DOCTYPE html>
<html>
<head>
	<title>BMI</title>
</head>
<body>
	<form style="text-align: center;">
		<label>Height</label>
		<input type="number" name="Height">
		<br>
		<br>
		<label>Weight</label>
		<input type="number" name="Weight">
		<br>
		<br>
		<button>Get Results</button>
		<br>
		<br>
		<?php 
		$result=$_GET['Height']/$_GET['Weight'];
		echo $result;
		echo "<br>";
	    if ($result>=80) {
	    	# code...
	    	echo "Obese";
	    } elseif (80>$result) {
	    	# code...
	    	echo "Good Condition";
	    } {
	    	# code...
	    }
	    
	    ?>
	    <br>
	    <br>




	</form>

</body>
</html>