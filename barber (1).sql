-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-09-2021 a las 15:33:19
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `barber`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `usuario` varchar(120) NOT NULL,
  `correo` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `usuario`, `correo`, `password`) VALUES
(3, 'daniel', 'lealhenao@gmail.com', 'dfgeregrgrgrtg'),
(5, 'hjyjyj', 'lealhenao@gmail.com', 'fgghhyyjyujuyj');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `local`
--

CREATE TABLE `local` (
  `id` int(11) NOT NULL,
  `l_nombre` varchar(120) NOT NULL,
  `l_ubicacion` varchar(120) NOT NULL,
  `l_numero` int(10) NOT NULL,
  `l_correo` varchar(200) NOT NULL,
  `l_texto` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `local`
--

INSERT INTO `local` (`id`, `l_nombre`, `l_ubicacion`, `l_numero`, `l_correo`, `l_texto`) VALUES
(23, 'dona', 'colinas manzaba1 lcal lasvillas', 2147483647, 'kevinandres@gmail.com', '0'),
(24, 'dcristian', 'colina sector 13 local las villas', 2147483647, 'kevinandres@gmail.com', 'lo mejor del comercio de la escuela');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profecional`
--

CREATE TABLE `profecional` (
  `id` int(11) NOT NULL,
  `name` varchar(123) NOT NULL,
  `apellido` varchar(120) NOT NULL,
  `telefono` int(10) NOT NULL,
  `edad` int(100) NOT NULL,
  `correo` varchar(123) NOT NULL,
  `password` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `profecional`
--

INSERT INTO `profecional` (`id`, `name`, `apellido`, `telefono`, `edad`, `correo`, `password`) VALUES
(1, 'daniel', 'ospina', 656576868, 18, 'ospinaortizjuandaniel351@gmail.com', '12345'),
(2, 'daniel', 'ospina', 31353374, 19, 'ospinaortizjuandaniel351@gmail.com', '12345'),
(3, 'oscar', 'ospina', 54656575, 77, 'ospinaortizjuandaniel351@gmail.com', '12345fg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `local`
--
ALTER TABLE `local`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `profecional`
--
ALTER TABLE `profecional`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `local`
--
ALTER TABLE `local`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `profecional`
--
ALTER TABLE `profecional`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
