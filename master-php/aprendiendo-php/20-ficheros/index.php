<?php
//Abrir archivo
	$archivo = fopen("fichero_texto.txt", "a+");

//Leer archivo
	while(!feof($archivo)){
		$contenido = fgets($archivo);
		echo $contenido"<br/>" ;
	}

//Escribir en un archivo
	fwrite($archivo, "Soy uhn texto metido desde php");
	

//Cerrar archivo
	fclose($archivo);

	//Copiar un fichero
	copy('fichero_texto.txt', 'fichero_copiado.txt') or die("Error al copiar");

	//Renombrar
	rename('fichero_copiado.txt', 'archivo_copiado.txt');

	//Eliminar fichero
	unlink('archivo_copiado.txt') or die('Error al borrar');

	//Comprobar si un archivo existe
	if(file_exists("fichero_texto.txt")){
		echo "El archivo existe";
	}else{
		echo "No existe";
	}
?>