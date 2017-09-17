-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18-Ago-2017 às 23:11
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
(1, 'ASCDV', 'VSDVSDV', 'SDSVSD', '2017-06-02 16:19:22'),
(2, 'mauricio', 'mauricio@institutoideia.com', 'ASCA', '2017-06-02 16:19:52'),
(3, 'fbf', 'rthrt', 'trbrt', '2017-06-02 16:27:52'),
(4, 'VWDGVSD', 'DFWDFSFSDF', 'DSDSD', '2017-06-02 19:37:15'),
(5, 'sdv', 'sdvsd', 'vsdvv', '2017-06-04 21:39:14'),
(6, 'teste', 'teste@teste', 'teste', '2017-06-06 18:02:07'),
(7, 'kek', 'kek', 'kek', '2017-08-10 18:23:01'),
(8, 'jugj', 'jgvm', 'jgkmv', '2017-08-10 18:24:49'),
(9, 'jennifer', 'jenniferquresl7@hotmail.com', 'ola', '2017-08-10 18:26:43'),
(10, 'ujgvjj', 'fgyigygty', 'gvghbjgh', '2017-08-17 18:44:30');

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
(20, 'teste', 'teste@teste', 'teste', '2017-06-06 18:01:45'),
(21, 'jennifer', 'jenniferquresl7@hotmail.com', 'oi\r\n', '2017-08-03 18:04:44'),
(22, 'JENNIFER', 'alexander@praadoetakamura.com.br', 'OI', '2017-08-16 09:27:40'),
(23, 'HFHF', 'FNFNFCCFN', 'CFNFCNRDNNNNNNNNCFF', '2017-08-17 18:45:11');

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente_tcc`
--
ALTER TABLE `cliente_tcc`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `contato_tcc`
--
ALTER TABLE `contato_tcc`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
