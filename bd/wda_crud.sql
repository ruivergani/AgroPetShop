-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 07-Dez-2017 às 00:33
-- Versão do servidor: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wda_crud`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cpf_cnpj` varchar(14) NOT NULL,
  `birthdate` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `hood` varchar(100) NOT NULL,
  `zip_code` int(8) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `mobile` varchar(18) NOT NULL,
  `ie` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `customers`
--

INSERT INTO `customers` (`id`, `name`, `cpf_cnpj`, `birthdate`, `address`, `hood`, `zip_code`, `city`, `state`, `phone`, `mobile`, `ie`, `created`, `modified`) VALUES
(62, 'Rui Vergani', '123.456.789-90', '2017-11-07', 'Rua da Web, 123', 'Centro', 37120, 'ParaguaÃ§u', 'MG', ' 3664-8599', ' 8436-0955 ', 8, '2017-11-17 21:00:56', '2017-11-25 11:42:53'),
(63, 'Pedro Afonso', '069.582.088-54', '0000-00-00', '', '', 0, '', '', ' 8754-6122', ' ', 0, '2017-11-17 21:02:22', '2017-11-17 21:41:12'),
(66, 'Jaque Alves', '145.722.456-90', '0000-00-00', '', '', 0, '', '', ' 8436-0977', ' ', 0, '2017-11-17 21:33:22', '2017-11-17 21:40:53'),
(67, 'Davi Martins', '069.584.555-98', '0000-00-00', '', '', 0, '', '', ' 8436-0977', ' ', 0, '2017-11-17 21:34:29', '2017-11-17 21:34:29'),
(68, 'FÃ¡bio Junior', '145.755.899-98', '0000-00-00', '', '', 0, '', '', ' 8574-9855', ' ', 0, '2017-11-17 21:34:47', '2017-11-17 21:35:00'),
(69, 'Herbert Faria', '574.546.985-98', '0000-00-00', '', '', 0, '', '', ' 8475-1455', ' ', 0, '2017-11-17 21:38:09', '2017-11-17 21:38:09'),
(70, 'Fulano de Tal', '123.722.456-90', '2000-05-10', 'Rua da Web,123', 'Centro', 37120, 'ParaguaÃ§u', 'MG', '8436-0977', '8436-0977', 5202, '2017-12-05 20:50:04', '2017-12-05 20:56:03');

-- --------------------------------------------------------

--
-- Estrutura da tabela `financials`
--

