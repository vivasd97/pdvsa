-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 09-07-2018 a las 00:08:13
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `pdvsa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `admin` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `clave` varchar(6) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`admin`),
  KEY `admin` (`admin`),
  KEY `admin_2` (`admin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`admin`, `estado`, `clave`) VALUES
('admin', 1, '127');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_imp`
--

CREATE TABLE IF NOT EXISTS `tabla_imp` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `Indicador` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Tipo` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `Marca` varchar(15) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Serial` varchar(25) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Modelo` varchar(25) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Etiqueta` int(15) NOT NULL,
  `Estado` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Comentario` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `Fecha` varchar(25) COLLATE utf8mb4_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `tabla_imp`
--

INSERT INTO `tabla_imp` (`id`, `Indicador`, `Tipo`, `Marca`, `Serial`, `Modelo`, `Etiqueta`, `Estado`, `Comentario`, `Fecha`) VALUES
(2, 'Guerraw', 'Oficina', 'Sharp', 'A00001254', 'Sharp-1500-13l3', 2081648, 'Desincorporado', 'Equipo Obsoleto-En Reparacion', '19 October 2017 - 19:30'),
(3, 'Ramonj', 'Papeleria', 'XeroX', '183461834', 'xeroxl9300', 2081236, 'Reasignado', 'Equipo operativo para reasignar', '20 October 2017 - 19:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_pc`
--

CREATE TABLE IF NOT EXISTS `tabla_pc` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `Indicador` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Tipo` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `Marca` varchar(15) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Serial` varchar(25) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Modelo` varchar(25) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Etiqueta` int(15) NOT NULL,
  `Estado` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Comentario` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `Fecha` varchar(25) COLLATE utf8mb4_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `tabla_pc`
--

INSERT INTO `tabla_pc` (`id`, `Indicador`, `Tipo`, `Marca`, `Serial`, `Modelo`, `Etiqueta`, `Estado`, `Comentario`, `Fecha`) VALUES
(1, 'GUERRAW', 'Portatil', 'VIT', 'A0001245', 'VIT-PG14', 20818374, 'OBSOLETO', 'ACTUALIZAR HARDWARE', '01 November 2017 - 21:15'),
(2, 'DELGADOLL', 'Portatil', 'SIRAGON', '11102128-12-1', 'LC-SIRAGON-12', 20812255, 'DESINCORPORADO', 'MEMORIA RAM 2GB CORSAIR', '31 October 2017 - 02:45'),
(4, 'JULIOAP', 'Escritorio', 'VIT', 'A0001547F', 'VIT-ED-44', 20812547, 'REASIGNADO', 'JULIOAP --> MONICAT', '01 November 2017 - 21:17'),
(5, 'LOPEZC', 'Escritorio', 'TINKPACK', '159753259', 'PACK-154-V10', 20824593, 'OPERATIVO', 'REASIGNAR A KILLD', '02 November 2017 - 22:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_per`
--

CREATE TABLE IF NOT EXISTS `tabla_per` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `Indicador` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Tipo` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `Marca` varchar(15) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Serial` varchar(25) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Modelo` varchar(25) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Etiqueta` int(15) NOT NULL,
  `Estado` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Comentario` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `Fecha` varchar(25) COLLATE utf8mb4_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `tabla_per`
--

INSERT INTO `tabla_per` (`id`, `Indicador`, `Tipo`, `Marca`, `Serial`, `Modelo`, `Etiqueta`, `Estado`, `Comentario`, `Fecha`) VALUES
(1, 'zxc', 'Cornetas', 'Lenovo', 'z', 'c', 123456789, 'Reasignado', 'z', '20 October 2017 - 18:18'),
(2, 'bvbv', 'Papeleria', 'Sharp', '123135425', '5545454', 545454, 'inutilizable', 'cxcx', '24 October 2017 - 20:55'),
(3, 'zxzxzx', 'Cable de corriente', 'Siragon', 'xzxz', 'xzxzxz', 20182132, 'inutilizable', 'sdadsds', '13 November 2017 - 01:50'),
(4, '', '------------', '------------', '', '', 0, 'Estado', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
