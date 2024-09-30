-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-02-2019 a las 09:38:17
-- Versión del servidor: 10.1.29-MariaDB
-- Versión de PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `presupuestos_mensual`
--

-- --------------------------------------------------------

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE `perfil` (
  `id` int(11) NOT NULL,
  `nombre_comercial` varchar(255) NOT NULL,
  `propietario` varchar(255) NOT NULL,
  `telefono` varchar(30) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `email` varchar(64) NOT NULL,
  `web` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`id`, `nombre_comercial`, `propietario`, `telefono`, `direccion`, `email`, `web`) VALUES
(1, 'Sistema Web S.A. de C.V.', 'Obed Alvarado', '+456-345-908-559', '234/90, New York Street\r\n <br />\r\n United States.<br />', 'info@obedalvarado.pw', 'www.sistemasweb.la');

--
-- Índices para tablas volcadas
--

--
-- Estructura de tabla para la tabla `orden_reparacion`
--

CREATE TABLE `orden_reparacion` (
  `id` int(11) ,
  `num_orden` varchar(100) ,
  `fecha` date ,
  `cliente` varchar(300) ,
  `dni` varchar(100) ,
  `telefono` varchar(100) ,
  `correo` varchar(100) ,
  `sucursal` varchar(100) ,
  `marca` varchar(100) ,
  `modelo` varchar(100) ,
  `num_serie` varchar(100) ,
  `taller` varchar(100) ,
  `descripcion_problema` varchar(300) ,
  `tipo_reparacion` tinyint(1)  DEFAULT '0',
  `check_1` tinyint(1)  DEFAULT '0',
  `check_2` tinyint(1)  DEFAULT '0',
  `check_3` tinyint(1)  DEFAULT '0',
  `check_4` tinyint(1)  DEFAULT '0',
  `check_5` tinyint(1)  DEFAULT '0',
  `check_6` tinyint(1)  DEFAULT '0',
  `check_7` tinyint(1)  DEFAULT '0',
  `check_8` tinyint(1)  DEFAULT '0',
  `part_product_1` varchar(200) ,
  `part_product_2` varchar(200) ,
  `part_product_3` varchar(200) ,
  `part_product_4` varchar(200) ,
  `part_product_5` varchar(200) ,
  `part_product_6` varchar(200) ,
  `part_product_7` varchar(200) ,
  `part_product_8` varchar(200) ,
  `componentes_faltantes` varchar(300) ,
  `descripcion` varchar(300) ,
  `otras_observaciones` varchar(300) 
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



--
-- Indices de la tabla `orden_reparacion`
--
ALTER TABLE `orden_reparacion`
  ADD PRIMARY KEY (`id`);

--

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`id`);

-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `orden_reparacion`
--
ALTER TABLE `orden_reparacion`
  MODIFY `id` int(11)  AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


ALTER TABLE `perfil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
