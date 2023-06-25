-- phpMyAdmin SQL Dump
-- version 5.2.0-rc1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25-Jun-2023 às 22:03
-- Versão do servidor: 8.0.20
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `napp`
--
CREATE DATABASE IF NOT EXISTS `napp` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `napp`;

-- --------------------------------------------------------

--
-- Estrutura stand-in para vista `nomea`
-- (Veja abaixo para a view atual)
--
DROP VIEW IF EXISTS `nomea`;
CREATE TABLE `nomea` (
`ID` int
,`Nome` varchar(7)
,`Sobrenome` varchar(7)
,`Registro` varchar(20)
);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_personagem`
--

DROP TABLE IF EXISTS `tab_personagem`;
CREATE TABLE `tab_personagem` (
  `id` int NOT NULL,
  `nome` varchar(7) COLLATE utf8mb4_general_ci NOT NULL,
  `sobrenome` varchar(7) COLLATE utf8mb4_general_ci NOT NULL,
  `registro` varchar(20) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para vista `nomea`
--
DROP TABLE IF EXISTS `nomea`;

DROP VIEW IF EXISTS `nomea`;
CREATE OR REPLACE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `nomea`  AS SELECT `tab_personagem`.`id` AS `ID`, `tab_personagem`.`nome` AS `Nome`, `tab_personagem`.`sobrenome` AS `Sobrenome`, `tab_personagem`.`registro` AS `Registro` FROM `tab_personagem` WHERE (`tab_personagem`.`nome` like 'a%')  ;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tab_personagem`
--
ALTER TABLE `tab_personagem`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tab_personagem`
--
ALTER TABLE `tab_personagem`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
