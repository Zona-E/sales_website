-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 25, 2021 at 01:05 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zona_e_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `Registro`
--

CREATE TABLE `Registro` (
  `id` int(50) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Apellido` varchar(50) DEFAULT NULL,
  `Correo_Electronico` varchar(50) DEFAULT NULL,
  `Contraseña` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sist_users`
--

CREATE TABLE `sist_users` (
  `id` int(10) NOT NULL,
  `nombre` char(30) NOT NULL,
  `nickname` varchar(20) NOT NULL,
  `contraseña` varchar(250) NOT NULL,
  `tipo` enum('USER','ADMIN') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sist_users`
--

INSERT INTO `sist_users` (`id`, `nombre`, `nickname`, `contraseña`, `tipo`) VALUES
(1, 'Elías García', 'grem16', 'aa07ad4ad11228a06300d1396cfca365', 'ADMIN'),
(2, 'Eliardo Reyes', 'eliardo_reyes', '81dc9bdb52d04dc20036dbd8313ed055', 'ADMIN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Registro`
--
ALTER TABLE `Registro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sist_users`
--
ALTER TABLE `sist_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sist_users`
--
ALTER TABLE `sist_users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
