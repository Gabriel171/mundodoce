-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18-Ago-2017 às 23:08
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cadastro`
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

--
-- Extraindo dados da tabela `cadastrocliente`
--

INSERT INTO `cadastrocliente` (`id_cliente`, `nome`, `cpf`, `rg`, `data_nascimento`, `sexo`, `telefone`, `email`, `senha`, `estado`, `dt_atualiza`) VALUES
(1, 'Mauricio', 111, 11, '0000-00-00', 0, 123339712, 'mauricio@institutoideia.com', '1234', '1', '2017-08-16 18:54:58'),
(2, 'Jennifer Oxi Mainha', 3333112, 123, '0000-00-00', 0, 123339712, 'oxxxxxxxxxxi@institutoideia.com', '1234', '1', '2017-08-16 18:57:03'),
(3, 'jennifer', 2147483647, 2961, '0702-00-00', 0, 981945332, 'jenniferquresl7@hotmail.com', 'jennyfer', 'sao paulo', '2017-08-16 18:59:48'),
(4, 'jennifer', 498698, 54515, '0000-00-00', 0, 0, 'jenniferquresl7@hotmail.com', 'jennyfer2011', 'SP', '2017-08-17 12:34:50'),
(5, 'jennifer queres', 498698, 54515, '0000-00-00', 0, 0, 'gg@gmail.com', 'LFVMCF', 'SP', '2017-08-18 17:46:32');

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

--
-- Extraindo dados da tabela `cadastrofornecedor`
--

INSERT INTO `cadastrofornecedor` (`id_fornecedor`, `nomeempresa`, `enderecoempresa`, `cidade`, `cep`, `pais`, `cgc`, `pessoacontato`, `telefonecomercial`, `email`, `banco`, `agencia`, `estado`, `dt_atualiza`, `conta`) VALUES
(1, 'qqq', 'Avenida Carlos Drummond de Andrade', 'Jacareí', 12328, 'Brasil', '33.381.121/2221-41', 'qq', '(11)1111-111', '12222', '111-1', '11', '1', '2017-08-17 18:27:24', '11'),
(2, 'GG', 'Rua MaurÃ­cio Cardoso', 'SÃ£o JosÃ© dos Campos', 12236, 'Brasil', '22.222.222/2222-22', 'SVDV', '(12)9819-453', 'gg@gmail.com', '488-4', '5955', 'SP', '2017-08-18 17:49:01', '599529');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastrofuncionario`
--

CREATE TABLE `cadastrofuncionario` (
  `id_funcionario` int(11) NOT NULL,
  `nomecompleto` varchar(100) COLLATE utf16_bin NOT NULL,
  `cpf` int(11) NOT NULL,
  `rg` int(10) NOT NULL,
  `cep` int(11) NOT NULL,
  `data_nascimento` date NOT NULL,
  `telefone` int(15) NOT NULL,
  `endereco` varchar(100) COLLATE utf16_bin NOT NULL,
  `bairro` varchar(100) COLLATE utf16_bin NOT NULL,
  `cidade` varchar(100) COLLATE utf16_bin NOT NULL,
  `estado` varchar(100) COLLATE utf16_bin NOT NULL,
  `dt_atualiza` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Extraindo dados da tabela `cadastrofuncionario`
--

INSERT INTO `cadastrofuncionario` (`id_funcionario`, `nomecompleto`, `cpf`, `rg`, `cep`, `data_nascimento`, `telefone`, `endereco`, `bairro`, `cidade`, `estado`, `dt_atualiza`) VALUES
(1, 'jennifer queres', 498698, 65411, 12236, '0000-00-00', 0, 'Rua MaurÃ­cio Cardoso', 'Jardim Sul', 'SÃ£o JosÃ© dos Campos', 'SP', '2017-08-17 12:40:49'),
(2, 'jennifer queres', 498698, 65411, 12236, '0000-00-00', 0, 'Rua MaurÃ­cio Cardoso', 'Jardim Sul', 'SÃ£o JosÃ© dos Campos', 'SP', '2017-08-17 12:42:42'),
(3, 'jennifer queres', 498698, 54515, 12236, '0000-00-00', 0, 'Rua MaurÃ­cio Cardoso', 'Jardim Sul', 'SÃ£o JosÃ© dos Campos', 'SP', '2017-08-18 17:50:01');

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

--
-- Extraindo dados da tabela `cadastroproduto`
--

INSERT INTO `cadastroproduto` (`id_produto`, `nomeproduto`, `codigoproduto`, `marca`, `fornecedor`, `unidade`, `peso`, `estoqueminimo`, `estoquemaximo`, `codigogtin`, `valorvenda`, `valorcusto`, `origemproduto`, `situacao`, `estado`, `dt_atualiza`) VALUES
(10, 'gg', 0, 'gg', 'gg', 0, 0, 0, 0, 0, 0, 0, 'gg', 'gg', 'RJ', '2017-08-17 13:01:05'),
(11, 'jennifer queres', 12236, 'GG', 'GG', 0, 1, 1, 1, 2147483647, 53453, 53, '53543', '5', 'SP', '2017-08-17 18:09:24'),
(12, '111', 111, '111', '111', 1111, 111, 111, 11, 111, 111, 111, '111', '111', 'PR', '2017-08-17 18:17:08'),
(13, '111', 111, '111', '111', 1111, 111, 111, 11, 111, 111, 111, '111', '111', 'PR', '2017-08-17 18:21:29'),
(14, '111', 111, '111', '111', 1111, 111, 111, 11, 111, 111, 111, '111', '111', 'PR', '2017-08-17 18:23:40'),
(15, '111', 111, '111', '111', 1111, 111, 111, 11, 111, 111, 111, '111', '111', 'PR', '2017-08-17 18:24:10'),
(16, 'jennifer queres', 12236, 'gg', 'GG', 1, 0, 1, 1, 1, 1, 1, '1', '1', 'PI', '2017-08-18 17:47:41');

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cadastrocliente`
--
ALTER TABLE `cadastrocliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `cadastrofornecedor`
--
ALTER TABLE `cadastrofornecedor`
  MODIFY `id_fornecedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cadastrofuncionario`
--
ALTER TABLE `cadastrofuncionario`
  MODIFY `id_funcionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `cadastroproduto`
--
ALTER TABLE `cadastroproduto`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
