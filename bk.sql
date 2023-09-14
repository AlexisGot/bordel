-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           8.0.30 - MySQL Community Server - GPL
-- SE du serveur:                Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour bk
CREATE DATABASE IF NOT EXISTS `bk` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `bk`;

-- Listage de la structure de table bk. chevalet
CREATE TABLE IF NOT EXISTS `chevalet` (
  `id_Chevalet` int NOT NULL AUTO_INCREMENT,
  `Chevalet_couleur` varchar(50) DEFAULT NULL,
  `Chevalet_marque` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_Chevalet`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table bk.chevalet : ~5 rows (environ)
INSERT INTO `chevalet` (`id_Chevalet`, `Chevalet_couleur`, `Chevalet_marque`) VALUES
	(1, 'Rouge', 'BurgerKing'),
	(2, 'Rouge', 'BurgerKing'),
	(3, 'Rouge', 'BurgerKing'),
	(4, 'Rouge', 'BurgerKing'),
	(5, 'Rouge', 'BurgerKing');

-- Listage de la structure de table bk. client
CREATE TABLE IF NOT EXISTS `client` (
  `Id_Client` int NOT NULL AUTO_INCREMENT,
  `cli_nom` varchar(50) DEFAULT NULL,
  `cli_prenom` varchar(50) DEFAULT NULL,
  `cli_email` varchar(50) DEFAULT NULL,
  `cli_password` varchar(50) DEFAULT NULL,
  `id_Chevalet` int DEFAULT NULL,
  PRIMARY KEY (`Id_Client`),
  KEY `client_ibfk_1` (`id_Chevalet`),
  CONSTRAINT `client_ibfk_1` FOREIGN KEY (`id_Chevalet`) REFERENCES `chevalet` (`id_Chevalet`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table bk.client : ~2 rows (environ)
INSERT INTO `client` (`Id_Client`, `cli_nom`, `cli_prenom`, `cli_email`, `cli_password`, `id_Chevalet`) VALUES
	(1, 'Wong', 'Jerome', 'j@hotmail.fr', 'dsfdsfsdf', 1),
	(3, 'Dalor', 'Homer', 'aurevoirboujou@gmail.com', '123testPepito', 2);

-- Listage de la structure de table bk. commande
CREATE TABLE IF NOT EXISTS `commande` (
  `Id_Commande` int NOT NULL AUTO_INCREMENT,
  `prix_commande` decimal(15,2) DEFAULT NULL,
  `date_commande` datetime DEFAULT NULL,
  `Id_Client` int NOT NULL,
  `id_Chevalet` int DEFAULT NULL,
  PRIMARY KEY (`Id_Commande`),
  KEY `id_Chevalet` (`id_Chevalet`),
  KEY `commande_ibfk_1` (`Id_Client`),
  CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`Id_Client`) REFERENCES `client` (`Id_Client`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `commande_ibfk_2` FOREIGN KEY (`id_Chevalet`) REFERENCES `chevalet` (`id_Chevalet`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table bk.commande : ~7 rows (environ)
INSERT INTO `commande` (`Id_Commande`, `prix_commande`, `date_commande`, `Id_Client`, `id_Chevalet`) VALUES
	(1, 34.99, '2023-08-25 14:17:00', 1, 1),
	(4, 10.99, '2014-06-23 18:12:00', 3, 4),
	(5, 10.99, '2023-08-28 09:45:02', 1, 3),
	(6, 100.99, '2023-08-28 09:45:25', 3, 1),
	(7, 2000.99, '2023-08-28 09:45:41', 3, 5),
	(8, 10.00, '2018-08-28 09:53:18', 1, 2),
	(9, 10000.00, '2018-08-28 09:53:40', 1, 1);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
