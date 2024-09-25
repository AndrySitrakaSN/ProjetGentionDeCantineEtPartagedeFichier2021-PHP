-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 25 sep. 2024 à 15:06
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `food`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

DROP TABLE IF EXISTS `administrateur`;
CREATE TABLE IF NOT EXISTS `administrateur` (
  `id` varchar(100) NOT NULL,
  `nomad` varchar(100) NOT NULL,
  `passad` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1941 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`id`, `nomad`, `passad`) VALUES
('1940', '  snrs', 'ada');

-- --------------------------------------------------------

--
-- Structure de la table `andro`
--

DROP TABLE IF EXISTS `andro`;
CREATE TABLE IF NOT EXISTS `andro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jour` varchar(20) NOT NULL,
  `daty` date NOT NULL,
  `menu` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `andro`
--

INSERT INTO `andro` (`id`, `jour`, `daty`, `menu`) VALUES
(1, 'Lundi', '2023-01-30', '   tsaramaso sy hena  '),
(2, 'Mardi', '2023-01-31', '  ovy  '),
(3, 'Mercredi', '2023-02-01', ' ganagana '),
(4, 'Jeudi', '2023-02-02', ' ravitoto '),
(5, 'Vendredi', '2023-02-03', '  sary  ');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `numCom` int(11) NOT NULL AUTO_INCREMENT,
  `id_ut` int(11) NOT NULL,
  `id_dat` int(11) NOT NULL,
  PRIMARY KEY (`numCom`)
) ENGINE=MyISAM AUTO_INCREMENT=91 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`numCom`, `id_ut`, `id_dat`) VALUES
(77, 82, 1),
(88, 70, 1),
(73, 70, 2),
(75, 70, 3),
(76, 70, 4),
(78, 82, 5),
(79, 82, 2),
(80, 82, 3),
(81, 71, 1),
(82, 71, 5),
(86, 91, 2),
(87, 91, 4),
(89, 98, 5),
(90, 98, 1);

-- --------------------------------------------------------

--
-- Structure de la table `messagy`
--

DROP TABLE IF EXISTS `messagy`;
CREATE TABLE IF NOT EXISTS `messagy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `num_exp` int(11) NOT NULL,
  `num_dst` int(11) NOT NULL,
  `fic` varchar(100) NOT NULL,
  `objet` varchar(100) NOT NULL,
  `mess` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `messagy`
--

INSERT INTO `messagy` (`id`, `num_exp`, `num_dst`, `fic`, `objet`, `mess`) VALUES
(44, 83, 70, 'Scooter-Yamaha-BWÂ´S-2013-550x471.jpg', 'A', 'ss'),
(42, 70, 93, 'sljointure.pdf', 'moto', 'de aona ra moto'),
(41, 70, 84, 'bootstrap-support.pdf', 'boostrap', 'ito le lesona boostrap');

-- --------------------------------------------------------

--
-- Structure de la table `perso`
--

DROP TABLE IF EXISTS `perso`;
CREATE TABLE IF NOT EXISTS `perso` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_ut` int(11) NOT NULL,
  `objet` varchar(200) NOT NULL,
  `fiche` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `perso`
--

INSERT INTO `perso` (`id`, `id_ut`, `objet`, `fiche`) VALUES
(48, 70, 'introduction de merise', 'chap 1 Introduction.pdf'),
(49, 70, 'Chapitre 5 Mysql', 'chap 5 MYSQL.pdf'),
(45, 65, 'Lettre de motivation', 'lettre_de_motivation.docx'),
(44, 65, 'Rapport de stage', 'Courrier de dÃ©part2023-01-07 (1).xls'),
(37, 43, 'Rapport de stage', 'Rapport_de_stage_snrs (1).docx'),
(43, 65, 'Lundi ', 'lettre_de_motivation - Copie.docx'),
(42, 43, 'cv', 'utilisateur (3).pdf');

-- --------------------------------------------------------

--
-- Structure de la table `principal`
--

DROP TABLE IF EXISTS `principal`;
CREATE TABLE IF NOT EXISTS `principal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_ut` int(11) NOT NULL,
  `objett` varchar(200) NOT NULL,
  `fic` varchar(200) NOT NULL,
  `messagi` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=94 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `principal`
--

