-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 03-Jun-2019 às 03:38
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bomgosto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `entrega`
--

CREATE TABLE IF NOT EXISTS `entrega` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prato` varchar(100) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `bebida` varchar(100) NOT NULL,
  `numero` varchar(30) NOT NULL,
  `endereco` varchar(150) NOT NULL,
  `sobremesa` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `entrega`
--

INSERT INTO `entrega` (`id`, `prato`, `quantidade`, `bebida`, `numero`, `endereco`, `sobremesa`) VALUES
(4, 'Alaminuta de Carne', 4, 'Duas cocas e um suco natural de laranja', '5148796215', 'Rua dos Alfeneiros NÂº13', 'Pudim com calda de chocolate'),
(5, 'Rosbife com cebola', 2, 'Suco de maracujÃ¡ e uma coca', '51984178584', 'Rua Alameda Elizio Telli nÂº51', 'Bolo de chocolate com recheio');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
