<?php
	//Cookie: es un fichero que almacena en el ordenador del usuario que visita la web con el fin de recordar datos o rastrear informacion o comportamiento del mismo en la web.

	//Crear cookies
	//setcookie("nombre", "valor que solo puede ser texto", caducidad, ruta, dominio);

	//cookie basica
	setcookie("micookie", "Valor de mi galleta");

	//Cookie con expiración
	setcookie("unyear", "Valor de mi cookie de 365 dias", time()+(60*60*24*365));

?>

<a href="ver_cookies.php">Ver la galletas</a>