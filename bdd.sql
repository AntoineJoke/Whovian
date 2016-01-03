-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 03 Janvier 2016 à 19:39
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
(1, 'Ouverture du site', '', 'Voici le premier article du site. Le début d''une grande réussite. Il est 1h59 et je sais plus trop ce que je raconte. J''aime les kangourou, c''est meugnon, hehe. Bon aller, je me casse, salut.');

-- --------------------------------------------------------

--
-- Structure de la table `identifiant`
--

CREATE TABLE IF NOT EXISTS `identifiant` (
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `identifiant`
--

INSERT INTO `identifiant` (`login`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `personnage`
--

CREATE TABLE IF NOT EXISTS `personnage` (
  `id` int(4) NOT NULL,
  `numDocteur` varchar(30) NOT NULL,
  `anneeDebut` int(4) NOT NULL,
  `anneeFin` int(4) NOT NULL,
  `acteur` varchar(30) NOT NULL,
  `expFav` varchar(150) NOT NULL,
  `descri` varchar(1000) NOT NULL,
  `urlImage` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `personnage`
--

INSERT INTO `personnage` (`id`, `numDocteur`, `anneeDebut`, `anneeFin`, `acteur`, `expFav`, `descri`, `urlImage`) VALUES
(1, 'Frist', 1963, 1966, 'me', 'Hm. Wat''s that, boy ?', 'Le tout premier docteur.', '/first.jpg'),
(2, 'Second', 1939, 1945, 'elton jhon', 'taggle', 'wesh man', '/second.jpg'),
(3, 'Third', 1111, 1111, 'elton jhon', 'taggle', 'Mais oui !', '/third.jpg'),
(4, 'Fourth', 1111, 1111, 'elton jhon', 'taggle', 'Mais oui !', '/fourth.jpg'),
(5, 'Fifth', 1111, 1111, 'elton jhon', 'taggle', 'Mais oui !', '/fifth.jpg'),
(6, 'Sixth', 1111, 1111, 'elton jhon', 'taggle', 'Mais oui !', '/sixth.jpg'),
(7, 'Seventh', 1111, 1111, 'elton jhon', 'taggle', 'Mais oui !', '/seventh.jpg'),
(8, 'Eighth', 1111, 1111, 'elton jhon', 'taggle', 'Mais oui !', '/eighth.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
