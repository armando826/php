-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 19-04-2018 a las 04:30:51
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `gastopersonal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuotas`
--

CREATE TABLE IF NOT EXISTS `cuotas` (
  `ID` int(11) NOT NULL,
  `Idpago` int(11) NOT NULL,
  `Plazo` int(11) DEFAULT NULL,
  `Capital` decimal(10,0) DEFAULT NULL,
  `Cantidad` decimal(10,0) DEFAULT NULL,
  `Cuotapagada` int(11) DEFAULT NULL,
  `CuotaFaltante` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `Idpago` (`Idpago`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cuotas`
--

INSERT INTO `cuotas` (`ID`, `Idpago`, `Plazo`, `Capital`, `Cantidad`, `Cuotapagada`, `CuotaFaltante`) VALUES
(1, 2, 24, '700', '35', NULL, 24);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gastos`
--

CREATE TABLE IF NOT EXISTS `gastos` (
  `ID` int(11) NOT NULL,
  `titulo` varchar(25) DEFAULT NULL,
  `Cantidad` decimal(10,0) DEFAULT NULL,
  `Fecha` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `Descricion` varchar(100) DEFAULT NULL,
  `Idpago` int(11) DEFAULT NULL,
  `Idinfousuario` char(5) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `Idpago` (`Idpago`,`Idinfousuario`),
  KEY `Idusuario` (`Idinfousuario`),
  KEY `Idinfousuario` (`Idinfousuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `gastos`
--

INSERT INTO `gastos` (`ID`, `titulo`, `Cantidad`, `Fecha`, `Hora`, `Descricion`, `Idpago`, `Idinfousuario`) VALUES
(1, 'recarga', '3', '2018-04-18', '07:00:00', 'recarga digicel', NULL, 'p001'),
(3, 'pago recibo de agua', '12', '2018-04-18', '08:00:00', 'pago de resivo de agua', 1, 'p001');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `infousuario`
--

CREATE TABLE IF NOT EXISTS `infousuario` (
  `ID` char(5) NOT NULL,
  `Saldo` float DEFAULT NULL,
  `FechaInicio` date DEFAULT NULL,
  `FechaFinal` date DEFAULT NULL,
  `IdUsuario` char(5) DEFAULT NULL,
  `Idperiodo` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ID` (`ID`),
  UNIQUE KEY `ID_2` (`ID`),
  UNIQUE KEY `ID_3` (`ID`),
  UNIQUE KEY `ID_4` (`ID`),
  KEY `IdUsuario` (`IdUsuario`),
  KEY `Idperiodo` (`Idperiodo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `infousuario`
--

INSERT INTO `infousuario` (`ID`, `Saldo`, `FechaInicio`, `FechaFinal`, `IdUsuario`, `Idperiodo`) VALUES
('p001', 300, '2018-04-01', '2018-04-08', 'ar005', 1),
('p002', 200, '2018-04-01', '2018-04-08', 'is003', 1),
('p003', 400, '2018-04-01', '2018-05-01', 'mey02', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE IF NOT EXISTS `pagos` (
  `ID` int(1) NOT NULL,
  `Nombre` varchar(15) DEFAULT NULL,
  `Cantidad` decimal(10,0) DEFAULT NULL,
  `FechaPago` date DEFAULT NULL,
  `Descripcion` varchar(100) DEFAULT NULL,
  `IdUsuario` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `IdUsuario` (`IdUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pagos`
--

INSERT INTO `pagos` (`ID`, `Nombre`, `Cantidad`, `FechaPago`, `Descripcion`, `IdUsuario`) VALUES
(1, 'resivo de agua', '12', '2018-04-20', 'pago de recibo de agua ', 'ar005'),
(2, 'tvLG', '35', '2018-04-21', 'cuota mensual de una tv', 'ar005');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodotrabajo`
--

CREATE TABLE IF NOT EXISTS `periodotrabajo` (
  `ID` int(1) NOT NULL,
  `periodo` varchar(25) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `periodotrabajo`
--

INSERT INTO `periodotrabajo` (`ID`, `periodo`) VALUES
(1, 'semanal'),
(2, 'quincenal'),
(3, 'mensual');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `ID` char(5) NOT NULL,
  `Nombre` varchar(25) NOT NULL,
  `Apellido` varchar(25) NOT NULL,
  `Edad` int(11) DEFAULT NULL,
  `Usuario` varchar(50) DEFAULT NULL,
  `Contraseña` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `Usuario` (`Usuario`),
  KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ID`, `Nombre`, `Apellido`, `Edad`, `Usuario`, `Contraseña`) VALUES
('ar005', 'Armando', 'Lopez', 23, 'arman', '123456'),
('is003', 'isai', 'Beltran', 12, 'isa', '123456'),
('mey02', 'meilyn', 'Garcia', 22, 'mey', '123456');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cuotas`
--
ALTER TABLE `cuotas`
  ADD CONSTRAINT `cuotas_ibfk_1` FOREIGN KEY (`Idpago`) REFERENCES `pagos` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `gastos`
--
ALTER TABLE `gastos`
  ADD CONSTRAINT `gastos_ibfk_1` FOREIGN KEY (`Idpago`) REFERENCES `pagos` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `gastos_ibfk_3` FOREIGN KEY (`Idinfousuario`) REFERENCES `infousuario` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `infousuario`
--
ALTER TABLE `infousuario`
  ADD CONSTRAINT `infousuario_ibfk_2` FOREIGN KEY (`Idperiodo`) REFERENCES `periodotrabajo` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `infousuario_ibfk_1` FOREIGN KEY (`IdUsuario`) REFERENCES `usuario` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD CONSTRAINT `pagos_ibfk_1` FOREIGN KEY (`IdUsuario`) REFERENCES `usuario` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
