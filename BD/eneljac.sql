-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-04-2020 a las 21:59:33
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.1.33

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

--
-- Volcado de datos para la tabla `entrevistapsicologica`
--

INSERT INTO `entrevistapsicologica` (`nombre`, `cc`, `fecha_nac`, `dependencia`, `cargo`, `cargoAspira`, `telefono`, `aspiracionSal`, `fechaEntrevista`, `psicologa`, `responsabilidad`, `productividad`, `gestionCambio`, `innovacion`, `resiliencia`, `confianza`, `comportamientoEtico`, `fuenteR`, `resultadoI`, `inteligenciaE`, `candidatoU`, `explicacion`, `resolucionProblemas`, `observaciones`, `adecuado`, `adecuadoP`, `parcialmente`, `primera`, `segunda`, `noA`, `concepto`, `co`) VALUES
('nombre', 0, '0000-00-00', 'dependencia', 'cargo', 'cargoAspira', 'telefono', '0', '0000-00-00 00:00:00', 'psicologa', b'1', b'1', b'1', b'1', b'1', b'1', 'comportamientoEtico', 'fuenteR', 're', 'inteligenciaE', 'ca', 0x6578706c69636163696f6e, 'resolucionProblemas', 0x6f62736572766163696f6e6573, 'adecu', 'adecu', 'parci', 'prime', 'segun', 'noA', 'concepto', NULL),
('juliana', 1214, '2005-01-01', '12143', 'aux', 'gerente', '12235', '122', '1970-01-01 00:00:00', '', b'0', b'0', b'0', b'0', b'0', b'0', 'bueno', 'facebook', '\r\n', 'nooo', 'no', 0x706f7275716520736969, 'no se', '', '', '', '', 'si', '', '', 'soy la mejor', NULL),
('Kaaaaa', 1234, '2020-04-02', 'jumm', 'Admin', 'Admin jaja', '12345', '99', '2020-04-30 00:00:00', 'jujujuju', b'1', b'1', b'1', b'0', b'1', b'0', '5', 'nose', '3', '10', '2', NULL, '12', NULL, '12', '3', '4', '1', '1', '4', 'Hola como estas?', 1006844604),
('juana', 123345, '2004-04-03', 'jajajaj', 'poepepe', 'gerente', '123456', '123', '1970-01-01 00:00:00', '', b'0', b'0', b'0', b'0', b'0', b'0', 'bueno', 'facebook', '\r\n', 'nooo', 'no', 0x706f72717565206e6f20736520, 'jummm', 0x736969, '', '', '', '', '', '', '', NULL),
('Juanita ', 1223345, '0001-02-02', 'kajdbksjdgbde', 'jhgcjc', 'Ingeniera', '12234', '100000', '1970-01-01 00:00:00', '', b'1', b'1', b'1', b'1', b'1', b'1', 'excelente', 'Wasaaaaa', '\r\n', 'nooo', 'no', 0x6a636a67637463, 'siiiiiiiii', 0x69757567797563757668, '', '', '', '', '', '', 'hola como estas bien y tu bien gracias me gustas muchooooooooooooooooooooooooooooooooooooookanglovisrhwguehifhiuqehfiuhqwhiwhfciuehfieufhieufiuehfieqhifhiueqhfiehifuhweughweuhgwrhgihwighewhgwehguhewughewhgwehguhweghwehguuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuunffffffffffffffffffffffffffffffffoaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaisssssssssssssssssssssssssssssssssssssssssssssssssssssjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeuuuuuuuuuuuuuuuuuuuuuuuuubbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb', NULL),
('Mattos', 1234567, '2005-01-09', 'hvvyuuyc', 'ingenira', 'Gerente', '87242471', '1000', '1970-01-01 00:00:00', '', b'1', b'1', b'1', b'1', b'1', b'1', 'excelente', 'Wasaaaaa', '\r\n', 'GOOD', 'no', 0x6275656e6f, 'lnkankdgn', 0x6b736a62676b6a73646267, '', '', '', '', '', '', 'oye que lindaaaa', NULL),
('Karen De Cano jajaj', 1000603947, '2002-07-09', 'de tu', 'Ingeniera', 'Gerente ', '313881353', '409990', '1970-01-01 00:00:00', '', b'1', b'1', b'1', b'1', b'1', b'1', 'excelente', 'Wasaaaaa', '\r\n', 'GOOD', 'no', 0x536f7920c3ba6e6963612065206972726570657469626c652078647864, 'Buenísimo como mi novio', 0x4d69206e6f76696f20657320756e20504150415349544f, 'si', '', '', '', '', '', 'Amo a mi noviooooooooo', NULL);

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
('kaaa', 'Mattos', 1244, 'pooo', 'karen@enel.com', '1234'),
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
