-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-10-2021 a las 17:37:24
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `grupo_5`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL,
  `categoria` varchar(150) DEFAULT NULL,
  `imagen_cate` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `categoria`, `imagen_cate`) VALUES
(5, 'Hp Pavilon g7 Notebook pc', 'Hp Pavilon g7 Notebook pc.jpg'),
(6, 'Hp Pavilon g7-2269wm', 'Hp Pavilon g7-2269wm.jpg'),
(7, 'Monitor Hp M27f FHD 27 \"', 'Monitor Hp M27f FHD 27 \".png'),
(8, 'Monitor Hp X 24ih de 23.8\"', 'Monitor Hp X 24ih de 23.8\".jpg'),
(9, 'Mouse Laser Envy 500', 'Mouse Laser Envy 500.jpg'),
(10, 'Mouse Óptico ', 'Mouse Óptico .jpg'),
(11, 'Teclado Gamer Suiko', 'Teclado Gamer Suiko.jpg'),
(12, 'Teclado Gamer USB ARG-KB-2055BK', 'Teclado Gamer USB ARG-KB-2055BK.jpeg'),
(13, 'Memoria RAM Static', 'Memoria RAM Static.jpg'),
(14, 'Synchronous Dynamic RAM (SDRAM)', 'Synchronous Dynamic RAM (SDRAM).jpg'),
(15, 'Micro SATA', 'Micro SATA.png'),
(16, 'Cables SATA Bridge', 'Cables SATA Bridge.jpg'),
(17, 'Mi Router 4A Gigabit Edition', 'Mi Router 4A Gigabit Edition.jpg'),
(18, 'CPU hp 280 g3', 'CPU hp 280 g3.jpg'),
(19, 'CPU hp 280 g4', 'CPU hp 280 g4.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `id_inventario` int(11) NOT NULL,
  `id_producto` varchar(255) DEFAULT NULL,
  `id_categoria` int(11) DEFAULT NULL,
  `stock` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `cod_producto` tinytext DEFAULT NULL,
  `nombre_producto` varchar(25) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `precio_compra` decimal(10,0) DEFAULT NULL,
  `precio_venta` decimal(10,0) DEFAULT NULL,
  `fecha_ingreso` date DEFAULT NULL,
  `fecha_vencimiento` date DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  `descuento` float DEFAULT NULL,
  `imagen` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `cod_producto`, `nombre_producto`, `descripcion`, `precio_compra`, `precio_venta`, `fecha_ingreso`, `fecha_vencimiento`, `estado`, `descuento`, `imagen`) VALUES
(1, '1', 'Pc Hp Pavilon dv6-323', 'Pc de 4 memoria ram, disco duro de 8 Gb.', '1500', '800', '2021-11-05', '2021-12-01', 1, 20, '1.png'),
(2, '2', 'Monitor Hp', 'Marca Hp, Color plateado, resolución de pantalla 1366×768 ', '150', '60', '2021-10-26', '2021-11-04', 1, 10, '2.png'),
(3, '3', 'Mouse Inalámbrico ', 'Tecnología de sensor: seguimiento óptico avanzado, Color rosado.', '70', '35', '2021-10-24', '2021-11-02', 1, 5, '3.jpg'),
(4, '4', 'Teclado Gamer USB ARG-KB-', 'Estructura robusta con mecanismo de teclas duradero. Arco iris de fondo cambiante de luz y letras iluminadas. Plug & Play compatible con la mayoría de los sistemas operativos.', '80', '25', '2021-10-16', '2021-11-07', 1, 10, '4.jpeg'),
(5, '5', 'Memoria RAM 4GB', 'Factor de forma204-PIN Tecnología de memoria RAMSDRAM DDR3. Velocidad de memoria1333 MHz', '90', '40', '2021-10-26', '2021-11-04', 1, 20, '5.jpeg'),
(6, '6', 'Cable SATA', 'SATA a USB cable - USB 3.0 a 2.5\". Adaptador de disco duro.', '25', '12', '2021-10-22', '2021-11-07', 1, 20, '6.jpeg'),
(7, '7', 'Router Xiaomi 4A', 'Marca: Xiaomi. Modelo: Mi WiFi Router 4A (R4A) Procesador: MediaTek MT621A a 800 MHz. Memoria Interna: 16MB. Memoria RAM: 128MB.', '60', '30', '2021-10-06', '2021-11-05', 1, 30, '7.jpeg'),
(8, '8', 'CPU HP 280 G5 SSF', 'PC de Escritorio HP 280 G5 SSF, Procesador Intel Core i7 10700 (hasta 4.80 GHz), Memoria de 8GB DDR4, Disco Duro de 1TB, Video UHD Graphics 630, S.O. Windows 10 Pro (64 Bits)', '600', '300', '2021-10-16', '2021-11-03', 1, 30, '8.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id_proveedor` int(11) NOT NULL,
  `nombre_proveedor` varchar(25) DEFAULT NULL,
  `direccion` text DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `correo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id_proveedor`, `nombre_proveedor`, `direccion`, `telefono`, `correo`) VALUES
