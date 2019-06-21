/*
	Consultas que sirven para consultar varias tablas en una sola consulta
*/

# MOSTRAR LAS ENTRADAS CON EL NOMBRE DEL USUARIO Y CATEGORIA #

SELECT e.id, e.titulo, u.nombre, c.nombre  
FROM entradas e, usuarios u, categorias c 
WHERE e.usuario_id = u.id AND e.categoria_id = c.id;


# INNER JOIN #
SELECT e.id, e.titulo, u.nombre AS 'Autor', c.nombre AS 'Categoria' 
FROM entradas e
INNER JOIN usuarios u ON e.usuario_id = u.id
INNER JOIN categorias c ON e.categoria_id = c.id;

 
# Mostrar el nombre de las categorias  y a lado cuantas entradas tiene #

SELECT c.nombre, COUNT(e.id) FROM categorias c, entradas e WHERE e.categoria_id = c.id GROUP BY e.categoria_id; 

# LEFT JOIN #
SELECT c.nombre, COUNT(e.id) 
FROM categorias c 
LEFT JOIN entradas e ON e.categoria_id = c.id GROUP BY e.categoria_id; 


# RIGHT JOIN #
SELECT c.nombre, COUNT(e.id) 
FROM categorias c 
RIGHT JOIN entradas e ON e.categoria_id = c.id GROUP BY e.categoria_id; 

# Mostrar el email de los usuarios y alado cuantas entradas tienen #
SELECT u.email, COUNT(e.id) FROM usuarios u, entradas e WHERE e.usuario_id = u.id GROUP BY e.usuario_id;

