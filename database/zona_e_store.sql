-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-11-2021 a las 05:08:44
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `zona.e_store`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sist_users`
--

CREATE TABLE `sist_users` (
  `id` int(10) NOT NULL,
  `nombre` char(30) NOT NULL,
  `nickname` varchar(20) NOT NULL,
  `contraseña` varchar(250) NOT NULL,
  `tipo` enum('USER','ADMIN') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sist_users`
--

INSERT INTO `sist_users` (`id`, `nombre`, `nickname`, `contraseña`, `tipo`) VALUES
(1, 'Elías García', 'grem16', 'aa07ad4ad11228a06300d1396cfca365', 'ADMIN'),
(2, 'Eliardo Reyes', 'eliardo_reyes', '81dc9bdb52d04dc20036dbd8313ed055', 'ADMIN');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `sist_users`
--
ALTER TABLE `sist_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `sist_users`
--
ALTER TABLE `sist_users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
