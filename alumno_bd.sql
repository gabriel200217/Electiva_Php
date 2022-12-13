-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-12-2022 a las 04:46:15
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
-- Base de datos: `alumno`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `numero_servicio` int(11) NOT NULL,
  `asociadocliente` varchar(15) NOT NULL,
  `asociadorecibe` bigint(8) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`numero_servicio`, `asociadocliente`, `asociadorecibe`, `fecha`, `hora`) VALUES
(1, 'j-32548796-5', 30324934, '2022-09-02', '00:00:00'),
(2, 'j-32548796-5', 21458647, '2022-09-04', '00:00:00'),
(3, 'j-32544796-2', 18757981, '2022-07-07', '00:00:00'),
(4, '11585781', 30324934, '2022-09-05', '00:00:00'),
(5, 'j-32548796-5', 18757981, '2022-09-04', '09:00:00'),
(6, 'j-32544796-2', 18757981, '2022-09-01', '00:00:00'),
(7, 'j-32548796-5', 18757981, '2022-09-01', '08:00:00'),
(8, '11585781', 30324934, '2022-09-07', '11:04:00'),
(9, 'j-32544796-2', 30324934, '2022-09-01', '11:08:00'),
(10, 'j-32548796-5', 30324934, '2022-09-07', '11:08:00'),
(11, 'j-32548796-5', 30324934, '2022-09-08', '11:12:00'),
(12, 'j-32544796-2', 30324934, '2022-09-07', '11:17:00'),
(13, 'j-32548796-5', 18757981, '2022-09-07', '11:36:00'),
(14, 'j-32548796-5', 18757981, '2022-09-07', '12:26:00'),
(15, 'j-32548796-5', 30324934, '2022-09-07', '12:36:00'),
(16, '11585781', 30324934, '2022-09-07', '12:39:00'),
(17, 'j-32548796-5', 30324934, '2022-09-07', '13:32:00'),
(18, 'j-32548796-5', 30324934, '2022-09-07', '13:37:00'),
(19, 'j-32548796-5', 30324934, '2022-09-07', '13:40:00'),
(20, 'j-32548796-5', 30324934, '2022-09-07', '15:48:00'),
(21, '11585781', 18757981, '2022-09-08', '12:48:00'),
(22, 'j-32548796-5', 30324934, '2022-09-08', '13:00:00'),
(23, 'J-30662108', 30324933, '2013-06-25', '10:11:00'),
(24, 'J-30662108', 30324934, '2022-09-08', '14:34:00'),
(25, 'j-32548796-5', 30324934, '2022-09-09', '09:42:00'),
(26, 'J-30662108', 30324933, '2022-09-09', '09:45:00'),
(27, 'J-30662108', 21458647, '2022-09-09', '11:52:00'),
(28, 'J-30662108', 21458647, '2022-09-09', '11:58:00'),
(31, 'j-32548796-5', 30324934, '2022-09-26', '20:59:00'),
(32, '11585782', 30324934, '2022-12-12', '19:48:00'),
(33, '11585782', 30324933, '2022-12-12', '20:24:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `rif_ced` varchar(15) NOT NULL,
  `cliente` varchar(255) NOT NULL,
  `contacto` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefono` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `rif_ced`, `cliente`, `contacto`, `direccion`, `email`, `telefono`) VALUES
(2, 'j-32548796-5', 'Mauricio', 'Juan Perez', 'Trinitarias', 'flvero20@gmail.com', 4144781268),
(4, 'j-32544796-2', 'Pedro', 'Juan Perez', 'Trinitarias', 'flvero20@gmail.com', 4125679364),
(5, '11585781', 'Sara', 'Juan Perez', 'Trinitarias', 'flvero20@gmail.com', 4125679364),
(8, '11585782', 'Mauri', 'Juan Perez', 'Trinitarias', '', 0),
(9, 'J-30662108', 'INVERSIONES INMOBILIARIAS 6109', 'RIXIO CASTRO', 'CENTRO COMERCIAL SAMBIL', '', 4143407167),
(10, '11343223', 'fsdfsdf', 'sdfsdf', 'sfdsfsdfs', 'sdfsdfds@fdfsf.com', 414552848);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
  `id` int(11) NOT NULL,
  `asoc_id` int(11) NOT NULL,
  `equipo` varchar(255) NOT NULL,
  `marca` varchar(255) NOT NULL,
  `modelo` varchar(255) NOT NULL,
  `serials` varchar(255) NOT NULL,
  `servicio` varchar(255) NOT NULL,
  `falla` varchar(255) NOT NULL,
  `observacion` varchar(255) NOT NULL,
  `fecha` date NOT NULL,
  `estado` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`id`, `asoc_id`, `equipo`, `marca`, `modelo`, `serials`, `servicio`, `falla`, `observacion`, `fecha`, `estado`) VALUES
(1, 1, 'Impresora', 'Epson', 'PF-220-II', '1548792', 'Eventual', 'Mantenimiento', 'Deja solamentente impresora con cinta', '0000-00-00', ''),
(2, 1, 'PC', 'Luxor', 'A2-15', 'EOB0003198', 'Eventual', 'Mantenimiento', 'Se traba', '0000-00-00', ''),
(3, 1, 'Impresor', 'Luxor', 'A2-15', 'EOB0003198', 'Eventual', 'Mantenimiento', '', '0000-00-00', ''),
(4, 2, 'PC', 'Epson', 'PF-220-II', 'EOB0003198', 'Eventual', 'Mantenimiento', 'Deja solamentente impresora con cinta', '0000-00-00', ''),
(5, 2, 'PC', 'Luxor', 'A2-15', '1548792', 'Eventual', 'Mantenimiento', 'Pantallazo azul', '0000-00-00', ''),
(11, 2, 'Fotocopiadora', 'Ryzen', 'PF-220-II', 'EOB0003198', 'Eventual', 'Mantenimiento', 'Pantallazo azul', '0000-00-00', ''),
(12, 2, 'PC', 'Ryzen', 'A2-15', '1548792', 'Eventual', 'Mantenimiento', 'Se traba', '0000-00-00', ''),
(20, 6, 'PC', 'Luxor', 'PF-220-II', 'EOB0003198', 'Eventual', 'Mantenimiento', 'Pantallazo azul', '0000-00-00', ''),
(21, 5, 'Impresora', 'Epson', 'PF-220-II', 'EOB0003198', 'Eventual', 'Mantenimiento', '', '0000-00-00', ''),
(22, 5, 'Fotocopiadora', 'Panasonic', 'B720', '14578568', 'Eventual', 'Mantenimiento', '', '0000-00-00', ''),
(24, 0, 'Impresora', 'Epson', 'PF-220-II', 'EOB0003198', 'Eventual', 'Mantenimiento', '', '0000-00-00', 'Reparado'),
(25, 12, 'PC', 'Luxor', 'PF-220-II', 'EOB0003198', 'Eventual', 'Mantenimiento', 'Se traba', '0000-00-00', ''),
(26, 14, 'Impresora', 'Epson', 'PF-220-II', 'EOB0003198', 'Eventual', 'Mantenimiento', 'Se traba', '0000-00-00', ''),
(27, 14, 'PC', 'Luxor', 'PF-220-II', 'EOB0003198', 'Eventual', 'Mantenimiento', 'Deja solamentente impresora con cinta', '0000-00-00', ''),
(28, 16, 'PC', 'Luxor', 'A3-20', '1548792', 'Eventual', 'Mantenimiento', 'Se traba', '0000-00-00', ''),
(30, 16, 'Impresora', 'Epson', 'PF-220-II', 'EOB0003198', 'Eventual', 'Mantenimiento', '', '0000-00-00', ''),
(31, 17, 'Impresora', 'Epson', 'PF-220-II', 'EOB0003198', 'Eventual', 'Mantenimiento dffgdskjgfdsjkfdfhhjdshfkdskfhjkgfjhhjfhjdkjfkjkjfdhkj', 'fgdhdfhdfhdfhdfh', '0000-00-00', ''),
(32, 19, 'Impresora', 'Epson', 'PF-220-II', 'EOB0003198', 'Eventual', 'Mantenimiento', 'Deja solamente impresora con cinta', '0000-00-00', ''),
(33, 20, 'Impresora', 'Epson', 'PF-220-II', 'EOB0003198', 'Eventual', 'Mantenimiento', 'Se traba', '0000-00-00', ''),
(34, 20, 'PC', 'Epson', 'A3-20', 'EOB0003198', 'Eventual', 'Mantenimiento', 'Se traba', '0000-00-00', ''),
(35, 21, 'Impresora', 'Epson', 'PF-220-II', 'EOB0003198', 'Eventual', 'Mantenimiento', '', '0000-00-00', ''),
(36, 21, 'PC', 'Epson', 'PF-220-II', 'EOB0003198', 'Eventual', 'Mantenimiento', '', '0000-00-00', ''),
(37, 22, 'Impresora', 'Epson', 'PF-220-II', 'EOB0003198', 'Eventual', 'Mantenimiento', 'Deja solamente imprimir con cinta', '0000-00-00', ''),
(38, 23, 'Impresora', 'Epson', 'PF-220-II', 'EOB0003198', 'Eventual', 'Mantenimiento General', 'Deja Solamente Impresora con cinta', '0000-00-00', ''),
(39, 24, 'Impresora', 'Epson', 'PF-220-II', 'EOB0003198', 'Eventual', 'Mantenimiento', '', '0000-00-00', ''),
(50, 13, 'Impresora', 'Epson', 'PF-220-II', 'EOB0003198', 'Eventual', 'Mantenimiento', 'Se traba', '2022-09-09', 'Reparado'),
(51, 11, 'Impresora', 'Epson', 'PF-220-II', '', '', '', '', '0000-00-00', ''),
(52, 11, 'Maquina de escribir', 'Epson', 'PF-220-II', 'EOB0003198', '', '', '', '0000-00-00', ''),
(53, 11, 'Maquina de escribir', 'Epson', 'A2-15', 'EOB0003198', '', '', '', '0000-00-00', ''),
(54, 11, 'Impresora', 'Epson', 'PF-220-II', 'EOB0003198', '', '', '', '2022-09-08', 'Recibido'),
(55, 11, 'Impresora', 'Epson', 'PF-220-II', '', '', 'Mantenimiento', 'Deja solamentente impresora con cinta', '2022-09-08', 'Recibido'),
(56, 25, 'Impresora', 'Epson', 'PF-220-II', 'EOB0003198', 'Eventual', 'Mantenimiento', 'Pantallazo azul', '2022-09-09', 'Finalizado'),
(57, 26, 'Impresora', 'Epson', 'PF-220-II', 'EOB0003198', 'Eventual', 'Mantenimiento', 'Pantallazo azul', '2022-09-09', 'Finalizado'),
(58, 27, 'Maquina de escribir', 'Epson', 'PF-220-II', 'EOB0003198', 'Eventual', 'Mantenimiento', 'Se traba', '2022-09-10', 'Reparado'),
(59, 28, 'Impresora', 'Epson', 'PF-220-II', 'EOB0003198', 'Eventual', 'Mantenimiento', 'Se traba', '2022-09-10', 'Finalizado'),
(61, 32, 'Impresora', 'HP', 'G54', '1548793', 'Revision', 'Se apaga', '', '2022-12-12', 'Finalizado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo_especifico`
--

CREATE TABLE `equipo_especifico` (
  `id_equipo` int(11) NOT NULL,
  `equipo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `equipo_especifico`
--

INSERT INTO `equipo_especifico` (`id_equipo`, `equipo`) VALUES
(2, 'Impresora');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `finalizar`
--

CREATE TABLE `finalizar` (
  `asoc_id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `estado` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `finalizar`
--

INSERT INTO `finalizar` (`asoc_id`, `fecha`, `hora`, `estado`) VALUES
(0, '0000-00-00', '00:00:00', 'Recibido'),
(1, '2022-09-02', '15:33:00', 'Finalizado'),
(4, '2022-09-05', '00:00:00', 'Recibido'),
(5, '2022-09-04', '09:00:00', 'Recibido'),
(6, '2022-09-05', '14:00:00', 'Finalizado'),
(7, '2022-09-01', '08:00:00', 'Recibido'),
(8, '2022-09-07', '12:31:00', 'Finalizado'),
(11, '2022-09-08', '11:12:00', 'Recibido'),
(12, '2022-09-07', '12:55:00', 'Finalizado'),
(13, '2022-09-07', '11:36:00', 'Recibido'),
(14, '2022-09-07', '12:35:00', 'Finalizado'),
(15, '2022-09-07', '12:38:00', 'Finalizado'),
(16, '2022-09-07', '12:46:00', 'Finalizado'),
(17, '2022-09-07', '13:33:00', 'Finalizado'),
(18, '2022-09-07', '13:37:00', 'Recibido'),
(19, '2022-09-07', '13:40:00', 'Recibido'),
(20, '2022-09-07', '15:52:00', 'Finalizado'),
(21, '2022-09-08', '12:55:00', 'Finalizado'),
(22, '2022-09-08', '13:00:00', 'Recibido'),
(23, '2013-06-25', '10:11:00', 'Recibido'),
(24, '2022-09-08', '14:42:00', 'Finalizado'),
(25, '2022-09-09', '09:45:00', 'Finalizado'),
(26, '2022-09-09', '11:36:00', 'Finalizado'),
(27, '2022-09-09', '11:52:00', 'Recibido'),
(28, '2022-09-10', '15:59:00', 'Finalizado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `id_marca` int(11) NOT NULL,
  `marca` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`id_marca`, `marca`) VALUES
(2, 'HP');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recibe`
--

CREATE TABLE `recibe` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `cedula` bigint(8) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `telefono` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `recibe`
--

INSERT INTO `recibe` (`id`, `nombre`, `cedula`, `direccion`, `telefono`) VALUES
(1, 'Gabriel', 30324934, 'Carrera 21 entre calles 49 y 50', 4147894612),
(2, 'Juan', 21458647, 'Av Lara', 2514786453),
(3, 'Martin', 18757981, 'Av Lara', 4125786414),
(5, 'amilcar marchan', 30324933, 'Av Lara', 2514786452);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reparar`
--

CREATE TABLE `reparar` (
  `id` int(11) NOT NULL,
  `comentario` varchar(255) NOT NULL,
  `material1` varchar(20) NOT NULL,
  `material2` varchar(20) NOT NULL,
  `material3` varchar(20) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `reparar`
--

INSERT INTO `reparar` (`id`, `comentario`, `material1`, `material2`, `material3`, `fecha`, `hora`) VALUES
(0, '', '', '', '', '0000-00-00', '00:00:00'),
(17, 'hjhjhj', '', '', '', '2022-09-05', '14:35:00'),
(21, 'dfgfd', '', '', '', '2022-09-05', '14:38:00'),
(22, 'hjhjhj', '', '', '', '2022-09-05', '14:39:00'),
(23, 'gjjkgkjfgfdkg', '', '', '', '2022-09-07', '10:39:00'),
(25, 'dfgfd', '', '', '', '2022-09-07', '11:18:00'),
(26, 'njjhhj', '', '', '', '2022-09-07', '12:27:00'),
(31, 'Se le hizo un mantenimiento preventivo del polvo', '', '', '', '2022-09-07', '13:33:00'),
(32, 'se mantuvo en vigilancia durante 15 dÃ­as aproximadamente y con uso exhaustivo en 6 dÃ­as mÃ¡s', '', '', '', '2022-09-07', '14:59:00'),
(33, 'Se limpio el polvo', '', '', '', '2022-09-07', '16:58:00'),
(34, 'Se limpio la cache del disco duro', '', '', '', '2022-09-07', '16:50:00'),
(35, 'Se limpio el polvo', '', '', '', '2022-09-08', '12:49:00'),
(36, 'se mantuvo en vigilancia durante 15 dÃ­as aproximadamente y con uso exhaustivo en 6 dÃ­as mÃ¡s', '', '', '', '2022-09-08', '12:50:00'),
(38, 'se mantuvo en vigilancia durante 15 dÃ­as aproximadamente y con uso exhaustivo en 6 dÃ­as mÃ¡s', '', '', '', '2022-09-26', '14:58:00'),
(39, 'Se limpio el polvo', '', '', '', '2022-09-08', '14:40:00'),
(50, 'Se limpio el polvo', '', '', '', '2022-09-09', '09:49:00'),
(57, 'Se limpio el polvo', '', '', '', '0000-00-00', '09:51:00'),
(58, 'Se limpio el polvo', '2022-09-10', '00:53', 'Hierro', '0000-00-00', '00:00:00'),
(59, 'Se limpio el polvo', 'Hierro', '', '', '2022-09-09', '11:58:00'),
(61, 'Revisado con exito', 'Soplador', '', '', '2022-12-12', '20:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`numero_servicio`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `equipo_especifico`
--
ALTER TABLE `equipo_especifico`
  ADD PRIMARY KEY (`id_equipo`);

--
-- Indices de la tabla `finalizar`
--
ALTER TABLE `finalizar`
  ADD PRIMARY KEY (`asoc_id`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`id_marca`);

--
-- Indices de la tabla `recibe`
--
ALTER TABLE `recibe`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reparar`
--
ALTER TABLE `reparar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `numero_servicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT de la tabla `equipo_especifico`
--
ALTER TABLE `equipo_especifico`
  MODIFY `id_equipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `recibe`
--
ALTER TABLE `recibe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
