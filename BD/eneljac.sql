-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-06-2020 a las 21:40:53
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
-- Estructura de tabla para la tabla `entrevistaaprendices_practicantes`
--

CREATE TABLE `entrevistaaprendices_practicantes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `dependencia` varchar(20) NOT NULL,
  `areaPractica` varchar(20) DEFAULT NULL,
  `ingles` varchar(20) DEFAULT NULL,
  `fechaEntrevista` varchar(10) DEFAULT NULL,
  `psicologa` varchar(40) NOT NULL,
  `cargo` varchar(20) DEFAULT 'Practicante',
  `conocimientoEmpresa` text DEFAULT NULL,
  `motivacionArea` text DEFAULT NULL,
  `ofimatica` int(11) DEFAULT NULL,
  `conocimientoProgramacion` text DEFAULT NULL,
  `adecuado` varchar(2) DEFAULT 'NO',
  `adecuadoP` varchar(2) DEFAULT 'NO',
  `parcialmente` varchar(2) DEFAULT 'NO',
  `segunda` varchar(2) DEFAULT 'NO',
  `noA` varchar(2) DEFAULT 'NO',
  `concepto` text DEFAULT NULL,
  `co` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrevistapsicologica`
--

CREATE TABLE `entrevistapsicologica` (
  `nombre` varchar(40) NOT NULL,
  `cc` int(12) NOT NULL,
  `dependencia` varchar(20) NOT NULL,
  `cargo` varchar(40) NOT NULL,
  `cargoAspira` varchar(40) NOT NULL,
  `telefono` varchar(30) NOT NULL,
  `aspiracionSal` varchar(10) DEFAULT NULL,
  `fechaEntrevista` date DEFAULT current_timestamp(),
  `psicologa` varchar(30) NOT NULL,
  `responsabilidad` tinyint(1) NOT NULL,
  `productividad` tinyint(1) NOT NULL,
  `gestionCambio` tinyint(1) NOT NULL,
  `innovacion` tinyint(1) NOT NULL,
  `resiliencia` tinyint(1) NOT NULL,
  `confianza` tinyint(1) NOT NULL,
  `dswm1` varchar(5) NOT NULL DEFAULT 'NO',
  `dswm2` varchar(5) NOT NULL DEFAULT 'NO',
  `dswo3` varchar(5) NOT NULL DEFAULT 'NO',
  `dswc4` varchar(5) NOT NULL DEFAULT 'NO',
  `dswp5` varchar(5) NOT NULL DEFAULT 'NO',
  `dswa6` varchar(5) NOT NULL DEFAULT 'NO',
  `dswd7` varchar(5) NOT NULL DEFAULT 'NO',
  `other1` text DEFAULT NULL,
  `dssk1` varchar(5) NOT NULL DEFAULT 'NO',
  `dssp2` varchar(5) NOT NULL DEFAULT 'NO',
  `dssv3` varchar(5) NOT NULL DEFAULT 'NO',
  `dssd4` varchar(5) NOT NULL DEFAULT 'NO',
  `dssd5` varchar(5) NOT NULL DEFAULT 'NO',
  `dssc6` varchar(5) NOT NULL DEFAULT 'NO',
  `other2` text DEFAULT NULL,
  `dsdp1` varchar(5) NOT NULL DEFAULT 'NO',
  `dsdc2` varchar(5) NOT NULL DEFAULT 'NO',
  `dsdi3` varchar(5) NOT NULL DEFAULT 'NO',
  `dsdc4` varchar(5) NOT NULL DEFAULT 'NO',
  `dsdu5` varchar(5) NOT NULL DEFAULT 'NO',
  `dsdm6` varchar(5) NOT NULL DEFAULT 'NO',
  `dsdd7` varchar(5) NOT NULL DEFAULT 'NO',
  `dsdi8` varchar(5) NOT NULL DEFAULT 'NO',
  `dsdi9` varchar(5) NOT NULL DEFAULT 'NO',
  `dsdr10` varchar(5) NOT NULL DEFAULT 'NO',
  `other3` text DEFAULT NULL,
  `comportamientoEtico` varchar(100) NOT NULL,
  `fuenteR` varchar(20) NOT NULL,
  `resultadoI` varchar(3) DEFAULT NULL,
  `inteligenciaE` varchar(30) NOT NULL,
  `candidatoU` varchar(2) NOT NULL,
  `explicacion` text DEFAULT NULL,
  `resolucionProblemas` varchar(30) NOT NULL,
  `observaciones` text DEFAULT NULL,
  `adecuado` varchar(5) NOT NULL DEFAULT 'NO',
  `adecuadoP` varchar(5) NOT NULL DEFAULT 'NO',
  `parcialmente` varchar(5) NOT NULL DEFAULT 'NO',
  `primera` varchar(5) NOT NULL DEFAULT 'NO',
  `segunda` varchar(5) NOT NULL DEFAULT 'NO',
  `noA` varchar(5) NOT NULL DEFAULT 'NO',
  `concepto` text DEFAULT NULL,
  `co` int(11) DEFAULT NULL,
  `terminado` varchar(5) NOT NULL DEFAULT 'False'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `entrevistapsicologica`
--

INSERT INTO `entrevistapsicologica` (`nombre`, `cc`, `dependencia`, `cargo`, `cargoAspira`, `telefono`, `aspiracionSal`, `fechaEntrevista`, `psicologa`, `responsabilidad`, `productividad`, `gestionCambio`, `innovacion`, `resiliencia`, `confianza`, `dswm1`, `dswm2`, `dswo3`, `dswc4`, `dswp5`, `dswa6`, `dswd7`, `other1`, `dssk1`, `dssp2`, `dssv3`, `dssd4`, `dssd5`, `dssc6`, `other2`, `dsdp1`, `dsdc2`, `dsdi3`, `dsdc4`, `dsdu5`, `dsdm6`, `dsdd7`, `dsdi8`, `dsdi9`, `dsdr10`, `other3`, `comportamientoEtico`, `fuenteR`, `resultadoI`, `inteligenciaE`, `candidatoU`, `explicacion`, `resolucionProblemas`, `observaciones`, `adecuado`, `adecuadoP`, `parcialmente`, `primera`, `segunda`, `noA`, `concepto`, `co`, `terminado`) VALUES
('Carlos Santiago', 1986711, '', '', '', '523523453', '', '2020-05-20', '', 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'yap', 1006844604, 'True'),
('Juan jose', 9657968, 'gggjghjg', 'hgjfkjfk', 'kjhfkjhfk', '765874864', '9765658', '2020-04-30', 'hgfhgfjfjhgfj', 5, 5, 3, 5, 4, 4, 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', NULL, 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', NULL, 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', NULL, 'mjhkjhgkhj', 'facebook', 'a2', 'yfgjhgj', 'no', 'khfkhfjgfyugjh', 'jhghjghjgjhgj', 'jhgjhgjhgj', '', 'si', 'si', '', '', 'si', 'listo pero ', 1006844604, 'True'),
('Jonny Bravo', 12345678, 'Enel X', 'Profesional Selección', 'Profesional Junior', '3015018468', '100000', '2020-05-28', 'Jonny AlejandroCano Acosta', 1, 2, 3, 4, 5, 1, 'SI', 'SI', 'SI', 'SI', '', '', '', '', '', '', 'SI', '', 'SI', '', '', 'SI', 'SI', '', 'SI', '', 'SI', 'SI', 'SI', '', 'SI', '', '80 / el candidato cumple con las dimensiones requeridas de la prueba de integridad  ', 'Linkedin', 'A1', '', 'NO', 'carlitos torres', '', 'El man es buena papa ', 'si', '', '', 'si', '', '', 'El candidato cuneta con experiencias en lenguajes de programación...  ', 1006844604, 'True'),
('Jeison sanchez', 12654346, '', '', '', '745763214', NULL, '0000-00-00', '', 0, 0, 0, 0, 0, 0, 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', NULL, 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', NULL, 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', NULL, '', '', NULL, '', '', NULL, '', NULL, 'si', 'si', 'si', 'si', 'si', 'si', 'hollaaaaaaaaaaaaaaaa', 1006844604, 'False'),
('carlos ', 19283746, '', 'Profesional Selección', '', '312312312', '21093112', '2020-05-21', 'Jonny AlejandroCano Acosta', 1, 1, 1, 1, 1, 1, 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', '', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', '', 'SI', 'SI', 'SI', 'SI', '', 'SI', 'SI', 'SI', 'SI', 'SI', '', '', '', '', '', 'NO', '', '', '', 'si', '', '', '', '', '', 'hola', 1006844604, 'True'),
('Miguel Rodriguez', 31862531, '', '', '', '42342252', NULL, '2020-04-28', '', 0, 0, 0, 0, 0, 0, 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', NULL, 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', NULL, 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', NULL, '', '', NULL, '', '', NULL, '', NULL, 'si', '', '', 'si', '', '', '...', 1006844604, 'True'),
('Rogelio ', 354676587, 'gggjghjg', 'hgjfkjfk', 'kjhfkjhfk', '54234864', '97654238', '2020-03-23', 'hgfhgfjfjhgfj', 5, 5, 3, 5, 4, 4, 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', NULL, 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', NULL, 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', NULL, 'mjhkjhgkhj', 'facebook', 'a2', 'yfgjhgj', 'no', 'khfkhfjgfyugjh', 'jhghjghjgjhgj', 'jhgjhgjhgj', 'si', 'no', 'si', 'no', 'si', 'no', 'ljhgjkgjhg', 1006844604, 'False'),
('Irene Acosta Villarreal', 1123321772, 'I&N', 'Profesional Selección', 'Bussines', '3107550085', '1002020392', '2020-05-21', 'Jonny Alejandro Cano Acosta', 1, 2, 3, 4, 5, 1, 'SI', 'SI', 'SI', 'SI', '', '', '', '', '', '', '', '', 'SI', '', '', 'SI', 'SI', '', 'SI', '', 'SI', 'SI', 'SI', '', 'SI', '', 'Bueno', 'Linkeding', 'B2', 'Buena', 'SI', 'NO pues que te digo es seleccion directa, pero lo mas importante es que es buena papa', 'bueno ', 'No ninguna Observacion', 'si', '', '', 'si', 'si', '', 'En la entrevista fue re chimbita', 1006844604, 'True'),
('Natalia Tabarez lozano', 2147483647, '', '', '', '234502488', NULL, '2010-02-28', '', 0, 0, 0, 0, 0, 0, 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', NULL, 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', NULL, 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', NULL, '', '', NULL, '', '', NULL, '', NULL, '', '', '', '', '', '', 'nada', 1006844604, 'True');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `nombre` varchar(20) NOT NULL,
  `apellidos` varchar(20) NOT NULL,
  `co` int(15) NOT NULL,
  `Perfil` varchar(16) NOT NULL,
  `correo_electronico` varchar(40) NOT NULL,
  `contraseña` varchar(20) NOT NULL,
  `EGeneradas` bigint(30) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`nombre`, `apellidos`, `co`, `Perfil`, `correo_electronico`, `contraseña`, `EGeneradas`) VALUES
('Joselito', 'Torres', 411123412, 'Business_Partner', 'jonnyalejandro.ca0910@gmail.com', '123', 0),
('Daniel ', 'Suarez', 1000458752, 'Jefe', 'daniel.suarez@enel.com', 'daniel123456', 0),
('carlos ', 'santiago', 1004423423, 'Jefe', 'jkldajs@enel.com', 'rewrwerqwe', 0),
('Jonny Alejandro', 'Cano Acosta', 1006844604, 'Administrador', 'jonny.cano@enel.com', '1234', 0),
('ANGELICA MARIA ', 'BARBOSA PERILLA', 1022407151, 'Business_partner', 'angelica.barbosa@enel.com', 'Codensa2020', 0),
('Santiago ', 'Garcia', 1193200780, 'Jefe', 'santy1234789@outlook.com', 'holaquetal?', 0),
('Jonny Alejandro ', 'e3rewrqew', 2147483647, 'Business_Partner', 'qwrqwerwqer@enel.com', 'fwesdfatrwetrqew', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `entrevistaaprendices_practicantes`
--
ALTER TABLE `entrevistaaprendices_practicantes`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `entrevistaaprendices_practicantes`
--
ALTER TABLE `entrevistaaprendices_practicantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `entrevistapsicologica`
--
ALTER TABLE `entrevistapsicologica`
  ADD CONSTRAINT `entrevistapsicologica_ibfk_1` FOREIGN KEY (`co`) REFERENCES `usuario` (`co`);
COMMIT;

ALTER TABLE `entrevistaaprendices_practicantes`
  ADD CONSTRAINT `entrevistaaprendices_practicantes_ibfk_1` FOREIGN KEY (`co`) REFERENCES `usuario` (`co`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
