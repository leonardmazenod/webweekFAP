-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 27 oct. 2022 à 09:33
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
(1, 'admin_fap_all_right', 'admin_fap_password'),
(2, 'admin_fap_modifier', 'admin_fap_modifier_p');

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

--
-- Déchargement des données de la table `boutique`
--

INSERT INTO `boutique` (`id_boutique`, `nomboutique`, `typeboutique`, `xcoordboutique`, `ycoordboutique`, `descriptionboutique`, `imgboutique`, `ouvertureboutique`, `fermetureboutique`, `telboutique`) VALUES
(1, 'le chaudron du velay', 'dentelle', 45.1, 3.9, '\"Le centre d\'Enseignement de la Dentelle au Fuseau poursuit deux missions essentielles : le maintien de la tradition et de la pratique par l\'enseignement et la sauvegarde du patrimoine dentellier. La boutique « De Fil en Fuseau » a pour objectif de fournir aux dentellières tout le matériel nécessaire (carreaux, fuseaux, méthodes, modèles, etc.) pour confectionner de la dentelle au fuseau.\"', 'img_bdd/le_chaudron_du_velay.jpg', '08:15:00', '19:30:00', '0479029169'),
(2, 'la dentelle du puy', 'dentelle', 45.0448, 3.88272, '\"Le centre d\'Enseignement de la Dentelle au Fuseau poursuit deux missions essentielles : le maintien de la tradition et de la pratique par l\'enseignement et la sauvegarde du patrimoine dentellier. La boutique « De Fil en Fuseau » a pour objectif de fournir aux dentellières tout le matériel nécessaire (carreaux, fuseaux, méthodes, modèles, etc.) pour confectionner de la dentelle au fuseau.\"', 'img_bdd/la_dentelle_du_velay.jpg', '07:30:00', '18:00:00', '0471020168'),
(3, 'Mon petit bout de bois', 'bois', 45.38, 3.889, 'Chez mon petit bout de bois, nous travaillions le bois depuis plus de 75 ans. Notre famille ce transmet ce savoir depuis des générations. ', 'img_bdd/le_chaudron_du_velay.jpg\r\n', '09:00:00', '17:30:00', '0451263545'),
(4, 'Mon petit bout de bois', 'bois', 45.38, 3.889, 'Nous travaillions le bois', 'img_bdd/le_chaudron_du_velay.jpg', '09:00:00', '17:30:00', '0601020304'),
(5, 'Mon petit bout de bois', 'bois', 45.38, 3.889, 'ici on bosse sur le bois.', 'img_bdd/la_dentelle_du_velay.jpg', '45.21', '3.225', '0601020304'),
(6, 'Mon petit bout de bois', 'bois', 45.38, 3.889, 'ici on bosse sur le bois.', 'img_bdd/la_dentelle_du_velay.jpg', '45.21', '3.225', '0601020304'),
(7, 'Chez Forfor', 'dentelle', 45.32, 3.85, 'Chez Forfor on travaille fort comme des forgerons', 'img_bdd/le_chaudron_du_velay.jpg', '06:00:00', '22:00:00', '0601020304'),
(10, 'Caillou', 'joallier', 45, 3, 'Dur comme de la pierre mais un crane aussi dégarnie qu\'un caillou', 'img_bdd/caillou.jfif', '08:00:00', '16:00:00', '0601020304'),
(11, 'Caillou', 'joallier', 45, 0, 'dsaqzsf', 'img_bdd/caillou.jfif', '00:00:00', '00:00:00', '0601020304');

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

--
-- Déchargement des données de la table `evenement`
--

