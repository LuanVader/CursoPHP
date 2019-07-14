-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         5.7.24 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             9.5.0.5332
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para almacen
CREATE DATABASE IF NOT EXISTS `almacen` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `almacen`;

-- Volcando estructura para tabla almacen.productos
CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(10) NOT NULL,
  `nombreProducto` varchar(50) DEFAULT NULL,
  `categoria` varchar(50) DEFAULT NULL,
  `cantidadPorUnidad` varchar(50) DEFAULT NULL,
  `precioUnidad` decimal(10,2) DEFAULT NULL,
  `unidadEnExistencia` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla almacen.productos: ~9 rows (aproximadamente)
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` (`id`, `nombreProducto`, `categoria`, `cantidadPorUnidad`, `precioUnidad`, `unidadEnExistencia`) VALUES
	(2, '	Cerveza tibetana Barley', '	Bebidas	 ', '	24 - bot. 12 l	 ', 19.00, 17),
	(3, '	Sirope de regaliz	 ', '	Condimentos	 ', '	12 - bot. 550 ml	 ', 10.00, 13),
	(4, '	Especias Cajun del chef Anton	 ', '	Condimentos	 ', '	48 - frascos 6 l	 ', 22.00, 53),
	(7, '	Peras secas orgánicas del tío Bob	 ', '	Frutas/Verduras	 ', '	12 - paq. 1 kg	 ', 30.00, 15),
	(8, '	Salsa de arándanos Northwoods	 ', '	Condimentos	 ', '	12 - frascos 12 l	 ', 40.00, 6),
	(10, '	Pez espada	 ', '	Pescado/Marisco	 ', '	12 - frascos 200 ml	 ', 31.00, 31),
	(12, '	Queso Manchego La Pastora	 ', '	Lácteos	 ', '	10 - paq. 500 g	 ', 38.00, 86),
	(14, '	Cuajada de judías	 ', '	Frutas/Verduras	 ', '	40 - paq. 100 g	 ', 23.25, 35),
	(15, '	Salsa de soja baja en sodio	 ', '	Condimentos	 ', '	24 - bot. 250 ml	 ', 15.50, 39);
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;

-- Volcando estructura para tabla almacen.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) DEFAULT NULL,
  `user` varchar(10) DEFAULT NULL,
  `password` varchar(6) DEFAULT NULL,
  `nivel` int(11) DEFAULT NULL,
  `estado` bit(1) DEFAULT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla almacen.usuarios: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`idUser`, `nombre`, `user`, `password`, `nivel`, `estado`) VALUES
	(1, 'Luis Angel', 'LUAN', '123', 1, b'1'),
	(16, 'Mercedes', 'MERC', '123456', 1, b'1');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
