-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 09 mars 2022 à 09:42
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `flight1`
--

-- --------------------------------------------------------

--
-- Structure de la table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_vol` int(11) NOT NULL,
  `flight_type` varchar(255) NOT NULL,
  `origin` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `dep_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `booking`
--

INSERT INTO `booking` (`id`, `id_user`, `id_vol`, `flight_type`, `origin`, `destination`, `dep_time`) VALUES
(64, 22, 12, '1', 'DAR', ' YOUCODE', '2022-03-19 13:19:00');

-- --------------------------------------------------------

--
-- Structure de la table `passenger`
--

DROP TABLE IF EXISTS `passenger`;
CREATE TABLE IF NOT EXISTS `passenger` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `reservation_id` int(255) DEFAULT NULL,
  `fullname` varchar(255) NOT NULL,
  `birthday` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `passenger`
--

INSERT INTO `passenger` (`id`, `user_id`, `reservation_id`, `fullname`, `birthday`) VALUES
(16, 22, NULL, 'fahd', '2022-03-18 15:52:00'),
(17, 22, NULL, 'fahd', '2022-04-01 16:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `password`, `role`) VALUES
(10, 'soma', 'soma', '$2y$12$cD8ckMcv2135vtwo0OswMeAzWBkaoUKgJoO8xn2P7NqUrSbljvcOK', 1),
(22, 'fahd', 'fahd', '$2y$12$Y4SXIxJLO9Nbh4wRLwP3ouYyRvVcIsY.s1v6WEbmO8LSMSabC66Xm', NULL),
(23, 'fahd', 'fahd', '$2y$12$fhyTg4838YdC.JWlUA4a1.6yTOS2TU/5.j8Zj/lozHphU/ABNCUMS', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `vols`
--

DROP TABLE IF EXISTS `vols`;
CREATE TABLE IF NOT EXISTS `vols` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `origin` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `dep_time` datetime NOT NULL,
  `return_time` datetime NOT NULL,
  `price` int(11) NOT NULL,
  `nbrSeats` int(11) NOT NULL,
  `nbrSeatsReserved` int(11) NOT NULL,
  `flighttype` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `vols`
--

INSERT INTO `vols` (`id`, `origin`, `destination`, `dep_time`, `return_time`, `price`, `nbrSeats`, `nbrSeatsReserved`, `flighttype`) VALUES
(6, 'Chicago', 'Casablanca', '2022-03-10 16:45:00', '2022-02-27 16:45:00', 150, 300, 50, '1'),
(7, 'WITMER', ' ELIDA', '2022-03-11 11:50:00', '2022-03-20 11:50:00', 150, 300, 100, '1'),
(9, 'Italy', 'NewYork', '2022-03-19 19:01:00', '2022-03-22 19:01:00', 0, 500, 200, '1'),
(12, 'DAR', ' YOUCODE', '2022-03-19 13:19:00', '2022-03-16 13:19:00', 100, 150, 0, '1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
