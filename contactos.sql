-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-02-2025 a las 14:33:14
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `contactos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefono` varchar(11) NOT NULL,
  `mensaje` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`id`, `nombre`, `email`, `telefono`, `mensaje`) VALUES
(1, 'Amy Urgiles', 'amyurgiles8@gmail.com', '0991457407', 'holi'),
(2, 'Amy Urgiles', 'amyurgiles8@gmail.com', '0991457407', 'holi'),
(3, 'Amy Urgiles', 'amyurgiles8@gmail.com', '0991457407', 'holi'),
(4, 'Amy Urgiles', 'amyurgiles8@gmail.com', '0991457407', 'holi'),
(5, 'Amy Urgiles', 'amyurgiles8@gmail.com', '0991457407', 'holi'),
(6, 'Amy Urgiles', 'amyurgiles8@gmail.com', '0991457407', 'holi'),
(7, 'Amy Urgiles', 'amyurgiles8@gmail.com', '0991457407', 'Hiiiiiiiii'),
(8, 'Amy Urgiles', 'amyurgiles8@gmail.com', '0991457407', 'holi'),
(9, 'Pau', 'Urgilesamy360@gmail.com', '0945678921', 'Luiiiiisssssssss');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
