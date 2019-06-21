/*
Vistas: Una consulta almacenada en la base de datos que se 
utiliza como una tabla virtual, no almacena datos, utiliza asociaciones y datos de la tabla originales
de forma que siempre se mantiene actualizada
*/

CREATE VIEW entradas_con_nombres AS 
SELECT e.id, e.titulo, u.nombre, c.nombre 
FROM entradas e
INNER JOIN usuarios u ON e.usuario_id = u.id
INNER JOIN categorias c ON e.categoria_id = c.id;

DROP VIEW entradas_con_nombres;