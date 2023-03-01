-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 01 mars 2023 à 11:40
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `library`
--

-- --------------------------------------------------------

--
-- Structure de la table `adherent`
--

CREATE TABLE `adherent` (
  `Nickname` varchar(150) NOT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `Password` varchar(150) DEFAULT NULL,
  `Admin` tinyint(1) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Phone` varchar(100) DEFAULT NULL,
  `CIN` varchar(50) DEFAULT NULL,
  `Occupation` varchar(50) DEFAULT NULL,
  `Penalty_Count` int(11) DEFAULT NULL,
  `Birth_Date` date DEFAULT NULL,
  `Creation_Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `emprunt`
--

CREATE TABLE `emprunt` (
  `emprunt_Code` int(11) NOT NULL,
  `emprunt_Date` date DEFAULT NULL,
  `emprunt_Return_Date` date DEFAULT NULL,
  `ouvrages_Code` int(11) NOT NULL,
  `Nickname` varchar(150) NOT NULL,
  `Reservation_Code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ouvrages`
--

CREATE TABLE `ouvrages` (
  `ouvrages_Code` int(11) NOT NULL,
  `Title` varchar(50) DEFAULT NULL,
  `Author_Name` varchar(100) DEFAULT NULL,
  `Cover_Image` varchar(100) DEFAULT NULL,
  `State` varchar(100) DEFAULT NULL,
  `Edition_Date` date DEFAULT NULL,
  `Buy_Date` date DEFAULT NULL,
  `Status` varchar(150) DEFAULT NULL,
  `Type_Code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `Reservation_Code` int(11) NOT NULL,
  `Reservation_Date` date DEFAULT NULL,
  `Reservation_Expiration_Date` date NOT NULL,
  `ouvrages_Code` int(11) NOT NULL,
  `Nickname` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `types`
--

CREATE TABLE `types` (
  `Type_Code` int(11) NOT NULL,
  `Type_Name` varchar(50) DEFAULT NULL,
  `Type_Type` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `adherent`
--
ALTER TABLE `adherent`
  ADD PRIMARY KEY (`Nickname`);

--
-- Index pour la table `emprunt`
--
ALTER TABLE `emprunt`
  ADD PRIMARY KEY (`emprunt_Code`),
  ADD UNIQUE KEY `Reservation_Code` (`Reservation_Code`),
  ADD KEY `ouvrages_Code` (`ouvrages_Code`),
  ADD KEY `Nickname` (`Nickname`);

--
-- Index pour la table `ouvrages`
--
ALTER TABLE `ouvrages`
  ADD PRIMARY KEY (`ouvrages_Code`),
  ADD KEY `Type_Code` (`Type_Code`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`Reservation_Code`),
  ADD KEY `ouvrages_Code` (`ouvrages_Code`),
  ADD KEY `Nickname` (`Nickname`);

--
-- Index pour la table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`Type_Code`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `emprunt`
--
ALTER TABLE `emprunt`
  MODIFY `emprunt_Code` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ouvrages`
--
ALTER TABLE `ouvrages`
  MODIFY `ouvrages_Code` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `Reservation_Code` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `types`
--
ALTER TABLE `types`
  MODIFY `Type_Code` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `emprunt`
--
ALTER TABLE `emprunt`
  ADD CONSTRAINT `emprunt_ibfk_1` FOREIGN KEY (`ouvrages_Code`) REFERENCES `ouvrages` (`ouvrages_Code`),
  ADD CONSTRAINT `emprunt_ibfk_2` FOREIGN KEY (`Nickname`) REFERENCES `adherent` (`Nickname`),
  ADD CONSTRAINT `emprunt_ibfk_3` FOREIGN KEY (`Reservation_Code`) REFERENCES `reservation` (`Reservation_Code`);

--
-- Contraintes pour la table `ouvrages`
--
ALTER TABLE `ouvrages`
  ADD CONSTRAINT `ouvrages_ibfk_1` FOREIGN KEY (`Type_Code`) REFERENCES `types` (`Type_Code`);

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`ouvrages_Code`) REFERENCES `ouvrages` (`ouvrages_Code`),
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`Nickname`) REFERENCES `adherent` (`Nickname`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
