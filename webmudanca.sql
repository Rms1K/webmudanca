-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24/01/2024 às 20:03
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
-- Banco de dados: `webmudanca`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `avaliacao`
--

CREATE TABLE `avaliacao` (
  `ID_avaliacao` int(11) NOT NULL,
  `avaliacao` varchar(255) DEFAULT NULL,
  `ID_Usuario` int(11) DEFAULT NULL,
  `ID_imovel` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `endereco`
--

CREATE TABLE `endereco` (
  `ID_Endereco` int(11) NOT NULL,
  `Rua` varchar(50) NOT NULL,
  `numImovel` int(10) NOT NULL,
  `Bairro` varchar(50) NOT NULL,
  `Cidade` varchar(30) NOT NULL,
  `Estado` varchar(50) NOT NULL,
  `CEP` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `endereco`
--

INSERT INTO `endereco` (`ID_Endereco`, `Rua`, `numImovel`, `Bairro`, `Cidade`, `Estado`, `CEP`) VALUES
(2, 'sasas', 111, 'Calhauzinho', 'Araçuaí', 'MG', '39600-000');

-- --------------------------------------------------------

--
-- Estrutura para tabela `imovel`
--

CREATE TABLE `imovel` (
  `ID_imovel` int(11) NOT NULL,
  `Usuario` varchar(50) NOT NULL,
  `Tipo` varchar(50) NOT NULL,
  `Aluguel_Venda` varchar(50) NOT NULL,
  `Preco` decimal(10,2) NOT NULL,
  `Area` decimal(10,2) NOT NULL,
  `NumeroQuartos` smallint(6) DEFAULT NULL,
  `NumeroBanheiros` smallint(6) DEFAULT NULL,
  `NumeroVagasGaragem` smallint(6) DEFAULT NULL,
  `Imagens` text DEFAULT NULL,
  `ID_Endereco` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `imovel`
--

INSERT INTO `imovel` (`ID_imovel`, `Usuario`, `Tipo`, `Aluguel_Venda`, `Preco`, `Area`, `NumeroQuartos`, `NumeroBanheiros`, `NumeroVagasGaragem`, `Imagens`, `ID_Endereco`) VALUES
(5, 'adm', 'casa', 'aluguel', 1222.00, 222.00, 4, 2, 2, '1706122240_25219f2172f0176eaa48.jpg', 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `ID_Usuario` int(11) NOT NULL,
  `NomeCompleto` varchar(80) NOT NULL,
  `Usuario` varchar(30) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Senha` varchar(70) NOT NULL,
  `telefone` varchar(30) NOT NULL,
  `DataNascimento` date NOT NULL,
  `Genero` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`ID_Usuario`, `NomeCompleto`, `Usuario`, `Email`, `Senha`, `telefone`, `DataNascimento`, `Genero`) VALUES
(2, 'teste', 'teste', 'teste@gmail.com', '$2y$10$CVNEhAjTaRdUeq7cPYfyheslki6cX4yVLRNjlkHQO3N.k5GXqb8uG', '33999414866', '1995-11-11', 'masculino'),
(3, 'adm', 'adm', 'adm@gmail.com', '$2y$10$1VenZ7IB6sTTbc/He.eWIuSTY2SS.Zrg9vs4W60EeOQL1zcjGvIDO', '33999999999', '1999-12-01', 'masculino');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`ID_Endereco`);

--
-- Índices de tabela `imovel`
--
ALTER TABLE `imovel`
  ADD PRIMARY KEY (`ID_imovel`),
  ADD KEY `ID_Endereco` (`ID_Endereco`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID_Usuario`),
  ADD UNIQUE KEY `Usuario` (`Usuario`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `endereco`
--
ALTER TABLE `endereco`
  MODIFY `ID_Endereco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `imovel`
--
ALTER TABLE `imovel`
  MODIFY `ID_imovel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID_Usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `imovel`
--
ALTER TABLE `imovel`
  ADD CONSTRAINT `imovel_ibfk_1` FOREIGN KEY (`ID_Endereco`) REFERENCES `endereco` (`ID_Endereco`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
