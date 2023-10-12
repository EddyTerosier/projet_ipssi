-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 12 oct. 2023 à 07:18
-- Version du serveur : 8.0.31
-- Version de PHP : 8.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `addidous`
--

-- --------------------------------------------------------

--
-- Structure de la table `chaussures`
--

DROP TABLE IF EXISTS `chaussures`;
CREATE TABLE IF NOT EXISTS `chaussures` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `prix` decimal(6,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `chaussures`
--

INSERT INTO `chaussures` (`ID`, `name`, `description`, `prix`, `image`) VALUES
(1, 'Chaussures de course', 'Des chaussures de sport confortables pour la course à pied.', '79.99', 'assets/banniere-chaussures.jpg'),
(2, 'Chaussures de randonnée', 'Des chaussures robustes conçues pour la randonnée en plein air.', '99.99', 'assets/banniere-chaussures.jpg'),
(3, 'Chaussures de soirée', 'Des chaussures élégantes pour des occasions spéciales.', '49.99', 'assets/banniere-chaussures.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `session`
--

DROP TABLE IF EXISTS `session`;
CREATE TABLE IF NOT EXISTS `session` (
  `sessionid` int NOT NULL,
  `userid` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`) VALUES
(1, 'John', 'Doe', 'John.doe@hotmail.com', '123'),
(14, 'test', 'test', 'test@test.com', '$argon2id$v=19$m=65536,t=4,p=1$SGJWVFhkRmttNlZvVHpMZw$O3nPjo7+71LhaMeMZPuqg55DZa9kdWCOivUPzz4KHpA'),
(15, 'salut', 'salut', 'salut@salut.com', '$argon2id$v=19$m=65536,t=4,p=1$bFRwcDhVakIxTUVxYUoxUQ$UnJensEQyN+a19rDeJoHolPN2PQ3y7EDYtNvVEq0slQ');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
