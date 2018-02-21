<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container-fluid">
		<div class="jumbotron">
			<?php 
				for ($i=1; $i <=7 ; $i++) { 
					for ($j=1; $j <=$i ; $j++) { 
						echo "*";
						if ($j<$i) {
							echo "-";
							# code...
						}
						# code...
						echo "<br>";
					}
					# code...
				}
				echo "<br/>"

			 ?>
		</div>
	</div>

</body>
</html>