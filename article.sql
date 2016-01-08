-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 08 Janvier 2016 à 12:26
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
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `titre` varchar(50) NOT NULL,
  `urlImage` varchar(50) NOT NULL,
  `texte` varchar(3000) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_article` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1124 ;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`id`, `titre`, `urlImage`, `texte`) VALUES
(2, '/!\\ Erreur ajout article /!\\', ' ', 'Cet article est l&agrave; pour v&eacute;rifier la suppression. Si vous le supprimez, veuillez le recr&eacute;er juste apr&egrave;s.\r\n\r\nMerci d&#039;avance ;-) !'),
(101, '/!\\ Article en construction /!\\', ' ', 'Cet article &agrave; pour but de ne jamais &ecirc;tre termin&eacute;. Cela sert &agrave; tester la fonction modifier.\r\n\r\nMerci d&#039;avance de ne pas supprimer cet article !'),
(103, 'Peter Jackson aux commandes', ' ', 'Dans une vid&eacute;o avec sa fille, Peter Jackson se voit contacter par le Docteur (Peter Capaldi) pour r&eacute;aliser un &eacute;pisode de la saison 10 du show Docteur Who. Les fans seront ravis d&#039;apprendre la nouvelle.\r\n\r\n&quot;J&#039;ai toujours eu envie de r&eacute;aliser un &eacute;pisode de Docteur Who&quot; confit Peter Jackson dans la vid&eacute;o. Nous rappelons que Peter Jackson &eacute;tait &agrave; l&#039;oeuvre dans &quot;Le seigneur des anneaux&quot;, &quot;Alien&quot;, ou bien encore &quot;Bienvenue chez les chti 2&quot;.'),
(106, 'La saison 10 ne sera pas en 2016', ' ', 'Il semblerait que Steffen Moffat, le show runner de Doctor Who, pr&eacute;voit de travailler sur Sherlock en 2016. La saison 9 de Doctor Who ne viendra donc surement qu&#039;en 2017. C&#039;est bien dommage tout &ccedil;a, on aurait pas dit non au retour du docteur, qui voyage malheureusement sans Clara d&eacute;sormais. '),
(1123, 'Clara est morte... ?', ' ', 'Alors que tout le monde pensait que Clara allait mourir, Steven Moffat trouve une solution plus &eacute;l&eacute;gante ? Peut-&ecirc;tre...\r\n\r\nLe docteur oubli donc tout sur l&#039;existence de Clara, qui part avec Me dans un autre tardis, prenant la forme d&#039;un Dinner Am&eacute;ricain volant. Pour une fois le processus s&#039;inverse, le docteur est mis de cot&eacute; et se fait rouler par sa compagne de route. Un grande premi&egrave;re pour un docteur vieillissant (dans la chronologie de la s&eacute;rie bien sure, Peter Capaldi est superbe).\r\n\r\nReverrons nous Clara un jour, pour un &eacute;ventuel cam&eacute;o ou une participation &agrave; un &eacute;pisode sp&eacute;ciale ? Ce n&#039;est pas exclut !');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
