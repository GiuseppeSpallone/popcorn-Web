-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versione server:              10.1.21-MariaDB - mariadb.org binary distribution
-- S.O. server:                  Win32
-- HeidiSQL Versione:            9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dump della struttura del database popcorn
CREATE DATABASE IF NOT EXISTS `popcorn` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `popcorn`;

-- Dump della struttura di tabella popcorn.biglietto
CREATE TABLE IF NOT EXISTS `biglietto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_utente` int(11) DEFAULT NULL,
  `titolo` varchar(150) DEFAULT NULL,
  `posto` int(11) DEFAULT NULL,
  `sala` int(11) DEFAULT NULL,
  `orario` time DEFAULT NULL,
  `order_password` varchar(50) DEFAULT NULL,
  `prezzo` double DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK__utente` (`id_utente`),
  CONSTRAINT `FK__utente` FOREIGN KEY (`id_utente`) REFERENCES `utente` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- L’esportazione dei dati non era selezionata.
-- Dump della struttura di tabella popcorn.film
CREATE TABLE IF NOT EXISTS `film` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titolo` varchar(300) NOT NULL,
  `nazione` varchar(300) DEFAULT NULL,
  `anno` year(4) DEFAULT NULL,
  `genere` varchar(150) DEFAULT NULL,
  `durata` int(11) DEFAULT NULL COMMENT 'in minuti',
  `regia` varchar(300) DEFAULT NULL,
  `cast` varchar(300) DEFAULT NULL,
  `produzione` varchar(150) DEFAULT NULL,
  `distribuzione` varchar(150) DEFAULT NULL,
  `data_uscita` date DEFAULT NULL,
  `trama` varchar(400) DEFAULT NULL,
  `id_poster` varchar(150) DEFAULT NULL COMMENT 'path name',
  `in_progr` int(1) DEFAULT NULL COMMENT '1= true, 0 = false',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

-- L’esportazione dei dati non era selezionata.
-- Dump della struttura di tabella popcorn.offerta
CREATE TABLE IF NOT EXISTS `offerta` (
  `id` int(11) NOT NULL,
  `feriale` int(11) NOT NULL,
  `festivo` int(11) NOT NULL,
  `3d` int(11) NOT NULL,
  `3ingressi` int(11) NOT NULL,
  `5ingressi` int(11) NOT NULL,
  `10ingressi` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- L’esportazione dei dati non era selezionata.
-- Dump della struttura di tabella popcorn.orari
CREATE TABLE IF NOT EXISTS `orari` (
  `id_orari` int(11) NOT NULL AUTO_INCREMENT,
  `primo` time DEFAULT NULL,
  `secondo` time DEFAULT NULL,
  `terzo` time DEFAULT NULL,
  PRIMARY KEY (`id_orari`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- L’esportazione dei dati non era selezionata.
-- Dump della struttura di tabella popcorn.preferito
CREATE TABLE IF NOT EXISTS `preferito` (
  `id_film` int(11) NOT NULL,
  `id_utente` int(11) NOT NULL,
  PRIMARY KEY (`id_film`,`id_utente`),
  KEY `FK_preferito_utente` (`id_utente`),
  CONSTRAINT `FK_preferito_film` FOREIGN KEY (`id_film`) REFERENCES `film` (`id`),
  CONSTRAINT `FK_preferito_utente` FOREIGN KEY (`id_utente`) REFERENCES `utente` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- L’esportazione dei dati non era selezionata.
-- Dump della struttura di tabella popcorn.programmazione
CREATE TABLE IF NOT EXISTS `programmazione` (
  `data_inizio` date NOT NULL,
  `data_fine` date NOT NULL,
  PRIMARY KEY (`data_inizio`,`data_fine`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- L’esportazione dei dati non era selezionata.
-- Dump della struttura di tabella popcorn.prog_film
CREATE TABLE IF NOT EXISTS `prog_film` (
  `id_film` int(11) NOT NULL,
  `id_orari` int(11) NOT NULL,
  `id_sale` int(11) NOT NULL,
  PRIMARY KEY (`id_film`,`id_orari`,`id_sale`),
  KEY `FK_prog_film_orari` (`id_orari`),
  KEY `FK_prog_film_sale_film` (`id_sale`),
  CONSTRAINT `FK__film` FOREIGN KEY (`id_film`) REFERENCES `film` (`id`),
  CONSTRAINT `FK_prog_film_orari` FOREIGN KEY (`id_orari`) REFERENCES `orari` (`id_orari`),
  CONSTRAINT `FK_prog_film_sale_film` FOREIGN KEY (`id_sale`) REFERENCES `sale_film` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- L’esportazione dei dati non era selezionata.
-- Dump della struttura di tabella popcorn.sale
CREATE TABLE IF NOT EXISTS `sale` (
  `id_sala` int(11) NOT NULL AUTO_INCREMENT,
  `posti` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_sala`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- L’esportazione dei dati non era selezionata.
-- Dump della struttura di tabella popcorn.sale_film
CREATE TABLE IF NOT EXISTS `sale_film` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_prima` int(11) DEFAULT NULL,
  `id_seconda` int(11) DEFAULT NULL,
  `id_terza` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- L’esportazione dei dati non era selezionata.
-- Dump della struttura di tabella popcorn.sponsor
CREATE TABLE IF NOT EXISTS `sponsor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_img` varchar(100) DEFAULT '0' COMMENT 'path name',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- L’esportazione dei dati non era selezionata.
-- Dump della struttura di tabella popcorn.utente
CREATE TABLE IF NOT EXISTS `utente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `is_admin` int(11) DEFAULT '0' COMMENT '1=true, 0=false',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- L’esportazione dei dati non era selezionata.
-- Dump della struttura di tabella popcorn.voto
CREATE TABLE IF NOT EXISTS `voto` (
  `id_utente` int(11) NOT NULL,
  `id_film` int(11) NOT NULL,
  PRIMARY KEY (`id_utente`,`id_film`),
  KEY `FK_voto_film` (`id_film`),
  CONSTRAINT `FK_voto_film` FOREIGN KEY (`id_film`) REFERENCES `film` (`id`),
  CONSTRAINT `FK_voto_utente` FOREIGN KEY (`id_utente`) REFERENCES `utente` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- L’esportazione dei dati non era selezionata.
-- Dump della struttura di tabella popcorn.voto_film
CREATE TABLE IF NOT EXISTS `voto_film` (
  `id_film` int(11) NOT NULL,
  `voto` int(11) DEFAULT NULL,
  `commento` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_film`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- L’esportazione dei dati non era selezionata.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
