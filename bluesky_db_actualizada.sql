-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-07-2021 a las 19:40:36
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bluesky_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `boleta`
--

CREATE TABLE `boleta` (
  `Nom_Clie` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `Nom_Produc` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `Nom_Prov` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `Cantidad` double NOT NULL,
  `Total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `boleta`
--

INSERT INTO `boleta` (`Nom_Clie`, `Nom_Produc`, `Nom_Prov`, `Cantidad`, `Total`) VALUES
('jean10', 'LAPTOP HP 14 DK-1022WM B/W', '', 3, 0),
('rex15', 'FRANTIC MIC K713 TECLADO GAMER', '', 1, 0),
('jean10', 'SAVAGE CYB H500 AURICULAR GAMER', '', 3, 0),
('jean10', 'FRANTIC MIC K713 TECLADO GAMER', '', 4, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `idCliente` int(11) NOT NULL,
  `Nom_Clie` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `Ape_Clie` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `User_Clie` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `Pass_Clie` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `id_Stat` int(11) NOT NULL,
  `img_clie` varchar(1000) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idCliente`, `Nom_Clie`, `Ape_Clie`, `User_Clie`, `Pass_Clie`, `id_Stat`, `img_clie`) VALUES
(1, 'Jean Carlos', 'Zamudio', 'jean10', '123456', 1, 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/2d/UTP-logo.svg/2270px-UTP-logo.svg.png'),
(12, 'Renzo', 'Ortega', 'rex15', 'abc123', 1, 'https://image.api.playstation.com/vulcan/img/rnd/202105/2611/8KgsHgZ3KqZ4oGoecfAdnQ9r.png?w=440'),
(13, 'Francisco', 'Suarez', 'cisco776', 'contrasena', 1, ''),
(14, 'Alonso', 'Farfan', 'honey123', 'fifa21', 1, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `idEmpleado` int(11) NOT NULL,
  `Nom_Emple` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `Ape_Emple` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `User_Emple` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `Pass_Emple` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `Descripcion` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `img_emple` varchar(1000) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`idEmpleado`, `Nom_Emple`, `Ape_Emple`, `User_Emple`, `Pass_Emple`, `Descripcion`, `img_emple`) VALUES
(1000, 'Juanito', 'Alcachofa', 'juanito50', '987654321', 'Soy una cuenta creada por Jean Carlos Zamudio Laban para probar si el usuario administrativo funciona de manera correcta.', 'https://i.imgur.com/0WtAGmj.png'),
(1001, 'Jean Carlos', 'Zamudio Laban', 'bluesky', '00105012', 'Soy un estudiante de 19, estoy en el curso de Taller de Programacion Web, aprendiendo a usar el HTML, CSS, PHP y Javascript.', 'https://i.imgur.com/7iQEfbf.jpg'),
(1002, 'Gian Carlos', 'Terrones Castrejon', 'gian', '1234567', 'Soy un alumno de la UTP en el curso de Taller de Programación Web', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE `mensajes` (
  `Nom_emisor` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `Correo` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `Asunto` varchar(80) COLLATE utf8_spanish2_ci NOT NULL,
  `Mensaje` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `Fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `mensajes`
--

INSERT INTO `mensajes` (`Nom_emisor`, `Correo`, `Asunto`, `Mensaje`, `Fecha`) VALUES
('Jean Carlos', 'jean123@gmail.com', 'Mas productos tecnologicos', 'Quisiera que aÃ±adieran mas productos a su catalogo.', '2021-06-26 21:49:45'),
('Jaime Velarde', 'velarde123@gmail.com', 'Info sobre su empresa', 'Deseo que me brinden informaciÃ³n a cerca de su empres, es para un trabajo universitario.', '2021-07-02 22:16:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idProduc` int(11) NOT NULL,
  `Nom_Produc` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `Nom_Prov` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `Stock` int(10) NOT NULL,
  `Precio` double NOT NULL,
  `info_pro` varchar(1000) COLLATE utf8_spanish2_ci NOT NULL,
  `img_pro` varchar(50) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idProduc`, `Nom_Produc`, `Nom_Prov`, `Stock`, `Precio`, `info_pro`, `img_pro`) VALUES
(1, 'LAPTOP LENOVO YOGA C640', 'HP', 22, 4159, 'Procesador: Core I7-1135G7 2.4Ghz. Memoria RAM: 8GB DDR4. Almacenamiento: 512GB SSD. Pantalla: 14\" FHD (1920 x 1080) Intel Iris X Graphics. Lector de Huella. Webcam. Bluetooth. Windows 10 Home.', 'https://i.imgur.com/Njbsc9v.jpg'),
(2, 'LAPTOP HP 14 DK-1022WM B/W ', 'HP', 33, 2130, 'Procesador: AMD Ryzen 3 3250U (reloj base de 2,6 GHz, reloj de impulso maximo de hasta 3,5 GHz, 1 MB de cache L2, 2 nucleos)\r\nMemoria RAM: SDRAM DDR4-2400 de 4 GB (1 x 4 GB)\r\nGraficos de video: Graficos AMD Radeon Vega 3\r\nDisco duro: Unidad de disco duro SATA de 1 TB a 5400 rpm\r\nUnidad optica: Unidad optica no incluida', 'https://i.imgur.com/WcSyqh1.jpg'),
(3, 'KIT XFORCE MIC GT8808 GAMER', 'MICRONICS', 33, 99.9, 'Mouse y teclado ergonomico con materiales de calidad y sensor de alta precision.\r\nCompatible con sistemas operativos Windows.\r\nVariedad de colores adaptables a todas las necesidades y usos\r\nfabricante con mas de 25 de experiencia en el mercado peruano\r\nproducto con garantia', 'https://i.imgur.com/xTMFgmM.jpg'),
(4, 'TECLADO V4 RGB IMPERMEABLE', 'MICRONICS', 83, 88.99, 'Alto: 4\r\nAncho: 1\r\nCompatibilidad: Windows/iOS\r\nConexion: USB\r\nHecho en: China\r\nIncluye: RGB\r\nPersonalizable. Garantia de 12 meses despues de su compra en la tienda.', 'https://i.imgur.com/uDlE46z.jpg'),
(5, 'FRANTIC MIC K713 TECLADO GAMER', 'MICRONICS', 12, 79.9, 'Peso producto empacado: 1Kg\r\nLargo producto empacado: 59.5cm\r\nAncho producto empacado: 4.5cm\r\nAlto producto empacado: 24cm\r\nCaracteristicas: USB', 'https://i.imgur.com/SbvTJ0e.jpg'),
(6, 'SAVAGE CYB H500 AURICULAR GAMER', 'CYBERTEL', 33, 64.9, 'Auricular Estereo Gamer.\r\nBanda Ajustable Para Mayor Comodidad.\r\nAlmohadillas y Banda Protectora de Cuero.\r\nColor: Negro con Detalles Rojos.\r\nSonido Estereo Envolvente de Alta Calidad.', 'https://i.imgur.com/wZ9kd7U.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `Nom_Prov` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `RUC` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `Direc_Fisica` varchar(100) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`Nom_Prov`, `RUC`, `Direc_Fisica`) VALUES
('ANTRYX', '20516973324', 'La Victoria, Lima, Perú'),
('CYBERTEL', '20392594435', 'Avenida Agustín de la Rosa Toro 821 821, San Luis '),
('HP', ' 20600216512', 'San Isidro, Lima, Perú'),
('LENOVO', '20601614066', 'San Isidro, Lima, Perú'),
('MICRONICS', '20502069986', 'Avenida Paseo De La Republica 6174 URB. San Antonio'),
('XBLADE', '20512573324', 'San Miguel 258, San Luis 15022');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stat_uclient`
--

CREATE TABLE `stat_uclient` (
  `id_Stat` int(11) NOT NULL,
  `Nom_Stat` varchar(20) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `stat_uclient`
--

INSERT INTO `stat_uclient` (`id_Stat`, `Nom_Stat`) VALUES
(1, 'Disponible'),
(2, 'Bloqueado'),
(3, 'Suspendido');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idCliente`),
  ADD KEY `id_Stat` (`id_Stat`) USING BTREE;

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`idEmpleado`);

--
-- Indices de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD PRIMARY KEY (`Fecha`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idProduc`),
  ADD KEY `Nom_Prov` (`Nom_Prov`) USING BTREE;

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`Nom_Prov`);

--
-- Indices de la tabla `stat_uclient`
--
ALTER TABLE `stat_uclient`
  ADD KEY `id_Stat` (`id_Stat`) USING BTREE;

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `idEmpleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1003;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idProduc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`id_Stat`) REFERENCES `stat_uclient` (`id_Stat`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`Nom_Prov`) REFERENCES `proveedores` (`Nom_Prov`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
