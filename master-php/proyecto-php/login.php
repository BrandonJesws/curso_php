<?php
	//Iniciar la sesion a la base de datos
	require_once 'includes/conexion.php';
	//Recoger datos de usuario
	if(isset($_POST)){
		//BOrrar error antiguo
		if(isset($_SESSION['error_login'])){
					session_unset($_SESSION['error_login']);
				}else{
			//Mensaje error
			$_SESSION['error_login'] = "Login incorrecto";
		}

		//Recojer datos del formulario
		$email = trim($_POST['email']);
		$passwoed = $_POST['password'];

		//Consulta para comprobar las credenciales del usuario
		$sql = "SELECT * FROM usuario WHERE email = '$email'";
		$login = mysqli_query($db, $sql);

		if($login && mysqli_num_rows($login) == 1){
			$usuario = mysqli_fetch_assoc($login);


			//comprobar contraseña
			$verify = password_verify($password, $usuario['password']);

			if($verify){
				//utilizar sesion para guardar los datos del usuario logueado
				$_SESSION['usuario'] = $usuario;
			}else{
			//Si falla enviar una sesion con el fallo y dirigir al index con fallo
			$_SESSION['error_login'] = "Login incorrecto";
				
		}
	}
}
	header('Location: index.php');
	
?>