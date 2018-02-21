
<!DOCTYPE html>
<html>
<head>
	<title>merits</title>
</head>
<body>
	<p style="text-align: center;background-color: 
	#c2d6d6">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<br>
<br>
<form method="GET">
	<input type="text" name="grade">
	<button>submit</button>
	


</form>
<?php
$man=$_GET['grade'];
echo $man;
?>


<?php 


 $stella=18;
echo $stella;
echo "<br>";
echo "stella is a good girl";
echo "<br>";
var_dump($stella);
echo "<br>";
if ($stella>20) {
	# code...
	echo "<h3>grow up</h3>";
} else {
	# code...
	echo "<h3>welcome to life</h3>";
}


?>
<?php 
$hiroshi=12;
if ($hiroshi<30) {
	# code...
	echo "surfs up";
} elseif ($hiroshi<40) {
	# code...
	echo "java";
} else{
	# code...
	echo "nairobi cinema";
}




 ?>
 <form>
 	<input type="number" name="grademe">
 	<button>get results</button>

 </form>
 <?php 
 if (isset($_GET['grademe'])) {
 	# code...
 	$grademe=$_GET['grademe'];
 } 
 if ($grademe>80) {
 	# code...
 	echo "you have an A";
 } elseif ($grademe>70) {
 	# code..
 	echo "you have a B+";
 } elseif ($grademe>60) {
 	# code...
 	echo "you have a B-";
 } elseif ($grademe>50) {
 	# code...
 	echo "you have a C+";
 }	elseif ($grademe>40) {
 	# code...
 	echo "you have a C";
 }	elseif ($grademe>30) {
 	# code...
 	echo "you have a C-";
 }	elseif ($grademe>20) {
 	# code...
 	echo "you have a D+";
 }
 echo "<br>";

  ?>

  <?php 
  $james="apples";
  switch ($james) {
  	case 'apples':
  		# code...
  	echo "i love apples";
  		break;
  	
  	default:
  		# code...
  	echo "not my type";
  		break;
  }
echo "<br>";
   ?>
   <?php 
     $Fin=20;
	 $sam=40;
	 $marlon=$Fin*$sam;echo $marlon;
	 
	 echo "<br>";
	 $Fin=20;
	 $sam=40;
	 $marlon=$Fin+$sam;echo $marlon;
	 
	 echo "<br>";

	 $Fin=20;
	 $sam=40;
	 $marlon=$Fin/$sam;echo $marlon;
	 
	 echo "<br>";

	 $Fin=20;
	 $sam=40;
	 $marlon=$Fin-$sam;echo $marlon;
	 
	 echo "<br>";







    ?>
</body>
</html>
