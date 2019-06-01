-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-06-2019 a las 06:04:32
-- Versión del servidor: 5.7.17-log
-- Versión de PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `peluqueria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `title` varchar(50) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `Id_usuario` int(11) NOT NULL,
  `start` datetime(6) NOT NULL,
  `end` varchar(60) NOT NULL,
  `Fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`title`, `descripcion`, `color`, `Id_usuario`, `start`, `end`, `Fecha`) VALUES
('interno', 'erer', '#F86045', 456, '2019-05-09 18:35:00.000000', '2019-05-09 19:40:00.000000', '2019-05-09'),
('reunion', 'sds', '#3568F0', 5, '2019-05-10 18:35:00.000000', '2019-05-10 19:40:00.000000', '2019-05-10'),
('cita', 'wdsd', '#1EB412', 5656, '2019-05-09 19:35:00.000000', '2019-05-09 19:50:00.000000', '2019-05-09'),
('cita', 'asfcas', '#1EB412', 5454, '2019-05-25 08:00:00.000000', '2019-05-25T08:00:00 19:50:00.000000', '2019-05-25'),
('cita', 'asdfsad', '#1EB412', 777, '2019-05-26 19:35:00.000000', '2019-05-26 19:50:00.000000', '2019-05-26'),
('cita', 'fdasfa', '#1EB412', 34543, '2019-05-17 08:30:00.000000', '2019-05-17 09:30:00.000000', '2019-05-17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Id_usuario` int(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Apellido` varchar(50) DEFAULT NULL,
  `Telefonos` varchar(10) DEFAULT NULL,
  `Nombre_usuario` varchar(30) DEFAULT NULL,
  `Contrasena` varchar(100) DEFAULT NULL,
  `Tipo_usuario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id_usuario`, `Nombre`, `Apellido`, `Telefonos`, `Nombre_usuario`, `Contrasena`, `Tipo_usuario`) VALUES
(1234, 'andres', 'val gon', '3456789', 'q', '12344', 'Colab');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
