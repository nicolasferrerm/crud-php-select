/*
SQLyog Trial v13.1.7 (64 bit)
MySQL - 5.5.24-log : Database - hospital
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`hospital` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `hospital`;

/*Table structure for table `alta_paciente` */

DROP TABLE IF EXISTS `alta_paciente`;

CREATE TABLE `alta_paciente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_salida` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tratamiento_realizado` varchar(255) NOT NULL,
  `temperatura` int(11) NOT NULL,
  `acompanante` varchar(255) NOT NULL,
  `receta_medica` varchar(255) NOT NULL,
  `paciente_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `paciente_id` (`paciente_id`),
  CONSTRAINT `alta_paciente_ibfk_1` FOREIGN KEY (`paciente_id`) REFERENCES `pacientes` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `alta_paciente` */

insert  into `alta_paciente`(`id`,`fecha_salida`,`tratamiento_realizado`,`temperatura`,`acompanante`,`receta_medica`,`paciente_id`) values 
(2,'2020-10-27 00:00:00','Se receto acetaminofen',30,'Mama de Neymer Jr.','Aciclovir',6);

/*Table structure for table `asignacion_medicos` */

DROP TABLE IF EXISTS `asignacion_medicos`;

CREATE TABLE `asignacion_medicos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `medico_id` int(11) NOT NULL,
  `n_cama` int(11) NOT NULL,
  `diagnostico` year(4) NOT NULL,
  `gravedad_malestar` varchar(255) NOT NULL,
  `paciente_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `medico_id` (`medico_id`),
  KEY `paciente_id` (`paciente_id`),
  CONSTRAINT `asignacion_medicos_ibfk_2` FOREIGN KEY (`paciente_id`) REFERENCES `pacientes` (`id`) ON DELETE CASCADE,
  CONSTRAINT `asignacion_medicos_ibfk_1` FOREIGN KEY (`medico_id`) REFERENCES `medicos` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `asignacion_medicos` */

insert  into `asignacion_medicos`(`id`,`medico_id`,`n_cama`,`diagnostico`,`gravedad_malestar`,`paciente_id`) values 
(3,7,38,0000,'Leve',6);

/*Table structure for table `medicos` */

DROP TABLE IF EXISTS `medicos`;

CREATE TABLE `medicos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `identificacion` int(11) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `telefono` int(10) NOT NULL,
  `barrio` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `medicos` */

insert  into `medicos`(`id`,`nombres`,`apellidos`,`identificacion`,`direccion`,`telefono`,`barrio`) values 
(7,'Ivan','Bernal',1001878316,'Carrera 49 54D - 41',2147483647,'Villa severa');

/*Table structure for table `pacientes` */

DROP TABLE IF EXISTS `pacientes`;

CREATE TABLE `pacientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `identificacion` int(11) NOT NULL,
  `tipo_identificacion` varchar(255) NOT NULL,
  `edad` int(11) NOT NULL,
  `genero` varchar(255) NOT NULL,
  `temperatura` int(11) NOT NULL,
  `malestar_informado` varchar(500) NOT NULL,
  `fecha_ingreso` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `eps` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `pacientes` */

insert  into `pacientes`(`id`,`nombre`,`identificacion`,`tipo_identificacion`,`edad`,`genero`,`temperatura`,`malestar_informado`,`fecha_ingreso`,`eps`) values 
(6,'Neymar Jr',1001878316,'Pasaporte',20,'Masculino',36,'Dolor de estomago','2020-10-26 00:00:00','SOLSALUD');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
