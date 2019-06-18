<?php
	$grupos = ['hillsong', 'Bethel', 'Jesus Culture'];
	$numeros = [1,2,5,8,4,9,3];

	//Ordenar
	sort($grupos); 
	arsort($grupos); 

	//Añadir elementos
	$grupos[] = 'Passion';
	array_push($grupos, 'Y&F');

	//Eliminar elemento
	array_pop($numeros);
	unset($grupos[2]);

	//Aleatorio
	echo array_rand($numeros);

	//Dar la vuelta
	array_reverse($grupos);

	//Buscar dentro de un array
	array_search('hillsong', $grupos);

	//Contar elementos
	echo count($numeros);
	echo sizeof($numeros);


?>