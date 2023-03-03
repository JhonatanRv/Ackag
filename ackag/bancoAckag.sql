-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.27-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.4.0.6659
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para ackag
CREATE DATABASE IF NOT EXISTS `ackag` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `ackag`;

-- Copiando estrutura para tabela ackag.contatos
CREATE TABLE IF NOT EXISTS `contatos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` char(70) NOT NULL,
  `telefone` int(10) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `motivo` char(170) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela ackag.contatos: ~9 rows (aproximadamente)
INSERT INTO `contatos` (`id`, `nome`, `telefone`, `email`, `motivo`) VALUES
	(20, 'nome12', 0, 'aaa@email.com', 'textwefrweafwefrwr'),
	(21, 'nomeLegal', 0, 'email.legal@email.com', 'textolegalmuitomaneiro'),
	(22, 'teste', 0, 'aaaaaaaaa@email.co', '1365672352457456'),
	(23, 'teste123', 0, 'email.email@email.com', 'extaeawedaWEAWE'),
	(24, 'João Pedro da Cunha', 0, 'robert22in.123@email.com', 'fdsfrfsfrsfasdfargsfdsgaerfsdfargsgsfdgragradfarevgreg'),
	(25, 'form legal', 0, 'exemplo.123@email.com', '74108/6529685208520963,'),
	(26, 'AAAAAAAAAAA', 0, 'email.123@email.com', 'etykjmdfgjk'),
	(27, '22222222222222222222', 0, 'email.email@email.com', '1231231sdfasfsdfasdfasdf'),
	(28, 'teste1231313123', 0, 'AAAAAA.email@email.com', 'AAAAAA'),
	(29, 'AAAAAAAADDD', 0, 'robertin.123@email.com', 'dfgsdgsdfgsfdg'),
	(30, 'robertinho manero', 0, 'robertin.123@email.com', 'çlkjhgfdhklnfddfghjkbfdsdfghjkl');


-- Copiando estrutura do banco de dados para crude
CREATE DATABASE IF NOT EXISTS `crude` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `crude`;

-- Copiando estrutura para tabela crude.aula01
CREATE TABLE IF NOT EXISTS `aula01` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` int(250) NOT NULL,
  `login` int(50) NOT NULL,
  `email` int(50) NOT NULL,
  `senha` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela crude.aula01: ~0 rows (aproximadamente)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
