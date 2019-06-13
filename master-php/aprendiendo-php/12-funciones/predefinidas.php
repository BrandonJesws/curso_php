<?php
	//Debuggear
	$nombre = "Brandon";
	var_dump($nombre);
	//Fecha
	echo date('d-m-Y');
	//time
	echo "<br/>";
	echo time();
	//Matematicas
	echo "<br/>";
	echo "Raiz cuadrada de 10: ".sqrt(10);

	echo "<br/>";
	echo "Numero aleatorio entre 10 y 40: ".rand(10,40);

	echo "<br/>";
	echo "Numero pi: ".pi();

	echo "<br/>";
	echo "Redondeo: ".round(7.899234, 2);

	//Detectar tipo
	echo "<br/>";
	echo gettype($nombre);

	echo "<br/>";
	if(is_string($nombre)){
		echo "Esa variable es un string";
	}
	if(!is_float($nombre)){
		echo "La variable no es un numero con flotantes";
	}

	//Existe?
	echo "<br/>";
	if(isset($edad)){
		echo "La variable existe";
	}else{
		echo "La variable no existe";
	}

	//trim, limpia espacios
	echo "<br/>";
	$frase = "    mi contenido    ";
	var_dump(trim($frase));

	//Eliminar variables o indices de arrays
	echo "<br/>";
	$year = 2020;
	unset($year); //La elimino del codigo
	//var_dump($year);

	//comprobar variable vacia
	$text = "";
	echo "<br/>";
	if(empty($text)){
		echo "La variable esta vacia";
	}else{
		echo "La variable tiene contenido";
	}

	//contar caracteres de una cadena
	$cadena = "12345";
	echo "<br/>";
	echo strlen($cadena);

	// Encontrar en string la posision de un caracter
	echo "<br/>";
	$frase = "La vida es bella";
	echo strpos($frase, "vida");

	//Remplazar contenido de string
	echo "<br/>";
	$frase = str_replace("vida", "moto", $frase);

	echo $frase;

	//Mayusculas y minusculas
	echo "<br/>";
	echo strtolower($frase);	
	echo "<br/>";
	echo strtoupper($frase);

?>