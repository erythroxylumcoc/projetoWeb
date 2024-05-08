-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08/05/2024 às 13:58
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `brecho`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `carrinho`
--

CREATE TABLE `carrinho` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `cpf` varchar(220) NOT NULL,
  `senha` varchar(220) NOT NULL,
  `endereco` int(11) NOT NULL,
  `tele` int(11) NOT NULL,
  `a` int(11) NOT NULL,
  `b` int(11) NOT NULL,
  `c` int(11) NOT NULL,
  `created` date NOT NULL,
  `modified` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `carrinho`
--

INSERT INTO `carrinho` (`id`, `nome`, `email`, `cpf`, `senha`, `endereco`, `tele`, `a`, `b`, `c`, `created`, `modified`) VALUES
(1, '', '', '', '1234', 12, 2147483647, 0, 0, 0, '0000-00-00', NULL),
(2, 'ggggg', '', '12345678909', '1234', 12, 2147483647, 0, 0, 0, '0000-00-00', NULL),
(3, 'ggggg', '', '12345667890', '12334', 12, 2147483647, 0, 0, 0, '0000-00-00', NULL),
(4, 'ggggg', '', '111111111111', '222222222', 12, 2147483647, 0, 0, 0, '0000-00-00', NULL),
(5, 'ggggg', '', '11111111111', '1111111', 12, 2147483647, 0, 0, 0, '0000-00-00', NULL),
(6, 'ggggg', '', '11111111111', '111111', 12, 2147483647, 0, 0, 0, '0000-00-00', NULL),
(7, 'ggggg', '', '1111111', '111111', 12, 2147483647, 0, 0, 0, '0000-00-00', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `carrinhos`
--

CREATE TABLE `carrinhos` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `created` date NOT NULL,
  `modified` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `carrinho`
--
ALTER TABLE `carrinho`
  ADD PRIMARY KEY (`id`,`senha`);

--
-- Índices de tabela `carrinhos`
--
ALTER TABLE `carrinhos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `carrinho`
--
ALTER TABLE `carrinho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `carrinhos`
--
ALTER TABLE `carrinhos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
