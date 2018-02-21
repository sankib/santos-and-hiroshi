<!DOCTYPE html>
<html>
<head>
	<title>Tuesday</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>
<body>
	<div class="container-fluid">
		<div class="jumbotron">
			<h1>User Defined</h1>
			<p>What is a funtion?
				<q>This refers to a block of statements that can be used respectively in a program code but will not be executed unless called</q></p>
			<?php 
			function kelly(){
				echo "My name is Kelly";
			}
			kelly();


			?>
			

		</div>
		<div class="well well-1g">
			<h3>Using arguements in user defined fuctions</h3>
			<p>Arguements are more like variables only that they are specified after a function name and within a parenthesis</p>
			<?php
			function frank($ray,$bra){
				echo $ray*$bra;
			} 
			frank(30,22);



			 ?>
			

		</div>
		<div class="well well-1g">
			<h3>Defaults Arguments</h3>
			<?php 
			function migos($isaac=39){
				echo "My name is Isaac and i am " .$isaac;
				 
			}
			migos()

			 ?>
			 <h4>Test Return</h4>
			 <?php
			 function allela($dom,$sam,$dog){
			 	$red=$dom/$sam*$dog;
			 	echo $red;
			 }

			  allela(52,54,20)


			 ?>
			
		</div>
		<div class="well well-1g">
			<h1>The Return</h1>
			<?php
			function joker($la,$ma,$ja){
				$answer=$la-$ma+$ja;
				return $answer;
			} 
			echo joker(12,25,44);
			function jam($fire,$dark){
				$josh=$fire/$dark;
				return $josh;
			}
			echo jam(25,42);




			 ?>
			

		</div>
	</div>

</body>
</html>