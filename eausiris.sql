-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 05 oct. 2022 à 13:45
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
-- Base de données : `eausiris`
--

-- --------------------------------------------------------

--
-- Structure de la table `bassin_eau`
--

CREATE TABLE `bassin_eau` (
  `id_bassin` varchar(20) NOT NULL,
  `id_client` varchar(20) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `adresse` varchar(100) DEFAULT NULL,
  `code_postale` varchar(30) DEFAULT NULL,
  `rue` varchar(30) DEFAULT NULL,
  `ville` varchar(20) DEFAULT NULL,
  `volume_max` varchar(20) DEFAULT NULL,
  `volume_actuelle` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `capteurs`
--

CREATE TABLE `capteurs` (
  `id_capteur` varchar(20) NOT NULL,
  `id_bassinEau` varchar(20) DEFAULT NULL,
  `id_bassinPluie` varchar(20) DEFAULT NULL,
  `adresse_ip` varchar(50) DEFAULT NULL,
  `type_cp` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id_client` varchar(20) NOT NULL,
  `identifiant` varchar(20) DEFAULT NULL,
  `password` varchar(25) NOT NULL,
  `code_licence` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `dht`
--

CREATE TABLE `dht` (
  `id_DHT` varchar(20) NOT NULL,
  `id_capteur` varchar(20) DEFAULT NULL,
  `Temperature` float NOT NULL,
  `Humidite` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `dht`
--

INSERT INTO `dht` (`id_DHT`, `id_capteur`, `Temperature`, `Humidite`) VALUES
('', NULL, 15, 9);

-- --------------------------------------------------------

--
-- Structure de la table `entite_mois`
--

CREATE TABLE `entite_mois` (
  `prix_litre` float DEFAULT NULL,
  `Consomation` float DEFAULT NULL,
  `Economisation` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `valves`
--

CREATE TABLE `valves` (
  `id_valve` varchar(20) NOT NULL,
  `nom` varchar(20) DEFAULT NULL,
  `id_bassin` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `watersensor`
--

CREATE TABLE `watersensor` (
  `id_WaterSensor` varchar(20) NOT NULL,
  `id_capteur` varchar(20) DEFAULT NULL,
  `HauteurEau` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `bassin_eau`
--
ALTER TABLE `bassin_eau`
  ADD PRIMARY KEY (`id_bassin`);

--
-- Index pour la table `capteurs`
--
ALTER TABLE `capteurs`
  ADD PRIMARY KEY (`id_capteur`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`);

--
-- Index pour la table `dht`
--
ALTER TABLE `dht`
  ADD PRIMARY KEY (`id_DHT`);

--
-- Index pour la table `valves`
--
ALTER TABLE `valves`
  ADD PRIMARY KEY (`id_valve`);

--
-- Index pour la table `watersensor`
--
ALTER TABLE `watersensor`
  ADD PRIMARY KEY (`id_WaterSensor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
