<?php
	$server = "localhost";
	$username = "root";
	$password = "";
	$database = "blog_masterdos";
	$db = mysqli_connect($server, $username, $password, $database);

	mysqli_query($db, "SET NAMES 'utf8'");

	//Iniciar secion
	session_start();
?>