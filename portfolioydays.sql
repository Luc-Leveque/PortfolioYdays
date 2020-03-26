-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 26 mars 2020 à 11:19
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `portfolioydays`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id_cat` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `titre` varchar(50) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id_cat`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_cat`, `titre`, `description`) VALUES
(1, 'HTML & CSS', 'html_css'),
(2, 'PHP & SQL', 'php_sql'),
(3, 'JS', 'js'),
(6, 'JAVA', 'java'),
(8, 'REACT', 'Framework Js');

-- --------------------------------------------------------

--
-- Structure de la table `description`
--

DROP TABLE IF EXISTS `description`;
CREATE TABLE IF NOT EXISTS `description` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hello_title_1` varchar(255) NOT NULL,
  `hello_title_2` varchar(255) NOT NULL,
  `about` longtext NOT NULL,
  `competence1` varchar(255) NOT NULL,
  `competence2` varchar(255) NOT NULL,
  `competence3` varchar(255) NOT NULL,
  `competence4` varchar(255) NOT NULL,
  `level1` int(11) NOT NULL,
  `level2` int(11) NOT NULL,
  `level3` int(11) NOT NULL,
  `level4` int(11) NOT NULL,
  `ligne_code` int(11) NOT NULL,
  `heure_travail` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `description`
--

INSERT INTO `description` (`id`, `hello_title_1`, `hello_title_2`, `about`, `competence1`, `competence2`, `competence3`, `competence4`, `level1`, `level2`, `level3`, `level4`, `ligne_code`, `heure_travail`) VALUES
(1, 'Bienvenue', 'Je suis Luc Leveque, etudiant en M1 Dev Web', 'Au cours de mes études, j’ai approfondi mes connaissances sur les langages de programmations actuels tel que le PHP et ses frameworks, le HTML/CSS, le SQL, le Javascript et le JAVA. J’ai eu à réaliser différents Projets WEB utilisant ces langages et les outils associés : de versionning tels que Gitub et Gitlab et de méthodologie comme JIRA(Orange). Cette année, dans le cadre de mes projets d’étude j’ai été amené à faire de la chefferie de projet, en direct avec des clients externes partenaires de l’université de Cergy. Actuellement en apprentissage chez Orange je fais partie d’une équipe de développement Agile. La fin du projet est prévue pour mai 2020 et Orange a d’ores et déjà entamé la procédure pour prolonger mon contrat d’alternance.\r\n', 'PHP', 'SQL', 'JAVA', 'JS', 80, 80, 40, 70, 5402, 675);

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

DROP TABLE IF EXISTS `projet`;
CREATE TABLE IF NOT EXISTS `projet` (
  `id_p` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `titre` varchar(50) DEFAULT NULL,
  `description` text,
  `date_deb` date DEFAULT NULL,
  `duree` int(11) DEFAULT NULL,
  `id_cat` smallint(5) UNSIGNED NOT NULL,
  `id_u` smallint(5) UNSIGNED NOT NULL,
  `theme` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`id_p`),
  KEY `id_cat` (`id_cat`),
  KEY `id_u` (`id_u`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Déchargement des données de la table `projet`
--

INSERT INTO `projet` (`id_p`, `titre`, `description`, `date_deb`, `duree`, `id_cat`, `id_u`, `theme`, `type`) VALUES
(4, 'Site Apiculture', 'Site D&eacute;velopp&eacute; en Symfony.\r\nBlog, File d\'actualit&eacute;, Forum. \r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis illo libero placeat consequatur sed, quas, magni ipsum aut hic expedita laboriosam, quo laborum excepturi consequuntur omnis magnam delectus quia maiores.', '2019-01-17', 15, 2, 1, 'Site Vitrine Appiculture', 'Projet Scolaire'),
(6, 'Serendip', 'Permettre au &eacute;diteur de g&eacute;n&eacute;rer, leur fiche de parutions en fontions des diff&eacute;rent livres.\r\nUn crud a &eacute;t&eacute; mise en place pour  gerer les th&egrave;mes,...\r\nSite d&eacute;velop&eacute; en PHP et JS.\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis illo libero placeat consequatur sed, quas, magni ipsum aut hic expedita laboriosam, quo laborum excepturi consequuntur omnis magnam delectus quia maiores.', '2019-03-06', 10, 3, 1, 'Site de gestion de livre', 'Professionnelle'),
(7, 'Coopin', 'Site d&eacute;velop&eacute; en React et Symfony, un chat qui permet &agrave;  personnes de discuter.\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Cumque sequi, quia sit odio deleniti iusto rem tempore accusamus excepturi, atque ipsa, modi tempora recusandae eius itaque dolorem incidunt officia laboriosam.', '2019-04-10', 15, 8, 1, 'Chat', 'Professionnelle');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id_u` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `login` varchar(50) DEFAULT NULL,
  `mdp` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_u`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_u`, `login`, `mdp`, `email`) VALUES
(1, 'admin', '7581f9f7cb4e2c129cf3994be96f620fca5eb4c0', 'admin');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `projet`
--
ALTER TABLE `projet`
  ADD CONSTRAINT `projet_ibfk_1` FOREIGN KEY (`id_cat`) REFERENCES `categorie` (`id_cat`),
  ADD CONSTRAINT `projet_ibfk_2` FOREIGN KEY (`id_u`) REFERENCES `users` (`id_u`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
