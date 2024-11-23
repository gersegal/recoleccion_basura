-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 23, 2024 at 03:18 PM
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
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
