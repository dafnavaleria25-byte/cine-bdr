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


-- TADEO
INSERT INTO peliculas (titulo, genero, duracion) VALUES
    ('El Padrino', 'Crimen', 175),
    ('COCO', 'Caricatura', 202),
    ('La Era de Hielo', 'Animacion',81),
    ('Spider-Man: No Way Home', 'Acción', 148),
    ('El Señor de los Anillos', 'Fantacia', 178);



