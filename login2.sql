-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18-Ago-2017 às 23:10
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login2`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `login_tcc`
--

CREATE TABLE `login_tcc` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(50) COLLATE utf8_bin NOT NULL,
  `senha` varchar(50) COLLATE utf8_bin NOT NULL,
  `dt_atualiza` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `login_tcc`
--

INSERT INTO `login_tcc` (`id_usuario`, `usuario`, `senha`, `dt_atualiza`) VALUES
(15, 'GGGG', '123', '2017-08-17'),
(16, 'GGGG', '123', '2017-08-17'),
(17, 'jennifer', 'JENNYFER2011', '2017-08-17'),
(18, 'jennifer', 'jennyfer2011', '2017-08-17'),
(19, 'jejjejeje', 'JEJEJEJ', '2017-08-17'),
(20, 'jennifer', 'JENNYFER2011', '2017-08-18'),
(21, 'jennifer', '62626', '2017-08-18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login_tcc`
--
ALTER TABLE `login_tcc`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login_tcc`
--
ALTER TABLE `login_tcc`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
