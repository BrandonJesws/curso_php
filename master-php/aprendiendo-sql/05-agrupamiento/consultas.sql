# CONSULTAS DE AGRUPAMIENTO #
SELECT COUNT(titulo) AS 'Numero de entradas', categoria_id FROM entradas GROUP BY categoria_id;

# CONSULTAS DE AGRUPAMIENTO CON CONDICION#
SELECT COUNT(titulo) AS 'Numero de entradas', categoria_id FROM entradas GROUP BY categoria_id HAVING COUNT(titulo) >= 4;

/*

AVG 	sacar la media
COUNT 	contar el numero de elementos
MAX 	devuelve el valor maximo del grupo
MIN 	"                 minimo      "
SUM 	suma todo el contenido

*/

SELECT AVG(id) AS 'Media de entradas' FROM entradas;

SELECT MAX(id) AS 'Maximo id', titulo FROM entradas;

SELECT MIN(id) AS 'Maximo id', titulo FROM entradas; 

SELECT SUM(id) AS 'suma de ids' FROM entradas;