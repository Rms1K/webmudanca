-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29/01/2024 às 22:07
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
  `CEP` varchar(15) NOT NULL,
  `ID_imovel` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `endereco`
--

INSERT INTO `endereco` (`ID_Endereco`, `Rua`, `numImovel`, `Bairro`, `Cidade`, `Estado`, `CEP`, `ID_imovel`) VALUES
(8, 'sddsds', 123, 'Calhauzinho', 'Araçuaí', 'MG', '39600-000', 11),
(9, 'Sacatrapos', 555, 'São Francisco', 'Araçuaí', 'MG', '39600-000', 12),
(10, 'Olaria', 325, 'Centro', 'Araçuaí', 'MG', '39600-000', 13),
(11, 'Principal', 32, 'Arraial', 'Araçuaí', 'MG', '39600-000', 14),
(12, 'Santa Catarina', 666, 'Santa Tereza', 'Araçuaí', 'MG', '39600-000', 15),
(13, 'Santa Barbara', 68, 'Santa Tereza', 'Araçuaí', 'MG', '39600-000', 16),
(14, 'Floriano Peixoto', 422, 'Esplanada', 'Araçuaí', 'MG', '39600-000', 17),
(24, 'Principal', 25, 'Arraial', 'Araçuaí', 'MG', '39600-000', 27),
(25, 'Floriano Peixoto', 365, 'Esplanada', 'Araçuaí', 'MG', '39600-000', 28);

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
(11, 'adm', 'terreno', 'venda', 100000.00, 150.00, 0, 0, 0, '1706289218_e4a04c451e42f869c3b6.jpg', 8),
(12, 'adm', 'casa', 'aluguel', 3000.00, 490.00, 4, 2, 2, '1706290841_892c44a9b652c57eb916.png', 9),
(13, 'adm', 'casa', 'venda', 99999999.99, 490.00, 4, 3, 2, '1706290954_dc239551e3b9a566f8ca.png', 10),
(14, 'adm', 'casa', 'venda', 1550000.00, 300.00, 3, 2, 2, '1706291307_b6a4af90ae873e695fed.png', 11),
(15, 'adm', 'casa', 'aluguel', 1500.00, 300.00, 3, 2, 2, '1706296335_ad73b8efc6e21368a41e.png', 12),
(16, 'adm', 'casa', 'venda', 3000000.00, 420.00, 4, 3, 3, '1706296425_b58c11b6b3e527ecf5b9.png', 13),
(17, 'adm', 'terreno', 'venda', 200000.00, 200.00, 0, 0, 0, '1706488455_b920ee53b20a86230abe.jpg', 14),
(27, 'adm', 'apartamento', 'venda', 200000.00, 100.00, 2, 1, 1, '1706562078_791b07210a97471347c8.jpg', 24),
(28, 'adm', 'apartamento', 'aluguel', 3000.00, 150.00, 2, 1, 1, '1706562152_28170cbd2da90c1a1e1c.jpg', 25);

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
  ADD PRIMARY KEY (`ID_Endereco`),
  ADD KEY `endereco_ibfk_1` (`ID_imovel`);

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
  MODIFY `ID_Endereco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `imovel`
--
ALTER TABLE `imovel`
  MODIFY `ID_imovel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID_Usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `endereco`
--
ALTER TABLE `endereco`
  ADD CONSTRAINT `endereco_ibfk_1` FOREIGN KEY (`ID_imovel`) REFERENCES `imovel` (`ID_imovel`) ON DELETE SET NULL;

--
-- Restrições para tabelas `imovel`
--
ALTER TABLE `imovel`
  ADD CONSTRAINT `imovel_ibfk_1` FOREIGN KEY (`ID_Endereco`) REFERENCES `endereco` (`ID_Endereco`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
