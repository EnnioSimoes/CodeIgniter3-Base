-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 20/11/2014 às 19:03
-- Versão do servidor: 5.5.40-0ubuntu0.14.04.1
-- Versão do PHP: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `codeigniter3`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `crud`
--

CREATE TABLE IF NOT EXISTS `crud` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `telefone` bigint(15) NOT NULL,
  `idade` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=41 ;

--
-- Fazendo dump de dados para tabela `crud`
--

INSERT INTO `crud` (`id`, `nome`, `telefone`, `idade`) VALUES
(1, 'Ennio', 11988545074, 25),
(2, 'Greicy', 11970341192, 22),
(3, 'Nilson Simões', 11988545074, 52),
(4, 'Eliane', 11988545074, 47),
(5, 'Chico', 1111111, 17),
(6, 'Chico', 111111, 17),
(7, 'Leo', 22222, 24),
(8, 'Marcos', 1111, 30),
(9, 'Carlos Justino', 11999999, 35),
(10, 'Carlos', 33333, 30),
(11, 'Carlos', 33333, 30),
(12, 'Carlos', 33333, 30),
(13, 'Carlos', 33333, 30),
(14, 'Carlos', 33333, 30),
(15, 'Carlos', 33333, 30),
(16, 'Carlos', 33333, 30),
(17, 'Carlos', 33333, 30),
(18, 'Carlos', 33333, 30),
(19, 'Carlos', 33333, 30),
(20, 'Outro', 3232, 23),
(21, 'Outro', 3232, 23),
(22, 'ET', 222222, 12),
(23, 'Alien', 1233, 12),
(24, 'Teste', 1233, 23),
(25, 'Agoraaa', 2312312, 23),
(26, 'retret', 76565, 56),
(27, 'retret', 76565, 56),
(28, 'teste', 2323, 12),
(29, 'teste64', 2322, 21),
(30, 'eeee', 1233, 12),
(31, 'vai', 23234, 34),
(32, 'teste', 2321313, 45),
(33, 'Ennio', 4324, 89),
(34, 'Ultimo', 2123, 34),
(35, 'Ultimo2', 3432, 34),
(36, 'dsfsfsdfs', 876786, 76),
(37, 'gfgdfgfg', 3454353, 76),
(38, 'fgfdgfdg', 564564, 56),
(39, 'teste', 7876, 87),
(40, 'Karol', 8987987, 12);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
