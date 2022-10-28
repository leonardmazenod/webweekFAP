-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 28 oct. 2022 à 09:12
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `festival`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `login` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id_admin`, `login`, `password`) VALUES
(1, 'thibautsouvignet', 'tFAP43admin'),
(2, 'maximetincani', 'mFAP43admin'),
(3, 'augustinbergot', 'aFAP43admin'),
(4, 'leonardmazenod', 'lFAP43admin');

-- --------------------------------------------------------

--
-- Structure de la table `boutique`
--

CREATE TABLE `boutique` (
  `id_boutique` int(11) NOT NULL,
  `nomboutique` varchar(30) NOT NULL,
  `typeboutique` varchar(30) NOT NULL,
  `xcoordboutique` float NOT NULL,
  `ycoordboutique` float NOT NULL,
  `descriptionboutique` text NOT NULL,
  `imgboutique` text NOT NULL,
  `ouvertureboutique` varchar(10) NOT NULL,
  `fermetureboutique` varchar(10) NOT NULL,
  `telboutique` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

CREATE TABLE `evenement` (
  `id_event` int(11) NOT NULL,
  `nomevent` varchar(60) NOT NULL,
  `defevent` text NOT NULL,
  `xcoordevent` float NOT NULL,
  `ycoordevent` float NOT NULL,
  `imgevent` text NOT NULL,
  `horaireevent` datetime NOT NULL,
  `dureeevent` time NOT NULL,
  `nbplace` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `participant`
--

CREATE TABLE `participant` (
  `id_participant` int(11) NOT NULL,
  `nom_participant` varchar(30) NOT NULL,
  `prenom_participant` varchar(30) NOT NULL,
  `email_participant` varchar(30) NOT NULL,
  `tel_participant` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `stand`
--

CREATE TABLE `stand` (
  `id_stand` int(11) NOT NULL,
  `nomstand` varchar(30) NOT NULL,
  `typestand` varchar(30) NOT NULL,
  `xcoordstand` float NOT NULL,
  `ycoordstand` float NOT NULL,
  `descriptionstand` text NOT NULL,
  `imgstand` text NOT NULL,
  `ouverturestand` varchar(10) NOT NULL,
  `fermeturestand` varchar(10) NOT NULL,
  `emplacement` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `va_participer`
--

CREATE TABLE `va_participer` (
  `id_event` int(11) DEFAULT NULL,
  `id_participant` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Index pour la table `boutique`
--
ALTER TABLE `boutique`
  ADD PRIMARY KEY (`id_boutique`);

--
-- Index pour la table `evenement`
--
ALTER TABLE `evenement`
  ADD PRIMARY KEY (`id_event`);

--
-- Index pour la table `participant`
--
ALTER TABLE `participant`
  ADD PRIMARY KEY (`id_participant`);

--
-- Index pour la table `stand`
--
ALTER TABLE `stand`
  ADD PRIMARY KEY (`id_stand`);

--
-- Index pour la table `va_participer`
--
ALTER TABLE `va_participer`
  ADD KEY `id_event` (`id_event`),
  ADD KEY `id_participant` (`id_participant`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `boutique`
--
ALTER TABLE `boutique`
  MODIFY `id_boutique` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `evenement`
--
ALTER TABLE `evenement`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `participant`
--
ALTER TABLE `participant`
  MODIFY `id_participant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `stand`
--
ALTER TABLE `stand`
  MODIFY `id_stand` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `va_participer`
--
ALTER TABLE `va_participer`
  ADD CONSTRAINT `va_participer_ibfk_1` FOREIGN KEY (`id_event`) REFERENCES `evenement` (`id_event`),
  ADD CONSTRAINT `va_participer_ibfk_2` FOREIGN KEY (`id_participant`) REFERENCES `participant` (`id_participant`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
