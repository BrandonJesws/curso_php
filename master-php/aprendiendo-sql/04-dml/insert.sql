# Insertar nuevos registros #
INSERT INTO usuarios VALUES(null, 'Brandon', 'Osorio Estrella', 'brandon@hotmail.com', '12345', '2019-05-01');
INSERT INTO usuarios VALUES(null, 'Martin', 'Lutero', 'martin@hotmail.com', '67890', '2019-06-21');
INSERT INTO usuarios VALUES(null, 'Pako', 'el Chato', 'pako@hotmail.com', '12345', '2019-04-06');


# Insertar filas solo con ciertas columnas #
INSERT INTO usuarios(email, password) VALUES('admin@hotmail.com', 'admin');