INSERT INTO `evenement` (`id_event`, `nomevent`, `defevent`, `xcoordevent`, `ycoordevent`, `imgevent`, `horaireevent`, `dureeevent`, `nbplace`) VALUES
(1, 'concours de sculpture de glace', 'c\'est un concours de sculpture sur le format d\' bloc de glace de taille d\'un métre par 3 métres. ', 45.88, 3.45, 'img_bdd/exemple.png', '2022-10-29 14:00:00', '02:00:00', 0),
(2, 'initiation à la poterie', 'Venez découvrir la poterie grace a cette atelier libre', 45.88, 3.45, 'img_bdd/exemple.png', '2022-10-29 14:00:00', '02:00:00', 30),
(3, 'initiation à la tannerie', 'Tu veux savoir comment on faisait pour travaillé le cuir avant ? Alors vient nous voir.', 45.88, 3.45, 'img_bdd/exemple.png', '2022-10-29 14:00:00', '02:00:00', 50),
(4, 'Initiation à la sculpture au b', 'Venez découvrir la sculpture au bois avec nous dans cette atelier', 45.88, 3.5, 'img_bdd/0f7c1bab5814a61df2b5702d5e0e4586.jfif', '2022-01-01 12:00:00', '02:00:00', 20);

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

--
-- Déchargement des données de la table `participant`
--

INSERT INTO `participant` (`id_participant`, `nom_participant`, `prenom_participant`, `email_participant`, `tel_participant`) VALUES
(1, 'martin', 'marie', 'marie.martin@gmail.com', '0612596431'),
(2, 'dupont', 'patrice', 'patrice.dupont@gmail.com', '0658426951'),
(3, 'roche', 'dominique', 'dominique.roche@gmail.com', '0612698442'),
(4, 'cross', 'manuel', 'manuel.cross@gmail.com', '0606468912'),
(5, 'fayard', 'jean-pierre', 'jeanpierre.fayard@gmail.com', '0612446568'),
(6, 'marcon', 'benoit', 'benoit.marcon@gmail.com', '0694675382'),
(7, 'souvignet', 'thibaut', 'adresse@mail.com', '0601020304'),
(8, 'souvignet', 'thibaut', 'adresse@mail.com', '0601020304'),
(9, 'Bachelier', 'Damien', 'bachelier.damien@yahoo.fr', '0605521321'),
(10, 'souvignet', 'thibaut', 'adresse@mail.com', '0601020304'),
(11, 'Bachelier', 'Damien', 'bachelier.damien@yahoo.fr', '0605521321');

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

--
-- Déchargement des données de la table `stand`
--

INSERT INTO `stand` (`id_stand`, `nomstand`, `typestand`, `xcoordstand`, `ycoordstand`, `descriptionstand`, `imgstand`, `ouverturestand`, `fermeturestand`, `emplacement`) VALUES
(1, 'petit bois', 'menuisier', 45.65, 3.21, 'Le bois est un matériau naturel d\'origine végétale. Il est constitué par un tissu végétal formant la plus grande partie du tronc des plantes ligneuses.', 'img_bdd/example.jpg', '08:30:00', '18:30:00', 'couvert'),
(2, 'velay cuire', 'tanneur', 45.6, 3.41, 'Le cuir est un matériau préparé à partir de la peau d\'un animal, principalement utilisé dans l\'habillement et la décoration sous un grand nombre de formes.', 'img_bdd/example.jpg', '09:00:00', '22:00:00', 'couvert'),
(3, 'Le manège a bijoux ', 'joallier', 45.2, 3.8888, 'Le manège vous proposera des centaines de bijoux différents. En Bronze, Cuivre ou même en plaquait or 10 carats.', 'img_bdd/2287998de4dd774914f4c74730f1f15d.jfif', '10:00:00', '16:00:00', 'non couvert');

-- --------------------------------------------------------

--
-- Structure de la table `va_participer`
--

CREATE TABLE `va_participer` (
  `id_event` int(11) DEFAULT NULL,
  `id_participant` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `va_participer`
--

INSERT INTO `va_participer` (`id_event`, `id_participant`) VALUES
(1, 2),
(1, 1),
(2, 7),
(2, 8),
(3, 9),
(2, 10),
(2, 11);

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
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `boutique`
--
ALTER TABLE `boutique`
  MODIFY `id_boutique` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `evenement`
--
ALTER TABLE `evenement`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
