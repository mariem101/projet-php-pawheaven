CREATE DATABASE pawheaven;
USE pawheaven;

CREATE TABLE admin (
    id INT AUTO_INCREMENT PRIMARY KEY,
    identifiant VARCHAR(200) NOT NULL,
    password VARCHAR(200) NOT NULL
);
INSERT INTO admin (identifiant, password) 
VALUES 
    ('dorian', 'dorian'),
    ('mariem', 'mariem'),
    ('maria', 'maria');

CREATE TABLE clients (
    id INT AUTO_INCREMENT PRIMARY KEY,
    lastname VARCHAR(200) NOT NULL,
    firstname VARCHAR(200) NOT NULL,
    email VARCHAR(200) NOT NULL,
    password VARCHAR(200) NOT NULL
    
);

CREATE TABLE animaux (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(200) NOT NULL,
    espece VARCHAR(200) NOT NULL,
    race VARCHAR(200),
    description VARCHAR(1000)
);

