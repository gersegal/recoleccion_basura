-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 23, 2024 at 09:14 PM
-- Server version: 5.7.39
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Green_Pal_Test`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pss` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `admin_name`, `admin_email`, `admin_pss`) VALUES
(3, 'bobjohnson', 'prueba@email.com', '$2y$10$qHuDznEbxJPm7bokxS.BjuUr95RNtVXRerqOB041IPWSovGbxy912');

-- --------------------------------------------------------

--
-- Table structure for table `solicitudes_recoleccion`
--

CREATE TABLE `solicitudes_recoleccion` (
  `id` int(10) NOT NULL,
  `usr_email` varchar(255) NOT NULL,
  `no_depto` varchar(255) NOT NULL,
  `basura_reciclar` varchar(255) NOT NULL,
  `kilos` varchar(255) NOT NULL,
  `fecha_recoleccion` varchar(255) NOT NULL,
  `fecha_registro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `estatus` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `solicitudes_recoleccion`
--

INSERT INTO `solicitudes_recoleccion` (`id`, `usr_email`, `no_depto`, `basura_reciclar`, `kilos`, `fecha_recoleccion`, `fecha_registro`, `estatus`) VALUES
(9, 'email@email.com', '12', 'PET', '2', '2/2/2025', '2024-11-09 17:23:01', 'En proceso'),
(10, 'email@email.com', '12', 'Carton', '2', '2/2/2025', '2024-11-11 09:12:17', 'En proceso');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) NOT NULL,
  `usr_nombre` varchar(255) NOT NULL,
  `usr_email` varchar(255) NOT NULL,
  `usr_user` varchar(255) NOT NULL,
  `usr_depto` varchar(255) NOT NULL,
  `opt_data` varchar(255) NOT NULL,
  `opt_terms` varchar(255) NOT NULL,
  `opt_publicidad` varchar(255) DEFAULT NULL,
  `registro_fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `usr_nombre`, `usr_email`, `usr_user`, `usr_depto`, `opt_data`, `opt_terms`, `opt_publicidad`, `registro_fecha`) VALUES
(1, 'Usuario 1', 'email@email.com', '', '12', '', '', NULL, '2024-10-28 20:25:42'),
(2, 'Usuario 2', 'email@email.com', '', '11', '', '', NULL, '2024-11-08 19:04:19'),
(3, 'Usuario 3', 'email@gmail.com', '', '50', 'on', '', NULL, '2024-11-11 09:23:29'),
(4, 'Usuario 5', 'user5@gmail.com', 'user5', '121', 'on', 'on', 'on', '2024-11-23 09:17:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `solicitudes_recoleccion`
--
ALTER TABLE `solicitudes_recoleccion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `solicitudes_recoleccion`
--
ALTER TABLE `solicitudes_recoleccion`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
