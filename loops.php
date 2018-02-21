<!DOCTYPE html>
<html>
<head>
	<title>Merits</title>
</head>
<body>
	<p style="background-color: #FF6666;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	<br>
	<br>
	<br>
	<hr>
	<form method="GET">
		<input type="text" name="grade">
		<button>Submit</button>
	</form>
	<?php  
	$man=$_GET['grade'];
	echo $man;
	?>
	<?php


	$smith=18;
	echo $smith;
	echo "<br>";
	echo "Marlon is balling<br>";
	var_dump($smith);
	echo "<br>";
	if ($smith>20) {
		# code...
		echo "<h2>rich</h2>";
	} else {
		# code...
		echo "<h2>poor</h2>";

	}
	
	?>
	<?php
$samian=32;
if ($samian<30) {
	# code...
	echo "Kilimanjaro";
}
elseif ($samian<40) {
	# code...
	echo "CityStar";
}
else{
	# code...
	echo "get a chef";
}
	?>
	<form method="GET">
		<input type="number" name="grademe">
		<button>SUBMIT</button>

	</form>
	<?php
	if (isset($_GET['grademe'])) {
	 	# code...
	 	$grademe=$_GET['grademe'];
	 } 
	 if ($grademe>80) {
	 	# code...
	 	echo "You have an A";
	 } elseif ($grademe>=70) {
	 	# code...
	 	echo "You have an A-";
	 }
	 elseif ($grademe>60) {
	 	# code...
	 	echo "You have a B+";
	 }
	 elseif ($grademe>50) {
	 	# code...
	 	echo "You have a B-";
	 }
	 elseif ($grademe>40) {
	 	# code...
	 	echo "You have a C+";
	 }
elseif ($grademe>30) {
	# code...
	echo "You have a c-";
}
	?>
	<?php 

$james="pineapples";
switch ($james) {
	case 'pineapples':
		# code...
	echo "I Love pineapples";
		break;
	
	default:
		# code...
	echo "Not my type";
		break;
}
echo "<br>";
$bills=20;
$deadz=40;
$racks=$bills*$deadz;
echo $racks;
echo "<br>";
$bi=20;
$de=40;
$ra=$bi+$de;
echo $ra;
echo "<br>";
$bill=20;
$dead=40;
$rack=$bill-$dead;
echo $rack;
echo "<br>";
$bil=20;
$dea=40;
$rac=$bil/$dea;
echo $rac;
echo "<br>";
?>
<?php 
$ned=19;
	while ($ned <= 50) {
	# code...
	echo "The answer is $ned<br>";
	$ned++;
}

 ?>
 <?php
 $farts=array(" v8","bluebird","hummer","tx","mazda","fore","mustang","press","jaguar","subaru","markx","claren","whisk");
 echo "Fart job is selling".$farts[0].",".$farts[1]." and ".$farts[2].".";
 echo "<br>";
 sort($farts);
 $cars=count($farts);
for ($j=0; $j <$cars ; $j++) {
echo "$farts[$j]";
echo "<br>"; 
	# code...
}
  ?>
  <?php
  for ($i=0; $i < 20 ; $i++) { 
   	# code...
   	echo "Our value is $i<br>";
   } 


   ?>
   <?php 
	$total=43;
	while ($total <= 50) {
		# code...
		echo "$total<br>";
		$total++;
	}



    ?>



</body>
</html>