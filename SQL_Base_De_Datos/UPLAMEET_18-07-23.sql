-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.20-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para meet
CREATE DATABASE IF NOT EXISTS `meet` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `meet`;

-- Volcando estructura para tabla meet.listainvitados
CREATE TABLE IF NOT EXISTS `listainvitados` (
  `idLista` int(11) NOT NULL AUTO_INCREMENT,
  `Cantidad` int(11) DEFAULT NULL,
  `ListaInvitados` mediumtext DEFAULT NULL,
  PRIMARY KEY (`idLista`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla meet.listainvitados: ~0 rows (aproximadamente)

-- Volcando estructura para tabla meet.reunion
CREATE TABLE IF NOT EXISTS `reunion` (
  `idReunion` int(11) NOT NULL AUTO_INCREMENT,
  `Titulo` varchar(999) DEFAULT NULL,
  `Temario` varchar(999) DEFAULT NULL,
  `Acta` varchar(999) DEFAULT NULL,
  `Enlace` varchar(999) DEFAULT NULL,
  `Estado` tinyint(4) DEFAULT NULL,
  `Fecha` date DEFAULT NULL,
  `TipoReunion` tinyint(4) DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `idLista` int(11) DEFAULT NULL,
  PRIMARY KEY (`idReunion`) USING BTREE,
  KEY `FK_TipoReunion` (`TipoReunion`),
  KEY `FK_Lista` (`idLista`),
  CONSTRAINT `FK_Lista` FOREIGN KEY (`idLista`) REFERENCES `listainvitados` (`idLista`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_TipoReunion` FOREIGN KEY (`TipoReunion`) REFERENCES `tipo_reunion` (`idTipoReunion`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla meet.reunion: ~0 rows (aproximadamente)

-- Volcando estructura para tabla meet.tipo_reunion
CREATE TABLE IF NOT EXISTS `tipo_reunion` (
  `idTipoReunion` tinyint(4) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Recurrente` tinyint(4) DEFAULT NULL,
  `TiempoRecurrencia` time DEFAULT NULL,
  PRIMARY KEY (`idTipoReunion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla meet.tipo_reunion: ~3 rows (aproximadamente)
REPLACE INTO `tipo_reunion` (`idTipoReunion`, `Nombre`, `Recurrente`, `TiempoRecurrencia`) VALUES
	(1, 'Ingenieria', 0, '15:56:15'),
	(2, 'Ciencias', 1, '15:56:47'),
	(3, 'Pedagogía', 2, '15:56:55');

-- Volcando estructura para tabla meet.tipo_usuario
CREATE TABLE IF NOT EXISTS `tipo_usuario` (
  `idTipo` int(11) NOT NULL,
  `NombreTipo` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idTipo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla meet.tipo_usuario: ~2 rows (aproximadamente)
REPLACE INTO `tipo_usuario` (`idTipo`, `NombreTipo`) VALUES
	(1, 'Organizador'),
	(2, 'Invitado');

-- Volcando estructura para tabla meet.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `NombreUsuario` varchar(50) DEFAULT NULL,
  `EmailUsuario` varchar(255) DEFAULT NULL,
  `idTipo` int(11) DEFAULT NULL,
  `CargoUsuario` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idUsuario`),
  KEY `FK_Tipo` (`idTipo`),
  CONSTRAINT `FK_Tipo` FOREIGN KEY (`idTipo`) REFERENCES `tipo_usuario` (`idTipo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla meet.usuario: ~0 rows (aproximadamente)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
