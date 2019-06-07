<?php
	//Operadores aritméticos
	$numero1 = 55;
	$numero2 = 33;

	echo 'Suma:'.($numero1+$numero2).'<br/>';
	echo 'Resta:'.($numero1-$numero2).'<br/>';
	echo 'Multiplicacion:'.($numero1*$numero2).'<br/>';
	echo 'Division:'.($numero1/$numero2).'<br/>';
	echo 'Resto:'.($numero1%$numero2);

	//operadores incremento y decremento
	$year=2019;
	//Incremento
	$year++;
	//Decremento
	$year--;
	//pre-incremento
	++$year;
	//pre-decremento
	--$year;

	echo '<h1>$year</h1>';

	//Operadores de Asignacion 
	$edad = 55;

	echo $edad;
	echo ($edad+=5);
	echo ($edad-=5);
	echo ($edad/=5);
?>