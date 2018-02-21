<!DOCTYPE html>
<html>
<head>
	<title>Arrays</title>
	<style type="text/css">
			h1{color:#1C1C1C ; font-family: Ani}	
			body{background-color: purple; color: white;}

	</style>
</head>
<body>
	<h1>Indexed Arrays</h1>
	<?php
	   $kala="<h1>My class has</h1>";
	   $scala=array("Hiroshi","Ngeywa","Kelly","Raymond","Doggy","Omar","Kamba");
	   echo count($scala);
	   echo $kala. $scala[0];
	   echo "<br>";
	   echo "<br>";
	   rsort($scala);
	   $dog=count($scala);
		for ($i=0; $i <$dog ; $i++) { 
			   	# code....0


		    echo "$scala[$i]";
			   	
			   echo "<br>" ;
			   };
    ?>
    <br>
    <h1>Associative Arrays</h1>
    <?php 
   
    	$scooby=array("Dan"=>" 16 ","Dom"=>" 17","Kip"=>"18");
    	echo "My name is Eric and I am" . $scooby["Dan"] . "and Dom is" . $scooby["Dom"];
    	echo "<br>";

    	asort($scooby);
    	foreach ($scooby as $key => $value) {
    		# code...
    		echo "Jina ni " . $key . " I am" . $value;
    		echo"<br>";
    	}
    	ksort($scooby);
     ?>
     <?php 
     $nasa=18;

     $tibim=65;
     if ($nasa>15 xor $tibim>70) {
     	# code...
     	echo "Chooooooocha";
     } else {

     	# code...
     	echo "wagwan";

     }
     

      ?>

</body>
</html>