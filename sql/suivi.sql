-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Dim 04 Décembre 2022 à 17:45
-- Version du serveur :  5.7.11
-- Version de PHP :  7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `suivi`
--

-- --------------------------------------------------------

--
-- Structure de la table `depense`
--

CREATE TABLE `depense` (
  `id_depense` int(11) NOT NULL,
  `type_depense` varchar(120) NOT NULL,
  `prix_depense` float NOT NULL,
  `description_depense` varchar(260) DEFAULT NULL,
  `date_depense` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `depense`
--

INSERT INTO `depense` (`id_depense`, `type_depense`, `prix_depense`, `description_depense`, `date_depense`) VALUES
(2, 'Cigarette', 20, 'Deux paquets ', '2022-07-28'),
(3, 'Alimentation', 21, 'Burger King', '2022-07-29'),
(4, 'Essence', 51, '', '2022-07-29'),
(5, 'Alimentation', 45.89, '', '2022-07-29'),
(6, 'Commande UberEat', 22.31, '', '2022-07-31'),
(7, 'Hygiène', 15, '', '2022-07-31'),
(8, 'Cigarette', 12.5, '', '2022-07-31'),
(9, 'Cigarette', 56, '', '2022-08-28'),
(10, 'Alimentation', 26.35, 'Burger King', '2022-12-04');

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE `type` (
  `id_type` int(11) NOT NULL,
  `nom_type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `type`
--

INSERT INTO `type` (`id_type`, `nom_type`) VALUES
(1, 'Essence'),
(2, 'Cigarettes'),
(3, 'Alimentation'),
(5, 'Hygiène');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `depense`
--
ALTER TABLE `depense`
  ADD PRIMARY KEY (`id_depense`);

--
-- Index pour la table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id_type`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `depense`
--
ALTER TABLE `depense`
  MODIFY `id_depense` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `type`
--
ALTER TABLE `type`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
