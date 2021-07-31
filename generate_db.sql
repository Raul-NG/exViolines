CREATE DATABASE exviolines;
USE exviolines;

CREATE TABLE `grados` (
  `grado_id` int auto_increment,
  `anno` int,
  `grado` int,
  PRIMARY KEY (`grado_id`)
);

CREATE TABLE `retos` (
  `reto_id` int auto_increment,
  `nombre` varchar(100),
  `categoria` varchar(20),
  `descripcion` varchar(300),
  `puntos` int,
  `grado_id` int,
  `image_id` int,
  PRIMARY KEY (`reto_id`),
  FOREIGN KEY (`grado_id`) REFERENCES `grados`(`grado_id`)
);

CREATE TABLE `usuarios` (
  `usuario_id` int auto_increment,
  `nombre` varchar(20),
  `apellido` varchar(50),
  `correo` varchar(50),
  `password` varchar(100),
  `seguimiento` varchar(100) DEFAULT 'TBA',
  `asistenciaEventos` boolean DEFAULT False,
  `grado_id` int,
  `fecha` timeStamp default NOW(),
  `rol` varchar(100) DEFAULT 'Alumno',
  PRIMARY KEY (`usuario_id`),
  FOREIGN KEY (`grado_id`) REFERENCES `grados`(`grado_id`)
);

CREATE TABLE `logros` (
  `usuario_id` int,
  `reto_id` int,
  `file_name` varchar(100),
  `fecha` timeStamp default NOW(),
  PRIMARY KEY (`usuario_id`, `reto_id`),
  FOREIGN KEY (`usuario_id`) REFERENCES `usuarios`(`usuario_id`),
  FOREIGN KEY (`reto_id`) REFERENCES `retos`(`reto_id`)
);

CREATE TABLE `eventos` (
  `evento_id` int auto_increment,
  `lugar` varchar(200),
  `fecha` datetime,
  `generacion` varchar(50),
  PRIMARY KEY (`evento_id`)
);

CREATE TABLE `seguimientos` (
	`seguimiento_id` int auto_increment,
	`usuario_id` int,
	`pregunta_1` varchar(255),
	`pregunta_2` varchar(255),
	`pregunta_3` varchar(255),
    `pregunta_4` varchar(255),
	PRIMARY KEY (`seguimiento_id`),
	FOREIGN KEY (`usuario_id`) REFERENCES `usuarios`(`usuario_id`)
);

INSERT INTO grados(anno, grado)
VALUES(2021, 1);

INSERT INTO grados(anno, grado)
VALUES(2021, 2);

INSERT INTO grados(anno, grado)
VALUES(2021, 3);

INSERT INTO grados(anno, grado)
VALUES(2021, 4);

INSERT INTO grados(anno, grado)
VALUES(2021, 5);

INSERT INTO grados(anno, grado)
VALUES(2021, 6);

INSERT INTO grados(anno, grado)
VALUES(2021, 7);


INSERT INTO usuarios(nombre, apellido, correo, password, grado_id, rol)
VALUES ('admin', 'admin', 'admin@admin.com', 'admin', 7, 'admin');


INSERT INTO retos(nombre, categoria, descripcion, puntos, grado_id, image_id)
VALUES ('Reto 1: Reading and vocabulary', 'Ingles', 'Read carefully what the monster says and answer the questions below. You can write the answers or upload a picture of them.', 10, 1, 1);

INSERT INTO retos(nombre, categoria, descripcion, puntos, grado_id, image_id)
VALUES ('Reto 1: Reading and vocabulary', 'Ingles', 'Read carefully what the monster says and answer the questions below. You can write the answers or upload a picture of them.', 10, 7, 1);

INSERT INTO retos(nombre, categoria, descripcion, puntos, grado_id, image_id)
VALUES ('Reto 2: Present Simple - Negative and Positive Sentences', 'Ingles', 'Fill the blanks with the correct form of present simple of each verb in parentheses, some of them are positive and others are negative. You can write the answers or upload a picture of them.', 10, 4, 2);

INSERT INTO retos(nombre, categoria, descripcion, puntos, grado_id, image_id)
VALUES ('Reto 2: Present Simple - Negative and Positive Sentences', 'Ingles', 'Fill the blanks with the correct form of present simple of each verb in parentheses, some of them are positive and others are negative. You can write the answers or upload a picture of them.', 10, 7, 2);


INSERT INTO retos(nombre, categoria, descripcion, puntos, grado_id, image_id)
VALUES ('Reto 3: La jungle et ses animaux', 'Frances', "Associez le mot à l'image correspondante.", 10, 1, 3);

INSERT INTO retos(nombre, categoria, descripcion, puntos, grado_id, image_id)
VALUES ('Reto 3: La jungle et ses animaux', 'Frances', "Associez le mot à l'image correspondante.", 10, 7, 3);

INSERT INTO retos(nombre, categoria, descripcion, puntos, grado_id, image_id)
VALUES ('Reto 4: Verbe être et avoir', 'Frances', 'Résoudre les éléments suivants être.', 10, 7, 4);

INSERT INTO retos(nombre, categoria, descripcion, puntos, grado_id, image_id)
VALUES ('Reto 5: Meistermaler', 'Aleman', 'Dibuja cada objeto con su color correspondiente.', 10, 7, 5);

-- INSERT INTO Retos(nombre, categoria, descripcion, puntos, grado_id)
-- VALUES ('', '', '', 10, 1);

-- INSERT INTO Retos(nombre, categoria, descripcion, puntos, grado_id)
-- VALUES ('', '', '', 10, 1);

-- INSERT INTO Retos(nombre, categoria, descripcion, puntos, grado_id)
-- VALUES ('', '', '', 10, 1);

-- INSERT INTO Retos(nombre, categoria, descripcion, puntos, grado_id)
-- VALUES ('', '', '', 10, 1);

-- INSERT INTO Retos(nombre, categoria, descripcion, puntos, grado_id)
-- VALUES ('', '', '', 10, 1);

INSERT INTO logros(usuario_id, reto_id, file_name)
VALUES (1, 4, '1_2_test.txt');

INSERT INTO logros(usuario_id, reto_id, file_name)
VALUES (1, 6, '1_4_test.txt');