CREATE DATABASE NBA;
USE NBA;

CREATE TABLE Jugador (
id int auto_increment  not null Primary Key,
nombre VARCHAR(250) ,
ap1 VARCHAR(250),
ap2 VARCHAR(250)
);
 
 CREATE TABLE Equipo (
 id int auto_increment primary key,
 nombre varchar(250),
 p_ganados int,
 p_perdidos int,
 foreign key (id) REFERENCES Jugador (id)
);
 
 CREATE TABLE Partido (
 id int auto_increment not null primary key,
 fecha date,
 resultado varchar(250)
);

INSERT INTO JUGADOR
VALUES (0, "Kobee", "Pam", "Brian");
INSERT INTO JUGADOR
VALUES (0, "Paco", "Lopez", "Lopes");

INSERT INTO EQUIPO
VALUES (0, "Lakers", "37", "11");
INSERT INTO EQUIPO
VALUES (0, "PacoEquipo", "50", "10");

INSERT INTO PARTIDO
VALUES (0, '2019-02-20', "POSITIVO");
INSERT INTO PARTIDO
VALUES (0, '2019-01-10', "NEGATIVO");