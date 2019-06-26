<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Blog de videojuegos</title>
	<link rel="stylesheet" type="text/css" href="./assets/css/style.css">
</head>
<body>
	<!--Cabecera-->
	<header id="cabecera">
		<div id="logo">
			<a href="index.php">
				Blog de Videojuegos
			</a>
		</div>
		<!--Menu-->
		<nav id="menu">
			<ul>
				<li>
					<a href="index.php">Inicio</a>
				</li>
				<li>
					<a href="index.php">Categoria 1</a>
				</li>
				<li>
					<a href="index.php">Categoria 2</a>
				</li>
				<li>
					<a href="index.php">Categoria 3</a>
				</li>
				<li>
					<a href="index.php">Categoria 4</a>
				</li>
				<li>
					<a href="index.php">Sobre mi</a>
				</li>
				<li>
					<a href="index.php">Cantacto</a>
				</li>
			</ul>
		</nav>
		<div class="clearfix"></div>
	</header>

	<div id="contenedor">
		<!--Barra lateral-->
		<aside id="sidebar">
			<div id="login" class="bloque">
				<h3>Identificate</h3>
				<form action="login.php" method="POST">
					<label for="email">Email</label>
					<input type="email" name="email"/>

					<label for="password">Contraseña</label>
					<input type="password" name="password"/>

					<input type="submit" name="Entrar"/>	
				</form>
			</div>

			<div id="register" class="bloque">
				<h3>Registrate</h3>
				<form action="registro.php" method="POST">
					<label for="nombre">Nombre</label>
					<input type="text" name="nombre">

					<label for="apellidos">Apellidos</label>
					<input type="text" name="apellidos">

					<label for="email">Email</label>
					<input type="email" name="email"/>

					<label for="password">Contraseña</label>
					<input type="password" name="password"/>

					<input type="submit" name="Registrar"/>	
				</form>
			</div>
		</aside>
		
		<!--Caja Principal-->
		<div id="principal">
			<h1>Ultimas entradas</h1>
			<article class="entrada">
				<h2>Titulo de entrada</h2>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
			</article>
			<article class="entrada">
				<h2>Titulo de entrada</h2>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
			</article>
			<article class="entrada">
				<h2>Titulo de entrada</h2>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
			</article>
		</div>
	</div>
	
	<!--Pie de pagina-->
	<footer id="pie">
		<p>Desarrollado por Brandon Jesus &copy; 2019</p>
	</footer>
</body>
</html>