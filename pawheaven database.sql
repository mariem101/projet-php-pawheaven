-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 08, 2025 at 05:04 PM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pawheaven`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `identifiant` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `identifiant`, `password`) VALUES
(1, 'dorian', 'dorian'),
(2, 'mariem', 'mariem'),
(3, 'maria', 'maria');

-- --------------------------------------------------------

--
-- Table structure for table `animaux`
--

DROP TABLE IF EXISTS `animaux`;
CREATE TABLE IF NOT EXISTS `animaux` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(200) NOT NULL,
  `espece` varchar(200) NOT NULL,
  `race` varchar(200) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `age` int DEFAULT NULL,
  `sex` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `animaux`
--

INSERT INTO `animaux` (`id`, `nom`, `espece`, `race`, `description`, `age`, `sex`) VALUES
(8, 'Minette', 'chat', 'Européenne', 'Très douce et calme, Minette adore les coins ensoleillés et les câlins discrets. Elle est timide au début mais une fois en confiance, c’est un vrai pot de colle.', 2, 'Femelle'),
(9, 'Flocon', 'Lapin', 'Lapin nain angora', 'Tout doux et très calme, Flocon aime les papouilles et les carottes. Il aura besoin d’un espace sécurisé pour gambader et d’un brossage régulier.', 1, 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `id` int NOT NULL AUTO_INCREMENT,
  `lastname` varchar(200) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `identifiant` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `lastname`, `firstname`, `email`, `password`, `identifiant`) VALUES
(1, 'masmoudi', 'mariem', 'masmoudimariem0@gmail.com', '', NULL),
(2, 'masmoudi', 'mariem', 'masmoudimariem0@gmail.com', '', NULL),
(3, 'masmoudi', 'mariem', 'masmoudimariem0@gmail.com', '', NULL),
(4, 'masmoudi', 'mariem', 'masmoudimariem0@gmail.com', '', NULL),
(5, 'masmoudi', 'mariem', 'masmoudimariem0@gmail.com', '', NULL),
(6, 'masmoudi', 'mariem', 'masmoudimariem0@gmail.com', '', NULL),
(7, 'masmoudi', 'mariem', 'masmoudimariem0@gmail.com', '', NULL),
(8, 'barara', 'loris', 'loris@gmail.com', '', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
