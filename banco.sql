CREATE DATABASE forca;
USE forca;

CREATE TABLE Animais(
	ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Nome VARCHAR(45) NOT NULL
);
CREATE TABLE Comidas(
	ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Nome VARCHAR(45) NOT NULL
);
CREATE TABLE Objetos(
	ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Nome VARCHAR(45) NOT NULL
);
CREATE TABLE Carros(
	ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Nome VARCHAR(45) NOT NULL
);
CREATE TABLE Paises(
	ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Nome VARCHAR(45) NOT NULL
);
CREATE TABLE Frutas(
	ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Nome VARCHAR(45) NOT NULL
);
CREATE TABLE Corpo(
	ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Nome VARCHAR(45) NOT NULL
);

INSERT INTO Animais(nome) VALUES('cobra'),('vaca'),('coelho'),('girafa'),('leao'),('gato'),('cachorro'),('foca'),('hipopotamo'),('rato');
INSERT INTO Comidas(nome) VALUES('lasanha'),('macarrao'),('churrasco'),('panqueca'),('feijoada'),('carreteiro'),('rocambole'),('bife'),('almondega'),('assado');
INSERT INTO Objetos(nome) VALUES('faca'),('mouse'),('televisao'),('dado'),('oculos'),('relogio'),('arpao'),('vela'),('xicara'),('chave');
INSERT INTO Carros (nome) VALUES('monza'),('palio'),('gol'),('veloster'),('toro'),('santana'),('escort'),('ecosport'),('golf'),('civic');
INSERT INTO Paises (nome) VALUES('brasil'),('argentina'),('alemanha'),('mexico'),('canada'),('portugal'),('russia'),('peru'),('australia'),('angola');
INSERT INTO Frutas (nome) VALUES('melancia'),('laranja'),('melao'),('uva'),('tomate'),('banana'),('morango'),('mamao'),('pera'),('acerola');
INSERT INTO Corpo  (nome) VALUES('perda-direita'),('perna-esquerda'),('braco-direiro'),('braco-esquerdo'),('torax'),('cabeca');

DROP DATABASE forca;