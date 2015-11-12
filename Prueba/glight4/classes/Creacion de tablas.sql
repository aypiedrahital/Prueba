CREATE TABLE granjero
	(id bigint(20) not null,
	nombre VARCHAR(30) not null,
	edad bigint(20) not null,
	sexo VARCHAR(30) not null,
	PRIMARY KEY(id))
	ENGINE=InnoDB;

CREATE TABLE finca 
(id bigint(20) not null,
nombre VARCHAR(30) not null,
valor_propiedad VARCHAR(30) not null,
cantidad_vacas bigint(20) not null,
cantidad_gallinas bigint(20) not null,
granjero bigint(20) null,
PRIMARY KEY(id),
CONSTRAINT g_f FOREIGN KEY (granjero) REFERENCES granjero (id)) ENGINE=InnoDB;
