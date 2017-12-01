/*
MySQL Backup
Source Server Version: 5.5.5
Source Database: estacionamento
Date: 30/11/2017 23:00:54
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
--  Table structure for `cliente`
-- ----------------------------
DROP TABLE IF EXISTS `cliente`;
CREATE TABLE `cliente` (
  `idCliente` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `cpf` varchar(16) NOT NULL,
  `cidade` varchar(20) DEFAULT NULL,
  `estado` varchar(20) DEFAULT NULL,
  `idFuncionario` int(11) NOT NULL,
  PRIMARY KEY (`idCliente`),
  KEY `idFuncionario` (`idFuncionario`),
  CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`idFuncionario`) REFERENCES `funcionario` (`idFuncionario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `funcionario`
-- ----------------------------
DROP TABLE IF EXISTS `funcionario`;
CREATE TABLE `funcionario` (
  `idFuncionario` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `cpf` varchar(16) NOT NULL,
  `rg` varchar(20) NOT NULL,
  `telefone` varchar(30) NOT NULL,
  `funcao` varchar(30) NOT NULL,
  PRIMARY KEY (`idFuncionario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `pagamento`
-- ----------------------------
DROP TABLE IF EXISTS `pagamento`;
CREATE TABLE `pagamento` (
  `idPagamento` int(11) NOT NULL,
  `data_hora_inicial` datetime NOT NULL,
  `data_hora_final` datetime NOT NULL,
  `valor_hora` decimal(3,2) NOT NULL,
  `periodo` time NOT NULL,
  `juro` decimal(3,2) NOT NULL,
  `valor_final` decimal(3,2) NOT NULL,
  `idReserva` int(11) NOT NULL,
  `idFuncionario` int(11) NOT NULL,
  PRIMARY KEY (`idPagamento`),
  KEY `idReserva` (`idReserva`),
  KEY `idFuncionario` (`idFuncionario`),
  CONSTRAINT `pagamento_ibfk_1` FOREIGN KEY (`idReserva`) REFERENCES `reserva` (`idReserva`),
  CONSTRAINT `pagamento_ibfk_2` FOREIGN KEY (`idFuncionario`) REFERENCES `funcionario` (`idFuncionario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `reserva`
-- ----------------------------
DROP TABLE IF EXISTS `reserva`;
CREATE TABLE `reserva` (
  `idReserva` int(11) NOT NULL,
  `idVaga` int(11) NOT NULL,
  `idCliente` int(11) NOT NULL,
  `idFuncionario` int(11) NOT NULL,
  `placa` int(11) NOT NULL,
  `data_hora` datetime DEFAULT NULL,
  PRIMARY KEY (`idReserva`),
  KEY `idVaga` (`idVaga`),
  KEY `idCliente` (`idCliente`),
  KEY `idFuncionario` (`idFuncionario`),
  KEY `placa` (`placa`),
  CONSTRAINT `reserva_ibfk_1` FOREIGN KEY (`idVaga`) REFERENCES `vaga` (`idVaga`),
  CONSTRAINT `reserva_ibfk_2` FOREIGN KEY (`idCliente`) REFERENCES `cliente` (`idCliente`),
  CONSTRAINT `reserva_ibfk_3` FOREIGN KEY (`idFuncionario`) REFERENCES `funcionario` (`idFuncionario`),
  CONSTRAINT `reserva_ibfk_4` FOREIGN KEY (`placa`) REFERENCES `veiculo` (`placa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `vaga`
-- ----------------------------
DROP TABLE IF EXISTS `vaga`;
CREATE TABLE `vaga` (
  `idVaga` int(11) NOT NULL,
  `situacao` enum('L','O') NOT NULL,
  `andar` varchar(5) NOT NULL,
  `numero` int(11) NOT NULL,
  `idFuncionario` int(11) NOT NULL,
  PRIMARY KEY (`idVaga`),
  KEY `idFuncionario` (`idFuncionario`),
  CONSTRAINT `vaga_ibfk_1` FOREIGN KEY (`idFuncionario`) REFERENCES `funcionario` (`idFuncionario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `veiculo`
-- ----------------------------
DROP TABLE IF EXISTS `veiculo`;
CREATE TABLE `veiculo` (
  `placa` int(10) NOT NULL,
  `modelo` varchar(30) NOT NULL,
  `marca` varchar(30) NOT NULL,
  `cor` varchar(15) NOT NULL,
  `cidade` varchar(20) DEFAULT NULL,
  `estado` varchar(20) DEFAULT NULL,
  `idCliente` int(11) NOT NULL,
  `idFuncionario` int(11) NOT NULL,
  PRIMARY KEY (`placa`),
  KEY `idCliente` (`idCliente`),
  KEY `idFuncionario` (`idFuncionario`),
  CONSTRAINT `veiculo_ibfk_1` FOREIGN KEY (`idCliente`) REFERENCES `cliente` (`idCliente`),
  CONSTRAINT `veiculo_ibfk_2` FOREIGN KEY (`idFuncionario`) REFERENCES `funcionario` (`idFuncionario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records 
-- ----------------------------
INSERT INTO `cliente` VALUES ('0','Roberta Oliveira dos Anjos','234.215.785-89','Jequié','Bahia','0');
INSERT INTO `funcionario` VALUES ('0','Gabriel Silva Costa','Av. Paulo Afonso, 44','564.725.263-76','13.543.232-12','(71) 8132-9871','Gerente');
