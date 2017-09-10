-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.7.11 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para matriculas_ai
CREATE DATABASE IF NOT EXISTS `matriculas_ai` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `matriculas_ai`;

-- Volcando estructura para función matriculas_ai.buscar_id_matricula
DELIMITER //
CREATE DEFINER=`root`@`localhost` FUNCTION `buscar_id_matricula`(
	`id_search` INT
) RETURNS int(11)
BEGIN
	SET @i_ = (SELECT matriculas.mat_codigo FROM matriculas WHERE matriculas.mat_estudiante = id_search);
	RETURN @i_;
END//
DELIMITER ;

-- Volcando estructura para función matriculas_ai.buscar_id_novedad
DELIMITER //
CREATE DEFINER=`root`@`localhost` FUNCTION `buscar_id_novedad`(
	`id_search` INT(11)
) RETURNS int(11)
BEGIN
	SET @i_ = (SELECT nove.mat_codigo FROM matriculas WHERE matriculas.mat_estudiante = id_search);
	RETURN @i_;
END//
DELIMITER ;

-- Volcando estructura para función matriculas_ai.buscar_id_persona
DELIMITER //
CREATE DEFINER=`root`@`localhost` FUNCTION `buscar_id_persona`(
	`id_search` INT



) RETURNS int(11)
BEGIN
	SET @i_ = (SELECT personas.per_codigo FROM personas WHERE personas.per_id = id_search);	
	RETURN @i_;
END//
DELIMITER ;

