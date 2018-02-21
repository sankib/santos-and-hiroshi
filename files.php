<!DOCTYPE html>
<html>
<head>
	<title>Files</title>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>
<body>
	<div style="text-align: center;">
	<div class="container-fluid">
		<div class="jumbotron">
		<p>What is a file?</p>
		<q>A file refers to an object in a computer that is used to store information,settings or even commands.</q>
		</div>
	</div>
	<?php
		$san=fopen("san.txt","w") or die("Unable to open file");
		$txt=" I will follow you.\n";
		fwrite($san, $txt);
		$txt="Really\n";
		fwrite($san, $txt);
		fclose($san);
	?>
	<?php 
	$san=fopen("san.txt","r") or die ("Unable to open file");
	echo fread($san, filesize("san.txt"));
	fclose($san);

	 ?>
	 <h1>Constants</h1>
	 
	 <?php 
	 define("Scala", "My name is Santos");
	 echo Scala;
	  ?>
	  </div>
</body>
</html>