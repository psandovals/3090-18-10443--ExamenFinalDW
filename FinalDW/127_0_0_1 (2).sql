-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-11-2021 a las 01:00:13
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `finaldw`
--
CREATE DATABASE IF NOT EXISTS `finaldw` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `finaldw`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL COMMENT 'llave primaria',
  `cui` varchar(13) DEFAULT NULL COMMENT 'Código_Único_identificación',
  `nombre` varchar(150) DEFAULT NULL COMMENT 'Nombre',
  `apellidos` varchar(150) DEFAULT NULL COMMENT 'Apellidos',
  `fecha_nac` date DEFAULT NULL COMMENT 'Fecha_Nacimiento',
  `direc` varchar(255) DEFAULT NULL COMMENT 'Dirección_Domicilio',
  `nombre_padre` varchar(255) DEFAULT NULL COMMENT 'Nombre_del_Padre',
  `nombre_madre` varchar(255) DEFAULT NULL COMMENT 'Nombre_de_la_Madre',
  `email` varchar(255) DEFAULT NULL COMMENT 'Dirección_Correo_Electrónico'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `cui`, `nombre`, `apellidos`, `fecha_nac`, `direc`, `nombre_padre`, `nombre_madre`, `email`) VALUES
(3, '3033057891234', 'Lucas', 'Richard', '2010-10-28', 'asdasdasdasdasda', 'Oscar Santiago', 'Vely Santiago', 'championgold4@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'llave primaria', AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
