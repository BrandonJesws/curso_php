<?php
	//Variables superglobales

	//variables de servidor
	echo '<h1>';
	echo $_SERVER['SERVER_ADDR']; //Direccion ip del servidor web
	echo '</h1>';

	echo '<h1>';
	echo $_SERVER['SERVER_NAME']; //Dominio
	echo '</h1>';

	echo '<h1>';
	echo $_SERVER['SERVER_SOFTWARE']; //Herramientas que usa el servidor 
	echo '</h1>';

	echo '<h1>';
	echo $_SERVER['HTTP_USER_AGENT']; //Navegador web que se esta usando
	echo '</h1>';

	echo '<h1>';
	echo $_SERVER['REMOTE_ADDR']; //Direccion ip del cliente
	echo '</h1>';

?>