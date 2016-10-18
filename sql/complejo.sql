-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-10-2016 a las 07:00:56
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
  `comentarios` varchar(200) NOT NULL,
  `ocupada` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cabania`
--

INSERT INTO `cabania` (`id_cabania`, `nombre`, `id_categoria`, `comentarios`, `ocupada`) VALUES
(259, 'hilton', 1, 'ek', 1),
(260, 'Sheratton', 4, 'hola ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta', 0);

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
(2, 3),
(5, 44);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `telefono` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

CREATE TABLE `imagen` (
  `id_imagen` int(11) NOT NULL,
  `path` varchar(250) NOT NULL,
  `fk_id_cabania` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `imagen`
--

INSERT INTO `imagen` (`id_imagen`, `path`, `fk_id_cabania`) VALUES
(1, 'images/5800ed04ea39c_restart_btn.png', 201),
(2, 'images/5800ed0503a2a_square_btn.png', 201),
(3, 'images/5800f29c1540d_fx_player.png', 202),
(4, 'images/5800f96d0f40e_circle_btn.jpg', 203),
(5, 'images/5800f96d2a4e0_fx_player.png', 203),
(6, 'images/580103029aae8_circle_btn.jpg', 204),
(7, 'images/58010302c9c2e_fx_finish.png', 204),
(8, 'images/58012cf077294_circle_btn.jpg', 205),
(9, 'images/580132b1377c3_a_hd_maze.png', 206),
(10, 'images/58013693dffc2_fx_player.png', 207),
(11, 'images/58013d3c8250b_fx_player.png', 208),
(12, 'images/580159aa1c706_fx_player.png', 209),
(13, 'images/58015d4540ef6_fx_player.png', 210),
(14, 'images/58015d7aa302e_fx_player.png', 211),
(15, 'images/58015ef360506_fx_player.png', 212),
(16, 'images/58015fa7dce39_fx_player.png', 213),
(17, 'images/58016017b9ee5_nav_arrow_btn.png', 214),
(18, 'images/580163f73962b_fx_player.png', 215),
(19, 'images/5801640fc3013_fx_player.png', 216),
(20, 'images/5801642fa6039_circle_btn.jpg', 217),
(21, 'images/5801645944971_fx_finish.png', 218),
(22, 'images/580164f712507_fx_player.png', 219),
(23, 'images/5801693829748_fx_player.png', 220),
(24, 'images/580197d252877_fx_finish.png', 221),
(25, 'images/58019d6018a7a_circle_btn.jpg', 222),
(26, 'images/5801a5b274cf6_fx_player.png', 223),
(27, 'images/5801a5ca280ee_fx_player.png', 224),
(28, 'images/5801a6b804a80_circle_btn.jpg', 225),
(29, 'images/5801a6cea5b9a_fx_finish.png', 226),
(30, 'images/5801a73820585_circle_btn.jpg', 227),
(31, 'images/5801a7589c9fb_level_done_crown.png', 228),
(32, 'images/5801a9a5e8994_fx_player.png', 229),
(33, 'images/5801ab50a35e8_fx_finish.png', 230),
(34, 'images/5801b2afa7238_fx_player.png', 231),
(35, 'images/5801b2afbcc04_fx_player.png', 232),
(36, 'images/5801b2bc8001f_fx_finish.png', 233),
(37, 'images/5801b2bc8945c_fx_finish.png', 234),
(38, 'images/5801b354cb7ab_fx_player.png', 235),
(39, 'images/5801b354df423_fx_player.png', 236),
(40, 'images/5801b36f0f228_fx_finish.png', 237),
(41, 'images/5801b36f19f98_fx_finish.png', 238),
(42, 'images/5801b38c4b739_fx_finish.png', 239),
(43, 'images/5801b38c55212_fx_finish.png', 240),
(44, 'images/5801b3f0571c0_fx_player.png', 241),
(45, 'images/5801b3f064fc2_fx_player.png', 242),
(46, 'images/5801b597415ca_fx_player.png', 243),
(47, 'images/5801b5974cc8a_fx_player.png', 244),
(48, 'images/5801b59780112_fx_player.png', 245),
(49, 'images/5801b597800f1_fx_player.png', 246),
(50, 'images/5801b6b73cae6_fx_player.png', 247),
(51, 'images/5801bb784c308_fx_player.png', 248),
(52, 'images/5801bb8215e08_fx_player.png', 249),
(53, 'images/580262472cbdc_level_done_crown.png', 250),
(54, 'images/58026247392c9_level_done_crown.png', 251),
(55, 'images/580262f9ba6fa_circle_btn.jpg', 252),
(56, 'images/5802635f19c49_fx_finish.png', 253),
(57, 'images/58026396a8be5_circle_btn.jpg', 254),
(58, 'images/5802787f8b45a_fx_finish.png', 255),
(59, 'images/5802789b2e77d_Level_locked_icon.png', 256),
(60, 'images/580281b36447c_fx_player.png', 257),
(61, 'images/580281ca40965_circle_btn.jpg', 258),
(62, 'images/580293b8ca3b7_a_hd_maze.png', 259),
(63, 'images/580293b8f00ce_circle_btn.jpg', 259),
(64, 'images/580293b921fd5_fx_finish.png', 259),
(65, 'images/580293b9321e3_fx_player.png', 259),
(66, 'images/5802a2727341c_02.jpg', 260),
(67, 'images/5802a272a2668_04.jpg', 260),
(68, 'images/5803ffb1ec4e1_star.png', 261),
(69, 'images/58058ee13b5c0_34592_1514413618243_1171516246_31427318_7208822_n.jpg', 262),
(70, 'images/58059009c4361_12607083_564804770336503_1897956480_n.jpg', 263);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE `reserva` (
  `id_reserva` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_cabania` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cabania`
--
ALTER TABLE `cabania`
  ADD PRIMARY KEY (`id_cabania`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD PRIMARY KEY (`id_imagen`);

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`id_reserva`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cabania`
--
ALTER TABLE `cabania`
  MODIFY `id_cabania` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=264;
--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `imagen`
--
ALTER TABLE `imagen`
  MODIFY `id_imagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT de la tabla `reserva`
--
ALTER TABLE `reserva`
  MODIFY `id_reserva` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
