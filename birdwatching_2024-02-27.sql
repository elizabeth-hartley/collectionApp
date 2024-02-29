# ************************************************************
# Sequel Ace SQL dump
# Version 20062
#
# https://sequel-ace.com/
# https://github.com/Sequel-Ace/Sequel-Ace
#
# Host: 127.0.0.1 (MySQL 11.2.2-MariaDB-1:11.2.2+maria~ubu2204)
# Database: birdwatching
# Generation Time: 2024-02-27 14:04:27 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE='NO_AUTO_VALUE_ON_ZERO', SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table birds
# ------------------------------------------------------------

DROP TABLE IF EXISTS `birds`;

CREATE TABLE `birds` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `season` varchar(255) NOT NULL,
  `habitat` varchar(255) NOT NULL,
  `estimatedUKpopulation` int(11) NOT NULL,
  `ageSpanYear` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

LOCK TABLES `birds` WRITE;
/*!40000 ALTER TABLE `birds` DISABLE KEYS */;

INSERT INTO `birds` (`id`, `name`, `color`, `season`, `habitat`, `estimatedUKpopulation`, `ageSpanYear`)
VALUES
	(1,'Honey Buzzard','Brown','Summer','Woodland',109,9),
	(2,'Goshawk','Grey & White','Winter','Woodland',1200,7),
	(3,'Marsh Harrier','White & Brown','Winter','Coastal',500,6),
	(4,'Hen Harrier','White & Black ','Winter','Moorland',1400,7),
	(5,'Buzzard','Brown','Winter','Grassland',70000,12),
	(6,'Sparrowhawk','Grey & Brown','Winter','Farmland',32000,4),
	(7,'Kestrel','Grey & Brown','Winter','Wetland',31000,4),
	(8,'Hobby','Cream & Brown','Summer','Moorland',2050,5),
	(9,'Peregrine Falcon','Beige & Brown','Winter','Farmland',3000,6),
	(10,'Merlin','Beige & Brown','Winter','Wetland',2200,3),
	(11,'Tawny Owl','Amber','Winter','Farmland',50000,4),
	(12,'Short-eared Owl','Cream & Brown','Winter','Coastal',1550,9),
	(13,'Long-eared Owl','Cream & Grey','Winter','Grassland',3600,4),
	(14,'Little Owl','Cream & Brown','Winter','Wetland',5600,3),
	(15,'White-tailed Eagle ','Cream & Brown','Winter','Coastal',320,20),
	(16,'Barn Owl','Cream & Beige','Winter','Coastal',9000,4),
	(17,'Golden Eagle','Beige & Brown','Winter','Moorland',700,23),
	(18,'Red Kite','Beige & Brown','Winter','Farmland',4500,4),
	(19,'Osprey','Cream & Beige','Summer','Wetlands',1500,9);

/*!40000 ALTER TABLE `birds` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
