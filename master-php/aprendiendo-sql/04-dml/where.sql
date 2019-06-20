# CONSULTA CON CONDICION #
SELECT * FROM usuarios WHERE email = 'brandon@hotmail.com';

/*

OPERADORES DE COMPARACION
Entre 		between A and B
En 			in
Es nulo 	is null
no nulo 	is not null
como 		like
no es como  not like


OPERADORES LOGICOS

o  	OR
y  	AND
no 	NOT


COMODINES
cualquier cantidad de caracteres: %
un caracter desconosido: _



*/

# EJEMPLOS #

/* Mostrar registros donde el año se 2019 */
SELECT nombre, apellidos FROM usuarios WHERE YEAR(fecha) = 2019;

SELECT nombre, apellidos FROM usuarios WHERE YEAR(fecha) != 2019 OR ISNULL(fecha);

/* Que el apellidocontenga la letra a */
SELECT email FROM usuarios WHERE apellidos LIKE '%a%' AND password = 12345;

/* Sacar los registros cuyo año sea par */
SELECT * FROM usuarios WHERE (YEAR(fecha)%2) = 0;

/* Registros cuyo nombre tenga mas de 5 letras, se registre en 2019 y mostrar nombre en mayusculas */
SELECT UPPER(nombre) as 'Nombre', apellidos From usuarios WHERE (LENGTH(nombre) > 5) AND (YEAR(fecha) < 2020);



# ORDENANDO #
SELECT * FROM usuarios ORDER BY id DESC;

SELECT * FROM usuarios ORDER BY fecha ASC;

# LIMITAR LOS REGISTROS A MOSTRAR #
SELECT * FROM usuarios LIMIT 2;
SELECT * FROM usuarios LIMIT 1,3;





