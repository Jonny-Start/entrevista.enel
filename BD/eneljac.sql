-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-04-2020 a las 08:26:47
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
  `aspiracionSal` varchar(10) DEFAULT NULL,
  `fechaEntrevista` datetime DEFAULT current_timestamp(),
  `psicologa` varchar(30) NOT NULL,
  `responsabilidad` tinyint(1) NOT NULL,
  `productividad` tinyint(1) NOT NULL,
  `gestionCambio` tinyint(1) NOT NULL,
  `innovacion` tinyint(1) NOT NULL,
  `resiliencia` tinyint(1) NOT NULL,
  `confianza` tinyint(1) NOT NULL,
  `comportamientoEtico` varchar(30) NOT NULL,
  `fuenteR` varchar(20) NOT NULL,
  `resultadoI` varchar(3) DEFAULT NULL,
  `inteligenciaE` varchar(30) NOT NULL,
  `candidatoU` varchar(2) NOT NULL,
  `explicacion` text DEFAULT NULL,
  `resolucionProblemas` varchar(30) NOT NULL,
  `observaciones` text DEFAULT NULL,
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
('', 0, '0000-00-00', '', '', '', '', '', '2020-04-16 01:08:32', 'jonny.cano@enel.com', 0, 0, 0, 0, 0, 0, '', '', '', '', 'no', '', '', '', '', '', '', '', '', '', '', NULL),
('Jonny Alejandro ', 2135675, '2005-01-01', 'fasdgafdg', 'dASDFGDHFDFAS', 'ASDFGDHJHRGAESFS', '23546213413', '127', '1970-01-01 00:00:00', 'jonny.cano@enel.com', 127, 3, 4, 3, 4, 5, 'DAASf', 'fSDFds', '\r\n', '200', 'no', 'fsdfasdfasdkjfgkjhsdlhjfglGLHJDFJABCBKJABLFKJHLKdhfkljhsdakjlhflkjahsdlkjfhalkfh alkshdflkjasdhlf  asfhadtkjshflkjds  klafhsdj alsjdh fKJHKJHLKJGJKGDLKJG lkjeh flkash llwkjel jewhlkjhsflkjhlgkjhasdflkgjhaljsdhlgkjahlkgjsdahjk.aljslgfkhlsdakjghsda joNNY ', 'masomenos ', 'ewagfhfdsfdaskdjGHJTRDSGAHDJFMFGDFSFAKGFAHRAJTKSYLÑDHFSDFALJGALFJGHlskdjhfñkjdshflkjaghlsdkjfgljskdfgljkasdflkjljkfgsdflkjsgdlfglkjdsfljlsdkjfglakjg. jonny ', 'si', '', 'si', '', 'si', '', 'gjkfsdkjlglkjasflkjsaldkjfgkJHSDFGKHJASDJHFGSDAJFJHASDFKHJAGSDKJHFGAHKJSDFG.JONNY', NULL),
('Jonny Alejandro ', 1006844604, '2001-10-09', 'a eso ', 'no hago nada ', 'kdjhsakjdas', '3015018468', '', '2020-04-15 16:43:39', 'jonny.cano@enel.com', 33, 127, 3, 5, 6, 3, 'nose ', 'Facebook', 'b21', '200', 'si', 'no pues es muy bueno el pelao ', 'masomenos ', 'no ninguno pues se saco un moco en la entrevista pero no era tan largo asi que pues no hay problema con decirle que lo compartimos y todo.', 'si', '', '', '', '', '', 'El man es una pepa moy tenaz el chinito bueno para que.', NULL),
('Jonny Alejandro ', 1123321772, '2002-10-09', 'kjhkljasdfasd', 'lkjglkjhglkjghjlk', 'kjhlkjglkjgljglkjglk', '3107550085', '1', '1970-01-01 00:00:00', '', 1, 1, 1, 1, 1, 1, 'nose ', 'fcaebook', '\r\n', '200', 'no', 'kahflsdkjghlaskdjhflkadsjhlfkjasdhlkfjhasdlkjfhlasdkjhflkajsdhflkjashdlfkjh lorem200', 'fsadlkjfhlaksjdhflaksjdhflkjas', 'lkhdkshfsdakjhglkajhflkjha ñlasdh lgvhlsdakjhflkjhasdlkfjlsdhjlfas ljsda jlflasdb lgalsdb jlsad ljasdhvl ljb l jlxc  ladpij vljafblkjhñkuhsa d jonny alejandro ', '', '', '', '', '', 'si', 'd,jkasFGKJHGSKDFJHGASKDJFHGSKDAJHFGJHSD FBISADFJHKSDFKJASDKHJFGOG OIWER OEWUJFHSDLJBFKJASDKJHFGKJASDFKJHASDKFAKJSHDFHASDBVHKASDBKUFASYDH', NULL),
('Jonny Alejandro ', 2147483647, '2001-10-09', 'fdsafds', 'fasdfads', 'adsfasdf', '423415134', '100', '1970-01-01 00:00:00', '', 1, 1, 1, 1, 1, 1, 'nose ', 'fcaebook', '\r\n', '200', 'no', 'dasfdgDLSFJKHCGJSKAHDFKJHGsdakjfgkjhasdkfjhacnisehfbliuhascdljfhglkjasdh fkjabsdjkf jhsdhlkjfl agdksjhfglksdahlfkjgalsdjhfglkjahsdJOnny cano', 'wetrsdafgsdgdfgdfgfsd', 'dasKJLFHGLKhfglkjSDLJHFLHldjshflhsdaljflhasdljflhsdlhflkjhasdlkjfhlkjasdhflkjashdlkjfhalksdjfglkjasdfljh Jonny alejandro cano', 'si', '', '', '', '', 'si', 'lcjGLSDFGALSDKHFLLKJSDAHFLHJKASDLKJHFHASDLKJHFLJKAHSDLJFHLKJASDHJLFHASDLVCJHASDBF JONNY CANO', NULL);

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
  `contraseña` varchar(20) NOT NULL,
  `token` varchar(50) DEFAULT NULL,
  `token_password` varchar(20) DEFAULT NULL,
  `pasword_request` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`nombre`, `apellidos`, `co`, `Perfil`, `correo_electronico`, `contraseña`, `token`, `token_password`, `pasword_request`) VALUES
('jhkjsdhfkjasd', 'jldshfkasdlkfjh', 1883392, 'admin', 'jonnyalejandro.ca0910@gmail.com', '12345654kj', NULL, NULL, NULL),
('Jonny Alejandro ', 'Cano Acosta ', 1006844604, 'Admin', 'jonny.cano@enel.com', '1006844604jonny', NULL, NULL, NULL),
('ANGELICA MARIA ', 'BARBOSA PERILLA', 1022407151, 'Admin', 'angelica.barbosa@enel.com', 'Codensa2020', NULL, NULL, NULL),
('Santiago ', 'Garcia', 1193200780, 'Jefe', 'santy1234789@outlook.com', 'holaquetal?', NULL, NULL, NULL),
('Santiago ', 'Garcia Lasso', 2147483647, 'Admin', 'santy1234789@hotmail.com', 'holacomoestas?', NULL, NULL, NULL);

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
