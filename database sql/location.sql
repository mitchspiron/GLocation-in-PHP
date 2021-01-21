-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mer 20 Mai 2020 à 10:56
-- Version du serveur :  5.7.14
-- Version de PHP :  7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `location`
--

-- --------------------------------------------------------

--
-- Structure de la table `attentes`
--

CREATE TABLE `attentes` (
  `id` int(100) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Tel` varchar(255) NOT NULL,
  `Univ` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `attentes`
--

INSERT INTO `attentes` (`id`, `Nom`, `Tel`, `Univ`) VALUES
(1, 'Carla', '5648484654', 'ezfzzaf');

-- --------------------------------------------------------

--
-- Structure de la table `donnee`
--

CREATE TABLE `donnee` (
  `id` int(100) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Naissance` date NOT NULL,
  `Tel` varchar(255) NOT NULL,
  `Studio` varchar(255) NOT NULL,
  `Univ` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `donnee`
--

INSERT INTO `donnee` (`id`, `Nom`, `Naissance`, `Tel`, `Studio`, `Univ`) VALUES
(3, 'RALAIARIPARANY Mitch Spiron', '2000-07-28', '0329093441', 'c20', 'ENI'),
(9, 'Logan', '2001-02-17', '0349093441', 'c19', 'IFT'),
(10, 'Bob Marley', '1968-07-08', '0339093441', 'b11', 'Aceem'),
(11, 'Robinson Crusoe', '2000-02-07', '03222222222', 'r54', 'f54S'),
(14, 'Polo', '2004-11-11', '222222222222', 'gh', 'inscae'),
(16, 'Kygo', '1999-04-04', '77777777777777777', 'd4', 'dddd'),
(24, 'Miagi', '1997-05-28', '476998888888', 'd4', 'eoe'),
(25, 'Bebe Rexha', '2020-07-04', '8888888888888', 'd4', '5snnjkbibi'),
(28, 'Lolo', '2009-06-07', '777777777799', 'd56', 's56sss'),
(29, 'Mad Max', '2005-05-05', '556256562565', 'A3', 'ENS');

-- --------------------------------------------------------

--
-- Structure de la table `donnee2`
--

CREATE TABLE `donnee2` (
  `id` int(100) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Naissance` date NOT NULL,
  `Tel` varchar(255) NOT NULL,
  `Studio` varchar(255) NOT NULL,
  `Univ` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `donnee2`
--

INSERT INTO `donnee2` (`id`, `Nom`, `Naissance`, `Tel`, `Studio`, `Univ`) VALUES
(1, 'Katatiti', '2005-08-06', '777777777', 's7', '5qsln'),
(2, 'Bomboclate', '1997-08-19', '0325545856', 'B1', 'IEP');

-- --------------------------------------------------------

--
-- Structure de la table `donnee3`
--

CREATE TABLE `donnee3` (
  `id` int(100) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Naissance` date NOT NULL,
  `Tel` varchar(255) NOT NULL,
  `Studio` varchar(255) NOT NULL,
  `Univ` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `donnee3`
--

INSERT INTO `donnee3` (`id`, `Nom`, `Naissance`, `Tel`, `Studio`, `Univ`) VALUES
(1, 'David', '2000-02-01', '56456546447', 'C1', 'ENI'),
(2, 'Stephanio', '2004-05-04', '5252552515', 'C1', 'ENI');

-- --------------------------------------------------------

--
-- Structure de la table `personnels`
--

CREATE TABLE `personnels` (
  `id` int(100) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Naissance` date NOT NULL,
  `Tel` varchar(255) NOT NULL,
  `Adresse` varchar(255) NOT NULL,
  `Poste` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `personnels`
--

INSERT INTO `personnels` (`id`, `Nom`, `Naissance`, `Tel`, `Adresse`, `Poste`) VALUES
(1, 'Marco Polo', '1999-09-09', '56156151561561', 'RDI', 'GÃ©rant');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `attentes`
--
ALTER TABLE `attentes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `donnee`
--
ALTER TABLE `donnee`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `donnee2`
--
ALTER TABLE `donnee2`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `donnee3`
--
ALTER TABLE `donnee3`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `personnels`
--
ALTER TABLE `personnels`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `attentes`
--
ALTER TABLE `attentes`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `donnee`
--
ALTER TABLE `donnee`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT pour la table `donnee2`
--
ALTER TABLE `donnee2`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `donnee3`
--
ALTER TABLE `donnee3`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `personnels`
--
ALTER TABLE `personnels`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
