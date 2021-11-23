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
    msg_reservation VARCHAR (50)
);

INSERT INTO annonce (titre, description, code_postal, ville, type, prix, msg_reservation) VALUES
('Maison En centre ville', 'Belle maison, avec 5 chambres, spacieuse et proche des commerces', 33000, 'Bordeaux', 'Vente', 500000, NULL),
('Appart En centre ville', 'Belle Appart, avec 2 chambres, proche des commerces', 33200, 'Bordeaux', 'Location', 500, NULL),
('Maison En centre ville', '3 chambres, spacieuse et proche des commerces, SDB', 33400, 'Bordeaux', 'Vente', 250000, NULL),
('Maison En centre ville', 'Belle maison, avec 5 chambres, spacieuse et proche des commerces', 33300, 'Bordeaux', 'Vente', 600000, NULL),
('Appart En centre ville', 'Belle appart, avec 3 chambres, spacieuse et proche des commerces', 33220, 'Bordeaux', 'Location', 700, NULL),
('Maison En centre ville', 'Belle maison, avec 7 pieces, spacieuse et proche des commerces', 33020, 'Bordeaux', 'Vente', 700000, NULL),
('Appart En centre ville', 'Belle appart, avec 2 chambres, proche des commerces', 33100, 'Bordeaux', 'Vente', 500000, NULL),
('Maison En centre ville', 'Belle maison, avec 3 chambres, spacieuse', 33900, 'Bordeaux', 'Vente', 500000, NULL),
('Appart En centre ville', 'Belle appart, avec 4 chambres, spacieuse et proche des commerces', 33600, 'Bordeaux', 'Vente', 800000, NULL),
('Maison En centre ville', 'Belle maison, avec 3 chambres, spacieuse et proche des commerces', 33600, 'Bordeaux', 'Vente', 900000, NULL),
('Appart En centre ville', 'Belle Appart, avec 8 chambres, spacieuse et proche des commerces', 33200, 'Bordeaux', 'Location', 800, NULL),
('Maison En centre ville', 'Belle maison, avec 3 chambres, lumineuse et proche des commerces', 33300, 'Bordeaux', 'Vente', 300000, NULL),
('Appart En centre ville', 'Belle Appart, avec 4 chambres, spacieuse et proche des commerces', 33700, 'Bordeaux', 'Vente', 400000, NULL),
('Maison En centre ville', 'Belle maison, avec 6 chambres, spacieuse et proche des commerces', 33800, 'Bordeaux', 'Vente', 500000, NULL),
('Maison En centre ville', 'Belle maison, avec 9 pieces, spacieuse et proche des commerces', 33600, 'Bordeaux', 'Vente', 100000, NULL),
('Appart En centre ville', 'Belle Appart, avec 7 pieces, spacieuse et proche des commerces', 33300, 'Bordeaux', 'Vente', 230000, NULL),
('Maison En centre ville', 'Belle maison, avec 2 chambres, spacieuse', 33200, 'Bordeaux', 'Vente', 500000, NULL),
('Maison En centre ville', 'Belle maisApparton, avec 1 chambres, spacieuse et proche des commerces', 33100, 'Bordeaux', 'Location', 400, NULL),
('Appart En centre ville', 'Belle Appart, avec 2 chambres, spacieuse et proche des commerces', 33500, 'Bordeaux', 'Vente', 500000, NULL),
('Maison En centre ville', 'Belle maison, avec 3 chambres, spacieuse et proche des commerces', 33600, 'Bordeaux', 'Vente', 555000, NULL),
('Maison En centre ville', 'Belle maison, avec 2 chambres, spacieuse et proche des commerces', 33000, 'Bordeaux', 'Vente', 580000, NULL),
('Appart En centre ville', 'Belle Appart, avec 9 pieces, proche des commerces', 33500, 'Bordeaux', 'Vente', 500000, NULL),
('Maison En centre ville', 'Belle maison, avec 5 chambres, spacieuse et proche des commerces', 33900, 'Bordeaux', 'Vente', 760000, NULL),
('Appart En centre ville', 'Belle Appart, avec 5 chambres, spacieuse et proche des commerces', 33700, 'Bordeaux', 'Vente', 555000, NULL)