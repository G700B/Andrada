-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-07-2024 a las 15:54:53
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dim`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turno`
--

CREATE TABLE `turno` (
  `id` int(40) NOT NULL,
  `especialista` varchar(40) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `apellido` varchar(40) NOT NULL,
  `dni` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `turno`
--

INSERT INTO `turno` (`id`, `especialista`, `fecha`, `hora`, `nombre`, `apellido`, `dni`) VALUES
(3, '', '0000-00-00', '00:00:00', '', '', 0),
(4, 'Odontologo', '2024-06-12', '15:56:00', 'FEDERICO', 'acosta', 777),
(5, 'Odontologo', '2024-06-12', '15:56:00', 'FEDERICO', 'acosta', 777),
(12, 'Odontologo', '2024-06-13', '22:28:00', 'Melisa', 'ACOSTS', 333),
(13, 'Odontologo', '2024-07-31', '18:34:00', 'dd', 'cc', 333);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turnos`
--

CREATE TABLE `turnos` (
  `id` int(11) NOT NULL,
  `especialista` int(11) NOT NULL,
  `fecha` int(11) NOT NULL,
  `hora` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `telefono` int(15) NOT NULL,
  `fecha_na` date NOT NULL,
  `dni` int(8) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `telefono`, `fecha_na`, `dni`, `password`) VALUES
(1, 'Melisa', 'acosta', 1158807235, '0000-00-00', 46021770, '7d11810cf99c74a1f3fa22c3879ea39d'),
(2, 'FEDERICO', 'dd', 1, '0000-00-00', 77, '875cfef1aeaf0e268764814986821151'),
(3, 'franco', 'colque', 12345678, '2024-06-25', 12345678, '3912678ba738f220b20aca8f797ee69e'),
(4, 'brachma', 'dd', 1158807235, '2024-06-20', 99, 'ac627ab1ccbdb62ec96e702f07f6425b'),
(5, 'yugoslavia', 'ACOSTS', 1158807235, '2024-06-24', 33, '182be0c5cdcd5072bb1864cdee4d3d6e'),
(6, 'Melisa Acosta ', 'acosta', 55, '2024-06-12', 55, 'b53b3a3d6ab90ce0268229151c9bde11'),
(7, 'Melisa Lucia Acosta ', 'qq', 22, '2024-06-21', 12, ''),
(8, 'FEDERICO', 'ACOSTS', 1158807235, '2024-06-20', 777, '$2y$10$IeNx0cWiF9gnxCEXBIxSKOiN7nGJqlbvcnTEygRrAkl7v2lJle2oS'),
(9, 'FEDERICO', 'de', 1158807235, '2024-06-13', 333, '$2y$10$g8YYffniXc2MC3tMDs7XyO7q7QgZeAhBv.16oiUIe9vgzjV2/xyAG');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `turno`
--
ALTER TABLE `turno`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `turno`
--
ALTER TABLE `turno`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
