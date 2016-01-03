-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 03 Janvier 2016 à 21:36
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `whovian`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` int(4) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `urlImage` varchar(50) NOT NULL,
  `texte` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`id`, `titre`, `urlImage`, `texte`) VALUES
(1, 'Ouverture du site', '', 'Voici le premier article du site. Le d?but d''une grande r?ussite. Il est 1h59 et je sais plus trop ce que je raconte. J''aime les kangourou, c''est meugnon, hehe. Bon aller, je me casse, salut.'),
(1, 'Ouverture du site', '', 'Voici le premier article du site. Le d?but d''une grande r?ussite. Il est 1h59 et je sais plus trop ce que je raconte. J''aime les kangourou, c''est meugnon, hehe. Bon aller, je me casse, salut.'),
(1, 'Ouverture du site', '', 'Voici le premier article du site. Le d?but d''une grande r?ussite. Il est 1h59 et je sais plus trop ce que je raconte. J''aime les kangourou, c''est meugnon, hehe. Bon aller, je me casse, salut.'),
(1, 'Ouverture du site', '', 'Voici le premier article du site. Le d?but d''une grande r?ussite. Il est 1h59 et je sais plus trop ce que je raconte. J''aime les kangourou, c''est meugnon, hehe. Bon aller, je me casse, salut.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
