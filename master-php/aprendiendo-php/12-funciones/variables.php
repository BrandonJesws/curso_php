<?php
	/*
	Variables locales:
	Son las que estan definidas dentreo de una funcion y no pueden ser usadas fuera de la funcion, solo estan disponibles dentro. A no ser que se haga un return.

	Variables Globales:
	Son las que se definen fuera de una funcion y estan disponibles dentro y fuera de la funcion.
	*/

	//Variable global
	$frase = "Hola Mundo";

	echo $frase;

	function holaMundo(){
		global $frase;
		echo "<h1>$frase</h1>";

		$year = 2019;
		echo "<h2>$year</h2>";
	}


	holaMundo();

	//Funciones variables

	function buenasDias(){
		return "Hola Buenos Dias";
	}

	function buenasTarde(){
		return "Hola Buenas Tardes";
	}

	function buenasNoches(){
		return "Sueña bien";
	}

	$horario = "Noches";
	$miFuncion = "buenas".$horario;
	echo $miFuncion();
?>