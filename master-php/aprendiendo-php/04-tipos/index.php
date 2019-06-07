<?php
	/* 
	TIPOS DE DATOS
		Entero (int / integer)
		Coma flotante / decimales (float / double)
		Cadenas de caracteres (String)
		Booleanos (bool)
		null
		Arrays 
		Objetos
	*/

	$numero = 100;
	$decimal = 27.9;
	$texto = "Soy un texto";
	$verdadero = true;

	echo gettype($numero).'<br>';
	echo gettype($decimal).'<br>';
	echo gettype($texto).'<br>';
	echo gettype($verdadero);

	// Debugear
	$mi_nombre[] = "Brandon Jesus";
	$mi_nombre[] = "Brandon Jesus";
	//var_dump($mi_nombre);

?>