-- Volcando estructura para tabla matriculas_ai.estados_reg
CREATE TABLE IF NOT EXISTS `estados_reg` (
  `estr_tipo` tinyint(3) NOT NULL DEFAULT '0',
  `estr_est` int(11) DEFAULT NULL,
  KEY `estr_tipo` (`estr_tipo`),
  KEY `estr_est` (`estr_est`),
  CONSTRAINT `estados_reg_ibfk_1` FOREIGN KEY (`estr_tipo`) REFERENCES `estados_tipo` (`estt_codigo`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `estados_reg_ibfk_2` FOREIGN KEY (`estr_est`) REFERENCES `personas` (`per_codigo`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla matriculas_ai.estados_reg: ~0 rows (aproximadamente)
DELETE FROM `estados_reg`;
/*!40000 ALTER TABLE `estados_reg` DISABLE KEYS */;
/*!40000 ALTER TABLE `estados_reg` ENABLE KEYS */;

-- Volcando estructura para tabla matriculas_ai.estados_tipo
CREATE TABLE IF NOT EXISTS `estados_tipo` (
  `estt_codigo` tinyint(3) NOT NULL AUTO_INCREMENT,
  `estt_nombre` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`estt_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla matriculas_ai.estados_tipo: ~2 rows (aproximadamente)
DELETE FROM `estados_tipo`;
/*!40000 ALTER TABLE `estados_tipo` DISABLE KEYS */;
INSERT INTO `estados_tipo` (`estt_codigo`, `estt_nombre`) VALUES
	(1, 'MATRICULADO'),
	(2, 'NO MATRICULADO');
/*!40000 ALTER TABLE `estados_tipo` ENABLE KEYS */;

-- Volcando estructura para procedimiento matriculas_ai.insertar_persona
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `insertar_persona`(
	IN `per_id_` INT(11),
	IN `per_nombres_` VARCHAR(50),
	IN `per_ape1_` VARCHAR(40),
	IN `per_ape2_` VARCHAR(40),
	IN `per_estrato_` TINYINT


,
	IN `mat_programa_` INT(11)
,
	IN `nov_detalle_` VARCHAR(255)

,
	IN `nov_cod_` INT(11)
,
	IN `loc_mun_` INT(11)



)
BEGIN
	INSERT INTO personas(per_id, per_nombres, per_apellido1, per_apellido2, per_estrato) 
	VALUES (per_id_, per_nombres_, per_ape1_, per_ape2_, per_estrato_);
	
	INSERT INTO matriculas(matriculas.mat_estudiante, matriculas.mat_programa)
	VALUES (buscar_id_persona(per_id_), mat_programa_);
	
	INSERT INTO novedades_reg(novedades_reg.novr_est, novedades_reg.novr_detalle)
	VALUES (buscar_id_persona(per_id_), nov_detalle_);
	
	INSERT INTO matriculas_h(matriculas_h.math_cod, matriculas_h.math_fecha, matriculas_h.math_semestre, matriculas_h.math_novedad)
	VALUES (buscar_id_matricula(per_id_), NOW(), 1, nov_cod_);
	
	INSERT INTO estados_reg (estados_reg.estr_tipo, estados_reg.estr_est)
	VALUES (1, buscar_id_persona(per_id_));
	
	INSERT INTO localizacion (localizacion.loc_mun, localizacion.loc_est)
	VALUES (loc_mun_, buscar_id_persona(per_id_));

	
END//
DELIMITER ;

-- Volcando estructura para tabla matriculas_ai.localizacion
CREATE TABLE IF NOT EXISTS `localizacion` (
  `loc_mun` int(11) NOT NULL DEFAULT '0',
  `loc_est` int(11) DEFAULT NULL,
  `loc_latitud` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `loc_longitud` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  KEY `loc_mun` (`loc_mun`),
  KEY `loc_est` (`loc_est`),
  CONSTRAINT `localizacion_ibfk_1` FOREIGN KEY (`loc_mun`) REFERENCES `municipios` (`mun_codigo`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `localizacion_ibfk_2` FOREIGN KEY (`loc_est`) REFERENCES `personas` (`per_codigo`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla matriculas_ai.localizacion: ~0 rows (aproximadamente)
DELETE FROM `localizacion`;
/*!40000 ALTER TABLE `localizacion` DISABLE KEYS */;
/*!40000 ALTER TABLE `localizacion` ENABLE KEYS */;

-- Volcando estructura para tabla matriculas_ai.matriculas
CREATE TABLE IF NOT EXISTS `matriculas` (
  `mat_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `mat_estudiante` int(11) NOT NULL DEFAULT '0',
  `mat_programa` int(11) DEFAULT NULL,
  PRIMARY KEY (`mat_codigo`,`mat_estudiante`),
  KEY `cod_estudiante` (`mat_estudiante`),
  KEY `mat_programa` (`mat_programa`),
  CONSTRAINT `matriculas_ibfk_1` FOREIGN KEY (`mat_estudiante`) REFERENCES `personas` (`per_codigo`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `matriculas_ibfk_2` FOREIGN KEY (`mat_programa`) REFERENCES `programas` (`prog_codigo`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla matriculas_ai.matriculas: ~0 rows (aproximadamente)
DELETE FROM `matriculas`;
/*!40000 ALTER TABLE `matriculas` DISABLE KEYS */;
INSERT INTO `matriculas` (`mat_codigo`, `mat_estudiante`, `mat_programa`) VALUES
	(6, 6, 21);
/*!40000 ALTER TABLE `matriculas` ENABLE KEYS */;

-- Volcando estructura para tabla matriculas_ai.matriculas_h
CREATE TABLE IF NOT EXISTS `matriculas_h` (
  `math_cod` int(11) NOT NULL DEFAULT '0',
  `math_fecha` datetime DEFAULT NULL,
  `math_semestre` tinyint(3) DEFAULT NULL,
  `math_novedad` int(11) DEFAULT NULL,
  KEY `math_cod` (`math_cod`),
  KEY `math_novedad` (`math_novedad`),
  CONSTRAINT `matriculas_h_ibfk_1` FOREIGN KEY (`math_cod`) REFERENCES `matriculas` (`mat_codigo`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `matriculas_h_ibfk_2` FOREIGN KEY (`math_novedad`) REFERENCES `novedades_tipo` (`nov_codigo`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla matriculas_ai.matriculas_h: ~0 rows (aproximadamente)
DELETE FROM `matriculas_h`;
/*!40000 ALTER TABLE `matriculas_h` DISABLE KEYS */;
/*!40000 ALTER TABLE `matriculas_h` ENABLE KEYS */;

-- Volcando estructura para tabla matriculas_ai.municipios
CREATE TABLE IF NOT EXISTS `municipios` (
  `mun_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `mun_nombre` varchar(80) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`mun_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=13895 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla matriculas_ai.municipios: ~46 rows (aproximadamente)
DELETE FROM `municipios`;
/*!40000 ALTER TABLE `municipios` DISABLE KEYS */;
INSERT INTO `municipios` (`mun_codigo`, `mun_nombre`) VALUES
	(13001, 'CARTAGENA'),
	(13006, 'ACHI'),
	(13030, 'ALTOS DEL ROSARIO'),
	(13042, 'ARENAL'),
	(13052, 'ARJONA'),
	(13062, 'ARROYOHONDO'),
	(13074, 'BARRANCO DE LOBA'),
	(13140, 'CALAMAR'),
	(13160, 'CANTAGALLO'),
	(13188, 'CICUCO'),
	(13212, 'CORDOBA'),
	(13222, 'CLEMENCIA'),
	(13244, 'EL CARMEN DE BOLIVAR'),
	(13248, 'EL GUAMO'),
	(13268, 'EL PEÑON'),
	(13300, 'HATILLO DE LOBA'),
	(13430, 'MAGANGUE'),
	(13433, 'MAHATES'),
	(13440, 'MARGARITA'),
	(13442, 'MARIA LA BAJA'),
	(13458, 'MONTECRISTO'),
	(13468, 'MOMPOS'),
	(13473, 'MORALES'),
	(13490, 'NOROSI'),
	(13549, 'PINILLOS'),
	(13580, 'REGIDOR'),
	(13600, 'RIO VIEJO'),
	(13620, 'SAN CRISTOBAL'),
	(13647, 'SAN ESTANISLAO'),
	(13650, 'SAN FERNANDO'),
	(13654, 'SAN JACINTO'),
	(13655, 'SAN JACINTO DEL CAUCA'),
	(13657, 'SAN JUAN NEPOMUCENO'),
	(13667, 'SAN MARTIN DE LOBA'),
	(13670, 'SAN PABLO'),
	(13673, 'SANTA CATALINA'),
	(13683, 'SANTA ROSA'),
	(13688, 'SANTA ROSA DEL SUR'),
	(13744, 'SIMITI'),
	(13760, 'SOPLAVIENTO'),
	(13780, 'TALAIGUA NUEVO'),
	(13810, 'TIQUISIO'),
	(13836, 'TURBACO'),
	(13838, 'TURBANA'),
	(13873, 'VILLANUEVA'),
	(13894, 'ZAMBRANO');
/*!40000 ALTER TABLE `municipios` ENABLE KEYS */;

-- Volcando estructura para tabla matriculas_ai.novedades_reg
CREATE TABLE IF NOT EXISTS `novedades_reg` (
  `novr_codigo` int(11) NOT NULL DEFAULT '0',
  `novr_detalle` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `novr_est` int(11) DEFAULT NULL,
  KEY `novr_est` (`novr_est`),
  CONSTRAINT `novedades_reg_ibfk_1` FOREIGN KEY (`novr_est`) REFERENCES `personas` (`per_codigo`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla matriculas_ai.novedades_reg: ~0 rows (aproximadamente)
DELETE FROM `novedades_reg`;
/*!40000 ALTER TABLE `novedades_reg` DISABLE KEYS */;
INSERT INTO `novedades_reg` (`novr_codigo`, `novr_detalle`, `novr_est`) VALUES
	(0, '...', 6);
/*!40000 ALTER TABLE `novedades_reg` ENABLE KEYS */;

-- Volcando estructura para tabla matriculas_ai.novedades_tipo
CREATE TABLE IF NOT EXISTS `novedades_tipo` (
  `nov_codigo` int(11) NOT NULL,
  `nov_tipo` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`nov_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla matriculas_ai.novedades_tipo: ~5 rows (aproximadamente)
DELETE FROM `novedades_tipo`;
/*!40000 ALTER TABLE `novedades_tipo` DISABLE KEYS */;
INSERT INTO `novedades_tipo` (`nov_codigo`, `nov_tipo`) VALUES
	(0, 'NINGUNA'),
	(1, 'SERVICIOS PUBLICOS'),
	(2, 'SEGURIDAD'),
	(3, 'ECONOMICA'),
	(4, 'ACADEMICA');
/*!40000 ALTER TABLE `novedades_tipo` ENABLE KEYS */;

-- Volcando estructura para tabla matriculas_ai.personas
CREATE TABLE IF NOT EXISTS `personas` (
  `per_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `per_id` varchar(11) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `per_nombres` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `per_apellido1` varchar(40) COLLATE utf8_spanish_ci DEFAULT NULL,
  `per_apellido2` varchar(40) COLLATE utf8_spanish_ci DEFAULT NULL,
  `per_estrato` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`per_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla matriculas_ai.personas: ~0 rows (aproximadamente)
DELETE FROM `personas`;
/*!40000 ALTER TABLE `personas` DISABLE KEYS */;
INSERT INTO `personas` (`per_codigo`, `per_id`, `per_nombres`, `per_apellido1`, `per_apellido2`, `per_estrato`) VALUES
	(6, '45431347', 'Karen', 'Parra', '', 2);
/*!40000 ALTER TABLE `personas` ENABLE KEYS */;

-- Volcando estructura para tabla matriculas_ai.programas
CREATE TABLE IF NOT EXISTS `programas` (
  `prog_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `prog_nombre` varchar(80) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`prog_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla matriculas_ai.programas: ~2 rows (aproximadamente)
DELETE FROM `programas`;
/*!40000 ALTER TABLE `programas` DISABLE KEYS */;
INSERT INTO `programas` (`prog_codigo`, `prog_nombre`) VALUES
	(21, 'CIVIL'),
	(22, 'SISTEMAS');
/*!40000 ALTER TABLE `programas` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
