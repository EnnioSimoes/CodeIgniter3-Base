-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 07/03/2015 às 16:53
-- Versão do servidor: 5.5.41-0ubuntu0.14.04.1
-- Versão do PHP: 5.5.9-1ubuntu4.6

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=50 ;

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
(10, 'Carlos', 33333, 30),
(11, 'Carlos', 33333, 30),
(12, 'Carlos', 33333, 30),
(13, 'Carlos', 33333, 30),
(15, 'Carlos', 33333, 30),
(16, 'Carlos', 33333, 30),
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
(29, 'teste65', 2322, 21),
(30, 'eeee', 1233, 12),
(33, 'Ennio', 4324, 89),
(40, 'Karol', 8987987, 12),
(41, 'Leonardo', 89798987, 78),
(42, 'Carlos Justino', 98798778, 78),
(43, 'Janaina', 98098908, 98),
(44, 'Aline', 9809098, 98),
(45, 'Marcos Guerra', 7786876786, 76),
(46, 'Claudinha Leite', 67567576, 56),
(47, 'Taty', 76786876, 67),
(48, 'Greicy Morais', 7687678667, 56),
(49, 'Janets', 9899777889, 76);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
