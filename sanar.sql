#Creación de la base de datos
CREATE DATABASE sanar;

USE sanar;


CREATE TABLE Administrador(
	usuario VARCHAR(45) NOT NULL,
	password CHAR(32) NOT NULL,

CONSTRAINT pk_administrador
PRIMARY KEY (usuario)

) ENGINE=InnoDB;

CREATE TABLE Empleado(
	nombre VARCHAR(45) NOT NULL,
	apellido VARCHAR(45) NOT NULL,
	fecha_nac DATE NOT NULL,
	DNI INT(8) UNSIGNED NOT NULL,
	password CHAR(32) NOT NULL,
	email CHAR(32) NOT NULL,
	provincia CHAR(32) NOT NULL,
	localidad CHAR(32) NOT NULL,
	calle CHAR(32) NOT NULL,
	depto CHAR(32),
	CP INT(4) NOT NULL,
	tel INT(32) NOT NULL,
	rol VARCHAR(45) NOT NULL,
	sucursal VARCHAR(45),

	CONSTRAINT pk_empleado
	PRIMARY KEY (DNI)

) ENGINE=InnoDB;

CREATE TABLE Plan(
	nombre VARCHAR(45) NOT NULL,
	consultas_medicas INT(10) UNSIGNED NOT NULL,
	consultas_medicas_domiciliarias INT(10) UNSIGNED NOT NULL,
	consultas_medicas_onlines INT(10) UNSIGNED NOT NULL,
	internacion INT(10) UNSIGNED NOT NULL,
	odontologia INT(10) UNSIGNED NOT NULL,
	ortodoncia INT(10) UNSIGNED NOT NULL,
	protesis_odontologica INT(10) UNSIGNED NOT NULL,
	implente_odontologico INT(10) UNSIGNED NOT NULL,
	kinesiologia INT(10) UNSIGNED NOT NULL,
	psicologia INT(10) UNSIGNED NOT NULL,
	medicamentos_en_farmacia INT(10) UNSIGNED NOT NULL,
	medicamentos_en_internacion INT(10) UNSIGNED NOT NULL,
	optica INT(10) UNSIGNED NOT NULL,
	cirugia_estetica INT(10) UNSIGNED NOT NULL,
	analisis_clinico INT(10) UNSIGNED NOT NULL,
	analisis_de_diagnostico INT(10) UNSIGNED NOT NULL,
	
	CONSTRAINT pk_plan
	PRIMARY KEY (nombre)

) ENGINE=INNODB;

CREATE TABLE Cliente(
	nombre VARCHAR(45) NOT NULL,
	apellido VARCHAR(45) NOT NULL,
	fecha_nac DATE NOT NULL,
	DNI INT(8) UNSIGNED NOT NULL,
	email CHAR(32) NOT NULL,
	provincia CHAR(32) NOT NULL,
	localidad CHAR(32) NOT NULL,
	calle CHAR(32) NOT NULL,
	depto CHAR(32),
	CP INT(4) NOT NULL,
	tel INT(32) NOT NULL,
	plan VARCHAR(45) NOT NULL,

	CONSTRAINT pk_Cliente
	PRIMARY KEY (DNI),

	CONSTRAINT fk_Cliente_Plan 
	FOREIGN KEY (plan) REFERENCES Plan(nombre)
   	ON DELETE RESTRICT ON UPDATE CASCADE

) ENGINE=INNODB;

CREATE TABLE Cliente_menor(
	nombre VARCHAR(45) NOT NULL,
	apellido VARCHAR(45) NOT NULL,
	fecha_nac DATE NOT NULL,
	DNI INT(8) UNSIGNED NOT NULL,
	parentesco  VARCHAR(45) NOT NULL,
	DNI_tutor INT(8) UNSIGNED NOT NULL,

	CONSTRAINT pk_Cliente_menor
	PRIMARY KEY (DNI),

	CONSTRAINT FK_Cliente_Tutor
 	FOREIGN KEY (DNI_tutor) REFERENCES Cliente(DNI)
   	ON DELETE RESTRICT ON UPDATE CASCADE

) ENGINE=InnoDB;
