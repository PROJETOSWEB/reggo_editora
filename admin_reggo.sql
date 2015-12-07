-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 07-Dez-2015 às 04:09
-- Versão do servidor: 5.6.15-log
-- PHP Version: 5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `admin_reggo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `assunto`
--

CREATE TABLE IF NOT EXISTS `assunto` (
  `assunto_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`assunto_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Extraindo dados da tabela `assunto`
--

INSERT INTO `assunto` (`assunto_id`, `nome`) VALUES
(1, 'Literatura'),
(2, 'Arte'),
(3, 'Arquitetura'),
(4, 'Ciencias humanas'),
(5, 'Cinema e teatro'),
(6, 'Design'),
(7, 'Fotografia'),
(8, 'Infantojuvenil'),
(9, 'Poesia'),
(10, 'Moda'),
(11, 'Música e dança'),
(12, 'Institucionais e outros');

-- --------------------------------------------------------

--
-- Estrutura da tabela `autor`
--

CREATE TABLE IF NOT EXISTS `autor` (
  `autor_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `data_autor` date DEFAULT NULL,
  `generos` varchar(100) NOT NULL DEFAULT '',
  `nome` varchar(200) NOT NULL DEFAULT '',
  `info` longtext NOT NULL,
  `img` varchar(100) NOT NULL DEFAULT '',
  `reflexao` longtext NOT NULL,
  `facebook` varchar(100) NOT NULL DEFAULT '',
  `google` varchar(100) NOT NULL DEFAULT '',
  `twitter` varchar(100) NOT NULL DEFAULT '',
  `instagram` varchar(100) NOT NULL DEFAULT '',
  `usuario_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`autor_id`),
  KEY `fk_autor_usuario1_idx` (`usuario_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `autor`
--

INSERT INTO `autor` (`autor_id`, `data_autor`, `generos`, `nome`, `info`, `img`, `reflexao`, `facebook`, `google`, `twitter`, `instagram`, `usuario_id`) VALUES
(1, '2015-10-03', '1', 'Mazé Mourão ', 'HDUSAHDUAHDUH', 'autor1.jpg', 'DASDASDASD', 'DASDSA', 'XSAHUXH', 'HUSAHUXQY', 'YDSTAXYTSA', 1),
(6, '2015-10-03', '', 'Serafim Corrêa', 'HDUSAHDUAHDUH', 'serafin.png', 'DASDASDASD', 'DASDSA', 'XSAHUXH', 'HUSAHUXQY', 'YDSTAXYTSA', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `compra`
--

CREATE TABLE IF NOT EXISTS `compra` (
  `compra_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL DEFAULT '',
  `email` varchar(200) NOT NULL DEFAULT '',
  `telefone` varchar(200) NOT NULL DEFAULT '',
  `livro_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`compra_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `compra`
--

INSERT INTO `compra` (`compra_id`, `nome`, `email`, `telefone`, `livro_id`) VALUES
(1, 'hhduahduahdu', 'duahduahdu', 'dhauhdsuadhu', 1),
(2, 'UDAHUDHAUD', 'DHAUSHDUA', 'DHUAHDSU', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `livro`
--

CREATE TABLE IF NOT EXISTS `livro` (
  `livro_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `data_livro` date DEFAULT NULL,
  `tipo` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '1- IMPRESSO 2-E-BOOK',
  `titulo` varchar(200) NOT NULL DEFAULT '',
  `sinopse` longtext NOT NULL,
  `preco` double NOT NULL DEFAULT '0',
  `link` varchar(100) NOT NULL DEFAULT '',
  `formato` varchar(45) NOT NULL DEFAULT '',
  `num_pag` int(10) unsigned NOT NULL DEFAULT '0',
  `isbn` varchar(45) NOT NULL DEFAULT '',
  `assunto_id` int(10) unsigned NOT NULL,
  `autor_id` int(10) unsigned NOT NULL,
  `usuario_id` int(10) unsigned NOT NULL,
  `img` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`livro_id`),
  KEY `fk_livro_assunto_idx` (`assunto_id`),
  KEY `fk_livro_autor1_idx` (`autor_id`),
  KEY `fk_livro_usuario1_idx` (`usuario_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `livro`
--

INSERT INTO `livro` (`livro_id`, `data_livro`, `tipo`, `titulo`, `sinopse`, `preco`, `link`, `formato`, `num_pag`, `isbn`, `assunto_id`, `autor_id`, `usuario_id`, `img`) VALUES
(1, '2015-11-12', 1, 'Mazé Mourão - Poucas e Boas', 'hduhasuhuxhuasxhasxHDAUDASD', 44, 'http://UHUAHDU', '14x21 cm', 20, ' 978-85-8013-364-6', 2, 1, 1, 'poucas_boas_CAPA.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `orcamento`
--

CREATE TABLE IF NOT EXISTS `orcamento` (
  `orcamento_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL DEFAULT '',
  `email` varchar(200) NOT NULL DEFAULT '',
  `telefone` varchar(200) NOT NULL DEFAULT '',
  PRIMARY KEY (`orcamento_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `orcamento`
--

INSERT INTO `orcamento` (`orcamento_id`, `nome`, `email`, `telefone`) VALUES
(1, 'KAROLINE', 'karol_ingrid_avinte@hotmail.com', 'd89898989'),
(2, 'dasd', 'sinval.junior@live.com', 'd'),
(3, 'KAROLINE', 'karol_ingrid_avinte@hotmail.com', '90909090');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `usuario_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL DEFAULT '',
  `login` varchar(45) NOT NULL DEFAULT '',
  `senha` varchar(45) NOT NULL DEFAULT '',
  `status` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '1- ATIVO 2 - DESATIVADO',
  `email` varchar(100) NOT NULL DEFAULT '',
  `nivel` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`usuario_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`usuario_id`, `nome`, `login`, `senha`, `status`, `email`, `nivel`) VALUES
(1, 'Administrador Sistema', 'admin', 'admin', 1, 'karolfurletti@gmail.com', 0),
(2, 'Thiago Maneschy', 'thiago', '123', 1, 'udahduhaudhaud', 0);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `autor`
--
ALTER TABLE `autor`
  ADD CONSTRAINT `fk_autor_usuario1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`usuario_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `livro`
--
ALTER TABLE `livro`
  ADD CONSTRAINT `fk_livro_assunto` FOREIGN KEY (`assunto_id`) REFERENCES `assunto` (`assunto_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_livro_autor1` FOREIGN KEY (`autor_id`) REFERENCES `autor` (`autor_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_livro_usuario1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`usuario_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
