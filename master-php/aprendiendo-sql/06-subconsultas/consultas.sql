/*
Subconsultas:
Consultas que se ejecutan dentro de otras
consisten en utilizar los resultados de la subconsulta para
operar en la consulta principal.


*/

INSERT INTO usuarios VALUES(null, 'Admin', 'Admin', 'admin@admin.com', 'admin', CURDATE());


# Sacar usuarios con entradas #
SELECT * FROM usuarios WHERE id IN (SELECT usuario_id FROM entradas);

SELECT * FROM usuarios WHERE id NOT IN (SELECT usuario_id FROM entradas);

# Sacar los usuarios que en su entrada hable de GTA #
INSERT INTO entradas VALUES(null, 3, 1, 'Guia de GTA vice city', 'GTA', CURDATE());

SELECT nombre, apellidos FROM usuarios WHERE id IN (SELECT usuario_id FROM entradas WHERE titulo LIKE "%GTA%");

# Sacar todas las entradas de la categoria accion utilizando su nombre#
SELECT * FROM entradas WHERE categoria_id IN (SELECT id FROM categorias WHERE nombre = 'Acción' );
# Mostrar las categorias con mas de 2 entradas #
SELECT * FROM categorias WHERE 
	id 	IN (SELECT categoria_id FROM entradas GROUP BY categoria_id HAVING COUNT(categoria_id) >= 3);
# Mostrar los usuarios que crearon la entrada en un martes #
SELECT nombre FROM usuarios WHERE 
	id IN (SELECT usuario_id FROM entradas WHERE DAYNAME(fecha)='Tuesday'); 
# Mostrar el nombre del ususario que tenga mas entradas #
SELECT CONCAT(nombre,' ',apellidos) AS 'El usuario con mas entradas' FROM usuarios WHERE 
	id = (SELECT usuario_id FROM entradas GROUP BY usuario_id ORDER BY COUNT(id) DESC limit 1);
# Mostrar las categorias sin entradas #
INSERT INTO categorias VALUES(null, 'Plataformas');
SELECT * FROM categorias WHERE id NOT IN (SELECT categoria_id FROM entradas)
