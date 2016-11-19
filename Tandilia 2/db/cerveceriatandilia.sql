-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-11-2016 a las 20:22:42
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cerveceriatandilia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombre`) VALUES
(4, 'Roja'),
(5, 'Negra'),
(6, 'Rubia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

CREATE TABLE `imagen` (
  `id_imagen` int(11) NOT NULL,
  `path` varchar(500) NOT NULL,
  `fk_id_producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `fk_id_categoria` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `precio_may` int(11) NOT NULL,
  `precio_min` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`fk_id_categoria`, `id_producto`, `nombre`, `descripcion`, `precio_may`, `precio_min`) VALUES
(6, 34, 'Rubia Pilsen', 'Elaborada con maltas tipo pilsen, levaduras Lager y un cuidadoso filtrado, da como resultado una cerveza brillante, con aroma a lúpulo y sabor frutado. Graduación: 5°.', 60, 70),
(6, 36, 'WeissBier (Rubia de trigo)', 'Esta variedad, combina maltas pilsen con trigos malteados. A diferencia de otras, nuestra cerveza de trigo es finamente filtrada para lograr un color pálido, espuma blanca y un sabor fuerte.', 60, 70),
(6, 39, 'HoneyBeer (Rubia con miel)', '"Luna de Miel..." Este estilo tiene más de 4000 años, cuando en Babilonia, el padre de la novia le daba al novio esta variedad de cerveza. Color ámbar, sabor dulce con trazas a miel.', 60, 70),
(4, 40, 'Roja', 'Esta variedad la logramos combinando un blend de maltas (pilsen, tostadas y caramelo) las proporciones exactas nos brindan ese color rubí, caracteristico de esta variedad, con sabor acaramelado.', 60, 70),
(5, 41, 'Negra Bock', 'Elaborada con maltas pilsen y tostadas. Gran cuerpo y sabor acaramelado. Graduación alcoholica 5,4°. Presentación en botellas de: 355cc y 660cc.', 60, 70),
(5, 42, 'Negra Doppelbock', 'La más exquisita variedad de cerveza negra, doble maltas tostadas, maceracion y fermentación controlada da como resultado esta cerveza de intenso sabor, cuerpo cremoso y una graduación de 8°.', 60, 70),
(5, 44, 'RauchBier (Negra Ahumada)', 'Especial de cebadas tostadas y ahumadas para otorgarle un bouquet único. Color oscuro y sabor suavemente ahumada.', 60, 70);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `pass` varchar(150) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `email`, `pass`, `admin`) VALUES
(1, 'Nacho', 'ignaciojonas@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1),
(2, 'Javier', 'javier.dottori@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1),
(3, 'Juan', 'juan.damato@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1),
(4, 'Pedro', 'pedrodifonzo@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', 1),
(5, 'Eugenia', 'eugeniazelenka@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', 1),
(6, 'user1', 'user1@tandilia.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', 0),
(7, 'user2', 'user2@tandilia.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD PRIMARY KEY (`id_imagen`),
  ADD KEY `fk_id_producto` (`fk_id_producto`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `categoria_id` (`fk_id_categoria`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `imagen`
--
ALTER TABLE `imagen`
  MODIFY `id_imagen` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD CONSTRAINT `imagen_ibfk_1` FOREIGN KEY (`fk_id_producto`) REFERENCES `producto` (`id_producto`) ON DELETE CASCADE;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`fk_id_categoria`) REFERENCES `categoria` (`id_categoria`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
