<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulario en PHP</title>
</head>
<body>
	<h1>Formulario PHP</h1>
	<!--<form method="GET" action="recibir.php">-->
	<form method="POST" action="recibir.php">
		<p>
			<label for="nombre">Nombre</label>
			<input type="text" name="nombre"/>
		</p>
		<p>
			<label for="apellido">Apellido</label>
			<input type="text" name="apellido"/>
		</p>
		<p>
			<input type="submit" value="Enviar"/>
		</p>
	</form>
</body>
</html>