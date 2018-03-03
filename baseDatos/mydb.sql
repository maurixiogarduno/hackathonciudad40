-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 03-03-2018 a las 21:14:27
-- Versión del servidor: 5.7.21-log
-- Versión de PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mydb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `destino`
--

DROP TABLE IF EXISTS `destino`;
CREATE TABLE IF NOT EXISTS `destino` (
  `Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) NOT NULL,
  `Latitud` double NOT NULL,
  `Longitud` double NOT NULL,
  `Medio_Id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `fk_Destino_Medio1_idx` (`Medio_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `destino_has_productos`
--

DROP TABLE IF EXISTS `destino_has_productos`;
CREATE TABLE IF NOT EXISTS `destino_has_productos` (
  `Destino_Id` int(10) UNSIGNED NOT NULL,
  `Productos_Id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`Destino_Id`,`Productos_Id`),
  KEY `fk_Destino_has_Productos_Productos1_idx` (`Productos_Id`),
  KEY `fk_Destino_has_Productos_Destino1_idx` (`Destino_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medio`
--

DROP TABLE IF EXISTS `medio`;
CREATE TABLE IF NOT EXISTS `medio` (
  `Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) NOT NULL,
  `Matricula` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

DROP TABLE IF EXISTS `personas`;
CREATE TABLE IF NOT EXISTS `personas` (
  `Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) NOT NULL,
  `Telefono` varchar(45) NOT NULL,
  `Sucursal_Id` int(10) UNSIGNED NOT NULL,
  `Tipo_persona_Id` int(10) UNSIGNED NOT NULL,
  `Contraseña` varchar(45) NOT NULL,
  PRIMARY KEY (`Id`,`Tipo_persona_Id`),
  KEY `fk_Personas_Sucursal_idx` (`Sucursal_Id`),
  KEY `fk_Personas_Tipo_persona1_idx` (`Tipo_persona_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
  `Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) NOT NULL,
  `Código` varchar(45) NOT NULL,
  `Sucursal_Id` int(10) UNSIGNED NOT NULL,
  `Tipo_producto_Id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `fk_Productos_Sucursal1_idx` (`Sucursal_Id`),
  KEY `fk_Productos_Tipo_producto1_idx` (`Tipo_producto_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursal`
--

DROP TABLE IF EXISTS `sucursal`;
CREATE TABLE IF NOT EXISTS `sucursal` (
  `Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) NOT NULL,
  `Latitud` double NOT NULL,
  `Longitud` double NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_persona`
--

DROP TABLE IF EXISTS `tipo_persona`;
CREATE TABLE IF NOT EXISTS `tipo_persona` (
  `Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Descripcion` varchar(45) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_persona`
--

INSERT INTO `tipo_persona` (`Id`, `Descripcion`) VALUES
(1, 'Administrador'),
(2, 'Voluntario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_producto`
--

DROP TABLE IF EXISTS `tipo_producto`;
CREATE TABLE IF NOT EXISTS `tipo_producto` (
  `Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Descripción` varchar(45) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_producto`
--

INSERT INTO `tipo_producto` (`Id`, `Descripción`) VALUES
(1, 'Medicamentos'),
(2, 'Alimentos');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `destino`
--
ALTER TABLE `destino`
  ADD CONSTRAINT `fk_Destino_Medio1` FOREIGN KEY (`Medio_Id`) REFERENCES `medio` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `destino_has_productos`
--
ALTER TABLE `destino_has_productos`
  ADD CONSTRAINT `fk_Destino_has_Productos_Destino1` FOREIGN KEY (`Destino_Id`) REFERENCES `destino` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Destino_has_Productos_Productos1` FOREIGN KEY (`Productos_Id`) REFERENCES `productos` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `personas`
--
ALTER TABLE `personas`
  ADD CONSTRAINT `fk_Personas_Sucursal` FOREIGN KEY (`Sucursal_Id`) REFERENCES `sucursal` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Personas_Tipo_persona1` FOREIGN KEY (`Tipo_persona_Id`) REFERENCES `tipo_persona` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_Productos_Sucursal1` FOREIGN KEY (`Sucursal_Id`) REFERENCES `sucursal` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Productos_Tipo_producto1` FOREIGN KEY (`Tipo_producto_Id`) REFERENCES `tipo_producto` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
