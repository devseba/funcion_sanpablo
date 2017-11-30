-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Servidor: sql305.260mb.net
-- Tiempo de generación: 12-05-2016 a las 15:01:38
-- Versión del servidor: 5.6.29-76.2
-- Versión de PHP: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `n260m_18029442_manes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asiste`
--

CREATE TABLE IF NOT EXISTS `asiste` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `apellido` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `dni` varchar(10) NOT NULL,
  `correo` varchar(35) DEFAULT NULL,
  `sexo` varchar(1) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `dni` (`dni`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `asiste`
--

INSERT INTO `asiste` (`id`, `apellido`, `nombre`, `dni`, `correo`, `sexo`, `telefono`) VALUES
(2, 'Avila', 'Sebastian', '23143134', 'seba.avila88@gmail.com', 'm', ''),
(3, 'Cristian', 'Gonzalez', '32782654', 'cristian@e-nodos.com', 'm', ''),
(4, 'Avila', 'Pamela', '30879078', 'paraya@sanatorioargentinos.com.ar', 'f', ''),
(5, 'Samat', 'Pablo', '33987654', 'psamat@sanatorioargentino.com.ar', 'm', ''),
(6, 'Victoria', 'Bordon', '30879074', 'vbordon@sanatorioargentino.com.ar', 'f', ''),
(7, 'gallardo', 'Andres', '27372732', 'andres.gallardo45@gmail.com', 'M', '154765765'),
(8, 'Jaime', 'Jeremias', '32424564', 'jeremias@hotmail.com', 'M', '234235'),
(9, 'Segado', 'Mateo', '33987453', 'mateo@gmail.com', 'M', '4235040'),
(10, 'bordon', 'victoria', '27550999', 'vbordoni@sanatorioargentino.com.ar', 'F', '155282317'),
(11, 'Lopez', 'Matias', '3428973654', 'matias@gmail.com', 'M', '264783640'),
(12, 'Bordon', 'Paulina', '26741236', 'paulibord@gmail.com', 'F', '154879865'),
(13, 'prueba', 'Prueba', '26874123', 'probnado@gmail.com', 'F', ''),
(14, 'Prueba', 'Vit', '26987412', 'prueba22@gmail.com', 'F', ''),
(15, 'FEMENIA', 'SERGIO', '25319500', NULL, 'M', '2644415988');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL,
  `email` varchar(100) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `create_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_login` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `first_name`, `last_name`, `create_on`, `last_login`) VALUES
(1, 'admin', '123456', 'admin@labtech.com', 'Sebastian', 'Avila', '2016-05-03 02:33:04', '2016-05-02 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
