-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-06-2023 a las 20:08:33
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fundacion_bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `admId` int(255) NOT NULL,
  `admClave` varchar(60) NOT NULL,
  `admNombre` varchar(60) NOT NULL,
  `admDocumento` int(12) NOT NULL,
  `admApellido` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`admId`, `admClave`, `admNombre`, `admDocumento`, `admApellido`) VALUES
(1, 'YQ==', 'Nubia', 1004155990, 'Urrea'),
(2, 'bnViaWE=', 'Nubia', 1004155990, 'Urrea');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascota`
--

CREATE TABLE `mascota` (
  `idMascota` int(11) NOT NULL,
  `masNombre` varchar(45) NOT NULL,
  `masEdadAprox` int(2) NOT NULL,
  `masColor` varchar(50) NOT NULL,
  `masRaza` varchar(50) NOT NULL,
  `masTamaño` varchar(7) NOT NULL,
  `masImg` varchar(50) DEFAULT NULL,
  `masEspecie` enum('perro','gato') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `mascota`
--

INSERT INTO `mascota` (`idMascota`, `masNombre`, `masEdadAprox`, `masColor`, `masRaza`, `masTamaño`, `masImg`, `masEspecie`) VALUES
(26, 'Cosmo', 2, 'gris', 'pit bull', 'mediano', '2.jpg', 'perro'),
(27, 'Garfield', 2, 'Anaranjado', 'Exotico', 'mediano', '6.jpg', 'gato'),
(29, 'Miguel', 0, 'baige', 'criolla', 'pequeno', '1.jpg', 'perro'),
(33, 'Canela', 10, 'negro', 'chiguagua', 'pequeno', 'pexels-dominika-roseclay-2023384.jpg', 'perro'),
(34, 'Mateo', 16, 'gris', 'criolla', 'mediano', 'pexels-leonardo-de-oliveira-1770918.jpg', 'gato'),
(35, 'Nucita', 2, 'blanco y negro', 'criolla', 'pequeno', 'pexels-crina-doltu-1202481.jpg', 'gato');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud`
--

CREATE TABLE `solicitud` (
  `idSolicitud` int(255) NOT NULL,
  `solNombre` varchar(60) NOT NULL,
  `solApellido` varchar(60) NOT NULL,
  `solTelefono` varchar(15) NOT NULL,
  `solCorreo` varchar(35) NOT NULL,
  `solInteres` enum('apadrinar','adoptar','informacion') NOT NULL,
  `solMensaje` varchar(255) NOT NULL,
  `solMascota` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `solicitud`
--

INSERT INTO `solicitud` (`idSolicitud`, `solNombre`, `solApellido`, `solTelefono`, `solCorreo`, `solInteres`, `solMensaje`, `solMascota`) VALUES
(1, 'nubia', 'urrea', '3219670365', 'nubhas02@gmail.com', 'informacion', 'Estoy interesad@ en Adoptar a Miguel ', 0),
(3, 'nubia', 'urrea', '3219670365', 'nub@gmail.com', 'adoptar', 'Estoy interesad@ en Adoptar a canela ', 0),
(4, 'Miguel', 'Sanchez', '3218789090', 'nuggggb@gmail.com', 'apadrinar', 'Estoy interesad@ en Apadrinar a Mateo ', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`admId`);

--
-- Indices de la tabla `mascota`
--
ALTER TABLE `mascota`
  ADD PRIMARY KEY (`idMascota`);

--
-- Indices de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  ADD PRIMARY KEY (`idSolicitud`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `admId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `mascota`
--
ALTER TABLE `mascota`
  MODIFY `idMascota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  MODIFY `idSolicitud` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
