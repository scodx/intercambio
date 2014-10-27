

CREATE DATABASE `intercambio` /*!40100 DEFAULT CHARACTER SET utf8 */;
use intercambio;

CREATE TABLE `family` (
  `idfamily` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `family` varchar(255) DEFAULT NULL,
  `passed` int(11) DEFAULT '0',
  `selected` int(11) DEFAULT '0',
  PRIMARY KEY (`idfamily`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