INSERT INTO `principal` (`id`, `id_ut`, `objett`, `fic`, `messagi`) VALUES
(86, 70, 'Etude', 'ecriture-arabo-malgache (1).pdf', 'ecriture-arabo-malgache'),
(87, 70, 'Etude d;ecriture', 'malagasy2.gif', 'malagasy2'),
(81, 65, 'cv', 'Courrier de dÃ©part2023-01-07 (2).xls', 'ito ilay cv'),
(88, 70, 'Langage C Niveaux L1', 'L1_langage_C_2020.pptx', 'Base de langage de programmation'),
(80, 69, 'rapport', 'lettre_de_motivation.docx', 'ito ny rapport'),
(79, 68, 'DSD', 'D-stage-Sitraka.pdf', 'sddfd'),
(75, 65, 'Lundi ', 'carte_Andry.docx', 'liste des utilisateur lundi '),
(73, 66, 'Lettre de motivation', 'lettre_de_motivation.docx', 'Ito ilay lettre de motivation'),
(67, 43, 'ENI ', 'A-Propos-de-lENI.docx', 'Appros de ENI'),
(71, 43, 'Rapport de stage', 'utilisateur (2).pdf', 'ity ilay Rapport de stage .'),
(72, 43, 'Rapport de stage', 'utilisateur (2).pdf', 'ity ilay Rapport de stage .'),
(89, 91, 'CV ', 'CV-Sitraka.pdf', 'Cv snrs'),
(91, 83, 'Piratage', 'Le-piratage-informatique.pdf', 'Base de la piratage informatique'),
(92, 70, 'etude', 'chap 1 Introduction.pdf', 'introduction'),
(93, 70, 'Jointure', 'sljointure.pdf', 'Lesson Jointure SQL');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `numUt` int(11) NOT NULL AUTO_INCREMENT,
  `photos` varchar(100) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `direction` varchar(25) NOT NULL,
  `tel` varchar(25) NOT NULL,
  `mdp` varchar(25) NOT NULL,
  `valeur` varchar(25) NOT NULL,
  `fady` varchar(25) NOT NULL,
  `adrs` varchar(100) NOT NULL,
  `adrs_mail` varchar(100) NOT NULL,
  `fonc` varchar(50) NOT NULL,
  PRIMARY KEY (`numUt`)
) ENGINE=MyISAM AUTO_INCREMENT=99 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`numUt`, `photos`, `nom`, `prenom`, `direction`, `tel`, `mdp`, `valeur`, `fady`, `adrs`, `adrs_mail`, `fonc`) VALUES
(71, 'Polish_20221026_193508002.png', 'SOLONIRINA ', 'Velomasy Majava', 'Responsable ', '034 00 000 00 ', 'ada333', '1', 'sans canard', '            Mokana II O 28 R', '            Velo@gmail.com', ''),
(70, 'GridArt_20220616_183507808.jpg', 'SOLONIRINA', 'Andry Sitraka', 'Stg DTM', '0349742114', 'ada333', '1', 'sans porc', '       Mokana', '         sitraka@gmail.com', ''),
(82, '[033951].jpg', 'Anjoria', 'Tiphanie Kone', 'stg', 'sans poisson', '1234', '1', 'viande rouge', 'Androdra', 'Tpha@gmail.com', ''),
(83, '[034357].jpg', 'SOLONIRINA Nomejanahary', 'Telina', 'stg', '034 00 000 10', 'ada333', '1', 'sans porc', 'Mokana', 'Telina@gmail.com', ''),
(84, 'Polish_20221008_202343323.png', 'SOLONIRINA', 'Velomahazo', 'stg', 'sans porc', '12345', '1', 'sans poison', 'Ikongo', 'Mahazo@gmail.com', ''),
(91, '[034785].jpg', 'RASOANIRINA', 'Lucie', 'stg', '034 00 000 10', '1234', '1', '', '  Mokana', '  Lucie@gmail.com', ''),
(93, 'BWs-50-from-Yamaha-company.jpg', 'RAKOTOARIVELO', 'Marie', 'stg', '034 00 000 01', '1234', '1', 'QQQ', 'Mokana', 'kn', '2'),
(98, 'R.png', 'admin', 'admin', 'stg', '034 00 000 10', '1234', '2', 'sans porc', 'FID', 'admin@gmail.com', '1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
