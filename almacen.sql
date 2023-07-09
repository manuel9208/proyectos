-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-07-2023 a las 02:37:56
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `almacen`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `Codigo` int(11) NOT NULL,
  `Nombre` text DEFAULT NULL,
  `Categoria` text DEFAULT NULL,
  `Marca` text DEFAULT NULL,
  `Caracteristicas` text NOT NULL,
  `Flag` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`Codigo`, `Nombre`, `Categoria`, `Marca`, `Caracteristicas`, `Flag`) VALUES
(0, NULL, NULL, NULL, '', NULL),
(456121, 'asda', 'ada', 'ada', 'ads', 0),
(456122, 'asda', 'ada', 'ada', 'ads', 0),
(456123, 'asda', 'ada', 'ada', 'ads', 0),
(513461, 'Aire Acondicionado', 'Electrodomesticos', 'Mirage', '500 w', 0),
(513462, 'Aire Acondicionado', 'Electrodomesticos', 'Mirage', '220 w', 0),
(513468, 'Aire Acondicionado', 'Electrodomesticos', 'Mirage', '110 w', 1),
(515256, 'Abanico', 'Electrodomesticos', 'Mabel', 'Grande', 0),
(546387, 'Refrigerador', 'Electrodomesticos', 'LG', '24 pies', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`Codigo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
