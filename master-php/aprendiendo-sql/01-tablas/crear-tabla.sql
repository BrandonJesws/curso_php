/*
int(n° cifras)              ENTERO
integer(n° cifras)          ENTERO  (maximo 4294967295)
varchar(n° caracteres)      STRING / ALFANUMERICO (Maximo 255);
char(n° caracteres)         STRING / ALFANUMERICO
float()                     DECIMAL
date, time, timestamp

//STRINGS MAS GRANDES
TEXT 65535 caracteres
MEDIUMTEXT 16 millones
LONGTEXT 4 billones de caracteres

//ENTEROS MAS GRANDES
MEDIUMINT
BIGINT
*/

/*
	CREAR TABLAS
*/
CREATE TABLE usuarios(
	id 			int(11) auto_increment not null, 
	nombre 		varchar(100) not null,
	apellidos 	varchar(255) null,
	email 		varchar(100) not null,
	password 	varchar(255)
	CONSTRAINT pk_usuarios PRIMARY KEY(id)
);