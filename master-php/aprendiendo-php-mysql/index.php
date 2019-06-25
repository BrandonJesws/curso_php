<?php
//Conectar la base de datos
$host = "localhost";
$user = "root";
$password = "";
$database = "phpmysql";
$conexion = mysqli_connect($host, $user, $password, $database);

//comprobar si la conexion es correcta
if(mysqli_connect_error()){
	echo "La conexion a la base de datos mysql a fallado".mysqli_connect_error();
}else{
	echo "Conexion exitosa";
}
//Consulta para codificar la codificacion de caracteres
mysqli_query($conexion, "SET NAMES 'utf8'");

//Consulta select desde php
$query = mysqli_query($conexion, "SELECT * FROM notas");


while($nota = mysqli_fetch_assoc($query)){
	echo "<h2>".$nota['titulo']."</h2>";
	echo $nota['descripcion']."<br/>";
}

//Insertar en la base de datos desde php
$sql = "INSERT INTO notas VALUES(null, 'Nota desde PHP', 'Este es una nota desde php', 'green')";
$insert =  mysqli_query($conexion, $sql);
if ($insert) {
	echo "Datos insertados correctamente";
}else{
	echo "Error: ".mysqli_error($conexion);
}
?>