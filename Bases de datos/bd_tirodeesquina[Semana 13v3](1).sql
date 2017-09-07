-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-09-2017 a las 00:03:57
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_tirodeesquina`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calendario`
--

CREATE TABLE `calendario` (
  `id` int(10) NOT NULL,
  `nombreCalendario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `calendario`
--

INSERT INTO `calendario` (`id`, `nombreCalendario`) VALUES
(2, 'SEPTIMO-NOVENO'),
(3, 'DECIMO-DUODECIMO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE `equipo` (
  `id` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `escudo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `equipo`
--

INSERT INTO `equipo` (`id`, `nombre`, `escudo`) VALUES
(1, 'SAPRISSA', 'ULTRA'),
(2, 'HEREDIA', 'GARRA'),
(3, 'LIGA', 'LA 12'),
(4, 'CARMELITA', 'CARAMELOS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jornada`
--

CREATE TABLE `jornada` (
  `equipoVisita` varchar(50) NOT NULL,
  `equipoCasa` varchar(50) NOT NULL,
  `fecha` date NOT NULL,
  `id` int(10) NOT NULL,
  `idCalendario` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `jornada`
--

INSERT INTO `jornada` (`equipoVisita`, `equipoCasa`, `fecha`, `id`, `idCalendario`) VALUES
('1', '4', '2017-08-11', 6, 3),
('2', '4', '2017-08-17', 8, 2),
('3', '1', '2017-08-09', 9, 2),
('2', '1', '2017-06-14', 10, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugador`
--

CREATE TABLE `jugador` (
  `id` varchar(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `posicion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `jugador`
--

INSERT INTO `jugador` (`id`, `nombre`, `posicion`) VALUES
('1', 'Fabián', '2'),
('123213', 'FABIAN', '1'),
('12345', 'danielson', '4'),
('2113123', 'Moisés', '1'),
('22', 'kendall', '1'),
('24213', '23424', '1'),
('32112', 'gggg', '1'),
('504350577', 'daniel', '3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoposicion`
--

CREATE TABLE `tipoposicion` (
  `id` int(10) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipoposicion`
--

INSERT INTO `tipoposicion` (`id`, `descripcion`) VALUES
(1, 'Portero'),
(2, 'Ala Izquierda'),
(3, 'Ala Derecha'),
(4, 'Pivot');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `nombreUsuario` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `tipoUsuario` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`nombreUsuario`, `password`, `nombre`, `tipoUsuario`) VALUES
('juan', 'dc0a2566ac4f3ff7c8df685cd2abc9a0', 'Juan Perez Perez', 1),
('maria', 'dc0a2566ac4f3ff7c8df685cd2abc9a0', 'maria Perez Perez', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `calendario`
--
ALTER TABLE `calendario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `jornada`
--
ALTER TABLE `jornada`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `jugador`
--
ALTER TABLE `jugador`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipoposicion`
--
ALTER TABLE `tipoposicion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`nombreUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `calendario`
--
ALTER TABLE `calendario`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `equipo`
--
ALTER TABLE `equipo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `jornada`
--
ALTER TABLE `jornada`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `tipoposicion`
--
ALTER TABLE `tipoposicion`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
