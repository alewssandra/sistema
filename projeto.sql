-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2023 at 05:08 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistema`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `DeletarLogsAntigos` ()   BEGIN
    DECLARE data_corte DATE;
    SET data_corte = DATE_SUB(CURDATE(), INTERVAL 7 DAY);
    
    DELETE FROM logs WHERE data < data_corte;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `login` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `login`, `password`) VALUES
(1, 'admin', 'admin', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `contatos`
--

CREATE TABLE `contatos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telefone` varchar(255) DEFAULT NULL,
  `mensagem` varchar(255) DEFAULT NULL,
  `status` int(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `contatos`
--

INSERT INTO `contatos` (`id`, `nome`, `email`, `telefone`, `mensagem`, `status`) VALUES
(1, 'a', 'root@gmail.com', '(49) 3275-0964', 'a', 1),
(2, 'Erik', 'teste@test.com', '(11) 1111-1111', 'sjdakdjklsjdakdjklsjdakdjklsjdakdjklsjdakdjkl', 1),
(3, 'Erik', 'lalesandra22@gmail.com', '(11) 1111-1111', 'uiouoijkljkl', 1);

-- --------------------------------------------------------

--
-- Table structure for table `enderecos`
--

CREATE TABLE `enderecos` (
  `id` int(11) NOT NULL,
  `idpessoa` int(11) NOT NULL,
  `rua` varchar(255) DEFAULT NULL,
  `bairro` varchar(255) DEFAULT NULL,
  `cidade` varchar(255) DEFAULT NULL,
  `estado` varchar(255) DEFAULT NULL,
  `complemento` varchar(255) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `cep` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `operacao` varchar(256) NOT NULL,
  `data` datetime NOT NULL,
  `id` int(11) NOT NULL,
  `pessoa_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`operacao`, `data`, `id`, `pessoa_id`) VALUES
('Contato lido', '2023-06-27 02:23:47', 5, 6),
('Usuário adicionado', '2023-06-27 02:33:28', 6, 6),
('Usuário adicionado', '2023-06-27 02:33:32', 7, 6),
('Usuário adicionado', '2023-06-27 02:33:32', 8, 6),
('Usuário adicionado', '2023-06-27 02:33:32', 9, 6);

-- --------------------------------------------------------

--
-- Table structure for table `pessoas`
--

CREATE TABLE `pessoas` (
  `id` int(11) NOT NULL COMMENT 'É o identificador da pessoa',
  `nome` varchar(125) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telefone` varchar(255) DEFAULT NULL,
  `cpf` varchar(255) DEFAULT NULL,
  `sexo` varchar(255) DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `salt` varchar(128) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pessoas`
--

INSERT INTO `pessoas` (`id`, `nome`, `email`, `telefone`, `cpf`, `sexo`, `descricao`, `senha`, `salt`, `photo`) VALUES
(6, 'a', 'root', '(61) 2728-0500', '102.654.350-99', 'Masculino', 'h', '202cb962ac59075b964b07152d234b70', 'f7cdaf81bcd4f7270b74a2af65eb4dfe1188b3dc', NULL),
(7, 'Erik', 'root1', '(11) 1111-1111', '598.332.580-93', 'Masculino', 'hjkhkjhkjhkj', '202cb962ac59075b964b07152d234b70', '68c6d9fa8b03a4a222b54381ce337423dde8626a', NULL),
(14, 'Erik', 'root22', '(11) 1111-1111', '395.878.020-20', 'Masculino', 'ghfhgfhgf', '202cb962ac59075b964b07152d234b70', 'de1a878d80b12f195e0b3a73762a22ac4d6481d6', NULL),
(15, 'Erik', 'root22', '(11) 1111-1111', '395.878.020-20', 'Masculino', 'ghfhgfhgf', '202cb962ac59075b964b07152d234b70', '621b69b737064d5a7521e9b8758aa846742f0df8', NULL),
(16, 'Erik', 'root22', '(11) 1111-1111', '395.878.020-20', 'Masculino', 'ghfhgfhgf', '202cb962ac59075b964b07152d234b70', 'c798e8cea1424086aa8d9aaa6afabd2b4943d372', NULL),
(17, 'Erik', 'root22', '(11) 1111-1111', '395.878.020-20', 'Masculino', 'ghfhgfhgf', '202cb962ac59075b964b07152d234b70', 'a5fdc0a46c5ab630c01cf2754752c6118b9f3d99', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contatos`
--
ALTER TABLE `contatos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enderecos`
--
ALTER TABLE `enderecos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ligacao_pessoa_endereco` (`idpessoa`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_logs_pessoa_id` (`pessoa_id`);

--
-- Indexes for table `pessoas`
--
ALTER TABLE `pessoas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contatos`
--
ALTER TABLE `contatos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `enderecos`
--
ALTER TABLE `enderecos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pessoas`
--
ALTER TABLE `pessoas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'É o identificador da pessoa', AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `enderecos`
--
ALTER TABLE `enderecos`
  ADD CONSTRAINT `ligacao_pessoa_endereco` FOREIGN KEY (`idpessoa`) REFERENCES `pessoas` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `fk_logs_pessoa_id` FOREIGN KEY (`pessoa_id`) REFERENCES `pessoas` (`id`);
COMMIT;