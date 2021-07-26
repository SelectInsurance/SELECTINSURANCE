--Base de Datos de CRM
DROP DATABASE IF EXISTS CRM_SELECT ;

CREATE  DATABASE IF NOT EXISTS CRM_SELECT;

USE CRM_SELECT;

CREATE TABLE Prospectos(
    idProspecto INT AUTO_INCREMENT PRIMARY KEY,
    nombreProspecto VARCHAR (255) NOT NULL,
    apellidoProspecto VARCHAR (255) NOT NULL,
    correoProspecto VARCHAR (255) NOT NULL,
    telefonoProspecto VARCHAR (100) NOT NULL,
    estadoProspecto VARCHAR (50) NOT NULL, 
    servicioProspecto VARCHAR (50) NOT NULL,
    fechaProspecto datetime NOT NULL DEFAULT current_timestamp()
);

CREATE TABLE UsuarioPageAgentes(
    idUsuario INTEGER AUTO_INCREMENT PRIMARY KEY,
    Usuario VARCHAR (50) NOT NULL,
    Password VARCHAR (50) NOT NULL
);

CREATE TABLE UsuarioManagment(
    idUsuario INTEGER AUTO_INCREMENT PRIMARY KEY,
    Usuario VARCHAR (50) NOT NULL,
    Password VARCHAR (50) NOT NULL
);

CREATE TABLE VideosDeSalud(
    idVideo INTEGER AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR (50) NOT NULL,
    URL VARCHAR (255) NOT NULL
);

CREATE TABLE VideosAnico(
    idVideo INTEGER AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR (50) NOT NULL,
    URL VARCHAR (255) NOT NULL
);

CREATE TABLE VideosAmeritas(
    idVideo INTEGER AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR (50) NOT NULL,
    URL VARCHAR (255) NOT NULL
);

CREATE TABLE VideosNationalLife(
    idVideo INTEGER AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR (50) NOT NULL,
    URL VARCHAR (255) NOT NULL
);

CREATE TABLE Calendario(
    id INTEGER AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR (255) NOT NULL,
    date VARCHAR (50) NOT NULL,
    description VARCHAR (255) NOT NULL,
    type VARCHAR (50) NOT NULL,
    everyYear BOOLEAN NOT NULL,
    badge VARCHAR (50) NOT NULL,
    color VARCHAR (50) NOT NULL
);


CREATE TABLE CrearPagina(
    id INTEGER AUTO_INCREMENT PRIMARY KEY,
    Titulo VARCHAR(50) NOT NULL,
    URL VARCHAR(255) NOT NULL
);











INSERT INTO UsuarioManagment(
    Usuario,
    Password
) VALUES(
    'admin',
    '321'
);

INSERT INTO UsuarioPageAgentes(
    Usuario,
    Password
) VALUES(
    'admin',
    '123'
);
INSERT INTO Prospectos(
    nombreProspecto,
    apellidoProspecto,
    correoProspecto,
    telefonoProspecto,
    estadoProspecto,
    servicioProspecto
) VALUES(
    'Cristian',
    'Aguirre',
    'Dextter1913@gmail.com',
    '3166857000',
    'Texas',
    'seguro de vida'
);
