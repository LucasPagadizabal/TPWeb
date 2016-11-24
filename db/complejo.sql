-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-11-2016 a las 03:01:03
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `complejo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cabania`
--

CREATE TABLE `cabania` (
  `id_cabania` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `comentarios` varchar(500) NOT NULL,
  `ocupada` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cabania`
--

INSERT INTO `cabania` (`id_cabania`, `nombre`, `id_categoria`, `comentarios`, `ocupada`) VALUES
(16, 'Alfa', 10, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed bibendum iaculis leo ut eleifend. Proin elit nisl, pretium ut ultrices id, facilisis vitae ex. In mauris magna, scelerisque et rhoncus venenatis, convallis at arcu. Duis id euismod velit. Donec commodo convallis venenatis. Duis nec velit sed libero pellentesque sollicitudin a eu justo. Pellentesque viverra libero eu facilisis malesuada. Nunc volutpat leo at aliquet viverra. Fusce in facilisis turpis. Donec sit amet sem nisl. Integer ur', 0),
(17, 'Beta', 12, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed bibendum iaculis leo ut eleifend. Proin elit nisl, pretium ut ultrices id, facilisis vitae ex. In mauris magna, scelerisque et rhoncus venenatis, convallis at arcu. Duis id euismod velit. Donec commodo convallis venenatis. Duis nec velit sed libero pellentesque sollicitudin a eu justo. Pellentesque viverra libero eu facilisis malesuada. Nunc volutpat leo at aliquet viverra. Fusce in facilisis turpis. Donec sit amet sem nisl. Integer ur', 0),
(18, 'Gamma', 13, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed bibendum iaculis leo ut eleifend. Proin elit nisl, pretium ut ultrices id, facilisis vitae ex. In mauris magna, scelerisque et rhoncus venenatis, convallis at arcu. Duis id euismod velit. Donec commodo convallis venenatis. Duis nec velit sed libero pellentesque sollicitudin a eu justo. Pellentesque viverra libero eu facilisis malesuada. Nunc volutpat leo at aliquet viverra. Fusce in facilisis turpis. Donec sit amet sem nisl. Integer ur', 0),
(19, 'Delta', 14, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed bibendum iaculis leo ut eleifend. Proin elit nisl, pretium ut ultrices id, facilisis vitae ex. In mauris magna, scelerisque et rhoncus venenatis, convallis at arcu. Duis id euismod velit. Donec commodo convallis venenatis. Duis nec velit sed libero pellentesque sollicitudin a eu justo. Pellentesque viverra libero eu facilisis malesuada. Nunc volutpat leo at aliquet viverra. Fusce in facilisis turpis. Donec sit amet sem nisl. Integer ur', 0),
(20, 'Zeta', 15, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed bibendum iaculis leo ut eleifend. Proin elit nisl, pretium ut ultrices id, facilisis vitae ex. In mauris magna, scelerisque et rhoncus venenatis, convallis at arcu. Duis id euismod velit. Donec commodo convallis venenatis. Duis nec velit sed libero pellentesque sollicitudin a eu justo. Pellentesque viverra libero eu facilisis malesuada. Nunc volutpat leo at aliquet viverra. Fusce in facilisis turpis. Donec sit amet sem nisl. Integer ur', 0),
(21, 'Kappa', 10, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed bibendum iaculis leo ut eleifend. Proin elit nisl, pretium ut ultrices id, facilisis vitae ex. In mauris magna, scelerisque et rhoncus venenatis, convallis at arcu. Duis id euismod velit. Donec commodo convallis venenatis. Duis nec velit sed libero pellentesque sollicitudin a eu justo. Pellentesque viverra libero eu facilisis malesuada. Nunc volutpat leo at aliquet viverra. Fusce in facilisis turpis. Donec sit amet sem nisl. Integer ur', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `estrella` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `estrella`) VALUES
(10, 1),
(12, 2),
(13, 3),
(14, 4),
(15, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `id_comentario` int(11) NOT NULL,
  `texto` varchar(250) NOT NULL,
  `puntaje` int(11) NOT NULL,
  `id_cabania` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

CREATE TABLE `imagen` (
  `id_imagen` int(11) NOT NULL,
  `path` varchar(200) NOT NULL,
  `fk_id_cabania` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `imagen`
--

INSERT INTO `imagen` (`id_imagen`, `path`, `fk_id_cabania`) VALUES
(68, 'images/58093d1082dac_gatos.jpg', 32),
(69, 'images/58093d109335a_images (1).jpg', 32),
(70, 'images/58093d10a0636_images.jpg', 32),
(71, 'images/58093dc44cba6_images.jpg', 33),
(72, 'images/58093dc472a38_cabania.jpg', 33),
(73, 'images/58093dc47dac1_gatos.jpg', 33),
(74, 'images/58093dc48b63e_images (1).jpg', 33),
(75, 'images/580944e47830f_images (1).jpg', 34),
(76, 'images/580944e482d4d_cabania.jpg', 34),
(77, 'images/5809453f0fc9a_cabania.jpg', 35),
(78, 'images/58094a2d0f380_cabania.jpg', 0),
(79, 'images/58094a2d27eae_gatos.jpg', 0),
(80, 'images/58094a2d355c6_images (1).jpg', 0),
(81, 'images/58094a2d4b0c8_images.jpg', 0),
(82, 'images/58094aa8373be_images (1).jpg', 0),
(83, 'images/58094ae24172e_gatos.jpg', 0),
(84, 'images/58094affd70e9_gatos.jpg', 0),
(85, 'images/58094b3938862_gatos.jpg', 0),
(86, 'images/58094b7dae54f_gatos.jpg', 0),
(87, 'images/58094baf9e879_gatos.jpg', 42),
(88, 'images/58094c9b64236_gatos.jpg', 43),
(89, 'images/580950dc022b7_gatos.jpg', 44),
(90, 'images/580950e6655d6_images (1).jpg', 45),
(91, 'images/5809513bc23d9_gatos.jpg', 46),
(92, 'images/5809514cdf1cf_gatos.jpg', 47),
(93, 'images/58095167ca2d1_gatos.jpg', 48),
(94, 'images/580951e71dbe9_gatos.jpg', 49),
(95, 'images/580970134294d_cabania.jpg', 50),
(96, 'images/580976a8b4d00_cabania.jpg', 51),
(97, 'images/580976c719700_gatos.jpg', 52),
(98, 'images/580976e370808_gatos.jpg', 53),
(99, 'images/580a226f82059_gatos.jpg', 54),
(100, 'images/580a22cb6a924_gatos.jpg', 55),
(101, 'images/580a23e5865dc_gatos.jpg', 56),
(102, 'images/580a245be7615_cabania.jpg', 57),
(103, 'images/580a245bf2923_gatos.jpg', 57),
(104, 'images/580a245c08dbe_images (1).jpg', 57),
(105, 'images/580a301e13d52_gatos.jpg', 1),
(106, 'images/580a301e1b014_images (1).jpg', 1),
(107, 'images/580a309e86bc5_cabania.jpg', 1),
(108, 'images/580a309e90aa7_gatos.jpg', 1),
(109, 'images/580a3147172ba_images (1).jpg', 1),
(110, 'images/580a31472cd4c_gatos.jpg', 1),
(111, 'images/580ba442c5892_gatos.jpg', 2),
(112, 'images/580ba442db2cf_images (1).jpg', 2),
(113, 'images/580ba873bdb38_images.jpg', 3),
(114, 'images/580ba873d8cc9_images (1).jpg', 3),
(115, 'images/580ba9159984f_gatos.jpg', 4),
(116, 'images/580ba915a4aa1_images (1).jpg', 4),
(117, 'images/580ba915b1e71_images.jpg', 4),
(118, 'images/580ba9cc2f2f2_gatos.jpg', 5),
(119, 'images/580ba9cc44dda_images (1).jpg', 5),
(120, 'images/580bab8a0a4df_gatos.jpg', 6),
(121, 'images/580bab8a16ed3_images (1).jpg', 6),
(122, 'images/580bac18b8ba1_gatos.jpg', 7),
(123, 'images/580bb43685b1d_gatos.jpg', 8),
(124, 'images/580bb43693319_images (1).jpg', 8),
(125, 'images/580bbf792e694_images.jpg', 9),
(126, 'images/580bbf793e97d_images (1).jpg', 9),
(127, 'images/580bcc4c3fcc2_gatos.jpg', 10),
(128, 'images/5823e74f7f2b3_images (1).jpg', 11),
(129, 'images/5823e76c9e2b1_images (1).jpg', 12),
(130, 'images/5823e774ec748_images (1).jpg', 13),
(131, 'images/5824030fcbb8e_cabania.jpg', 14),
(132, 'images/5824085fb13b7_cabania.jpg', 15),
(133, 'images/58252568eee65_images (1).jpg', 16),
(134, 'images/58252569073dd_images.jpg', 16),
(135, 'images/58252582341d6_images (1).jpg', 17),
(136, 'images/58252597e1bcf_cabania.jpg', 18),
(137, 'images/58252597eae62_images (1).jpg', 18),
(138, 'images/58252598008e9_images.jpg', 18),
(139, 'images/582525aace030_images.jpg', 19),
(140, 'images/582525caa0945_cabania.jpg', 20),
(141, 'images/582525caa9ca0_images (1).jpg', 20),
(142, 'images/582525cabca3f_images.jpg', 20),
(143, 'images/582525db2de55_images (1).jpg', 21);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `contrasenia` varchar(250) NOT NULL,
  `privilegio` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `email`, `contrasenia`, `privilegio`) VALUES
(4, 'lucas@gmail.com', 'c5fe25896e49ddfe996db7508cf00534', 1),
(5, 'alfredo@gmail.com', 'c5fe25896e49ddfe996db7508cf00534', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cabania`
--
ALTER TABLE `cabania`
  ADD PRIMARY KEY (`id_cabania`),
  ADD KEY `id_cabania` (`id_cabania`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id_comentario`);

--
-- Indices de la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD PRIMARY KEY (`id_imagen`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cabania`
--
ALTER TABLE `cabania`
  MODIFY `id_cabania` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `imagen`
--
ALTER TABLE `imagen`
  MODIFY `id_imagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
