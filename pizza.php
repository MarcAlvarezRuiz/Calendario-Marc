<!DOCTYPE html>
<html>
<head>
	<title> Pizza </title>
</head>
<body>
	<h1> Ingredients </h1>
	
	<form method="post">
	<?php
	$preu_base = 5;

	echo "<input type='checkbox' name='num1' value='Orenga'> Orenga\n";
	echo "<input type='checkbox' name='num2' value='parnil'> Pernil dolç\n";
	echo "<input type='checkbox' name='num3' value='Formatge'> Formatge\n";
	echo "<input type='checkbox' name='num4' value='Bacon'> Bacon\n";
	echo "<input type='checkbox' name='num5' value='Massa'> Massa\n";


	if (isset($_POST['num1']) && isset($_POST['num5'])) {
		if (isset($_POST['num1'])) {
			$preu_base = $preu_base + 0.5;
		} 
		if (isset($_POST['num2'])) {
			$preu_base = $preu_base + 0.5;
		}
		if (isset($_POST['num3'])) {
			$preu_base = $preu_base + 0.5;
		}
		if (isset($_POST['num4'])) {
			$preu_base = $preu_base + 0.5;
		}
		if (isset($_POST['num5'])) {
			$preu_base = $preu_base + 0.5;
		}
	} else {
		echo "<br>Una pizza necessita sempre la massa i l'orenga.";
	}

	echo "<br>Preu final: ".$preu_base." €";

	?>
	<br> <input type="submit" value="Aceptar">
	</form>
</body>
</html>