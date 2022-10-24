#Creación de la base de datos
CREATE DATABASE sanar;

USE sanar;


CREATE TABLE Administrador(
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

	CONSTRAINT pk_administrador
	PRIMARY KEY (DNI)

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
	password CHAR(32) NOT NULL,
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

CREATE TABLE Solicitud_reintegro_compra(
	id SMALLINT(3) UNSIGNED NOT NULL AUTO_INCREMENT, 
	DNI_cliente INT(8) UNSIGNED NOT NULL,
	estado VARCHAR(50) NOT NULL,
	cuitcuil BIGINT(22) UNSIGNED NOT NULL,
	fecha DATE NOT NULL,
	orden_medica longblob NOT NULL,
	factura longblob NOT NULL,
	historia_clinica longblob,
	observaciones VARCHAR(100),

	CONSTRAINT pk_Solicitud_reintegro_compra
	PRIMARY KEY (id),

	CONSTRAINT FK_Solicitud_reintegro_compra
 	FOREIGN KEY (DNI_cliente) REFERENCES Cliente(DNI)
   	ON DELETE RESTRICT ON UPDATE CASCADE

) ENGINE=InnoDB;

CREATE TABLE Solicitud_reintegro_prestacion_profesional(
	id SMALLINT(3) UNSIGNED NOT NULL AUTO_INCREMENT, 
	DNI_cliente INT(8) UNSIGNED NOT NULL,
	estado VARCHAR(50) NOT NULL,
	cuitcuil BIGINT(22) UNSIGNED NOT NULL,
	fecha DATE NOT NULL,
	orden_medica longblob NOT NULL,
	factura longblob NOT NULL,
	historia_clinica longblob,
	observaciones VARCHAR(100),

	CONSTRAINT pk_Solicitud_reintegro_prestacion_profesional
	PRIMARY KEY (id),

	CONSTRAINT FK_Solicitud_reintegro_prestacion_profesional
 	FOREIGN KEY (DNI_cliente) REFERENCES Cliente(DNI)
   	ON DELETE RESTRICT ON UPDATE CASCADE

) ENGINE=InnoDB;

CREATE TABLE Solicitud_reintegro_prestacion_institucion(
	id SMALLINT(3) UNSIGNED NOT NULL AUTO_INCREMENT, 
	DNI_cliente INT(8) UNSIGNED NOT NULL,
	estado VARCHAR(50) NOT NULL,
	cuitcuil BIGINT(22) UNSIGNED NOT NULL,
	fecha DATE NOT NULL,
	orden_medica longblob NOT NULL,
	factura longblob NOT NULL,
	historia_clinica longblob,
	observaciones VARCHAR(100),

	CONSTRAINT pk_Solicitud_reintegro_prestacion_institucion
	PRIMARY KEY (id),
	
	CONSTRAINT FK_Solicitud_reintegro_prestacion_institucion
 	FOREIGN KEY (DNI_cliente) REFERENCES Cliente(DNI)
   	ON DELETE RESTRICT ON UPDATE CASCADE

) ENGINE=InnoDB;


CREATE TABLE Solicitud_prestacion_institucion(
	id SMALLINT(3) UNSIGNED NOT NULL AUTO_INCREMENT, 
	DNI_cliente INT(8) UNSIGNED NOT NULL,
	estado VARCHAR(50) NOT NULL,
	nombre_institucion VARCHAR(100),
	direccion_institucion VARCHAR(100),
	fecha DATE NOT NULL,
	orden_medica longblob NOT NULL,
	historia_clinica longblob,
	observaciones VARCHAR(100),

	CONSTRAINT pk_Solicitud_prestacion_institucion
	PRIMARY KEY (id),

	CONSTRAINT FK_Solicitud_prestacion_institucion
 	FOREIGN KEY (DNI_cliente) REFERENCES Cliente(DNI)
   	ON DELETE RESTRICT ON UPDATE CASCADE

) ENGINE=InnoDB;

CREATE TABLE Solicitud_prestacion_profesional(
	id SMALLINT(3) UNSIGNED NOT NULL AUTO_INCREMENT,
	DNI_cliente INT(8) UNSIGNED NOT NULL,
	estado VARCHAR(50) NOT NULL,
	nombre VARCHAR(45) NOT NULL,
	apellido VARCHAR(45) NOT NULL,
	fecha DATE NOT NULL,
	orden_medica longblob NOT NULL,
	historia_clinica longblob,
	observaciones VARCHAR(100),

	CONSTRAINT pk_Solicitud_prestacion_profesional
	PRIMARY KEY (id),

	CONSTRAINT FK_Solicitud_prestacion_profesional
 	FOREIGN KEY (DNI_cliente) REFERENCES Cliente(DNI)
   	ON DELETE RESTRICT ON UPDATE CASCADE

) ENGINE=InnoDB;