# Renombrar una tabla #
ALTER TABLE usuarios RENAME TO usuarios_renom;

# Cambiar el nombre de una columna #
ALTER TABLE usuarios_renom CHANGE apellidos apellido varchar(100) null;

# Modificar columna sin cambiar nombre #
ALTER TABLE usuarios_renom MODIFY apellido char(40) not null;

# AÑADIR COLUMNA #
ALTER TABLE usuarios_renom ADD website varchar(100) null;

# AÑADIR RESTRICCION A COLUMNA #
/* Agrega una restriccion de campo unico */
ALTER TABLE usuarios_renom ADD CONSTRAINT uq_email UNIQUE(email); 

# BORAR UNA COLUMNA #
ALTER TABLE usuarios_renom DROP website;