(4, 'Tecnología y Suministros ', '67 avenida Sur y, Pasaje n27', 2264, 'tecnosumi@gmail.com'),
(5, 'MTECH Tienda informática ', '79Av. Norte y 9.ª Calle Pte., Centro Comercial Vía Miranda, San Salvador CP 1101', 7779, 'mtech@gmail.com'),
(6, 'MICRONET Informáticos ', ' Diag. Dr. Arturo Romero, San Salvador', 2235, 'micronetinfo@gmail.com'),
(7, 'Innovaciones Tecnológicas', ' Colonia Satalite, Pasaje Leo, San Salvador CP 1101', 2531, 'tecnologicas@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idusuario` int(11) NOT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `email` text DEFAULT NULL,
  `clave` varchar(255) DEFAULT NULL,
  `token` varchar(12) DEFAULT NULL,
  `tipo` int(11) DEFAULT NULL,
  `foto` text DEFAULT NULL,
  `estado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `usuario`, `email`, `clave`, `token`, `tipo`, `foto`, `estado`) VALUES
(1, 'judith', '', '$2y$10$JoFvikbzrwOSjNlwS0oDgexdclTYHsbhPJdaqtyJjW/zdKRBeSUIW', NULL, 1, NULL, 1),
(2, 'Bryan', 'bryanrodriguez744@gmail.com', '$2y$10$TlJbBN9frKADexplPqZg9uEyg4oQMXTyjM/pHOAvBKh8K.iUw.OU6', NULL, 1, NULL, 1),
(4, 'gere', 'judithcruz50571@gmail.com', '$2y$10$CJr1ZRPMxsv98LRfkTyOEOMHgaJV.9EZX.pC/vP3w76nSZ1BnOL4.', '5hbozoap', 2, NULL, 1),
(5, 'aby', '', '$2y$10$SMQmJZfzvsE7a3k9GuFT8.URux2nyB.5/ACZF1lrN7/wsEY6ZX5kq', NULL, 1, NULL, 0),
(7, 'omar', '', '$2y$10$wBm/mp6z5OKUucWRptEpp.y9zB9R3jvwaElqDVEoipwPf2mQ.k/fi', NULL, 2, NULL, 0),
(11, 'abby', '', '$2y$10$F9PZfZmcrQWL5kBCuzSJoOasWiS3MdOe0KvL1OZuA54Dm/V364afK', NULL, 1, NULL, 1),
(12, 'admin', NULL, '$2y$10$9wdrFvsXUYgdrdYvxfCIMu.smKMQn0c3jc53sFo.oubClDD4/iNpi', NULL, 1, 'admin.png', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`id_inventario`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id_proveedor`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `id_inventario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id_proveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
