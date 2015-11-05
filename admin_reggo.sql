-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 05-Nov-2015 às 03:42
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
(1, '2015-10-03', '1', 'KAROLINE OLIVEIRA AVINTE', 'HDUSAHDUAHDUH', 'hora-de-aventura-finn-5373ac5591bd4.jpg', 'DASDASDASD', 'DASDSA', 'XSAHUXH', 'HUSAHUXQY', 'YDSTAXYTSA', 1),
(6, '2015-10-03', '', 'KAROLINE ', 'HDUSAHDUAHDUH', 'hora-de-aventura-finn-5373ac5591bd4.jpg', 'DASDASDASD', 'DASDSA', 'XSAHUXH', 'HUSAHUXQY', 'YDSTAXYTSA', 1);

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
  `preço` double NOT NULL DEFAULT '0',
  `link` varchar(100) NOT NULL DEFAULT '',
  `formato` varchar(45) NOT NULL DEFAULT '',
  `num_pag` int(10) unsigned NOT NULL DEFAULT '0',
  `isbn` varchar(45) NOT NULL DEFAULT '',
  `assunto_id` int(10) unsigned NOT NULL,
  `autor_id` int(10) unsigned NOT NULL,
  `usuario_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`livro_id`),
  KEY `fk_livro_assunto_idx` (`assunto_id`),
  KEY `fk_livro_autor1_idx` (`autor_id`),
  KEY `fk_livro_usuario1_idx` (`usuario_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
