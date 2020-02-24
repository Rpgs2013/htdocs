CREATE DATABASE Task;
USE TASK;

CREATE TABLE tarea1 (
	id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(25),
    description VARCHAR(255)
);

INSERT INTO tarea1 VALUES(0, "Write", "I have to write an article.");
INSERT INTO tarea1 VALUES(0, "Create web", "I have to create a website.");