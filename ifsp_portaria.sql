-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 14-Nov-2017 às 13:04
-- Versão do servidor: 5.6.15-log
-- PHP Version: 5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ifsp_portaria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `papel`
--

CREATE TABLE IF NOT EXISTS `papel` (
  `idPapel` int(11) NOT NULL AUTO_INCREMENT,
  `papel` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`idPapel`),
  UNIQUE KEY `papel` (`papel`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `papel`
--

INSERT INTO `papel` (`idPapel`, `papel`, `status`) VALUES
(4, 'Coordenador de Análise e Desenvolvimento de Sistemas', 0),
(5, 'Coordenador de Mecatrônica Industrial', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfil`
--

CREATE TABLE IF NOT EXISTS `perfil` (
  `idPerfil` int(11) NOT NULL AUTO_INCREMENT,
  `perfil` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`idPerfil`),
  UNIQUE KEY `perfil` (`perfil`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `perfil`
--

INSERT INTO `perfil` (`idPerfil`, `perfil`, `status`) VALUES
(6, 'Docente', 0),
(5, 'Discente', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfil_pessoa`
--

CREATE TABLE IF NOT EXISTS `perfil_pessoa` (
  `perfil_idPerfil` int(11) NOT NULL,
  `pessoa_idPessoa` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`perfil_idPerfil`,`pessoa_idPessoa`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Extraindo dados da tabela `perfil_pessoa`
--

INSERT INTO `perfil_pessoa` (`perfil_idPerfil`, `pessoa_idPessoa`, `status`) VALUES
(6, 11, 0),
(5, 10, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

CREATE TABLE IF NOT EXISTS `pessoa` (
  `idPessoa` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `cpf` varchar(14) COLLATE utf8mb4_bin NOT NULL,
  `siape` varchar(7) COLLATE utf8mb4_bin DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `telefone` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `celular` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`idPessoa`),
  UNIQUE KEY `cpf` (`cpf`,`siape`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin AUTO_INCREMENT=12 ;

--
-- Extraindo dados da tabela `pessoa`
--

INSERT INTO `pessoa` (`idPessoa`, `nome`, `cpf`, `siape`, `email`, `telefone`, `celular`, `status`) VALUES
(11, 'GenioBricio', '084.691.454-95', '1234567', 'diretorBricio@gmail.com', '(11) 4412-5635', '(11) 99586-2255', 0),
(10, 'Thiago Diastor Sommerville', '655.773.918-22', '', 'diastorT@gmail.com', '(11) 4400-0055', '(11) 97355-6620', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
