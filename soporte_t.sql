-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-12-2025 a las 21:39:17
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `soporte_t`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auditoria_laboratorio`
--

CREATE TABLE `auditoria_laboratorio` (
  `id` int(11) NOT NULL,
  `numero_pc` varchar(10) NOT NULL,
  `teclado` enum('Funciona','Falla','No tiene') DEFAULT 'Funciona',
  `mouse` enum('Funciona','Falla','No tiene') DEFAULT 'Funciona',
  `pantalla` enum('Funciona','Falla') DEFAULT 'Funciona',
  `internet` enum('Conectado','Sin Red') DEFAULT 'Conectado',
  `observaciones` text DEFAULT NULL,
  `fecha_revision` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `auditoria_laboratorio`
--

INSERT INTO `auditoria_laboratorio` (`id`, `numero_pc`, `teclado`, `mouse`, `pantalla`, `internet`, `observaciones`, `fecha_revision`) VALUES
(4, 'PC-09', 'Funciona', 'Funciona', 'Funciona', 'Conectado', 'Prueba', '2025-12-29 20:35:28'),
(5, 'PC-10', 'Falla', 'No tiene', 'Funciona', 'Sin Red', '', '2025-12-29 20:35:48'),
(6, 'PC-11', 'No tiene', 'Falla', 'Funciona', 'Conectado', '', '2025-12-29 20:37:41'),
(7, 'PC-1', 'Funciona', 'Falla', 'Falla', 'Conectado', '', '2025-12-29 20:37:59');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `auditoria_laboratorio`
--
ALTER TABLE `auditoria_laboratorio`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `auditoria_laboratorio`
--
ALTER TABLE `auditoria_laboratorio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
