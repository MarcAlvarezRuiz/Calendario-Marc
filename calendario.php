<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="calendario.css">
<head>
	<title> Calendario </title>
</head>
<body>
	<h1 class="h1"> Calendario </h1>
	<?php
	
	$dias = array('Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo');
	$filas = 6;
	$columnas = 7;
	$contar_dias = 0;
	$recorrer_dias_mes = 1;

	echo "<table class='tabla' height='80%';
	width='80%' border='2px'>";

	for ($i = 0; $i <= $filas-2; $i++) {
		echo "<tr class='s'>$dias[$contar_dias]";
		$contar_dias=$contar_dias+1;
		
		for ($j=1;$j<=$columnas;$j++) { 
			echo "<td class='d'>$recorrer_dias_mes </td>";
			if ($recorrer_dias_mes<31) {
				$recorrer_dias_mes=$recorrer_dias_mes+1;
			} else {
				break;
			}
		}
	}
	
	echo "</table>";
	?>
</body>
</html>
