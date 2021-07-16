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
