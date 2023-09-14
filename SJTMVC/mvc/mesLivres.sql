-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : jeu. 07 sep. 2023 à 14:35
-- Version du serveur : 8.0.33
-- Version de PHP : 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mesLivres`
--

-- --------------------------------------------------------

--
-- Structure de la table `books`
--

CREATE TABLE `books` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `books`
--

INSERT INTO `books` (`id`, `name`, `description`, `price`) VALUES
(18, 'Apprenez les langages HTML5', 'Ce livre s&#039;adresse &agrave; de grands d&eacute;butants en d&eacute;veloppement informatique, qui n&#039;ont jamais programm&eacute; avec HTML5...', 26),
(19, 'Pimpez votre site web grace &agrave; CSS3', 'Con&ccedil;u pour les d&eacute;butants, cet ouvrage vous permettra de styliser vos pages con&ccedil;ues en HTML 5 gr&acirc;ce &agrave; CSS 3...', 25),
(20, 'Oh my code (JS edition)', 'Le JavaScript sert avant tout à rendre les pages web interactives et dynamiques du côté de l’utilisateur, mais il est  également de plus en plus utilisé pour...', 20),
(21, 'PHP 8 by Olivier Heurtrel', 'Ce livre sur PHP 8 (en version 8.0 au moment de l&#039;&eacute;criture) s&#039;adresse aux concepteurs et d&eacute;veloppeurs qui souhaitent utiliser PHP pour d&eacute;velopper...', 35),
(24, 'Les fondamentaux du SQL', 'Ce livre sur les fondamentaux du langage SQL s&#039;adresse aux d&eacute;veloppeurs et informaticiens d&eacute;butants appel&eacute;s &agrave; travailler avec un Syst&egrave;me de Gestion de Bases de Donn&eacute;es Relationnelles (SGBDR)...', 35),
(45, 'Popeye au sky', 'Re-vivez les merveilleuses aventures de Popeye et d&#039;Olive pendant leur s&eacute;jour au ski', 999);

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id` int NOT NULL,
  `contenu` varchar(255) NOT NULL,
  `user_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`id`, `contenu`, `user_id`) VALUES
(1, 'Test de message', 3),
(2, 'Salut Philippe ! Ca dit quoi ?', 3),
(3, 'Ca dit Coubeh et toi ?', 4),
(4, 'YOLO', 4),
(5, 'TEST', 4),
(6, 'YOUPIIII', 4);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `pseudo`, `pass`) VALUES
(3, 'Tata', '$argon2i$v=19$m=65536,t=4,p=1$UzQ1UXNOLloycUVaelBpOQ$2Dm8FGNx2wL1cbZcQYodFuEz/wYXwLWygdylTtfhsEs'),
(4, 'Philippe', '$argon2i$v=19$m=65536,t=4,p=1$WUp3YmtLVVpBU3QyUXRYeA$BYkD0mT1K+s2b7bGSfXuPBrGtd5PxlmooITGHfLBunY'),
(5, 'Try', '$argon2i$v=19$m=65536,t=4,p=1$YUtmNDE4cnRnWWRra3lFMA$EQTandDj/kYA8jm1s9OYUMkxtowlTkDM9RExYhmx2MI');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pseudo` (`pseudo`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `books`
--
ALTER TABLE `books`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
