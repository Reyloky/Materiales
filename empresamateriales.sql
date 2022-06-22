-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-06-2022 a las 01:50:14
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `empresamateriales`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materiales`
--

CREATE TABLE `materiales` (
  `id` int(10) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `unidadmedida` varchar(10) NOT NULL,
  `precio` int(10) NOT NULL,
  `stock` int(10) NOT NULL,
  `totalporproducto` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `materiales`
--

INSERT INTO `materiales` (`id`, `nombre`, `unidadmedida`, `precio`, `stock`, `totalporproducto`) VALUES
(3, 'gas pimienta', 'pzas', 123, 150, 18450),
(4, 'Municion calibre.22', 'piezas', 1500, 50, 75000),
(8, 'Coca-cola', 'botellas', 17, 100, 1700),
(9, 'Croquetas DogChow', 'Kilogramos', 699, 15, 10485),
(10, 'alcachofa', 'gramos', 5, 1000, 5000),
(11, 'Croquetas Pedigri', 'Kilogramos', 1230, 6, 7380),
(12, 'Pantalla Samsung SMART', 'piezas', 15000, 25, 375000),
(13, 'Croquetas Wiskas', 'Kilogramos', 566, 0, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `materiales`
--
ALTER TABLE `materiales`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `materiales`
--
ALTER TABLE `materiales`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
