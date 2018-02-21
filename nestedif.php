<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php  
for ($i=1; $i <= 7; $i++) { 
	# code...
	for ($j=1; $j <=$i ; $j++) { 
		# code...
		echo ".";
		if ($j<$i) {
			# code...
			echo "*";
		}
	}
	echo "<br>";
}
?>

</body>
</html>