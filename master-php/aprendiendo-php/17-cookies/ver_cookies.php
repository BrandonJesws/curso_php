<?php
	//Para mostrar cookies tengo que usar $_COOKIE, que es una variable superglobal, es un array asociativo.

	if(isset($_COOKIE['micookie'])){
		echo "<h1>".$_COOKIE['micookie']."</h1>";
	}else{
		echo "no existe la cookie";
	}

	if(isset($_COOKIE['unyear'])){
		echo "<h1>".$_COOKIE['unyear']."</h1>";
	}else{
		echo "no existe la cookie";
	}

?>
<a href="borrar_cookies.php">Borrar mis galletas</a>