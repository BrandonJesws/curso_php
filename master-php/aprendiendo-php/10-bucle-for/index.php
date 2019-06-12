<?php
	$resultado = 0;
	for($i = 0; $i <= 100; $i++){
		$resultado += $i;
	}

	echo "<h1>El resultado es: $resultado</h1>";

	//Ejemplo tabla de multiplicar

	if(isset($_GET['numero'])){
		$numero = (int)$_GET['numero']; //casteo de dato
	}else{
		$numero = 1;
	}

	echo "<h1>Tabla de multiplicar del número $numero</h1>";

	
	for($contador=1; $contador <= 10; $contador++){
		if($numero == 45){
			echo "No se puede realizar esta operacion";
			break;
		}
		echo "$numero x $contador = ".($numero * $contador)."<br/>";
	}
	
?>