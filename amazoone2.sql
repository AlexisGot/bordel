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

-- Listage de la structure de table amazoone2. products
CREATE TABLE IF NOT EXISTS `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `designation` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `prix` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table amazoone2.products : ~7 rows (environ)
INSERT INTO `products` (`id`, `designation`, `img`, `prix`) VALUES
	(3, 'Peluche Digiplouk', 'https://m.media-amazon.com/images/I/51KY4F8uyIL._AC_UL600_FMwebp_QL65_.jpg', 0.01),
	(13, 'Ratio', 'https://pbs.twimg.com/media/Ca1qyzHWIAAoDyl.jpg', 0),
	(14, 'Apagnan', 'https://blog.artsper.com/wp-content/uploads/2022/06/pepefroggie-770x432-2-644x362.jpg', 0),
	(15, 'What ??', 'https://i.kym-cdn.com/photos/images/newsfeed/002/297/367/31d.jpg', 3.54),
	(16, 'STONKS', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcROjfDTghEmMns99jBtOkpQrfBN19Xfw4W2Kg&usqp=CAU', 0),
	(17, '????', 'https://images7.memedroid.com/images/UPLOADED409/5fe901426a702.jpeg', 0.01),
	(18, 'Thanos', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ954GKyNst1-fN_tX-Cz9eAB_82QFTNTGy_g&usqp=CAU', 0);

-- Listage de la structure de table amazoone2. users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `pwd` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table amazoone2.users : ~6 rows (environ)
INSERT INTO `users` (`id`, `email`, `pwd`) VALUES
	(1, 'email@hotmail.fr', 'motdepasse1'),
	(2, 'test@outlook.fr', 'test44'),
	(3, 'pasdidée@hotmail.com', 'MacronLeGoat'),
	(4, 'Pastabox@hotmail.fr', 'nnn3'),
	(5, 'Lala@hotmail.fr', '32f4b3564f0b85c3e1aad7b9731948fe'),
	(11, 'aaa@domaine1.com', 'b645f88f4b3633bde344a09a2ab32faf');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
