DROP DATABASE IF EXISTS alquilerCoches;
CREATE DATABASE alquilerCoches;

USE alquilerCoches;

CREATE TABLE coches (
	id_coche int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    matricula varchar(25) NOT NULL UNIQUE,
    marca varchar(25) NOT NULL, 
    color varchar(25)  NOT NULL
);
    
CREATE TABLE clientes (
	id_cliente int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    dni varchar(9) NOT NULL UNIQUE,
    nombre varchar(50) NOT NULL,
    ap1 varchar(25) NOT NULL,
    ap2 varchar(25) NOT NULL,
    id_coche int NOT NULL,
    FOREIGN KEY (id_coche) REFERENCES coches(id_coche)
);

INSERT into coches 
VALUES (0, "3213213WTF", "Peugeot", "Rojo"),
 (0, "4123123GDS", "Mercedes", "Amarillo");

INSERT into clientes 
VALUES (0, "48524436W", "Raúl", "Gallego", "Sandoval", 1),
(0, "5424436W", "Paco", "Lopez", "Lopes", 2);
