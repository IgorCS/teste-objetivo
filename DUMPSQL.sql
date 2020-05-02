/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.4.8-MariaDB : Database - 3129549_objetivo
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`3129549_objetivo` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `3129549_objetivo`;

/*Table structure for table `cadastros` */

DROP TABLE IF EXISTS `cadastros`;

CREATE TABLE `cadastros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `colegio` varchar(255) DEFAULT NULL,
  `serie` varchar(255) DEFAULT NULL,
  `data_cadastro` datetime DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=192 DEFAULT CHARSET=utf8;

/*Data for the table `cadastros` */

insert  into `cadastros`(`id`,`nome`,`email`,`colegio`,`serie`,`data_cadastro`) values 
(152,'DANIEL','igorwebfl@gmail.com','TESTE','1 ANO ENSINO MÉDIO','2020-05-01 09:53:29'),
(189,'Davi','davi@gmail.copm','TESTE','3 ANO ENSINO MÉDIO','2020-05-01 10:32:44'),
(191,'Veruska','veuska@veruska.com','TESTE','2 ANO ENSINO MÉDIO','2020-05-02 12:45:26');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
