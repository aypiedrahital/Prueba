CREATE TABLE canal(
nombre VARCHAR (20) NOT NULL,
 email VARCHAR (20) NOT NULL,
 descripcion VARCHAR (20) NULL,
 PRIMARY KEY(nombre,email))
 ENGINE=InnoDB

 CREATE TABLE video
(url VARCHAR(30) not null,
 titulo VARCHAR(30) not null,
 descripcion VARCHAR(30) null,
 fecha_subida VARCHAR(30) not null,
canal VARCHAR(30) not null,
PRIMARY KEY(url),
CONSTRAINT c_v FOREIGN KEY (canal) REFERENCES canal (nombre),
CONSTRAINT c_v FOREIGN KEY (canal) REFERENCES canal (email)
)
 ENGINE=InnoDB;

 

INSERT INTO canal (nombre,email,descripcion ) VALUES ('canal1', 'canal1@ejemplo.com'," canal de musica");
INSERT INTO canal (nombre,email,descripcion ) VALUES ('canal2', 'canal2@ejemplo.com'," canal de moda");
INSERT INTO canal (nombre,email,descripcion ) VALUES ('canal3', 'canal3@ejemplo.com'," canal de deporte");

INSERT INTO video (url,titulo,descripcion,fecha_subida ) VALUES ('video1.com', 'Flor palida','video musical','12/02/1995');
INSERT INTO video (url,titulo,descripcion,fecha_subida ) VALUES ('video2.com', 'vivir','video musical','12/02/1996');
INSERT INTO video (url,titulo,descripcion,fecha_subida ) VALUES ('video3.com', 'abdominales','video sobre deportes','16/02/1995');
INSERT INTO video (url,titulo,descripcion,fecha_subida ) VALUES ('video4.com', 'Primavera verano','video moda','02/07/1987');
INSERT INTO video (url,titulo,descripcion,fecha_subida ) VALUES ('video5.com', 'sandalias','video moda','11/04/2000');







