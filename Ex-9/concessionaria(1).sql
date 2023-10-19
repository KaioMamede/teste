/*
SQLyog Community v13.1.5  (64 bit)
MySQL - 5.5.28 : Database - concessionaria
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`concessionaria` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `concessionaria`;

/*Table structure for table `marcas` */

DROP TABLE IF EXISTS `marcas`;

CREATE TABLE `marcas` (
  `marca` varchar(40) NOT NULL,
  PRIMARY KEY (`marca`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `marcas` */

insert  into `marcas`(`marca`) values 
('Alfa Romeo'),
('Audi'),
('BMW'),
('Chevrolet'),
('Citroen'),
('Fiat'),
('Ford'),
('Hyundai'),
('Kia'),
('Mitsubishi'),
('Nissan'),
('Renault'),
('VW');

/*Table structure for table `pecas` */

DROP TABLE IF EXISTS `pecas`;

CREATE TABLE `pecas` (
  `codigo` int(11) NOT NULL,
  `descripcao` varchar(200) DEFAULT NULL,
  `preco` float DEFAULT NULL,
  `tipo` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pecas` */

insert  into `pecas`(`codigo`,`descripcao`,`preco`,`tipo`) values 
(120,'Car Board computer',1200,'A'),
(121,'Ignition computer',950,'A'),
(122,'Pneu 195-R15',220.55,'C'),
(123,'Limpador vidro traseiro',25,'F'),
(124,'Retrovisor',150,'F'),
(125,'Vela 123RE4',30,'H');

/*Table structure for table `veiculos` */

DROP TABLE IF EXISTS `veiculos`;

CREATE TABLE `veiculos` (
  `placa` varchar(50) NOT NULL,
  `marca` varchar(40) NOT NULL,
  `modelo` varchar(40) NOT NULL,
  `ano` int(5) NOT NULL,
  `preco` float NOT NULL,
  PRIMARY KEY (`placa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `veiculos` */

insert  into `veiculos`(`placa`,`marca`,`modelo`,`ano`,`preco`) values 
('ABC-1234','Fiat','Uno',1980,15000),
('ABC-5432','Nissan','Sentra',2014,13900),
('ASD-2121','Ford','Fusion',2015,39000),
('ASE-1801','Audi','A3',2005,65500),
('BBM-0987','Ford','Focus',2010,49000),
('BBN-1233','BMW','X2',2019,36000),
('CDQ-3421','Chevrolet','Tracker',2018,98000),
('DDA-9834','Citroen','C3 Cross',2019,48000),
('DEF-2341','Chevrolet','Onix',2020,65000),
('DEF-9876','Citroen','C4 Pallas',2012,34000),
('FAX-2235','Hyundai','HB2',2021,71000),
('FEW-4321','Chevrolet','Onix',1999,55000),
('FKK-6264','Alfa Romeo','Giulietta',1999,28000),
('GAZ-1985','Mitsubishi','ASX',2019,100800),
('GXX-1944','Audi','A1',1990,85000),
('HDE-4768','Fiat','Palio',2001,25600),
('MMA-1234','Fiat','Linea',2012,66000),
('MNO-6369','Fiat','500',2011,48000);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
