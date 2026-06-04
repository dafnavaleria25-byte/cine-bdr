DROP DATABASE IF EXISTS cine;

CREATE DATABASE cine;

USE cine;

CREATE TABLE peliculas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(50) NOT NULL,
    genero VARCHAR(50) NOT NULL,
    Duracion INT NOT NULL
);
CREATE TABLE carteleras (
    id INT AUTO_INCREMENT PRIMARY KEY,
    pelicula_id INT NOT NULL,
    sala_id INT NOT NULL,
    precio_id INT NOT NULL,
    vendidos_id INT NOT NULL,
    disponibles_id INT NOT NULL,
    horario TIME NOT NULL,
    FOREIGN KEY (pelicula_id) REFERENCES peliculas(id)
);
CREATE TABLE salas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    capacidad INT NOT NULL
);


-- TADEO
INSERT INTO peliculas (titulo, genero, duracion) VALUES
    ('El Padrino', 'Crimen', 175),
    ('COCO', 'Caricatura', 202),
    ('La Era de Hielo', 'Animacion',81),
    ('Spider-Man: No Way Home', 'Acción', 148),
    ('El Señor de los Anillos', 'Fantacia', 178);

INSERT INTO carteleras (pelicula_id, sala_id, precio_id, vendidos_id, disponibles_id, horario) VALUES
    (1, 1, 10.00, 50, 50, '18:00:00'),
    (2, 2, 12.00, 75, 75, '20:00:00'),
    (3, 3, 8.00, 30, 30, '16:00:00'),
    (4, 1, 15.00, 60, 40, '22:00:00'),
    (5, 2, 20.00, 90, 60, '19:00:00');

INSERT INTO salas (nombre, capacidad) VALUES
    ('Sala 1', 100),
    ('Sala 2', 150),
    ('Sala 3', 200);





