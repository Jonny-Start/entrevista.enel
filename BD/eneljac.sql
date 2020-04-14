-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-04-2020 a las 05:54:43
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `eneljac`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrevistapsicologica`
--

CREATE TABLE `entrevistapsicologica` (
  `nombre` varchar(40) NOT NULL,
  `cc` int(12) NOT NULL,
  `fecha_nac` date NOT NULL,
  `dependencia` varchar(20) NOT NULL,
  `cargo` varchar(20) NOT NULL,
  `cargoAspira` varchar(20) NOT NULL,
  `telefono` varchar(30) NOT NULL,
  `aspiracionSal` decimal(10,0) DEFAULT NULL,
  `fechaEntrevista` datetime DEFAULT NULL,
  `psicologa` varchar(30) NOT NULL,
  `responsabilidad` bit(1) NOT NULL,
  `productividad` bit(1) NOT NULL,
  `gestionCambio` bit(1) NOT NULL,
  `innovacion` bit(1) NOT NULL,
  `resiliencia` bit(1) NOT NULL,
  `confianza` bit(1) NOT NULL,
  `comportamientoEtico` varchar(30) NOT NULL,
  `fuenteR` varchar(20) NOT NULL,
  `resultadoI` char(2) DEFAULT NULL,
  `inteligenciaE` varchar(30) NOT NULL,
  `candidatoU` varchar(2) NOT NULL,
  `explicacion` blob DEFAULT NULL,
  `resolucionProblemas` varchar(30) NOT NULL,
  `observaciones` blob DEFAULT NULL,
  `adecuado` char(5) DEFAULT NULL,
  `adecuadoP` char(5) DEFAULT NULL,
  `parcialmente` char(5) DEFAULT NULL,
  `primera` char(5) DEFAULT NULL,
  `segunda` char(5) DEFAULT NULL,
  `noA` char(5) DEFAULT NULL,
  `concepto` text DEFAULT NULL,
  `co` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `nombre` varchar(20) NOT NULL,
  `apellidos` varchar(20) NOT NULL,
  `co` int(15) NOT NULL,
  `Perfil` varchar(15) NOT NULL,
  `correo_electronico` varchar(40) NOT NULL,
  `contraseña` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`nombre`, `apellidos`, `co`, `Perfil`, `correo_electronico`, `contraseña`) VALUES
('jhkjsdhfkjasd', 'jldshfkasdlkfjh', 1883392, 'admin', 'jonnyalejandro.ca0910@gmail.com', '12345654kj'),
('Jonny Alejandro ', 'Cano Acosta ', 1006844604, 'Admin', 'jonny.cano@enel.com', '1006844604jonny'),
('ANGELICA MARIA ', 'BARBOSA PERILLA', 1022407151, 'Admin', 'angelica.barbosa@enel.com', 'Codensa2020'),
('Santiago ', 'Garcia', 1193200780, 'Jefe', 'santy1234789@outlook.com', 'holaquetal?'),
('Santiago ', 'Garcia Lasso', 2147483647, 'Admin', 'santy1234789@hotmail.com', 'holacomoestas?');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `entrevistapsicologica`
--
ALTER TABLE `entrevistapsicologica`
  ADD PRIMARY KEY (`cc`),
  ADD KEY `co` (`co`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`co`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `entrevistapsicologica`
--
ALTER TABLE `entrevistapsicologica`
  ADD CONSTRAINT `entrevistapsicologica_ibfk_1` FOREIGN KEY (`co`) REFERENCES `usuario` (`co`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
