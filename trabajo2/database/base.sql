CREATE DATABASE lecidi;
USE lecidi;

CREATE TABLE Profesor (
id int auto_increment,
nombre varchar(100),
idioma varchar(100),

constraint  pk_Prof primary key (id)
);

CREATE TABLE Estudiante (
id int auto_increment,
nombre varchar(100),
idioma varchar(100),

constraint  pk_Estudiante primary key (id)
);

CREATE TABLE Programacion (
id int auto_increment,
inicio varchar(100),
tipo varchar(100),
id_profesor int,

constraint  pk_Programacion primary key (id),
CONSTRAINT fk_Profesor FOREIGN KEY (id_profesor) REFERENCES Profesor (id)
);

CREATE TABLE Leccion (
id int auto_increment,
numero int,
status varchar(100),
comentario_profesor varchar(1000),
comentario_estudiante varchar(1000),
id_estudiante int,
id_programacion int,

constraint  pk_Leccion primary key (id),
CONSTRAINT fk_estudiante FOREIGN KEY (id_estudiante) REFERENCES Estudiante (id),
CONSTRAINT fk_programacion FOREIGN KEY (id_programacion) REFERENCES Programacion (id)
);