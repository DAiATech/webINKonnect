-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.1.33-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para appinkonnect
CREATE DATABASE IF NOT EXISTS `appinkonnect` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `appinkonnect`;

-- Copiando estrutura para tabela appinkonnect.estudio
CREATE TABLE IF NOT EXISTS `estudio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(250) DEFAULT NULL,
  `EnderecoNome` varchar(300) DEFAULT NULL,
  `EnderecoValor` point DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela appinkonnect.estudio: ~0 rows (aproximadamente)
DELETE FROM `estudio`;
/*!40000 ALTER TABLE `estudio` DISABLE KEYS */;
/*!40000 ALTER TABLE `estudio` ENABLE KEYS */;

-- Copiando estrutura para tabela appinkonnect.postagensimg
CREATE TABLE IF NOT EXISTS `postagensimg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imgName` varchar(200) DEFAULT NULL,
  `imgRandomName` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela appinkonnect.postagensimg: ~0 rows (aproximadamente)
DELETE FROM `postagensimg`;
/*!40000 ALTER TABLE `postagensimg` DISABLE KEYS */;
INSERT INTO `postagensimg` (`id`, `imgName`, `imgRandomName`) VALUES
	(1, '2021-05-12-como-deixar-os-gatos-mais-tranquilos.png', 'b4a6e26fb94f1e570c5420c2de582c37'),
	(2, 'download.png', '2db2c5e62abbfa3e7d2cb09d9c6c2721'),
	(3, 'download.png', '4c5c12c471773590941e3fbe761a99af'),
	(4, 'download.png', 'a91c4c9ab45045634a60869262e4cbeb'),
	(5, 'download.png', '4938503c62dfb6263c4b00f25cd4231c'),
	(6, 'confira-10-curiosidades-sobre-os-gatos-1024x683.png', 'be20ae082b38e7a82c84b14154476b7c'),
	(7, '2021-05-12-como-deixar-os-gatos-mais-tranquilos.png', '2ae0dd84bde434304250fbf3f51496dd'),
	(8, 'download.png', '83ce19c19df4e0bf2e9fece645e84f38'),
	(9, 'download.png', '5ef4b96ba76f56fd927263b6bb38d829'),
	(10, 'download.png', 'c634635cbccd62147c41dcc0f836e7e4'),
	(11, 'confira-10-curiosidades-sobre-os-gatos-1024x683.png', 'b1bef9b5f93b1ce2df427e30d9a5d855'),
	(12, 'download.png', 'd86d71a0d6534e00815115c567c467dd'),
	(13, '2021-05-12-como-deixar-os-gatos-mais-tranquilos.png', '9cf8496f9e769dd6166e86f06292265d'),
	(14, '2021-05-12-como-deixar-os-gatos-mais-tranquilos.png', 'fc6fc803814d94fba804de47fbd371d6'),
	(15, 'confira-10-curiosidades-sobre-os-gatos-1024x683.png', '2af3bdd31678f84da115038a2fa1ac55'),
	(16, '2021-05-12-como-deixar-os-gatos-mais-tranquilos.png', '30ac6812f8084fb26e8e160813d1ab85'),
	(17, 'confira-10-curiosidades-sobre-os-gatos-1024x683.png', 'a26ba83ea4e6e7cd347d5e752f390411'),
	(18, '2021-05-12-como-deixar-os-gatos-mais-tranquilos.png', 'd6eace36ad183a2aeb14948b86d4ef3f'),
	(19, 'confira-10-curiosidades-sobre-os-gatos-1024x683.png', 'cb4b97a28e736e34a0dcf3555d5a6f33'),
	(20, 'download.png', '3abd72dea3a6ce4dd75048769585f56c'),
	(21, '2021-05-12-como-deixar-os-gatos-mais-tranquilos.png', 'fa503785ee52ede625eac99c9037b224'),
	(22, '2021-05-12-como-deixar-os-gatos-mais-tranquilos.png.png', 'ffde5a11a8c924abaaf405b445ed8d79.png');
/*!40000 ALTER TABLE `postagensimg` ENABLE KEYS */;

-- Copiando estrutura para tabela appinkonnect.postagenstatuadores
CREATE TABLE IF NOT EXISTS `postagenstatuadores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(200) NOT NULL,
  `estilo` varchar(200) NOT NULL,
  `imgPostId` int(11) NOT NULL,
  `tatuadorId` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_imgPostId` (`imgPostId`),
  KEY `FK_tatuadorId` (`tatuadorId`),
  CONSTRAINT `FK_imgPostId` FOREIGN KEY (`imgPostId`) REFERENCES `postagensimg` (`id`),
  CONSTRAINT `FK_tatuadorId` FOREIGN KEY (`tatuadorId`) REFERENCES `tatuador` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela appinkonnect.postagenstatuadores: ~0 rows (aproximadamente)
DELETE FROM `postagenstatuadores`;
/*!40000 ALTER TABLE `postagenstatuadores` DISABLE KEYS */;
INSERT INTO `postagenstatuadores` (`id`, `descricao`, `estilo`, `imgPostId`, `tatuadorId`) VALUES
	(19, 'nics', '5', 20, 2),
	(20, 'postagem real', 'teste', 21, 2),
	(21, 'igor', 'bala', 22, 2);
/*!40000 ALTER TABLE `postagenstatuadores` ENABLE KEYS */;

-- Copiando estrutura para tabela appinkonnect.profileimg
CREATE TABLE IF NOT EXISTS `profileimg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imgName` varchar(200) DEFAULT NULL,
  `imgRandomName` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela appinkonnect.profileimg: ~0 rows (aproximadamente)
DELETE FROM `profileimg`;
/*!40000 ALTER TABLE `profileimg` DISABLE KEYS */;
INSERT INTO `profileimg` (`id`, `imgName`, `imgRandomName`) VALUES
	(1, 'download.png', 'afbc638a9178c1966d896af03984b12b'),
	(2, 'download.png.png', '10f25ddb76dbade03bc975b65316a6d6.png');
/*!40000 ALTER TABLE `profileimg` ENABLE KEYS */;

-- Copiando estrutura para tabela appinkonnect.sessao
CREATE TABLE IF NOT EXISTS `sessao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dataSessao` date DEFAULT NULL,
  `horario` time DEFAULT NULL,
  `valor` decimal(5,2) DEFAULT NULL,
  `anotacoes` varchar(250) DEFAULT NULL,
  `tatuador` int(11) DEFAULT NULL,
  `cliente` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela appinkonnect.sessao: ~0 rows (aproximadamente)
DELETE FROM `sessao`;
/*!40000 ALTER TABLE `sessao` DISABLE KEYS */;
/*!40000 ALTER TABLE `sessao` ENABLE KEYS */;

-- Copiando estrutura para tabela appinkonnect.tatuador
CREATE TABLE IF NOT EXISTS `tatuador` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `senha` varchar(256) DEFAULT NULL,
  `email` varchar(256) NOT NULL DEFAULT '',
  `cpf` varchar(256) NOT NULL,
  `especialidade` varchar(50) NOT NULL,
  `dataNascimento` date DEFAULT NULL,
  `profileImgId` int(11) DEFAULT NULL,
  `estudio` int(11) DEFAULT NULL,
  `postagem` bit(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_profileImgId` (`profileImgId`),
  KEY `estudio` (`estudio`),
  CONSTRAINT `FK_estudio` FOREIGN KEY (`estudio`) REFERENCES `estudio` (`id`),
  CONSTRAINT `FK_profileImgId` FOREIGN KEY (`profileImgId`) REFERENCES `profileimg` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela appinkonnect.tatuador: ~0 rows (aproximadamente)
