-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06-Out-2017 às 20:35
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tb_cadastro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastrocliente`
--

CREATE TABLE `cadastrocliente` (
  `id_cliente` int(11) NOT NULL,
  `nome` varchar(200) COLLATE utf16_bin NOT NULL,
  `cpf` int(11) NOT NULL,
  `rg` int(10) NOT NULL,
  `data_nascimento` date NOT NULL,
  `sexo` int(11) NOT NULL,
  `telefone` int(12) NOT NULL,
  `email` varchar(200) COLLATE utf16_bin NOT NULL,
  `senha` varchar(200) COLLATE utf16_bin NOT NULL,
  `estado` varchar(200) COLLATE utf16_bin NOT NULL,
  `dt_atualiza` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastrofornecedor`
--

CREATE TABLE `cadastrofornecedor` (
  `id_fornecedor` int(11) NOT NULL,
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
  `conta` varchar(10) COLLATE utf16_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastrofuncionario`
--

CREATE TABLE `cadastrofuncionario` (
  `id_funcionario` int(11) NOT NULL,
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
  `senha` varchar(255) COLLATE utf16_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastroproduto`
--

CREATE TABLE `cadastroproduto` (
  `id_produto` int(11) NOT NULL,
  `nomeproduto` varchar(30) COLLATE utf16_bin NOT NULL,
  `codigoproduto` int(20) NOT NULL,
  `marca` varchar(100) COLLATE utf16_bin NOT NULL,
  `fornecedor` varchar(100) COLLATE utf16_bin NOT NULL,
  `unidade` int(100) NOT NULL,
  `peso` int(20) NOT NULL,
  `estoqueminimo` int(100) NOT NULL,
  `estoquemaximo` int(100) NOT NULL,
  `codigogtin` int(14) NOT NULL,
  `valorvenda` int(100) NOT NULL,
  `valorcusto` int(100) NOT NULL,
  `origemproduto` varchar(100) COLLATE utf16_bin NOT NULL,
  `situacao` varchar(100) COLLATE utf16_bin NOT NULL,
  `estado` varchar(100) COLLATE utf16_bin NOT NULL,
  `dt_atualiza` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `user_role`
--

CREATE TABLE `user_role` (
  `id` bigint(20) NOT NULL,
  `user_id` int(11) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadastrocliente`
--
ALTER TABLE `cadastrocliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indexes for table `cadastrofornecedor`
--
ALTER TABLE `cadastrofornecedor`
  ADD PRIMARY KEY (`id_fornecedor`);

--
-- Indexes for table `cadastrofuncionario`
--
ALTER TABLE `cadastrofuncionario`
  ADD PRIMARY KEY (`id_funcionario`);

--
-- Indexes for table `cadastroproduto`
--
ALTER TABLE `cadastroproduto`
  ADD PRIMARY KEY (`id_produto`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_USER_ROLE_USER` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cadastrocliente`
--
ALTER TABLE `cadastrocliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cadastrofornecedor`
--
ALTER TABLE `cadastrofornecedor`
  MODIFY `id_fornecedor` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cadastrofuncionario`
--
ALTER TABLE `cadastrofuncionario`
  MODIFY `id_funcionario` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cadastroproduto`
--
ALTER TABLE `cadastroproduto`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `user_role`
--
ALTER TABLE `user_role`
  ADD CONSTRAINT `FK_USER_ROLE_USER` FOREIGN KEY (`user_id`) REFERENCES `cadastrofuncionario` (`id_funcionario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
