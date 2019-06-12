<?php
	//WHILE
	$numero = 0;
	while($numero <= 100){
		echo $numero;
		if($numero != 100){
			echo ", ";
		}
		$numero++;
	}

	//Ejemplo

	if(isset($_GET['numero'])){
		$numero = (int)$_GET['numero']; //casteo de dato
	}else{
		$numero = 1;
	}

	echo "<h1>Tabla de multiplicar del número $numero</h1>";

	$contador=0;
	while($contador <= 10){
		echo "$numero x $contador = ".($numero * $contador)."<br/>";
		$contador++;
	}

	//Bucle do while

	$edad = 18;
	$contador = 1;

	do{
		echo "<p>Tienes acceso al local privado $contador </p>";
		$contador++;
	}while($edad >= 18 && $contador <= 10);
	
?>