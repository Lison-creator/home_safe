-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 11 oct. 2021 à 15:43
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `home_safe`
--

-- --------------------------------------------------------

--
-- Structure de la table `lieux`
--

CREATE TABLE `lieux` (
  `id` int(11) NOT NULL,
  `nom` varchar(500) NOT NULL,
  `ad_rue` varchar(500) NOT NULL,
  `ad_numero` int(11) NOT NULL,
  `ad_cp` int(4) NOT NULL,
  `ad_localite` varchar(500) NOT NULL,
  `longitude` float NOT NULL,
  `latitude` float NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `lieux`
--

INSERT INTO `lieux` (`id`, `nom`, `ad_rue`, `ad_numero`, `ad_cp`, `ad_localite`, `longitude`, `latitude`, `type`) VALUES
(1, 'Interface3', 'rue Gaucheret', 88, 1030, 'Schaerbeek', 4.36158, 50.8639, ''),
(2, 'Cabaret Mademoiselle', 'Rue du Marché au Charbon', 53, 1000, 'Bruxelles', 4.34855, 50.8463, ''),
(3, 'Café Belga', 'Place Eugène Flagey', 18, 1050, 'Ixelles', 4.37041, 50.827, 'bar'),
(4, 'Commissariat de quartier VIEUX-MARCHÉ', 'Rue de l\'Hectolitre', 15, 1000, 'Bruxelles', 4.34457, 50.8368, 'police'),
(5, 'Commissariat de quartier HOUBA', 'Avenue Houba de Strooper', 141, 1020, 'Bruxelles', 4.33665, 50.8904, 'police'),
(6, 'Commissariat de quartier BOONDAEL', 'Chaussée de Boondael', 480, 1050, 'Ixelles', 4.39104, 50.8136, 'police'),
(7, 'Commissariat de quartier BOCKSTAEL', 'Boulevard Emile Bockstael', 246, 1020, 'Bruxelles', 4.34823, 50.8762, 'police'),
(8, 'Commissariat de quartier DANSAERT', 'Rue du Houblon', 6, 1000, 'Bruxelles', 4.34365, 50.851, 'police'),
(9, 'Commissariat de quartier NICOLAY', 'Rue Nicolay', 8, 1000, 'Bruxelles', 4.35415, 50.8596, 'police'),
(10, 'Commissariat de quartier COCQ', 'Rue du Collège', 1, 1050, 'Ixelles', 4.36747, 50.8331, 'police'),
(11, 'Commissariat de quartier VERSAILLES', 'Avenue de Versailles', 130, 1120, 'Bruxelles', 4.37372, 50.8966, 'police'),
(12, 'Commissariat de quartier CENTRE', 'Rue du Marché au Charbon', 30, 1000, 'Bruxelles', 4.34997, 50.8464, 'police'),
(13, 'Commissariat de quartier EUROPE', 'Boulevard Clovis', 10, 1000, 'Bruxelles', 4.38251, 50.8481, 'police'),
(14, 'Commissariat de quartier LOUISE', 'Rue de Livourne', 136, 1050, 'Ixelles', 4.36231, 50.827, 'police'),
(15, 'Commissariat de quartier HAREN', 'Rue de Cortenbach', 10, 1130, 'Bruxelles', 4.41788, 50.8921, 'police'),
(16, 'Commissariat de quartier LEPOUTRE', 'Avenue Louis Lepoutre', 4, 1050, 'Ixelles', 4.36223, 50.8268, 'police');

-- --------------------------------------------------------

--
-- Structure de la table `quartiers`
--

CREATE TABLE `quartiers` (
  `id` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `localite` int(4) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `quartiers`
--

INSERT INTO `quartiers` (`id`, `nom`, `localite`, `description`) VALUES
(1, 'Chatelain', 1050, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(2, 'Marolles', 1000, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(3, 'Anneessens', 1000, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `pseudo` varchar(20) NOT NULL,
  `email` varchar(365) NOT NULL,
  `ad_cp` int(4) NOT NULL,
  `bio` varchar(999) NOT NULL,
  `mdp` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `prenom`, `nom`, `pseudo`, `email`, `ad_cp`, `bio`, `mdp`) VALUES
(1, 'Manon', 'Lespes', 'chatshimi', 'm.lespes@interface3.be', 1060, 'Chatshimi c\'est ma vie ', 'chatshimi'),
(2, 'Lison', 'Ferné', 'lisonette', 'l.ferne@interface3.be', 1050, 'Bonjour :)', 'bonjourbonjour'),
(3, 'Maureen', 'Vanhoren', 'maurvan', 'm.vanhoren@interface3.be', 1030, 'Requins!!!!!!!!!!', 'azerty123');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `lieux`
--
ALTER TABLE `lieux`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `quartiers`
--
ALTER TABLE `quartiers`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `lieux`
--
ALTER TABLE `lieux`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `quartiers`
--
ALTER TABLE `quartiers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
