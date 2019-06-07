<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Imprimir por pantalla</title>
</head>
<body>
	<h1>Master en PHP - <?='Curso'?></h1>
	<?php
		//Titular de la seccion
		echo '<h3>Listado de videojuegos:</h3>';
		
		echo '<ul>'
			.'<li>GTA</li>'
			.'<li>Fifa</li>'
			.'<li>Mario Bros</li>'
			.'</ul>';
		echo '<p>Esta es toda'.' - '.'lista de juegos</p>'; 
	?>
</body>
</html>