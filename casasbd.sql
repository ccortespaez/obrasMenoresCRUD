-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-06-2020 a las 21:57:48
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `casasbd`
--
CREATE DATABASE IF NOT EXISTS `casasbd` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `casasbd`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicacion`
--

CREATE TABLE `publicacion` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `fecha` date NOT NULL,
  `imagen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `publicacion`
--

INSERT INTO `publicacion` (`id`, `titulo`, `descripcion`, `fecha`, `imagen`) VALUES
(15, 'Casa Madera', '<p>Piso/s: 1 - Ba&ntilde;o/s: 2 - m2: 200x400 - Dormitorios: 4 - Material: madera</p>', '2020-06-18', 'assets/img/Cmadera.jpg'),
(16, 'Casa Vacacional', '<p>Piso/s: 1 - Ba&ntilde;o/s: 3 - m2: 300x600 - Dormitorios: 5 - Material: hormigon</p>', '2020-06-18', 'assets/img/Cvacacion.jpg'),
(17, 'Casa Condominio', '<p>Piso/s: 2 - Ba&ntilde;o/s: 3 - m2: 100x200 - Dormitorios: 3 - Material: marmolina</p>', '2020-06-18', 'assets/img/Ccondominio.jpg'),
(18, 'Casa Hormigon', '<p>Piso/s: 1 - Ba&ntilde;o/s: 2 - m2: 100x150 - Dormitorios: 2 - Material: hormigon</p>', '2020-06-18', 'assets/img/Chormigon2.jpg'),
(19, 'Casa Media Agua', '<p>Piso/s: 2 - Ba&ntilde;o/s: 1 - m2: 100x100 - Dormitorios: 3 - Material: marmolina</p>', '2020-06-18', 'assets/img/Cagua.jpg'),
(20, 'Casa Siding', '<p>Piso/s: 2 - Ba&ntilde;o/s: 2 - m2: 200x500 - Dormitorios: 4 - Material: siding</p>', '2020-06-18', 'assets/img/Csiding.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `rol_id` int(11) NOT NULL,
  `rol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`rol_id`, `rol`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `clave` varchar(100) NOT NULL,
  `telefono` int(11) NOT NULL,
  `rol_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `correo`, `clave`, `telefono`, `rol_id`) VALUES
(1, 'Panchato', 'panchato@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 958692548, 1),
(3, 'Canino', 'canino@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 978962418, 2),
(4, 'raybuzz', 'raybuzz@hotmail.cl', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 987548113, 2),
(17, 'exodia', 'felipe@partes.cl', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 921547812, 2),
(20, 'felipito', 'partesillas@gmail.cl', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 921547812, 2),
(21, 'Cristobal', 'cr@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 932425353, 2),
(22, 'Chip canario', 'cc@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 989234245, 2),
(23, 'don dimadon', 'dd@gmail.cl', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 992929284, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `publicacion`
--
ALTER TABLE `publicacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`rol_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rol_id` (`rol_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `publicacion`
--
ALTER TABLE `publicacion`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `rol_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`rol_id`),
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`rol_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
