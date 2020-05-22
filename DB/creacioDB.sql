DROP DATABASE IF EXISTS a18margongon_proyecto;

CREATE DATABASE a18margongon_proyecto;


USE a18margongon_proyecto;

CREATE TABLE usuaris(
	id INT(5) AUTO_INCREMENT PRIMARY KEY,
    nomUsuari VARCHAR (10) NOT NULL,
    passwordc VARCHAR (15) NOT NULL,
	nom VARCHAR (20) NOT NULL,
	primerCognom VARCHAR (20) NOT NULL,
    segonCognom VARCHAR (20) NOT NULL,
    email VARCHAR(50) NOT NULL
);

CREATE TABLE comentaris(
	codiComentari INT(10) AUTO_INCREMENT PRIMARY KEY,
    comentari VARCHAR (200) NOT NULL,
    codiUsuari INT (11) NOT NULL,
    FOREIGN KEY (codiUsuari) REFERENCES usuaris(nom)
);

CREATE TABLE SospitososAPI(
    id INT (10) AUTO_INCREMENT PRIMARY KEY,
    sexe VARCHAR (10) NOT NULL,
    comarca VARCHAR (30) NOT NULL
);