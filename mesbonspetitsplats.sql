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


-- Listage de la structure de la base pour mesbonspetitsplats
CREATE DATABASE IF NOT EXISTS `mesbonspetitsplats` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `mesbonspetitsplats`;

-- Listage de la structure de table mesbonspetitsplats. plats
CREATE TABLE IF NOT EXISTS `plats` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` float NOT NULL,
  UNIQUE KEY `name` (`name`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table mesbonspetitsplats.plats : ~7 rows (environ)
INSERT INTO `plats` (`id`, `name`, `description`, `price`) VALUES
	(9, 'Assortiment de sushis', 'Préparés avec du poisson frais, riz vinaigré & des légumes.', 19.95),
	(8, 'Boeuf Bourguignon', 'Tendres morceaux de boeuf mijotés au vin rouge. Servi avec ses légumes, herbes & fines herbes.', 18.95),
	(1, 'Burger Gourmet 12', 'Servi avec ses frites maison & une boisson 33cl (au choix).', 14.95),
	(6, 'Crevettes sur sont lit de laitue.', 'Servi avec une mayonnaise maison & des crudités (carottes râpées, concombre et tomates fraichement cueillies)', 13.95),
	(2, 'El Classico', 'Une cuisse de poulet généreusement grillée servie avec ses frites maison & une boisson 33cl (au choix)', 8.95),
	(11, 'Pizza Margherita', 'Garnie de sauce tomate, de mozarella fondante & de feuilles de basilic fraichement cueillies.', 12.95),
	(10, 'Poulet Tikka Masala', 'Morceaux de poulets marinés.\r\nServis avec du savoureux riz basmati dorigine indienne.', 16.95);

-- Listage de la structure de table mesbonspetitsplats. users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `pwd` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table mesbonspetitsplats.users : ~2 rows (environ)
INSERT INTO `users` (`id`, `email`, `pwd`) VALUES
	(1, 'aaa@hotmail.fr', '2428aa591a95db381e4b783ff5430ee7'),
	(3, 'abc@hotmail.fr', '2428aa591a95db381e4b783ff5430ee7');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
