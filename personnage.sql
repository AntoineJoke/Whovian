-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 03 Janvier 2016 à 21:35
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
(1, 'One', 1963, 1966, 'William Hartnell', 'I am a citizen of the universe, and a gentleman to boot!', 'Lors de sa premiere apparition, le personnage porte un costume de l''epoque edouardienne avec un grand manteau. Ce Docteur possede une canne et l''on peut le voir occasionnellement fumer la pipe.', 'first.jpg'),
(2, 'Two', 1939, 1945, 'Patrick Troughton', 'Oh, my giddy aunt!', 'Il prend l''apparence d''un homme allant visiblement sur ses cinquante ans : ses cheveux sont noirs et coiffes en une sorte de coupe au bol à  l''ancienne. Ses yeux, cernes, sont bleu clair. Sa tenue est assez similaire à celle que portait le premier Docteur, bien que plutot debraillee : son pantalon, assez large et à carreaux, fait penser à  celui d''un clown. Il a également abandonne la cravate pour lui preferer un nœud papillon, souvent noue de travers.', 'second.jpg'),
(3, 'Three', 1970, 1974, 'Jon Pertwee', 'My dear Miss Shaw, I never report myself anywhere, particularly not forthwith', 'Le personnage du 3e Docteur aborde une abondante chevelure blonde tres " 70''s " et porte des vestes amples. Il est surnomme par les fans le " Dandy ".', 'third.jpg'),
(4, 'Four', 1974, 1981, 'Tom Baker', 'Would you like a jelly baby?', 'Le personnage se reconnait surtout par sa longue echarpe bariolee et un look inspire d''Aristide Bruant. ', 'fourth.jpg'),
(5, 'Five', 1981, 1984, 'Peter Davison', 'Brave Heart, Tegan', 'Ce Docteur porte un costume de cricket blanc immacule sur lequel a ete posee une branche de celeri (servant à detecter des gaz auxquels le Docteur est allergique) et occasionnellement un chapeau.', 'fifth.jpg'),
(6, 'Six', 1984, 1986, 'Colin Baker', 'Intolerant. Intolerant? INTOLERANT!!, ME?!!', 'Ce Docteur presente un costume totalement bariole avec une veste aux couleurs de l''arc-en-ciel, en contraste volontaire avec sa personnalite.', 'sixth.jpg'),
(7, 'Seven', 1987, 1989, 'Sylvester McCoy', 'You can always judge a man by the quality of his enemies.', 'Ce Docteur porte un costume en tweed agremente d''une cravate, le faisant ressembler à un professeur. Il porte assez souvent un Panama.', 'seventh.jpg'),
(8, 'Eight', 1996, 1996, 'Paul McGann', 'Grace, I came back to life before your eyes. I held back death. Look, I can’t make your dream come true forever, but I can make it come true today', 'Mais oui !', 'eighth.jpg'),
(9, 'War Doctor', 2013, 2013, 'John Hurt', 'No More', 'Le War Doctor succede chronologiquement au huitieme Docteur.', 'war.jpg'),
(10, 'Nine', 2005, 2005, 'Christopher Eccleston', 'Fantastic', 'Il porte simplement une veste en cuir et a les cheveux tres courts.', 'ninth.jpg'),
(11, 'Ten', 2005, 2010, 'David Tennant', 'Allons-y', 'Le 10e Docteur porte un costume marron ou bleu avec une cravate agremente d''une paire de Chuck Taylor All Star generalement rouges. On le voit assez souvent arborer de petites lunettes rectangulaires, qu''il admet lui-même porter " juste pour faire intello ". Il se couvre en outre d''un long manteau marron clair, qui lui a ete donne par Janis Joplin', 'tenth.jpg'),
(12, 'Eleven', 2010, 2013, 'Matt Smith', 'Geronimo', 'Il porte une veste en tweed ainsi qu''un nœud papillon et des bretelles. Il aime s''affubler de chapeaux extravagants, comme un fez ou un Stetson. Dans la seconde partie de la saison 7, sa veste en tweed est remplace par un gilet assorti d''une redingote, et ses nœuds-papillon passent d''une alternance bleu-rouge à des couleurs plus sombres et ont souvent des motifs.', 'eleventh.jpg'),
(13, 'Twelve', 2013, 2015, 'Peter Capaldi', 'Empty', 'Le douzième Docteur semble plus froid et plus sombre que ses predecesseurs, mais est en realite incapable de communiquer normalement avec ceux qui l''entoure. ', 'twelfth.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
