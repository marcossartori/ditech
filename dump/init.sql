-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.7.14 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para ditech
CREATE DATABASE IF NOT EXISTS `ditech` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `ditech`;

-- Copiando estrutura para tabela ditech.reservas
CREATE TABLE IF NOT EXISTS `reservas` (
  `idusuario` int(11) DEFAULT NULL,
  `datareserva` varchar(50) NOT NULL,
  `horafim` varchar(50) NOT NULL,
  `horaini` varchar(50) DEFAULT NULL,
  `status` enum('0','1') DEFAULT '0',
  `idsalas` int(11) DEFAULT NULL,
  PRIMARY KEY (`datareserva`,`horafim`),
  KEY `FK_reservas_salas` (`idsalas`),
  KEY `FK_reservas_usuarios` (`idusuario`),
  CONSTRAINT `FK_reservas_salas` FOREIGN KEY (`idsalas`) REFERENCES `salas` (`idsalas`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_reservas_usuarios` FOREIGN KEY (`idusuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela ditech.reservas: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `reservas` DISABLE KEYS */;
/*!40000 ALTER TABLE `reservas` ENABLE KEYS */;

-- Copiando estrutura para tabela ditech.salas
CREATE TABLE IF NOT EXISTS `salas` (
  `idsalas` int(12) NOT NULL AUTO_INCREMENT,
  `numero` int(12) NOT NULL,
  `predio` varchar(50) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idsalas`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela ditech.salas: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `salas` DISABLE KEYS */;
INSERT INTO `salas` (`idsalas`, `numero`, `predio`, `nome`) VALUES
	(2, 2, 'informatica', 'servidor 2'),
	(3, 2, 'informatica', 'servidor 25');
/*!40000 ALTER TABLE `salas` ENABLE KEYS */;

-- Copiando estrutura para tabela ditech.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `setor` varchar(100) NOT NULL,
  `senha` varchar(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela ditech.usuarios: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`, `usuario`, `nome`, `email`, `setor`, `senha`) VALUES
	(24, 'ditech', 'ditech', 'ditech@treinamento.com', 'informatica', 'ditech');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
