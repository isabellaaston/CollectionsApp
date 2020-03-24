# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.29)
# Database: MyCollection
# Generation Time: 2020-03-24 09:31:05 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table Bags
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Bags`;

CREATE TABLE `Bags` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `Brand` varchar(255) DEFAULT NULL,
  `Model` varchar(255) DEFAULT NULL,
  `Price` float DEFAULT NULL,
  `Materials` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `Bags` WRITE;
/*!40000 ALTER TABLE `Bags` DISABLE KEYS */;

INSERT INTO `Bags` (`id`, `Brand`, `Model`, `Price`, `Materials`)
VALUES
	(1,'Louis Vuitton','Artsy MM',2270,'Leather, gold plated hardware'),
	(2,'Chloé','Faye Small Bag',1435,'Lambskin, goatskin, calfskin lining, pale gold and silver finishings'),
	(3,'Stella McCartney','Falabella Fold Over Tote',855,'100% Polyester, lining 100% ECONYL® recycled nylon'),
	(4,'Balenciaga','Hourglass Small Beltbag',595,'Mixed Fibers, Lambskin & Gold-Tone Metal'),
	(5,'Dior','Lady Dior Ultra-Matte Bag',3500,'Calfskin, ultra matte-finish metal'),
	(6,'Alexander McQueen','Jewelled Satchel ',1650,'Brass hardware, suede lining, calfskin'),
	(7,'Alexander McQueen','Skull Four Ring Box Clutch',1550,'Brass hardware, suede lining, calfskin'),
	(8,'Zadig & Voltaire','Pochette Rock Velvet Bowie',275,'Polyester');

/*!40000 ALTER TABLE `Bags` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
