<?php
	//Sesión: Almacenar y persistir datos del usuario mientras navega en un sitio web hasta que cierra sesion o cierra el navegador.

	//Iniciar sesion
	session_start();

	//Variable local
	$variable_normal = "Soy una cadena de texto";

	//variable de sesion
	$_SESSION['variable_persistente'] = "Hola soy una sesion activa";

	echo $variable_normal."<br/>";
	echo $_SESSION['variable_persistente'];

?>