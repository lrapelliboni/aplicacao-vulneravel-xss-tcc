CREATE DATABASE tcc;

USE `tcc`;

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE `produtos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) DEFAULT NULL,
  `preco` decimal(10,2) DEFAULT NULL,
  `descricao` text,
  `estrelas` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
);

INSERT INTO `produtos` VALUES (1,'Produto 01',10.59,'Descrição do produto 01 teste teste teste',5),(2,'Produto 2',20.36,'Descrição do produto 02 test',3),(3,'Produto 3',150.98,'Descrição do produto 03',1),(4,'Produto 4',90.00,'Descrição do produto 04',5),(5,'Produto 5',59.35,'Descrição do produto 05',2);

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `usuario` varchar(255) DEFAULT NULL,
  `senha` char(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
);
