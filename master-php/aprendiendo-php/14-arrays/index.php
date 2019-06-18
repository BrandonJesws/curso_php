<?php
	//Arrays
	//Coleccion de datos o conjunto bajo un mismo nombre, que para acceder a ellos se puede usar un indice numerico o alfanumerico
	
	$pelicula = 'Batman';
	$peliculas = array('Batman', 'Spiderman', 'El señor de los anillos');
	//Array asociativo
	$personas = array(
		'nombre' => 'Brandon',
		'apellidos' => 'Osorio',
		'web' => 'kreshendoh.com'
	);

	echo $personas[apellidos];

	$cantantes = ['Hillsong', 'Bethel', 'JC'];

	echo $peliculas[0];
	echo $cantantes[1];

	//Recorrer con for
	echo "<h1>Listado de Peliculas</h1>";

	for($i = 0; $i < count($peliculas); $i++){
		echo "<p>.$peliculas[$i].</p>";
	}

	//Recorrer con foreach
	foreach ($cantantes as $cantante) {
		echo "<p>.$cantante.</p>";
	}

	//Array multidimensionales
	$contactos = array(
		array(
			'nombre'=>'Antonio',
			'email'=> 'antonio@hotmail.com'
		),
		array(
			'nombre'=>'Jose',
			'email'=> 'jose@hotmail.com'
		),
		array(
			'nombre'=>'Lucas',
			'email'=> 'lucas@hotmail.com'
		)
	);

	echo $contactos[1]['nombre'];
	foreach($contactos as $key => $contacto){
		echo "<p>.$contacto['nombre'].</p>";
	}

?>