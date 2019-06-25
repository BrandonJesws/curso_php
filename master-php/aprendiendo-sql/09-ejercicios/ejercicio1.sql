/*
Crear la base de datos de un concesionario
*/

CREATE DATABASE IF NOT EXISTS concensionario;

CREATE TABLE coches(
id 			int(10) auto_increment not null,
modelo		varchar(100) not null,
marca 		varchar(50),
precio		int(10) not null,
stock		int(255) not null,
CONSTRAINT pk_coches PRIMARY KEY(id)
)ENGINE=InnoDB;

CREATE TABLE grupos(
id 		int(10) auto_increment not null,
nombre	varchar(100) not null,
ciudad	varchar(100),
CONSTRAINT pk_grupos PRIMARY KEY(id)
)ENGINE=InnoDB;

CREATE TABLE vendedores(
id 			int(10) auto_increment not null,
grupo_id	int(10) not null,
jefe		int(10), 
nombre		varchar(100) not null,
apellidos	varchar(150),
cargo		varchar(50),
fecha_alta	date,
sueldo		float(20,2),
comision	float(10,2),
CONSTRAINT pk_vendedores PRIMARY KEY(id),
CONSTRAINT fk_vendedor_grupo FOREIGN KEY(grupo_id) REFERENCES grupos(id),
CONSTRAINT fk_vendedor_jefe FOREIGN KEY(jefe) REFERENCES vendedores(id)
)ENGINE=InnoDB;

CREATE TABLE clientes(
id 				int(10) auto_increment not null,
vendedor_id		int(10),
nombre			varchar(150) not null,
ciudad			varchar(100),
gastado			float(50,2),
fecha 			date,
CONSTRAINT pk_clientes PRIMARY KEY(id),
CONSTRAINT fk_cliente_vendedor FOREIGN KEY(vendedor_id) REFERENCES vendedores(id)
)ENGINE=InnoDB;

CREATE TABLE encargos(
id 			int(10) auto_increment not null,
cliente_id	int(10) not null,
coche_id	int(10) not null,
cantidad	int(100),
fecha  		date,
CONSTRAINT pk_encargos PRIMARY KEY(id),
CONSTRAINT fk_encargo_cliente FOREIGN KEY(cliente_id) REFERENCES clientes(id),
CONSTRAINT fk_encargo_coche FOREIGN KEY(coche_id) REFERENCES coches(id)
)ENGINE=InnoDB;

# Rellenar la base de datos con informacion - Insert #

#coches#
INSERT INTO coches VALUES(NULL, 'Renault Clio', 'Renault', 12000, 13);
INSERT INTO coches VALUES(NULL, 'Seat Panda', 'Seat', 10000, 10);
INSERT INTO coches VALUES(NULL, 'Mercedes Ranchera', 'Mercedes Benz', 3200, 24);
INSERT INTO coches VALUES(NULL, 'Porche Cayene', 'Porche', 65000, 5);
INSERT INTO coches VALUES(NULL, 'Lambo Aventador', 'Lamborgini', 17000, 2);
INSERT INTO coches VALUES(NULL, 'Ferrari Spider', 'Ferrari', 245000, 80);

#GRUPOS#

insert into grupos values(null, 'Vendedores A', 'Madrid');
insert into grupos values(null, 'Vendedores B', 'Madrid');
insert into grupos values(null, 'Directores mecanicos', 'Madrid');
insert into grupos values(null, 'Vendedores A', 'Barcelona');
insert into grupos values(null, 'Vendedores B', 'Barcelona');
insert into grupos values(null, 'Vendedores C', 'Valencia');
insert into grupos values(null, 'Vendedores A', 'Bilbao');
insert into grupos values(null, 'Vendedores B', 'Pamplona');
insert into grupos values(null, 'Vendedores C', 'Santiago de compostela');

#Vendedores#
insert into vendedores values(null, 1, null, 'David', 'Lopez', 'Responsable de tienda', CURDATE(), 30000, 4);
insert into vendedores values(null, 1, 1, 'Fran', 'Martinez', 'Ayudante en tienda', CURDATE(), 23000, 2);
insert into vendedores values(null, 2, null, 'Nelson', 'Sanchez', 'Responsable de tienda', CURDATE(), 38000, 5);
insert into vendedores values(null, 2, 3, 'Jesus', 'Lopez', 'Ayudante de tienda', CURDATE(), 12000, 6);
insert into vendedores values(null, 3, null, 'Victor', 'Lopez', 'Mecanico Jefe', CURDATE(), 50000, 2);
insert into vendedores values(null, 4, null, 'Antonio', 'Lopez', 'Vendedor de recambio', CURDATE(), 13000, 8);
insert into vendedores values(null, 5, null, 'Salvador', 'Lopez', 'Vendedor experto', CURDATE(), 60000, 2);
insert into vendedores values(null, 6, null, 'Joaquin', 'Lopez', 'Ejecutivo de cuentas', CURDATE(), 80000, 1);
insert into vendedores values(null, 6, 8, 'Luis', 'Lopez', 'Ayudante de tienda', CURDATE(), 10000, 10);

#clientes#
insert into clientes values(null, 1, 'Construcciones Dias Inc.', 'Alcobendas', 24000, CURDATE());
insert into clientes values(null, 1, 'Fruteria Antonia Inc.', 'Fuenlabrada', 40000, CURDATE());
insert into clientes values(null, 1, 'Imprenta Martinez Inc.', 'Barcelona', 32000, CURDATE());
insert into clientes values(null, 1, 'Jesus Colchones Inc.', 'El prat', 96000, CURDATE());
insert into clientes values(null, 1, 'Bar pepe Inc.', 'Valencia', 17000, CURDATE());
insert into clientes values(null, 1, 'Tienda PC Inc.', 'Murcia', 245000, CURDATE());


#encargos#
insert into encargos values(null, 1, 1, 2, CURDATE());
insert into encargos values(null, 2, 2, 4, CURDATE());
insert into encargos values(null, 3, 3, 1, CURDATE());
insert into encargos values(null, 4, 3, 3, CURDATE());
insert into encargos values(null, 5, 5, 1, CURDATE());
insert into encargos values(null, 6, 6, 1, CURDATE());

