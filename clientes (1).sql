-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06-Out-2017 às 20:34
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clientes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente_tcc`
--

CREATE TABLE `cliente_tcc` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf32_bin NOT NULL,
  `email` varchar(50) COLLATE utf32_bin NOT NULL,
  `mensagem` varchar(200) COLLATE utf32_bin NOT NULL,
  `dt_atualiza` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_bin;

--
-- Extraindo dados da tabela `cliente_tcc`
--

INSERT INTO `cliente_tcc` (`id_usuario`, `nome`, `email`, `mensagem`, `dt_atualiza`) VALUES
(1, 'Helen Ferreira', 'gg@gg.com', 'scwe', '2017-09-26 11:52:55'),
(2, 'jeh', 'admin@gmail.com', 'oi', '2017-10-02 21:08:27');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato_tcc`
--

CREATE TABLE `contato_tcc` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf32_bin NOT NULL,
  `email` varchar(50) COLLATE utf32_bin NOT NULL,
  `mensagem` varchar(200) COLLATE utf32_bin NOT NULL,
  `dt_atualiza` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_bin;

--
-- Extraindo dados da tabela `contato_tcc`
--

INSERT INTO `contato_tcc` (`id_usuario`, `nome`, `email`, `mensagem`, `dt_atualiza`) VALUES
(1, 'Helen Ferreira', 'gg@gg.com', 'oi', '2017-09-26 11:32:13');

-- --------------------------------------------------------

--
-- Estrutura da tabela `mobile`
--

CREATE TABLE `mobile` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf32_bin NOT NULL,
  `email` varchar(50) COLLATE utf32_bin NOT NULL,
  `mensagem` text COLLATE utf32_bin NOT NULL,
  `dt_atualiza` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_bin;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente_tcc`
--
ALTER TABLE `cliente_tcc`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indexes for table `contato_tcc`
--
ALTER TABLE `contato_tcc`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indexes for table `mobile`
--
ALTER TABLE `mobile`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente_tcc`
--
ALTER TABLE `cliente_tcc`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `contato_tcc`
--
ALTER TABLE `contato_tcc`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mobile`
--
ALTER TABLE `mobile`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
