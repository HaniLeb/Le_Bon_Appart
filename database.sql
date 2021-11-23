DROP DATABASE IF EXISTS leBonAppart;
CREATE DATABASE leBonAppart CHARACTER SET utf8;
USE leBonAppart;

CREATE TABLE annonce(
    annonce_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    titre VARCHAR (100) NOT NULL,
    description VARCHAR (600) NOT NULL,
    code_postal INT (20) NOT NULL,
    ville VARCHAR (250) NOT NULL,
    type VARCHAR (20) NOT NULL,
    prix INT (100) NOT NULL,
    msg_reservation VARCHAR (250) NOT NULL
);

