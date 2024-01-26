-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-01-2024 a las 12:52:18
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
-- Base de datos: `pollopepe`
--
CREATE DATABASE IF NOT EXISTS `pollopepe` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `pollopepe`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `titulo` varchar(50) NOT NULL,
  `autor` varchar(100) NOT NULL,
  `comentario` varchar(255) NOT NULL,
  `usuario` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`titulo`, `autor`, `comentario`, `usuario`) VALUES
('A DORMIR! LA GRANJA', 'CHARLOTTE ROEDERER', 'Para compartir el momento de dormir con tu bebé.', 'fran'),
('APRENDE A IR AL BAÑO CON BLUE', 'VV.AA.', 'Blue va al baño y tú también puedes hacerlo. ¡Presiona los botonos y tira de la cadena mientras lees el cuento!', 'fran'),
('CHU CHU, SILBA EL TREN', 'ANGEL CARMONA', 'Una dulce niña viaja por distintos hábitats animales e interacciona con ellos durante el trascurso de un día, desde el amanecer hasta el anochecer.', 'fran'),
('PEPE Y MILA Y LAS ESTACIONES', 'YAYO KAWAMURA', 'Un divertido libro con ruedas, lengüetas y otros elementos móviles para que los más pequeños descubran las estaciones con Pepe y Mila.', 'fran');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `nombre` varchar(25) NOT NULL,
  `clave` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombre`, `clave`) VALUES
('fran', 'php'),
('jesus', '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`titulo`),
  ADD KEY `fk_usuario` (`usuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`nombre`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `fk_usuario` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`nombre`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
