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


-- Listage de la structure de la base pour pays
CREATE DATABASE IF NOT EXISTS `pays` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `pays`;

-- Listage de la structure de table pays. suisse
CREATE TABLE IF NOT EXISTS `suisse` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ville` varchar(255) NOT NULL DEFAULT '0',
  `description` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '0',
  `img` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table pays.suisse : ~4 rows (environ)
INSERT INTO `suisse` (`id`, `ville`, `description`, `img`) VALUES
	(1, 'Zurich', 'Fusce at dui quis metus scelerisque laoreet. Duis vel dolor cursus, luctus nulla quis, mollis turpis. Cras venenatis eget nibh et ornare. Sed gravida lacus quis est laoreet blandit. Maecenas mi urna, tristique sed augue at, ornare tempus nisi. Integer tristique sapien vel purus sagittis, quis molestie lectus iaculis.', 'https://www.zuerich.com/sites/default/files/styles/1216_684_focal_scale_crop/public/image/2022/web_zuerich_z%C3%BCrichsee_1280x960_7907_0.jpg?h=1655731323'),
	(2, 'Genève', 'Fusce mattis ipsum tellus, nec suscipit mauris fermentum non. Etiam id ultrices augue. Mauris porta sem nec augue viverra ornare. Pellentesque eget est eget ante condimentum iaculis. Mauris id dapibus urna, sed volutpat augue. In iaculis dolor a pharetra suscipit. Donec eu ligula ut nisl fermentum cursus quis sit amet arcu. ', 'https://planetofhotels.com/guide/sites/default/files/styles/paragraph__live_banner__lb_image__1880bp/public/live_banner/Geneva-1.jpg'),
	(3, 'Bâle', 'Proin venenatis turpis ac purus dignissim, id congue odio convallis. Praesent quis cursus tortor. Nullam et pulvinar nunc, in venenatis nibh. Quisque augue massa, facilisis dignissim facilisis eu, sollicitudin id lacus. Sed luctus et turpis condimentum tincidunt. In et lorem et erat tincidunt ultricies. Vestibulum et justo sit amet metus vulputate iaculis.', 'https://img-4.linternaute.com/4nWXt4GIII4Jjey38BL0TxUD_M4=/1500x/smart/2a360fd880064b6489d2aa4b94900bd3/ccmcms-linternaute/20141239.jpg'),
	(4, 'Lausanne', 'Fusce blandit mauris sed imperdiet sodales. Vivamus sed vulputate justo. Maecenas dignissim et neque sit amet laoreet. In aliquam laoreet lacus, id egestas enim bibendum a. Vivamus ultricies accumsan turpis, id porttitor lacus laoreet eget. Morbi viverra rhoncus pulvinar. Sed interdum aliquam interdum. Mauris rhoncus urna et diam lobortis blandit.', 'https://www.lausanne-tourisme.ch/app/uploads/2020/03/Vue-Generale-1-7-1024x682.jpg');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
