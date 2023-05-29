-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3307
-- Tiempo de generación: 11-08-2022 a las 19:11:42
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tb_5s`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clasificacion`
--

CREATE TABLE `clasificacion` (
  `id_Cla` int(11) NOT NULL,
  `Clasificacion` varchar(45) DEFAULT NULL,
  `Promedio_Cla` varchar(200) DEFAULT NULL,
  `Calificacion_Cla` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `disciplina`
--

CREATE TABLE `disciplina` (
  `id_Dis` int(11) NOT NULL,
  `Estandarización` varchar(45) DEFAULT NULL,
  `Promedio_Dis` varchar(200) DEFAULT NULL,
  `Calificacion_Dis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estandarización`
--

CREATE TABLE `estandarización` (
  `id_Est` int(11) NOT NULL,
  `Estandarización` varchar(45) DEFAULT NULL,
  `Promedio_Est` varchar(200) DEFAULT NULL,
  `Calificacion_Est` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `limpieza`
--

CREATE TABLE `limpieza` (
  `id_Lim` int(11) NOT NULL,
  `Limpieza` varchar(45) DEFAULT NULL,
  `Promedio_Lim` varchar(200) DEFAULT NULL,
  `Calificacion_Lim` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `organización`
--

CREATE TABLE `organización` (
  `id_Org` int(11) NOT NULL,
  `Organización` varchar(45) DEFAULT NULL,
  `Promedio_Org` varchar(200) DEFAULT NULL,
  `Calificacion_Org` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `total_calificacion`
--

CREATE TABLE `total_calificacion` (
  `Calificacion_Id_Tot` varchar(45) NOT NULL,
  `Calificacion_Cla_Tot` int(11) NOT NULL,
  `Calificacion_Org_Tot` int(11) NOT NULL,
  `Calificacion_Lim_Tot` int(11) NOT NULL,
  `Calificacion_Est_Tot` int(11) NOT NULL,
  `Calificacion_Dis_Tot` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clasificacion`
--
ALTER TABLE `clasificacion`
  ADD PRIMARY KEY (`id_Cla`,`Calificacion_Cla`);

--
-- Indices de la tabla `disciplina`
--
ALTER TABLE `disciplina`
  ADD PRIMARY KEY (`id_Dis`,`Calificacion_Dis`);

--
-- Indices de la tabla `estandarización`
--
ALTER TABLE `estandarización`
  ADD PRIMARY KEY (`id_Est`,`Calificacion_Est`);

--
-- Indices de la tabla `limpieza`
--
ALTER TABLE `limpieza`
  ADD PRIMARY KEY (`id_Lim`,`Calificacion_Lim`);

--
-- Indices de la tabla `organización`
--
ALTER TABLE `organización`
  ADD PRIMARY KEY (`id_Org`,`Calificacion_Org`);

--
-- Indices de la tabla `total_calificacion`
--
ALTER TABLE `total_calificacion`
  ADD PRIMARY KEY (`Calificacion_Id_Tot`),
  ADD KEY `Calificacion_Cla_Tot` (`Calificacion_Cla_Tot`),
  ADD KEY `Calificacion_Org_Tot` (`Calificacion_Org_Tot`),
  ADD KEY `Calificacion_Lim_Tot` (`Calificacion_Lim_Tot`),
  ADD KEY `Calificacion_Est_Tot` (`Calificacion_Est_Tot`),
  ADD KEY `Calificacion_Dis_Tot` (`Calificacion_Dis_Tot`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clasificacion`
--
ALTER TABLE `clasificacion`
  MODIFY `id_Cla` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `total_calificacion`
--
ALTER TABLE `total_calificacion`
  ADD CONSTRAINT `total_calificacion_ibfk_1` FOREIGN KEY (`Calificacion_Cla_Tot`) REFERENCES `clasificacion` (`id_Cla`),
  ADD CONSTRAINT `total_calificacion_ibfk_2` FOREIGN KEY (`Calificacion_Org_Tot`) REFERENCES `organización` (`id_Org`),
  ADD CONSTRAINT `total_calificacion_ibfk_3` FOREIGN KEY (`Calificacion_Lim_Tot`) REFERENCES `limpieza` (`id_Lim`),
  ADD CONSTRAINT `total_calificacion_ibfk_4` FOREIGN KEY (`Calificacion_Est_Tot`) REFERENCES `estandarización` (`id_Est`),
  ADD CONSTRAINT `total_calificacion_ibfk_5` FOREIGN KEY (`Calificacion_Dis_Tot`) REFERENCES `disciplina` (`id_Dis`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
