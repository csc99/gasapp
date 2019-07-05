-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.1.37-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para gasapp
CREATE DATABASE IF NOT EXISTS `gasapp` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `gasapp`;

-- Volcando estructura para tabla gasapp.gasolineras
CREATE TABLE IF NOT EXISTS `gasolineras` (
  `idees` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `horario` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `latitud` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `longitud` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `localidad` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `municipio` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `provincia` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rotulo` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_municipio` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_provincia` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_ccaa` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idees`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla gasapp.gasolineras: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `gasolineras` DISABLE KEYS */;
INSERT INTO `gasolineras` (`idees`, `direccion`, `horario`, `latitud`, `longitud`, `localidad`, `municipio`, `provincia`, `rotulo`, `id_municipio`, `id_provincia`, `id_ccaa`) VALUES
	('14209', 'asd', 'L-D: 24H', '42,842917', '-2,519194', 'ALEGRIA-DULANTZI', 'Alegría-Dulantzi', 'ÁLAVA', 'ES DULANTZI REPSOL', '1', '01', '16');
/*!40000 ALTER TABLE `gasolineras` ENABLE KEYS */;

-- Volcando estructura para tabla gasapp.productos
CREATE TABLE IF NOT EXISTS `productos` (
  `idees` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `biodiesel` float DEFAULT NULL,
  `bioetanol` float DEFAULT NULL,
  `gasoleo_a` float DEFAULT NULL,
  `gasoleo_b` float DEFAULT NULL,
  `gasolina_95` float DEFAULT NULL,
  `gasolina_98` float DEFAULT NULL,
  `nuevo_gasoleo_a` float DEFAULT NULL,
  PRIMARY KEY (`idees`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla gasapp.productos: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
