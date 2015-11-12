CREATE TABLE representante 
	(cedula bigint(20) not null,
	nombre VARCHAR(30) not null, 
	contraseña VARCHAR(30) not null,
	PRIMARY KEY(cedula))
	ENGINE=InnoDB;
