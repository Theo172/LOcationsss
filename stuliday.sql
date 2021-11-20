DROP DATABASE IF EXISTS stuliday;
CREATE DATABASE stuliday CHARACTER SET utf8;
USE stuliday;

CREATE TABLE stuliday.user (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR (25) NOT NULL,
    password VARCHAR (512) NOT NULL
);

CREATE TABLE stuliday.location (
    location_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR (255) NOT NULL,
    description TEXT NOT NULL,
    price FLOAT NOT NULL,
    adress TEXT NOT NULL,
    image VARCHAR (512);
);

ALTER TABLE stuliday.user ADD UNIQUE(`username`);

INSERT INTO stuliday.location (name,description,price,adress) VALUES
('Petit appartement en bord de mer', 'A 200 mètres de la mer, vous avez littéralement les pieds dans le sable', 80, '11 allée des hautes fermes, 78960, Voisin le Bx'),
('Maison de campagne', 'Maison spacieuse au milieu de la nature, un cadre idyllique pour se ressourcer', 120, '15 route de la madeleine, 78480, Minlon la chapelle');

