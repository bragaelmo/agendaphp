-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.7.38-log - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para projeto_mvc
CREATE DATABASE IF NOT EXISTS `projeto_mvc` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `projeto_mvc`;

-- Copiando estrutura para tabela projeto_mvc.compromisso
CREATE TABLE IF NOT EXISTS `compromisso` (
  `id` int(1) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `contato` int(11) NOT NULL,
  `usuario` int(11) NOT NULL,
  `dtcom` date NOT NULL,
  `compromisso` varchar(200) NOT NULL,
  `importante` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1 COMMENT='tabela dos compromissos';

-- Copiando dados para a tabela projeto_mvc.compromisso: ~8 rows (aproximadamente)
/*!40000 ALTER TABLE `compromisso` DISABLE KEYS */;
INSERT INTO `compromisso` (`id`, `contato`, `usuario`, `dtcom`, `compromisso`, `importante`) VALUES
	(2, 2, 2, '2022-06-13', '0', 1),
	(3, 5, 5, '2022-06-23', '0', 0),
	(4, 2, 5, '2022-06-29', 'teste', NULL),
	(5, 5, 10, '1991-03-26', 'teste', 0),
	(6, 2, 5, '2022-06-25', 'teste', 0),
	(7, 1, 3, '1991-03-31', 'teste', 1),
	(8, 2, 5, '2022-06-25', 'ir a missa ', 1),
	(9, 5, 7, '2022-06-30', 'ir rezar', 1);
/*!40000 ALTER TABLE `compromisso` ENABLE KEYS */;

-- Copiando estrutura para tabela projeto_mvc.contatos
CREATE TABLE IF NOT EXISTS `contatos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(80) NOT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela projeto_mvc.contatos: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `contatos` DISABLE KEYS */;
INSERT INTO `contatos` (`id`, `nome`, `telefone`, `email`) VALUES
	(2, 'fulana', '123456', '123@hotmal.com'),
	(3, '123', 'teste', '123132321@hotmali.com'),
	(5, 'mae', '3131313', 'mae@Htmail.com');
/*!40000 ALTER TABLE `contatos` ENABLE KEYS */;

-- Copiando estrutura para tabela projeto_mvc.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela projeto_mvc.usuario: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`id`, `usuario`, `senha`, `email`) VALUES
	(5, 'elmobraga', '356326', 'elmo_braga@hotmail.com'),
	(6, 'fulanoo', '123456', 'elmo_braga@hotmail.com'),
	(7, 'ELMO', '123456', 'elmo@hotmail.com');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
