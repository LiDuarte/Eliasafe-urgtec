-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 03-Mar-2022 às 03:27
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `urgtec`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `departamento`
--

DROP TABLE IF EXISTS `departamento`;
CREATE TABLE IF NOT EXISTS `departamento` (
  `id_departamento` int(11) NOT NULL AUTO_INCREMENT,
  `nome_departamento` varchar(100) NOT NULL,
  PRIMARY KEY (`id_departamento`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `departamento`
--

INSERT INTO `departamento` (`id_departamento`, `nome_departamento`) VALUES
(1, 'Vendedor'),
(2, 'Suporte'),
(3, 'marketing'),
(4, 'dev'),
(5, 'Financeiro'),
(6, 'Cozinha'),
(7, 'Telecomunicação');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

DROP TABLE IF EXISTS `funcionario`;
CREATE TABLE IF NOT EXISTS `funcionario` (
  `id_funcionario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `sexo` varchar(15) NOT NULL,
  `data_nascimento` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `departamento` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_funcionario`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`id_funcionario`, `nome`, `sexo`, `data_nascimento`, `email`, `departamento`, `status`) VALUES
(13, 'Lucas', 'masculino', '1997-05-14', 'lucas@hotmail.com', 6, 1),
(12, 'Eliasafe', 'masculino', '1997-05-14', 'li_okay@hotmail.com', 4, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
