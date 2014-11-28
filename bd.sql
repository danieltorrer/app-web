
CREATE DATABASE MyDB;

USE MyDB;

DROP TABLE IF EXISTS eventos;

CREATE TABLE eventos(
 id_evento INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
 nombre_evento VARCHAR(128) NOT NULL,
  categoria VARCHAR(128) NOT NULL,
  descripcion TEXT NOT NULL,
  fecha_de_inicio date NOT NULL,
  fecha_de_clausura DATE NOT NULL,
  fecha_de_inicio_de_inscripciones DATE NOT NULL,
  fecha_limite_de_inscripciones DATE NOT NULL,
  cartel VARCHAR(255) NOT NULL);


DROP TABLE IF EXISTS usuarios;

CREATE TABLE usuarios(
id_usuario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nombre_de_usuario VARCHAR(128) NOT NULL,
  contrasena VARCHAR(128) NOT NULL,
  correo_electronico VARCHAR(64) NOT NULL,
  nombre VARCHAR(128) NOT NULL,
  apellido_paterno VARCHAR(128) NOT NULL,
  apellido_materno VARCHAR(128) NOT NULL,
  edad INT NOT NULL,
  ciudad VARCHAR(128) NOT NULL,
  estado VARCHAR(128) NOT NULL,
  pais  VARCHAR(128) NOT NULL);

DROP TABLE IF EXISTS inscripciones;

CREATE TABLE inscripciones(id_inscripcion  INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  id_usuario INT,
  id_evento INT,
	FOREIGN KEY(id_usuario) REFERENCES usuarios(id_usuario) 
            ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY(id_evento) REFERENCES eventos(id_evento) 
            ON DELETE CASCADE ON UPDATE CASCADE);

DROP TABLE IF EXISTS productos;

CREATE TABLE productos(id_producto INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  id_usuario INT  NOT NULL,
  id_concurso INT  NOT NULL,
  nombre_o_titulo VARCHAR(128) NOT NULL,
  FOREIGN KEY(id_usuario) REFERENCES usuarios(id_usuario) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY(id_concurso) REFERENCES eventos(id_evento) ON DELETE CASCADE ON UPDATE CASCADE,
  votos INT NOT NULL);