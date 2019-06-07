<?php
	//CONDICIONALES
	$color = "rojo";

	if($color == "rojo"){
		echo "El color es rojo";
	}else{
		echo "El color no es rojo";
	}

	echo "<br/>"

	$year = 2018;

	if($year < 2019){
		echo "Es un año anterior a 2019"
	}else{
		echo "Es un año posterior a 2019"
	}

	/*OPERADORES DE COMPARACION
	== igual
	=== identico
	!= diferente
	<> diferente
	!== no identico
	< menor que
	> mayor que
	<= menor o igual que
	>= mayoy igual que
	*/ 

	$edad = 42;
	$moyoria_edad = 18;
	$nombre = "David Extramadura";
	$ciudad = "Madrid"
	$continente = "Europa";

	if($edad >= $moyoria_edad){
		echo "<h1>".$nombre." es mayor de edad</h1>";
		if($continente == "Europa"){
			echo "<h2>Y es de ".$ciudad."</h2>";
		}else{
			echo "<h2>No es Europeo</h2>";
		}
		
	}else{
		echo "<h2>".$nombre." no es mayor de edad</h2>";
	}

	//Ejemplo 4
	$dia = 3;

	if($dia == 1){
		echo "Es Lunes";
	}elseif($dia == 2){
		echo "Es Marte";
	}elseif($dia == 3){
		echo "Es Miercoles";
	}elseif($dia == 4){
		echo "Es Jueves";
	}elseif($dia == 5){
		echo "Es Viernes";
	}else{
		echo "Es fin de semana";
	}

	//Ejemplo 5
	$edad1 = 18;
	$edad2 = 64;
	$edad_oficial = 20;

	if($edad_oficial >= $edad1 && $edad_oficial <= 64){
		
	}

?>