-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-11-2016 a las 09:00:05
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.23

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
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `id_comentario` int(11) NOT NULL,
  `textocomentario` text NOT NULL,
  `puntuacion` int(11) NOT NULL,
  `fk_id_producto` int(11) NOT NULL,
  `fk_id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`id_comentario`, `textocomentario`, `puntuacion`, `fk_id_producto`, `fk_id_usuario`) VALUES
(14, 'la rubia pilsen me encanta', 4, 34, 37),
(15, 'las cervezas rubias son mis favoritas', 5, 34, 36),
(16, 'hagan cervezas para celiacos!!', 1, 36, 35),
(17, 'mmmm, cerveza', 5, 36, 33),
(18, 'aguante la duff!!', 3, 39, 36),
(19, 'a winnie pooh le gusta esto', 3, 39, 36),
(20, 'mi cerveza es mejor', 1, 40, 34),
(21, 'ya no se que mas inventar', 1, 40, 37),
(22, 'si no apareces, hay tabla', 3, 41, 35),
(23, 'sin comida y sin cerveza homero pierde la cabeza', 3, 41, 34),
(24, 'hay happy hour?', 5, 42, 36),
(25, 'me gusta el vino y la joda', 5, 42, 36),
(26, 'que lindo comentario', 5, 44, 37),
(27, 'dos cajas por aca!', 5, 44, 35);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id_contacto` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `asunto` varchar(50) NOT NULL,
  `consulta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id_contacto`, `nombre`, `email`, `asunto`, `consulta`) VALUES
(1, 'pepe', 'pepe@hotmail.com', 'tengo 30 pe', 'para que me alcanza? ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

CREATE TABLE `imagen` (
  `id_imagen` int(11) NOT NULL,
  `path` varchar(500) NOT NULL,
  `fk_id_producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `imagen`
--

INSERT INTO `imagen` (`id_imagen`, `path`, `fk_id_producto`) VALUES
(1, 'images/vasosdecerveza.jpg', 36),
(2, 'images/cerveza-tirada.jpg', 34),
(3, 'images/tonel.jpg', 42),
(4, 'images/botellas.jpg', 36),
(5, 'images/vasosdecerveza.jpg', 44),
(6, 'images/vasosdecerveza.jpg', 42),
(7, 'images/tonel.jpg', 39),
(8, 'images/tonel.jpg', 41),
(9, 'images/botellas.jpg', 39),
(10, 'images/botellas.jpg', 34),
(11, 'images/tonel.jpg', 40),
(12, 'images/botellas.jpg', 40),
(13, 'images/cerveza-tirada.jpg', 44),
(14, 'images/cerveza-tirada.jpg', 41);

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
(6, 39, 'HoneyBeer (Rubia con miel)', 'Luna de Miel... Este estilo tiene más de 4000 años, cuando en Babilonia, el padre de la novia le daba al novio esta variedad de cerveza. Color ámbar, sabor dulce con trazas a miel.', 60, 70),
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
(33, 'Eugenia', 'eugeniazelenka@gmail.com', '$2y$10$mn0sKaVqq4kWynpJXSVrCeNnhCLHySVCSuKt1468d3RkhwLAFcjM6', 0),
(34, 'Nacho', 'ignaciojonas@gmail.com', '$2y$10$vt2UW7/y0pHlcNvoHeGsBuqY1preOiisbrilnguVmsmc8ijyzuCLe', 1),
(35, 'Javier', 'javier.dottori@gmail.com', '$2y$10$DRAr2cR5cxMZ2WVHUAPFGeEzX60uJVBv5tLS5hlFyUO3qbPiY2zMa', 1),
(36, 'Juan', 'juan.damato@gmail.com', '$2y$10$XftGTuaxlynJtqmhYOfWnejqyxOX1HLRfAyUAQTw/fYcq261oWO2a', 1),
(37, 'Pedro', 'pedrodifonzo@gmail.com', '$2y$10$xKYD.uU.0f6VRHwPx2gIBeSyv0Aqul3u/ReD7Y/.mRe8vVkfZ.1Rq', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `fk_id_producto` (`fk_id_producto`),
  ADD KEY `fk_id_usuario` (`fk_id_usuario`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id_contacto`);

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
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id_contacto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `imagen`
--
ALTER TABLE `imagen`
  MODIFY `id_imagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`fk_id_producto`) REFERENCES `producto` (`id_producto`) ON DELETE CASCADE,
  ADD CONSTRAINT `comentario_ibfk_2` FOREIGN KEY (`fk_id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE;

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
