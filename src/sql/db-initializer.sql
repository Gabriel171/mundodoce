CREATE DATABASE  IF NOT EXISTS `login` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `login`;
-- MySQL dump 10.13  Distrib 5.6.17, for Win64 (x86_64)
--
-- Host: localhost    Database: login
-- ------------------------------------------------------
-- Server version	5.6.21-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cadastrocliente`
--

DROP TABLE IF EXISTS `cadastrocliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cadastrocliente` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) COLLATE utf16_bin NOT NULL,
  `cpf` varchar(20) COLLATE utf16_bin NOT NULL,
  `rg` int(10) NOT NULL,
  `data_nascimento` date NOT NULL,
  `sexo` varchar(1) COLLATE utf16_bin NOT NULL,
  `telefone` varchar(20) CHARACTER SET utf16 NOT NULL,
  `email` varchar(200) COLLATE utf16_bin NOT NULL,
  `senha` varchar(200) COLLATE utf16_bin NOT NULL,
  `estado` varchar(200) COLLATE utf16_bin NOT NULL,
  `dt_atualiza` datetime NOT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf16 COLLATE=utf16_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `cadastrofornecedor`
--

DROP TABLE IF EXISTS `cadastrofornecedor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cadastrofornecedor` (
  `id_fornecedor` int(11) NOT NULL AUTO_INCREMENT,
  `nomeempresa` varchar(100) COLLATE utf16_bin NOT NULL,
  `enderecoempresa` varchar(100) COLLATE utf16_bin NOT NULL,
  `cidade` varchar(100) COLLATE utf16_bin NOT NULL,
  `cep` int(11) NOT NULL,
  `pais` varchar(30) COLLATE utf16_bin NOT NULL,
  `cgc` varchar(100) COLLATE utf16_bin NOT NULL,
  `pessoacontato` varchar(50) COLLATE utf16_bin NOT NULL,
  `telefonecomercial` varchar(12) COLLATE utf16_bin NOT NULL,
  `email` varchar(20) COLLATE utf16_bin NOT NULL,
  `banco` varchar(20) COLLATE utf16_bin NOT NULL,
  `agencia` varchar(20) COLLATE utf16_bin NOT NULL,
  `estado` varchar(50) COLLATE utf16_bin NOT NULL,
  `dt_atualiza` datetime NOT NULL,
  `conta` varchar(10) COLLATE utf16_bin NOT NULL,
  PRIMARY KEY (`id_fornecedor`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf16 COLLATE=utf16_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `cadastrofuncionario`
--

DROP TABLE IF EXISTS `cadastrofuncionario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cadastrofuncionario` (
  `id_funcionario` int(11) NOT NULL AUTO_INCREMENT,
  `nomecompleto` varchar(100) COLLATE utf16_bin NOT NULL,
  `cpf` varchar(20) CHARACTER SET utf16 DEFAULT NULL,
  `rg` varchar(20) CHARACTER SET utf16 DEFAULT NULL,
  `cep` varchar(11) COLLATE utf16_bin DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  `telefone` varchar(15) CHARACTER SET utf16 DEFAULT NULL,
  `endereco` varchar(100) CHARACTER SET utf16 DEFAULT NULL,
  `bairro` varchar(100) CHARACTER SET utf16 DEFAULT NULL,
  `cidade` varchar(100) CHARACTER SET utf16 DEFAULT NULL,
  `estado` varchar(100) CHARACTER SET utf16 DEFAULT NULL,
  `dt_atualiza` datetime NOT NULL,
  `email` varchar(255) COLLATE utf16_bin NOT NULL,
  `senha` varchar(255) COLLATE utf16_bin NOT NULL,
  PRIMARY KEY (`id_funcionario`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf16 COLLATE=utf16_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `cadastroproduto`
--

DROP TABLE IF EXISTS `cadastroproduto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cadastroproduto` (
  `id_produto` int(11) NOT NULL AUTO_INCREMENT,
  `nomeproduto` varchar(30) COLLATE utf16_bin NOT NULL,
  `codigoproduto` int(20) NOT NULL,
  `marca` varchar(100) COLLATE utf16_bin NOT NULL,
  `fornecedor` varchar(100) COLLATE utf16_bin NOT NULL,
  `unidade` int(100) NOT NULL,
  `peso` int(20) NOT NULL,
  `estoqueminimo` int(100) NOT NULL,
  `estoquemaximo` int(100) NOT NULL,
  `codigogtin` int(14) NOT NULL,
  `valorvenda` decimal(19,2) NOT NULL,
  `valorcusto` decimal(19,2) NOT NULL,
  `origemproduto` varchar(100) COLLATE utf16_bin NOT NULL,
  `situacao` varchar(100) COLLATE utf16_bin NOT NULL,
  `estado` varchar(100) COLLATE utf16_bin NOT NULL,
  `dt_atualiza` datetime NOT NULL,
  `imagem` longblob NOT NULL,
  PRIMARY KEY (`id_produto`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf16 COLLATE=utf16_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `sale`
--

DROP TABLE IF EXISTS `sale`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sale` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `value` decimal(19,2) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `INDEX_SALE_ID` (`id`),
  KEY `FK_SALE_USER_ID` (`user_id`),
  CONSTRAINT `FK_SALE_USER_ID` FOREIGN KEY (`user_id`) REFERENCES `cadastrofuncionario` (`id_funcionario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `sale_item`
--

DROP TABLE IF EXISTS `sale_item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sale_item` (
  `id` bigint(20) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` bigint(20) NOT NULL,
  `value` decimal(19,2) NOT NULL,
  `sale_id` bigint(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `INDEX_SALE_ITEM_ID` (`id`),
  KEY `FK_SALE_ITEM_SALE` (`sale_id`),
  KEY `FK_SALE_ITEM_PRODUCT` (`product_id`),
  CONSTRAINT `FK_SALE_ITEM_PRODUCT` FOREIGN KEY (`product_id`) REFERENCES `cadastroproduto` (`id_produto`),
  CONSTRAINT `FK_SALE_ITEM_SALE` FOREIGN KEY (`sale_id`) REFERENCES `sale` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `user_role`
--

DROP TABLE IF EXISTS `user_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_role` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `role` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_USER_ROLE_USER` (`user_id`),
  CONSTRAINT `FK_USER_ROLE_USER` FOREIGN KEY (`user_id`) REFERENCES `login_tcc` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-10-22 21:39:22
