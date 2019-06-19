<?php
	$error = true;
	if(!empty($_POST['nombre']) && !empty($_POST['apellidos']) && !empty($_POST['edad']) && !empty($_POST['email']) && !empty($_POST['pass'])){
		$error = false;

		$nombre = $_POST['nombre'];
		$apellidos = $_POST['apellidos'];
		$edad = (int) $_POST['edad'];
		$email = $_POST['email'];
		$contraseña = $_POST['pass'];

		//Validar el nombre
		if(!is_string($nombre) || preg_match("/[0-9]/", $nombre)){
			$error = 'nombre';
		}
		//Validar el apellido
		if(!is_string($apellidos) || preg_match("/[0-9]/", $apellidos)){
			$error = 'apellidos';
		}
		//Validar el edad
		if(!is_int($edad) || !filter_var($edad, FILTER_VALIDATE_INT)){
			$error = 'edad';
		}
		//Validar el email
		if(!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
			$error = 'email';
		}
		//Validar el password
		if(strlen($contraseña)<5){
			$error = 'password';
		}
	}else{
		$error = 'faltan_valores';
		
	}
	if($error != 'ok'){
		header("Location:index.php?error=$error");
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php if($error == 'ok'): ?>
		<h1>Datos validados correctamente</h1>
		<p><?=$nombre?></p>
		<p><?=$apellidos?></p>
		<p><?=$edad?></p>
		<p><?=$email?></p>
	<?php endif; ?>
</body>
</html>