-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-06-2024 a las 21:35:51
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
-- Base de datos: `sistema`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE `area` (
  `id` int(11) NOT NULL,
  `codigo_area` varchar(10) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `area`
--

INSERT INTO `area` (`id`, `codigo_area`, `nombre`, `descripcion`, `estado`) VALUES
(2, 'FIN5', 'FINANCIERA MOD1', 'AREA FINANCIERA CONTABLE MOD1', 1),
(1, 'TEC4', 'TECNICA ELECTRICA', 'TECNICA ELECTRICA', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caja`
--

CREATE TABLE `caja` (
  `id` int(11) NOT NULL,
  `caja` varchar(50) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `caja`
--

INSERT INTO `caja` (`id`, `caja`, `estado`) VALUES
(1, 'General', 1),
(2, 'Secundaria', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `ci_cliente` int(10) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellido_paterno` varchar(100) NOT NULL,
  `apellido_materno` varchar(100) NOT NULL,
  `direccion` text NOT NULL,
  `correo` varchar(200) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `ci_cliente`, `nombres`, `apellido_paterno`, `apellido_materno`, `direccion`, `correo`, `telefono`, `estado`) VALUES
(9, 10596910, 'Juan Pablo', 'Gómez', 'Condori', 'Zona Villa Adela, Av. 3 de Mayo, #890', 'jgómez81@gmail.com', '79760105', 1),
(7, 11398683, 'Javier', 'Sánchez', 'Choque', 'Zona Alto Lima, Av. 6 de Agosto, #123', 'jsánchez30@gmail.com', '77535460', 1),
(3, 11424750, 'José', 'González', 'Mamani', 'Zona Villa Bolívar, Av. Panorámica, #789', 'jgonzález91@gmail.com', '74386399', 1),
(4, 14731503, 'Manuel', 'Fernández', 'García', 'Zona Villa Adela, Calle 8, #101', 'mfernández32@gmail.com', '78087555', 1),
(1, 17027704, 'Alejandro', 'García', 'Quispe', 'Zona 12 de Octubre, Calle 3, #234', 'agarcía7@gmail.com', '71051217', 1),
(2, 17072350, 'Juan Manuel', 'Rodríguez', 'Condori', 'Zona 16 de Julio, Av. 6 de Marzo, #567', 'jrodríguez66@gmail.com', '70798809', 1),
(5, 17643828, 'Juan David', 'López', 'Quispe', 'Zona Senkata, Av. Juan Pablo II, #345', 'jlópez15@gmail.com', '78366496', 1),
(10, 17859061, 'Miguel', 'Martín', 'Mamani', 'Zona 16 de Julio, Calle 7, #234', 'mmartín24@gmail.com', '68065143', 1),
(6, 18067392, 'Daniel Alex', 'Martínez', 'Mamani', 'Zona Ciudad Satélite, Calle 4, #678', 'dmartínez89@gmail.com', '65730135', 1),
(8, 18860176, 'Carlos Luis', 'Pérez', 'Flores', 'Zona Villa Dolores, Calle 2, #456', 'cpérez59@gmail.com', '65885088', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallerepuesto`
--

CREATE TABLE `detallerepuesto` (
  `id` int(11) NOT NULL,
  `codigo_mantenimiento` varchar(10) NOT NULL,
  `codigo_repuesto` varchar(10) NOT NULL,
  `codigo_area` varchar(10) NOT NULL,
  `codigo_empleado` varchar(10) NOT NULL,
  `nombre_repuesto` varchar(100) NOT NULL,
  `descripcion_repuesto` varchar(300) NOT NULL,
  `fecha_repuesto` varchar(10) NOT NULL,
  `cantidad_repuesto` int(11) NOT NULL,
  `precio_repuesto` int(11) NOT NULL,
  `subtotal_repuesto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `detallerepuesto`
--

INSERT INTO `detallerepuesto` (`id`, `codigo_mantenimiento`, `codigo_repuesto`, `codigo_area`, `codigo_empleado`, `nombre_repuesto`, `descripcion_repuesto`, `fecha_repuesto`, `cantidad_repuesto`, `precio_repuesto`, `subtotal_repuesto`) VALUES
(1, 'M2', 'R5', '', '', 'Volante 15p', 'Volante de 15pulgadas de radio', '', 1, 210, 210),
(2, 'M2', 'R5', '', '', 'Volante 15p', 'Volante de 15pulgadas de radio', '', 1, 210, 210),
(4, 'M2', 'R5', '', '', 'Volante 15p', 'Volante de 15pulgadas de radio', '', 1, 210, 210),
(5, 'M2', 'R1', '', '', 'Radio', 'Radio con AM y FM', '', 2, 150, 300),
(11, 'M1', 'R3', '', '', 'Tablero Principal', 'Tablero principal que contiene informacion de velocimetro y cantidad de combustible', '', 5, 104, 520),
(12, 'M1', 'R4', '', '', 'Palanca de Cambios', 'Palanca de cambios manual de 5 velocidades y retroceder', '', 1, 250, 250);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalleservicio`
--

CREATE TABLE `detalleservicio` (
  `id` int(11) NOT NULL,
  `codigo_mantenimiento` varchar(10) NOT NULL,
  `codigo_servicio` varchar(10) NOT NULL,
  `codigo_area` varchar(10) NOT NULL,
  `codigo_empleado` varchar(10) NOT NULL,
  `nombre_servicio` varchar(100) NOT NULL,
  `descripcion_servicio` varchar(300) NOT NULL,
  `fecha_inicioservicio` varchar(10) NOT NULL,
  `fecha_finservicio` varchar(10) NOT NULL,
  `estado_servicio` int(11) NOT NULL DEFAULT 0,
  `observacion_servicio` varchar(300) NOT NULL,
  `precio_servicio` int(11) NOT NULL,
  `cantidad_servicio` int(11) NOT NULL,
  `subtotal_servicio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `detalleservicio`
--

INSERT INTO `detalleservicio` (`id`, `codigo_mantenimiento`, `codigo_servicio`, `codigo_area`, `codigo_empleado`, `nombre_servicio`, `descripcion_servicio`, `fecha_inicioservicio`, `fecha_finservicio`, `estado_servicio`, `observacion_servicio`, `precio_servicio`, `cantidad_servicio`, `subtotal_servicio`) VALUES
(6, 'M4', 'W4', '', '', 'Instalacion de Memoria', 'Instalacion (cableado) de memoria en el vehiculo', '', '', 0, '', 760, 2, 1520),
(9, 'M2', 'W4', '', '', 'Instalacion de Memoria', 'Instalacion (cableado) de memoria en el vehiculo', '', '', 0, '', 760, 1, 760),
(11, 'M1', 'W2', '', '', 'Mantenimiento Electrico', 'Mantenimiento de todas las funciones elecricas.', '', '', 0, '', 150, 1, 150),
(12, 'M1', 'W3', '', '', 'Instalacion de Radio', 'Instalacion de Radio dentro del vehiculo', '', '', 0, '', 50, 3, 150),
(13, 'M3', 'W1', '', '', 'Diagnostico General', 'Diagnostico General de todas las funciones del vehiculo para identificar los problemas.', '', '', 0, '', 30, 5, 150),
(16, 'M3', 'W5', '', '', 'Reparacion de Memoria', 'Reparacion ymantenimiento de memoria', '', '', 0, '', 200, 6, 1200),
(17, 'M4', 'W3', '', '', 'Instalacion de Radio', 'Instalacion de Radio dentro del vehiculo', '', '', 0, '', 50, 1, 50);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `id` int(11) NOT NULL,
  `codigo_empleado` varchar(10) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `profesion` varchar(300) NOT NULL,
  `cargo` varchar(100) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`id`, `codigo_empleado`, `nombre`, `profesion`, `cargo`, `estado`) VALUES
(2, 'F2', 'MARTA MAMANI MOD', 'INGENIERO MOD', 'TECNICO 3 MOD', 1),
(1, 'H3', 'GUSTAVO RUIZ MOD', 'ESTUDIANTE MOD', 'PASANTE MOD', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mantenimiento`
--

CREATE TABLE `mantenimiento` (
  `id` int(11) NOT NULL,
  `codigo_mantenimiento` varchar(10) NOT NULL,
  `codigo_sucursal` varchar(10) NOT NULL,
  `placa_vehiculo` varchar(10) NOT NULL,
  `fecha_recepcion` varchar(10) NOT NULL,
  `fecha_finalizacion` varchar(10) NOT NULL,
  `fecha_entrega` varchar(10) NOT NULL,
  `kilometraje_recibido` varchar(100) NOT NULL,
  `kilometraje_entrega` varchar(100) NOT NULL,
  `descripcion_problema` varchar(500) NOT NULL,
  `inventario_vehiculo` varchar(500) NOT NULL,
  `autorizacion_repuestos` varchar(10) NOT NULL,
  `costo_total` int(11) NOT NULL,
  `estado_mantenimiento` int(11) NOT NULL DEFAULT 0,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `mantenimiento`
--

INSERT INTO `mantenimiento` (`id`, `codigo_mantenimiento`, `codigo_sucursal`, `placa_vehiculo`, `fecha_recepcion`, `fecha_finalizacion`, `fecha_entrega`, `kilometraje_recibido`, `kilometraje_entrega`, `descripcion_problema`, `inventario_vehiculo`, `autorizacion_repuestos`, `costo_total`, `estado_mantenimiento`, `estado`) VALUES
(1, 'M1', 'SATE', '4426SSL', '03/11/2023', '', '', '1000000', '', 'Fallas en el freno', 'Extintor', 'Si', 0, 0, 1),
(2, 'M2', 'SENK', '3270CCH', '21/06/2024', '', '', '450033', '', 'Fallas en el arranque del motor', 'juego de llaves', 'SI', 0, 0, 1),
(3, 'M3', 'RSEC', '1348OJP', '21/06/2023', '', '', '98765', '', 'No funciona la radio', 'Botiquin', 'SI', 0, 0, 1),
(4, 'M4', 'SENK', '3740ZSJ', '23/06/2024', '', '', '564654', '', 'No funciona el aire acondicionado', 'Tornillos', 'No', 0, 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `repuesto`
--

CREATE TABLE `repuesto` (
  `id` int(11) NOT NULL,
  `codigo_repuesto` varchar(10) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `costo_compra` int(11) NOT NULL,
  `precio_venta` int(11) NOT NULL,
  `codigo_categoria` varchar(10) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `repuesto`
--

INSERT INTO `repuesto` (`id`, `codigo_repuesto`, `nombre`, `descripcion`, `costo_compra`, `precio_venta`, `codigo_categoria`, `cantidad`, `estado`) VALUES
(1, 'R1', 'Radio', 'Radio con AM y FM', 125, 150, 'C1', 100, 1),
(2, 'R2', 'Tanque Combustible', 'Tanque de combustible con 50lt. de capacidad', 342, 425, 'C2', 7, 1),
(3, 'R3', 'Tablero Principal', 'Tablero principal que contiene informacion de velocimetro y cantidad de combustible', 89, 104, 'C3', 6, 1),
(4, 'R4', 'Palanca de Cambios', 'Palanca de cambios manual de 5 velocidades y retroceder', 231, 250, 'C4', 3, 1),
(5, 'R5', 'Volante 15p', 'Volante de 15pulgadas de radio', 190, 210, 'C5', 4, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `id` int(11) NOT NULL,
  `codigo_servicio` varchar(10) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `tiempo_rapido` int(11) NOT NULL,
  `tiempo_lento` int(11) NOT NULL,
  `tiempo_promedio` int(11) NOT NULL,
  `costo_referencial` int(11) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`id`, `codigo_servicio`, `nombre`, `descripcion`, `tiempo_rapido`, `tiempo_lento`, `tiempo_promedio`, `costo_referencial`, `estado`) VALUES
(1, 'W1', 'Diagnostico General', 'Diagnostico General de todas las funciones del vehiculo para identificar los problemas.', 1, 3, 2, 30, 1),
(2, 'W2', 'Mantenimiento Electrico', 'Mantenimiento de todas las funciones elecricas.', 2, 4, 3, 150, 1),
(3, 'W3', 'Instalacion de Radio', 'Instalacion de Radio dentro del vehiculo', 1, 2, 1, 50, 1),
(4, 'W4', 'Instalacion de Memoria', 'Instalacion (cableado) de memoria en el vehiculo', 3, 5, 4, 760, 1),
(5, 'W5', 'Reparacion de Memoria', 'Reparacion ymantenimiento de memoria', 9, 7, 8, 200, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursal`
--

CREATE TABLE `sucursal` (
  `id` int(11) NOT NULL,
  `codigo_sucursal` varchar(10) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `direccion` varchar(300) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `sucursal`
--

INSERT INTO `sucursal` (`id`, `codigo_sucursal`, `nombre`, `direccion`, `estado`) VALUES
(2, 'RSEC', 'Rio Seco', 'El Alto, Zona Rio Seco, Av. Juan Pablo II, #3032', 1),
(1, 'SATE', 'Satelite', 'El Alto, Zona Satelite, Av. Bolivia,#1004', 1),
(3, 'SENK', 'Senkata', 'El Alto, Av. 6 de Marzo,#1765', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `clave` varchar(100) NOT NULL,
  `id_caja` int(11) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `nombre`, `clave`, `id_caja`, `estado`) VALUES
(1, 'admin', 'Administrador', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', 1, 1),
(2, 'franco', 'GUSTAVO FRANCO RUIZ NINA', '93722a04fa35a4daf711970c7bc4ad6a66eb690236929f5449e3323db268d610', 1, 1),
(3, 'lisa', 'LIZEYDA CLARA RUIZ NINA', '79fcbd1680c2984b946c582512a1cd9376ff1ca49a80e4807eb7959c430acac9', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

CREATE TABLE `vehiculo` (
  `id` int(11) NOT NULL,
  `placa_vehiculo` varchar(10) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `marca` varchar(100) NOT NULL,
  `modelo` int(11) NOT NULL,
  `motor` varchar(100) NOT NULL,
  `chasis` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  `ci_cliente` int(11) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `vehiculo`
--

INSERT INTO `vehiculo` (`id`, `placa_vehiculo`, `tipo`, `marca`, `modelo`, `motor`, `chasis`, `color`, `ci_cliente`, `estado`) VALUES
(9, '1348OJP', 'Camion ligero', 'LEXUS', 2000, 'B58', '84LHMLD3E901A0I09', 'Naranja', 10596910, 1),
(4, '1835TZI', 'Minivan', 'SUBARU', 2006, 'LS3', '9EQ61KOWW02296N54', 'Plateado', 14731503, 1),
(2, '2271YXX', 'Furgoneta', 'VOLKSWAGEN', 2019, '2JZ-GTE', '78VF88X62B1661W16', 'Negro', 17072350, 1),
(5, '3270CCH', 'Taxi', 'FIAT', 2020, 'N55', 'GB7CTPYU77Y7M35D3', 'Azul', 17643828, 1),
(6, '3740ZSJ', 'Convertible', 'HONDA', 2010, 'K20', 'P6P4CP5543I22L719', 'Rojo', 18067392, 1),
(1, '4309EIA', 'Vagoneta', 'TOYOTA', 2019, '4B11T', 'ML08I03U4166BNF11', 'Blanco', 17027704, 1),
(7, '4426SSL', 'Minibus', 'BMW', 2006, 'VK56DE', 'R90ADL79F1DZ40K23', 'Verde', 11398683, 1),
(3, '4510HBL', 'Camioneta', 'NISSAN', 2017, 'EJ25', 'ZII28YV68ZZ867112', 'Gris', 11424750, 1),
(8, '4600IIU', 'Camion pesado', 'HYUNDAI', 2010, 'F20C', 'D248DDZN7L8V0YPX5', 'Amarillo', 18860176, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`codigo_area`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `caja`
--
ALTER TABLE `caja`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`ci_cliente`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `detallerepuesto`
--
ALTER TABLE `detallerepuesto`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `detalleservicio`
--
ALTER TABLE `detalleservicio`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`codigo_empleado`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `mantenimiento`
--
ALTER TABLE `mantenimiento`
  ADD PRIMARY KEY (`codigo_mantenimiento`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `repuesto`
--
ALTER TABLE `repuesto`
  ADD PRIMARY KEY (`codigo_repuesto`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`codigo_servicio`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  ADD PRIMARY KEY (`codigo_sucursal`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_caja` (`id_caja`);

--
-- Indices de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD PRIMARY KEY (`placa_vehiculo`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `area`
--
ALTER TABLE `area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `caja`
--
ALTER TABLE `caja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `detallerepuesto`
--
ALTER TABLE `detallerepuesto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `detalleservicio`
--
ALTER TABLE `detalleservicio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `mantenimiento`
--
ALTER TABLE `mantenimiento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `repuesto`
--
ALTER TABLE `repuesto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_caja`) REFERENCES `caja` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
