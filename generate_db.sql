CREATE DATABASE exviolines;
USE exviolines;

CREATE TABLE `Retos` (
  `reto_id` int auto_increment,
  `nombre` varchar(50),
  `categoría` varchar(20),
  `descripcion` varchar(300),
  `puntos` int,
  `grado_id` int,
  PRIMARY KEY (`reto_id`),
  FOREIGN KEY (`grado_id`) REFERENCES `Grados`(`grado_id`)
);

CREATE TABLE `Grados` (
  `grado_id` int auto_increment,
  `anno` int,
  `grado` int,
  PRIMARY KEY (`grado_id`)
);

CREATE TABLE `Alumno` (
  `alumno_id` int auto_increment,
  `nombre` varchar(20),
  `apellidos` varchar(50),
  `correo` varchar(50),
  `password` varchar(100),
  `puntosAcumulados` int DEFAULT 0,
  `seguimiento` varchar(100) DEFAULT 'TBA',
  `asistenciaEventos` boolean DEFAULT False,
  `grado_id` int,
  PRIMARY KEY (`alumno_id`),
  FOREIGN KEY (`grado_id`) REFERENCES `Grados`(`grado_id`)
);

CREATE TABLE `Logros` (
  `alumno_id` int,
  `reto_id` int,
  `archivo` varbinary(32),
  `fecha` timeStamp,
  PRIMARY KEY (`alumno_id`, `reto_id`),
  FOREIGN KEY (`alumno_id`) REFERENCES `Alumno`(`alumno_id`),
  FOREIGN KEY (`reto_id`) REFERENCES `Retos`(`reto_id`)
);

CREATE TABLE `Eventos` (
  `evento_id` int auto_increment,
  `lugar` varchar(200),
  `fecha` datetime,
  `generacion` varchar(50),
  PRIMARY KEY (`evento_id`)
);

INSERT INTO grados(anno, grado)
VALUES(2021, 1);

INSERT INTO grados(anno, grado)
VALUES(2021, 2);

INSERT INTO grados(anno, grado)
VALUES(2021, 3);

