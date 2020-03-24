-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 21 nov. 2019 à 17:09
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
-- Base de données :  `portfolio`
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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_cat`, `titre`, `description`) VALUES
(1, 'HTML & CSS', 'html_css'),
(2, 'PHP & SQL', 'php_sql'),
(3, 'JS', 'js'),
(4, 'JQUERY', 'jquery'),
(5, 'BOOTSTRAP', 'bootstrap'),
(6, 'JAVA', 'java');

-- --------------------------------------------------------

--
-- Structure de la table `competence`
--

DROP TABLE IF EXISTS `competence`;
CREATE TABLE IF NOT EXISTS `competence` (
  `id_comp` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `titre` varchar(50) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id_comp`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `competence`
--

INSERT INTO `competence` (`id_comp`, `titre`, `description`) VALUES
(1, 'A.1', 'Lorem'),
(2, 'A.3', 'Lorem'),
(3, 'A.2', 'Lorem'),
(4, 'A.4', 'Lorem'),
(5, 'A.5', 'Lorem');

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
(1, 'Bienvenue', 'Je suis Luc Leveque, etudiant en M1 Dev Web', 'Aliquam pellentesque nunc enim, vel posuere velit commodo blandit. Proin lobortis, nunc id fringilla hendrerit, est metus efficitur massa, sed euismod neque sem id ligula. Etiam sit amet magna dignissim.\\r\\n\\r\\nMauris eget elit auctor, faucibus purus vitae, consectetur quam. Cras iMINIFYerdiet eu velit interdum scelerisque.', 'HTML & CSS', 'PHP & SQL', 'JAVA', 'JQUERY & BOOTSTRAP', 80, 60, 40, 50, 5402, 675);

-- --------------------------------------------------------

--
-- Structure de la table `englober`
--

DROP TABLE IF EXISTS `englober`;
CREATE TABLE IF NOT EXISTS `englober` (
  `id_p` smallint(5) UNSIGNED NOT NULL,
  `id_comp` smallint(5) UNSIGNED NOT NULL,
  PRIMARY KEY (`id_p`,`id_comp`),
  KEY `id_comp` (`id_comp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `englober`
--

INSERT INTO `englober` (`id_p`, `id_comp`) VALUES
(1, 2),
(1, 3),
(1, 4),
(1, 5);

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Déchargement des données de la table `projet`
--

INSERT INTO `projet` (`id_p`, `titre`, `description`, `date_deb`, `duree`, `id_cat`, `id_u`, `theme`, `type`) VALUES
(1, 'Sites', '<p>Etiam lacinia nisi vitae nulla pellentesque aliquet. Curabitur a faucibus felis, ut aliquam purus. Mauris malesuada consequat velit eget pellentesque. Duis dui nunc, aliquet eget pulvinar sit amet, facilisis lacinia massa. Nunc facilisis neque sapien, vel viverra augue convallis nec. Pellentesque aliquet ante ante, sed ultricies diam efficitur non.</p><p>Fusce accumsan nisi non elit dictum, in malesuada quam ullamcorper. Proin libero ipsum, dictum ac lacus a, rhoncus tristique erat. Nulla vitae dignissim orci.</p>', '2017-01-22', 4, 1, 1, 'Test 1', 'Projet Scolaire'),
(2, 'Site', '<p>Etiam lacinia nisi vitae nulla pellentesque aliquet. Curabitur a faucibus felis, ut aliquam purus. Mauris malesuada consequat velit eget pellentesque. Duis dui nunc, aliquet eget pulvinar sit amet, facilisis lacinia massa. Nunc facilisis neque sapien, vel viverra augue convallis nec. Pellentesque aliquet ante ante, sed ultricies diam efficitur non.</p><p>Fusce accumsan nisi non elit dictum, in malesuada quam ullamcorper. Proin libero ipsum, dictum ac lacus a, rhoncus tristique erat. Nulla vitae dignissim orci.</p>', '2017-01-03', 12, 3, 1, 'Test 3', 'Projet Scolaire'),
(3, 'Sitessss', '<p>Etiam lacinia nisi vitae nulla pellentesque aliquet. Curabitur a faucibus felis, ut aliquam purus. Mauris malesuada consequat velit eget pellentesque. Duis dui nunc, aliquet eget pulvinar sit amet, facilisis lacinia massa. Nunc facilisis neque sapien, vel viverra augue convallis nec. Pellentesque aliquet ante ante, sed ultricies diam efficitur non.</p><p>Fusce accumsan nisi non elit dictum, in malesuada quam ullamcorper. Proin libero ipsum, dictum ac lacus a, rhoncus tristique erat. Nulla vitae dignissim orci.</p>', '2017-02-08', 1, 1, 1, 'Test 6', 'Projet Scolaire'),
(4, 'Sitesssss', '<p>Etiam lacinia nisi vitae nulla pellentesque aliquet. Curabitur a faucibus felis, ut aliquam purus. Mauris malesuada consequat velit eget pellentesque. Duis dui nunc, aliquet eget pulvinar sit amet, facilisis lacinia massa. Nunc facilisis neque sapien, vel viverra augue convallis nec. Pellentesque aliquet ante ante, sed ultricies diam efficitur non.</p><p>Fusce accumsan nisi non elit dictum, in malesuada quam ullamcorper. Proin libero ipsum, dictum ac lacus a, rhoncus tristique erat. Nulla vitae dignissim orci.</p>', '2016-12-13', 17, 2, 1, 'Test 4', 'Projet Scolaire');
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
-- Contraintes pour la table `englober`
--
ALTER TABLE `englober`
  ADD CONSTRAINT `englober_ibfk_1` FOREIGN KEY (`id_p`) REFERENCES `projet` (`id_p`),
  ADD CONSTRAINT `englober_ibfk_2` FOREIGN KEY (`id_comp`) REFERENCES `competence` (`id_comp`);

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
