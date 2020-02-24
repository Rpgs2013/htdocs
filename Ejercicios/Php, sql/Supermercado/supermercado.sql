CREATE DATABASE supermercado;
USE supermercado;

CREATE TABLE productos(

	id_producto INT PRIMARY KEY AUTO_INCREMENT,
    nombre_producto VARCHAR (40),
    empresa VARCHAR (50),
    precio FLOAT
);

CREATE TABLE ofertas(

	id_oferta INT PRIMARY KEY AUTO_INCREMENT,
    id INT,
    descuento FLOAT,
    fecha_inicio DATETIME,
    fecha_final DATETIME,
    
    FOREIGN KEY (id) REFERENCES productos(id_producto)
    
    ON DELETE CASCADE
    ON UPDATE CASCADE

);


INSERT INTO productos
VALUES (0, 'League of Legends', 'Riot Games', 0.1);

SELECT * FROM productos;