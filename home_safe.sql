-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Oct 28, 2021 at 08:52 AM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `home_safe`
--

-- --------------------------------------------------------

--
-- Table structure for table `lieux`
--

CREATE TABLE `lieux` (
  `id` int(11) NOT NULL,
  `nom` varchar(500) NOT NULL,
  `ad_rue` varchar(500) NOT NULL,
  `ad_numero` int(11) NOT NULL,
  `ad_cp` int(4) NOT NULL,
  `ad_localite` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lieux`
--

INSERT INTO `lieux` (`id`, `nom`, `ad_rue`, `ad_numero`, `ad_cp`, `ad_localite`) VALUES
(1, 'Interface3', 'rue Gaucheret', 88, 1030, 'Schaerbeek'),
(2, 'Café Mademoiselle', 'avenue Louise', 128, 1050, 'Ixelles'),
(3, 'Piscine Victor Boin', 'rue du Parc', 50, 1060, 'Saint-Gilles');

-- --------------------------------------------------------

--
-- Table structure for table `quartiers`
--

CREATE TABLE `quartiers` (
  `id` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `localite` int(4) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quartiers`
--

INSERT INTO `quartiers` (`id`, `nom`, `localite`, `description`) VALUES
(1, 'Chatelain', 1050, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(2, 'Marolles', 1000, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(3, 'Anneessens', 1000, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.');

-- --------------------------------------------------------

--
-- Table structure for table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `pseudo` varchar(20) NOT NULL,
  `email` varchar(365) NOT NULL,
  `image` varchar(100) NOT NULL,
  `ad_cp` int(4) NOT NULL,
  `bio` varchar(999) NOT NULL,
  `mdp` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `prenom`, `nom`, `pseudo`, `email`, `image`, `ad_cp`, `bio`, `mdp`) VALUES
(1, 'Manon', 'Lespes', 'chatshimi', 'm.lespes@interface3.be', '', 1060, 'Chatshimi c\'est ma vie ', 'Jy62dR'),
(2, 'Lison', 'Ferné', 'lisonette', 'l.ferne@interface3.be', '', 1050, 'Bonjour :)', 'bonjourbonjour'),
(3, 'Maureen', 'Vanhoren', 'maurvan', 'm.vanhoren@interface3.be', '', 1030, 'Requins!!!!!!!!!!', 'azerty123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lieux`
--
ALTER TABLE `lieux`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quartiers`
--
ALTER TABLE `quartiers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Uq_utilisateurEmailPseudo` (`email`,`pseudo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lieux`
--
ALTER TABLE `lieux`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `quartiers`
--
ALTER TABLE `quartiers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
