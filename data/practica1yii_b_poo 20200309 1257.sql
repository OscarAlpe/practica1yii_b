﻿--
-- Script was generated by Devart dbForge Studio for MySQL, Version 8.0.40.0
-- Product home page: http://www.devart.com/dbforge/mysql/studio
-- Script date 09/03/2020 12:57:06
-- Server version: 5.5.5-10.1.40-MariaDB
-- Client version: 4.1
--

-- 
-- Disable foreign keys
-- 
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;

-- 
-- Set SQL mode
-- 
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- 
-- Set character set the client will use to send SQL statements to the server
--
SET NAMES 'utf8';

DROP DATABASE IF EXISTS practica1yii_b_poo;

CREATE OR REPLACE DATABASE practica1yii_b_poo
	CHARACTER SET latin1
	COLLATE latin1_spanish_ci;

--
-- Set default database
--
USE practica1yii_b_poo;

--
-- Create table `mensajes`
--
CREATE OR REPLACE TABLE mensajes (
  id int(11) NOT NULL AUTO_INCREMENT,
  mensaje varchar(255) DEFAULT NULL,
  PRIMARY KEY (id)
)
ENGINE = INNODB,
AUTO_INCREMENT = 4,
AVG_ROW_LENGTH = 5461,
CHARACTER SET latin1,
COLLATE latin1_spanish_ci;

--
-- Create table `libros`
--
CREATE OR REPLACE TABLE libros (
  id int(11) NOT NULL AUTO_INCREMENT,
  isbn varchar(255) DEFAULT NULL,
  titulo varchar(255) DEFAULT NULL,
  fecha_publicacion date DEFAULT NULL,
  PRIMARY KEY (id)
)
ENGINE = INNODB,
AUTO_INCREMENT = 3,
AVG_ROW_LENGTH = 8192,
CHARACTER SET latin1,
COLLATE latin1_spanish_ci;

--
-- Create table `autores`
--
CREATE OR REPLACE TABLE autores (
  id int(11) NOT NULL AUTO_INCREMENT,
  nombre varchar(255) DEFAULT NULL,
  apellidos varchar(255) DEFAULT NULL,
  PRIMARY KEY (id)
)
ENGINE = INNODB,
AUTO_INCREMENT = 5,
AVG_ROW_LENGTH = 4096,
CHARACTER SET latin1,
COLLATE latin1_spanish_ci;

-- 
-- Dumping data for table mensajes
--
INSERT INTO mensajes VALUES
(1, 'Mensaje 1'),
(2, 'Mensaje 2'),
(3, 'Mensaje 3');

-- 
-- Dumping data for table libros
--
INSERT INTO libros VALUES
(1, 'A1', 'Libro 1', '2001-01-01'),
(2, 'A2', 'Libro 2', '2002-01-01');

-- 
-- Dumping data for table autores
--
INSERT INTO autores VALUES
(1, 'Autor 1', 'Apellidos 1'),
(2, 'Autor 2', 'Apellidos 2'),
(3, 'Autor 3', 'Apellidos 3'),
(4, 'Autor 4', 'Apellidos 4');

-- 
-- Restore previous SQL mode
-- 
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;

-- 
-- Enable foreign keys
-- 
/*!40014 SET FOREIGN_KEY_CHECKS = @OLD_FOREIGN_KEY_CHECKS */;