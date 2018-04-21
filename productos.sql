-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-04-2018 a las 23:11:11
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda`
--

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`nombre`, `descripcion`, `cantidad`, `precio`, `imgUrl`) VALUES
('Balón Wilson', 'Descripcion del Producto', 50, 700, 'americano_balon.jpg'),
('Casco de Futbol Americano', 'Descripcion del Producto', 50, 2999, 'americano_casco.jpg'),
('Equipo de Futbol Americano', 'Descripcion del Producto', 50, 9000, 'americano_equipo.jpg'),
('Zapatos de Futbol Americano', 'Descripcion del Producto', 50, 1100, 'americano_shoes.jpg'),
('Uniformes para Americano', 'Descripcion del Producto', 50, 8000, 'americano_uniforme.jpg'),
('Balón Wilson', 'Descripcion del Producto', 50, 600, 'basquetbol_balon.jpg'),
('Balón Spalding', 'Descripcion del Producto', 50, 510, 'basquetbol_balon2.jpg'),
('Zapatos de Basquetbol', 'Descripcion del Producto', 50, 1800, 'basquetbol_shoes.jpg'),
('Uniformes para Basquetbol', 'Descripcion del Producto', 50, 2500, 'basquetbol_uniforme.jpg'),
('Bate de Beisbol', 'Descripcion del Producto', 50, 700, 'beisbol_bate.jpg'),
('Equipo para Catcher', 'Descripcion del Producto', 50, 6500, 'beisbol_catcher.jpg'),
('Equipo de Beisbol', 'Descripcion del Producto', 50, 2200, 'beisbol_equipo.jpg'),
('Guante de Beisbol', 'Descripcion del Producto', 50, 1100, 'beisbol_guante.jpg'),
('Pelotas de Beisbol', 'Descripcion del Producto', 50, 1050, 'beisbol_pelotas.jpg'),
('Uniformes para Beisbol', 'Descripcion del Producto', 50, 6000, 'beisbol_uniforme.jpg'),
('Balón de Futbol', 'Descripcion del Producto', 50, 700, 'futbol_balon.jpg'),
('Calcetas', 'Descripcion del Producto', 50, 210, 'futbol_calcetas.jpg'),
('Pantalones', 'Descripcion del Producto', 50, 800, 'futbol_pantalones.jpg'),
('Uniformes para Futbol', 'Descripcion del Producto', 50, 4000, 'futbol_uniforme.jpg'),
('Uniformes para Futbol', 'Descripcion del Producto', 50, 4000, 'futbol_uniforme2.jpg'),
('Zapatos de Futbol', 'Descripcion del Producto', 50, 1500, 'futbol_zapatos.jpg'),
('Zapatos de Futbol', 'Descripcion del Producto', 50, 1000, 'futbol_zapatos2.jpg'),
('Leggings', 'Descripcion del Producto', 50, 500, 'gimnasio_leggings.jpg'),
('Pesa rusa', 'Descripcion del Producto', 50, 500, 'gimnasio_pesas.jpg'),
('Juego de pesas', 'Descripcion del Producto', 50, 2110, 'gimnasio_pesas2.jpg'),
('Pesas pequeñas', 'Descripcion del Producto', 50, 210, 'gimnasio_pesas3.jpg'),
('Pesas grandes', 'Descripcion del Producto', 50, 500, 'gimnasio_pesas4.jpg'),
('Playera', 'Descripcion del Producto', 50, 500, 'gimnasio_playera.jpg'),
('Playera', 'Descripcion del Producto', 50, 500, 'gimnasio_playera2.jpg'),
('Playera', 'Descripcion del Producto', 50, 400, 'gimnasio_shirt.jpg'),
('Shorts', 'Descripcion del Producto', 50, 300, 'gimnasio_shorts.jpg'),
('Top', 'Descripcion del Producto', 50, 410, 'gimnasio_top.jpg'),
('Blusa', 'Descripcion del Producto', 50, 310, 'running_blouse.jpg'),
('Ropa para running', 'Descripcion del Producto', 50, 610, 'running_ropa.jpg'),
('Blusa', 'Descripcion del Producto', 50, 350, 'running_shirt.jpg'),
('Zapatos para Running', 'Descripcion del Producto', 50, 900, 'running_shoes.jpg'),
('Zapatos para Running', 'Descripcion del Producto', 50, 1100, 'running_shoes2.jpg'),
('Zapatos para Running', 'Descripcion del Producto', 50, 1200, 'running_shoes3.jpg'),
('Shorts', 'Descripcion del Producto', 50, 330, 'running_shorts.jpg'),
('Uniforme para Running', 'Descripcion del Producto', 50, 710, 'running_uniforme.jpg'),
('Gorra de Tenis', 'Descripcion del Producto', 50, 300, 'tenis_gorra.jpg'),
('Pelotas de Tenis', 'Descripcion del Producto', 50, 279, 'tenis_pelota.jpg'),
('Playera de Tenis', 'Descripcion del Producto', 50, 510, 'tenis_playera.jpg'),
('Raqueta de Tenis', 'Descripcion del Producto', 50, 1100, 'tenis_raqueta.jpg'),
('Raqueta de Tenis', 'Descripcion del Producto', 50, 800, 'tenis_raqueta2.jpg'),
('Uniforme para Tenis', 'Descripcion del Producto', 50, 810, 'tenis_uniforme.jpg'),
('Uniforme para Tenis', 'Descripcion del Producto', 50, 810, 'tenis_uniforme2.jpg'),
('Guantes de Box', 'Descripcion del Producto', 50, 1550, 'box_guantes.jpg'),
('Saco de Box', 'Descripcion del Producto', 50, 1790, 'box_saco.jpg'),
('Pants', 'Descripcion del Producto', 50, 600, 'pants.jpg'),
('Mochila', 'Descripcion del Producto', 50, 710, 'mochila1.jpg'),
('Mochila', 'Descripcion del Producto', 50, 1200, 'mochila2.jpg'),
('Mochila', 'Descripcion del Producto', 50, 1100, 'mochila3.jpg'),
('Mochila', 'Descripcion del Producto', 50, 2110, 'mochila4.jpg'),
('Suéter Adidas', 'Descripcion del Producto', 50, 500, 'sueter1.jpg'),
('Chamarra', 'Descripcion del Producto', 50, 700, 'sueter2.jpg'),
('Suéter Vans', 'Descripcion del Producto', 50, 500, 'sueter3.jpg'),
('Suéter', 'Descripcion del Producto', 50, 800, 'sueter4.jpg'),
('Suéter', 'Descripcion del Producto', 50, 810, 'sueter5.jpg'),
('Suéter', 'Descripcion del Producto', 50, 610, 'sueter6.jpg'),
('Suéter', 'Descripcion del Producto', 50, 510, 'sueter7.jpg'),
('Chamarra', 'Descripcion del Producto', 50, 450, 'sueter8.jpg'),
('Tenis Nike', 'Descripcion del Producto', 50, 1210, 'calzado1.jpg'),
('Tenis Nike', 'Descripcion del Producto', 50, 1350, 'calzado2.jpg'),
('Tenis Adidas', 'Descripcion del Producto', 50, 1510, 'calzado3.jpg'),
('Tenis Nike', 'Descripcion del Producto', 50, 1610, 'calzado4.jpg'),
('Tenis Adidas', 'Descripcion del Producto', 50, 1000, 'calzado5.jpg'),
('Tenis Nike', 'Descripcion del Producto', 50, 1100, 'calzado6.jpg'),
('Tenis Adidas', 'Descripcion del Producto', 50, 1000, 'calzado7.jpg'),
('Tenis Adidas', 'Descripcion del Producto', 50, 900, 'calzado8.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
