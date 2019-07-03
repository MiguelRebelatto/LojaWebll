-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03-Jul-2019 às 05:04
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` int(10) NOT NULL,
  `nome` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `descricao` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `nome`, `descricao`) VALUES
(1, 'teste', ''),
(2, 'teste cat', ''),
(3, 'Categoria 3', ''),
(4, 'Categoria 4', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(10) NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `preco` decimal(5,2) NOT NULL,
  `descricao` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `categorias` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `preco`, `descricao`, `categorias`) VALUES
(1, 'Produto 1', '3.00', 'Um belo produto', 2),
(2, 'Mais um Produto', '5.00', 'Uma ma?a vermelha', 2),
(3, 'Produto 3', '78.00', 'Produto 3 - Categoria 4', 4),
(4, 'Produto 8', '50.00', 'produto 8 produto 8produto 8produto 8produto 8 produto 8 ', 3),
(5, 'teste 5', '4.00', 'teste 5', 2),
(6, 'teste 6', '4.00', 'teste 6', 2),
(7, 'teste 7', '4.00', 'teste 7', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
(3, 'teste', 'teste', '$2y$10$RPUHZXfnOX.XL/cqWvx1peJbV.RcLWVvYseRi.y4GYgGTCLjcdhva'),
(5, 'aaaaa', 'aaa', '$2y$10$aTRRoJkDSkKvvO8.VRdyO.tQvrxDcwrOmgplM.L4Vr1d5OOwapnk6'),
(7, '123', '123@gmail.com', '$2y$10$vQG4YDWcYusL4RREAJ8FveUxszjI6i0qhud95sdMfb5XxoBFDDFrC'),
(8, 'Mgr', 'miguelgr199@hotmail.com', '$2y$10$/B/JPnxYW1YXQ/2CuMSnyO/aFdhEGsJHJ8p1COFUkMb6UxsF4.vcy'),
(10, 'M', 'm@m.com', '$2y$10$kDxXO7kR/iavD4vVrGwzkOgpBwdfK7DwbiKCNkZptKdon6U3qsBli'),
(11, 'tes', 'testmmm@m.com', '$2y$10$3p0FlMZjNxM3FoswGKiONev5iF06UeYCoZGv37/Ew.duGwz5nmJd6'),
(12, 'abc dfghjkl', 'anna@emial.com', '$2y$10$2q2b9FsOJgnX5rxoDYRGh.rtd2/8DXtY01DojH3SMsVigkFMTh2im');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