DELETE FROM `tatuador`;
/*!40000 ALTER TABLE `tatuador` DISABLE KEYS */;
INSERT INTO `tatuador` (`id`, `nome`, `senha`, `email`, `cpf`, `especialidade`, `dataNascimento`, `profileImgId`, `estudio`, `postagem`) VALUES
	(1, 'igor', '202cb962ac59075b964b07152d234b70', 'igor@igor', '11111111111', 'vapo', '2023-10-23', NULL, NULL, NULL),
	(2, 'Arthur', '202cb962ac59075b964b07152d234b70', 'arthur@gmail.com', '11111111111', 'assa', '2023-10-23', 1, NULL, NULL),
	(3, 'Arthur', '202cb962ac59075b964b07152d234b70', 'arthurfudali5@gmail.com', '11111111111', 'fine line', '2023-10-23', 2, NULL, NULL);
/*!40000 ALTER TABLE `tatuador` ENABLE KEYS */;

-- Copiando estrutura para tabela appinkonnect.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `dataNascimento` date DEFAULT NULL,
  `nivel` int(11) DEFAULT NULL,
  `imagemProfile` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela appinkonnect.usuarios: ~9 rows (aproximadamente)
DELETE FROM `usuarios`;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `dataNascimento`, `nivel`, `imagemProfile`) VALUES
	(1, 'Arthur', 'arthur@gmail.com', '202cb962ac59075b964b', '2023-10-05', 1, '4ad45c30442c49e90ce634abc9ce49c3.png'),
	(2, 'Diego', 'dieguinhoclaudio@gmail.com', '202cb962ac59075b964b', '2023-10-01', 1, '804a2b6b9893671ef26888d80420193a.'),
	(3, 'DDDD', 'dieguinhoclaudio@gmail.com', '123', '2023-10-03', 1, '8d063a8e0aa6503acdd804bfc01e795c.'),
	(4, 'qq', 'dieguinhoclaudio@gmail.com', '123', '2023-10-09', 1, '.'),
	(5, 'qq', 'dieguinhoclaudio@gmail.com', '123', '2023-10-09', 1, '.'),
	(6, 'qq', 'dieguinhoclaudio@gmail.com', '123', '2023-10-09', 1, '.'),
	(7, 'qq', 'dieguinhoclaudio@gmail.com', '123', '2023-10-09', 1, '.'),
	(8, 'd', 'dieguinhoclaudio@gmail.com', '123', '2023-10-15', 1, 'ad334b5b24d83f6caf9d3f6b61f08aa3.'),
	(12, 'teste222', 'souzadiegocl@gmail.com', '202cb962ac59075b964b07152d234b70', '2023-10-30', 1, '613eb977f3c66ed4edb33f7c1b687355.'),
	(13, 'Arthur', 'a@a', '202cb962ac59075b964b07152d234b70', '2023-10-23', 1, '191f13ec94ea8e0ed1cdbc3ea3bc8024.png');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