CREATE TABLE `financials` (
  `id` int(11) NOT NULL,
  `descricao_principal` varchar(255) NOT NULL,
  `tipo_conta` varchar(255) NOT NULL,
  `forma_pagamento` varchar(255) NOT NULL,
  `data_vencimento` date NOT NULL,
  `valor_total` double NOT NULL,
  `funcionario_responsavel` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `entidade` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `financials`
--

INSERT INTO `financials` (`id`, `descricao_principal`, `tipo_conta`, `forma_pagamento`, `data_vencimento`, `valor_total`, `funcionario_responsavel`, `created`, `modified`, `entidade`) VALUES
(1, 'Conta de Luz', '1', '3', '2017-11-26', 10.5, '', '2017-11-25 11:19:18', '2017-11-25 11:19:18', '10'),
(2, 'ServiÃ§o p/ vacina', '1', '3', '2017-12-28', 152.99, '', '2017-11-25 11:32:56', '2017-11-25 11:32:56', '9'),
(3, 'Conta de Ãgua', '2', '5', '2017-10-24', 25.99, '', '2017-11-25 11:33:38', '2017-11-25 11:33:38', '11'),
(4, '13Â° FuncionÃ¡rio', '2', '3', '2017-11-30', 937.95, '', '2017-11-25 11:46:45', '2017-11-25 11:46:45', '10'),
(5, 'Saco de RaÃ§Ã£o', '1', '3', '2017-11-27', 259.99, '', '2017-11-26 15:58:06', '2017-11-26 15:58:06', '9'),
(6, 'Venda de Kit', '1', '3', '2017-12-06', 1250.98, '', '2017-12-05 21:18:53', '2017-12-05 21:32:30', '9');

-- --------------------------------------------------------

--
-- Estrutura da tabela `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `descricao_principal` varchar(255) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `tipo_produto` int(11) NOT NULL,
  `fornecedor` varchar(100) NOT NULL,
  `valor_venda` double NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `codigo` int(11) NOT NULL,
  `somaproduto` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `products`
--

INSERT INTO `products` (`id`, `descricao_principal`, `categoria`, `tipo_produto`, `fornecedor`, `valor_venda`, `created`, `modified`, `codigo`, `somaproduto`) VALUES
(30, 'RaÃ§Ã£o Poodle', 'Grande Porte', 0, 'Special Dog', 189.99, '2017-11-20 18:03:20', '2017-11-24 22:01:20', 2, 0),
(31, 'RaÃ§Ã£o para Beagle', 'Pequeno Porte', 0, 'Premier Golden', 20.75, '2017-11-20 18:05:42', '2017-11-24 22:01:10', 1, 0),
(32, 'RaÃ§Ã£o para Gatos', 'Pequeno Porte', 0, 'Canin Premium', 126.15, '2017-11-20 18:30:56', '2017-11-24 22:01:04', 3, 0),
(33, 'RaÃ§Ã£o p/ Equinos', 'Grande Porte', 0, 'VitamÃ­nico CP', 750.99, '2017-11-20 18:34:14', '2017-12-05 21:36:51', 4, 0),
(34, 'RaÃ§Ã£o para Peixe', 'Pequeno Porte', 1, 'Tetra Min', 48.99, '2017-11-20 18:34:59', '2017-11-24 22:00:44', 5, 0),
(35, 'Comida Tartaruga', 'Pequeno Porte', 0, 'Turtle Nutral', 18.59, '2017-11-20 18:36:08', '2017-11-24 22:00:34', 6, 0),
(38, 'RaÃ§Ã£o para cÃ£o', 'Pequeno Porte', 1, 'Hills Canine', 415.99, '2017-12-05 21:37:39', '2017-12-05 21:37:39', 75, 0),
(39, 'RaÃ§Ã£o Cachorro', 'Grande Porte', 2, 'Royal Canin', 1250.99, '2017-12-05 21:38:36', '2017-12-05 21:38:36', 9, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `cliente` int(11) NOT NULL,
  `produto` int(11) NOT NULL,
  `vendedor` int(11) NOT NULL,
  `valor_venda` double NOT NULL,
  `forma_pagamento` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `sales`
--

INSERT INTO `sales` (`id`, `cliente`, `produto`, `vendedor`, `valor_venda`, `forma_pagamento`, `created`, `modified`) VALUES
(1, 62, 33, 14, 159.99, '3', '2017-12-03 18:31:34', '2017-12-03 18:31:34'),
(2, 67, 31, 16, 25.99, '3', '2017-12-03 18:31:51', '2017-12-06 19:42:51'),
(3, 66, 35, 14, 58.65, '6', '2017-12-04 11:52:13', '2017-12-04 11:52:13'),
(5, 63, 33, 15, 1250.98, '3', '2017-12-05 21:57:29', '2017-12-05 21:57:29'),
(6, 69, 38, 16, 215.99, '4', '2017-12-05 21:57:49', '2017-12-05 21:57:49'),
(7, 70, 30, 18, 125.75, '7', '2017-12-05 21:58:15', '2017-12-05 21:58:15'),
(8, 68, 31, 15, 525.69, '6', '2017-12-05 21:58:36', '2017-12-05 21:58:36');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `senha` varchar(35) NOT NULL,
  `email` varchar(45) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `datacad` date DEFAULT NULL,
  `cargo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `nome`, `usuario`, `senha`, `email`, `created`, `modified`, `datacad`, `cargo`) VALUES
(14, 'Administrador', 'admin', 'libera', 'admin@gmail.com', '0000-00-00 00:00:00', '2017-11-26 17:55:11', NULL, 'Administrador'),
(15, 'Rui Vergani', 'Rui Vergani Neto', 'libera', 'vergani@gmail.com', '2017-11-23 21:16:01', '2017-11-23 21:41:07', NULL, 'Programador Jr.'),
(16, 'Jaque', 'Jaque', 'libera', 'jaque@gmail.com', '2017-11-23 21:37:14', '2017-11-23 21:37:14', NULL, 'Atendente'),
(18, 'Davi Martins', 'Davizao', 'libera', 'davi@gmail.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, 'Programador');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `financials`
--
ALTER TABLE `financials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cliente` (`cliente`),
  ADD KEY `produto` (`produto`),
  ADD KEY `vendedor` (`vendedor`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `financials`
--
ALTER TABLE `financials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `sales_ibfk_1` FOREIGN KEY (`cliente`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `sales_ibfk_2` FOREIGN KEY (`produto`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `sales_ibfk_3` FOREIGN KEY (`vendedor`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
