-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02-Jul-2019 às 22:03
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `concessionaria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_veiculo`
--

CREATE TABLE `tipo_veiculo` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `tipo_veiculo`
--

INSERT INTO `tipo_veiculo` (`id`, `nome`) VALUES
(1, 'Carro'),
(2, 'Moto'),
(3, 'Caminhao'),
(4, 'Aviao'),
(5, 'Trem');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) COLLATE utf8_bin NOT NULL,
  `email` varchar(220) COLLATE utf8_bin NOT NULL,
  `senha` varchar(220) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'adm', 'adm@test.com', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `veiculos`
--

CREATE TABLE `veiculos` (
  `id` int(11) NOT NULL,
  `tipo_veiculo` int(11) NOT NULL,
  `nome` varchar(220) COLLATE utf8_bin NOT NULL,
  `anoFab` varchar(4) COLLATE utf8_bin NOT NULL,
  `marca` varchar(220) COLLATE utf8_bin NOT NULL,
  `preco` varchar(15) COLLATE utf8_bin NOT NULL,
  `status` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `veiculos`
--

INSERT INTO `veiculos` (`id`, `tipo_veiculo`, `nome`, `anoFab`, `marca`, `preco`, `status`) VALUES
(11, 2, 'MotoTeste', '2019', 'Version', '2111111', 'Disponivel'),
(15, 2, 'Tandoo', '2019', 'Marca', '31', 'Locado'),
(19, 5, 'TestMotoT', '2018', 'Toyota', '999999', 'Oficina'),
(20, 3, 'Toyota', '1998', 'Teste', '21,90', 'disponivel'),
(21, 3, 'Ytyty', '2019', 'Tete', '222222', 'disponivel');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tipo_veiculo`
--
ALTER TABLE `tipo_veiculo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `veiculos`
--
ALTER TABLE `veiculos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tipo_veiculo` (`tipo_veiculo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tipo_veiculo`
--
ALTER TABLE `tipo_veiculo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `veiculos`
--
ALTER TABLE `veiculos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
