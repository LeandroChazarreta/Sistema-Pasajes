drop database if exists reservapasajes;
create database reservapasajes;
use reservapasajes;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `reservapasajes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `dni` int(11) DEFAULT NULL,
  `claveAmind` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `centro_medico`
--

CREATE TABLE `centro_medico` (
  `id_centroMedico` int(11) NOT NULL,
  `nombre` varchar(60) DEFAULT NULL,
  `capacidad_turnos` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `centro_medico`
--

INSERT INTO `centro_medico` (`id_centroMedico`, `nombre`, `capacidad_turnos`) VALUES
(1, 'Buenos Aires', 300),
(2, 'Shanghai', 210),
(3, 'Ankara', 200);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chequeo`
--

CREATE TABLE `chequeo` (
  `id_chequeo` int(11) NOT NULL,
  `nivel_vuelo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `chequeo`
--

INSERT INTO `chequeo` (`id_chequeo`, `nivel_vuelo`) VALUES
(1, 1),
(2, 2),
(3, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `dni` int(11) DEFAULT NULL,
  `usuario` varchar(60) DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `destino`
--

CREATE TABLE `destino` (
  `id_destino` int(11) NOT NULL,
  `nombre_destino` varchar(40) DEFAULT NULL,
  `nombre_hotel` varchar(40) DEFAULT NULL,
  `costo_hotel` decimal(9,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `destino`
--

INSERT INTO `destino` (`id_destino`, `nombre_destino`, `nombre_hotel`, `costo_hotel`) VALUES
(1, 'Luna', 'Luna Hotel', '2000.00'),
(2, 'Marte', 'Marte Hotel', '2300.00'),
(3, 'EEI', 'EEI Hotel', '1500.00'),
(4, 'Orbital Hotel', 'Orbital Hotel', '4900.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE `equipo` (
  `id_equipo` int(11) NOT NULL,
  `modelo` varchar(40) DEFAULT NULL,
  `matricula` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `origen`
--

CREATE TABLE `origen` (
  `id_origen` int(11) NOT NULL,
  `nombre_origen` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `origen`
--

INSERT INTO `origen` (`id_origen`, `nombre_origen`) VALUES
(1, 'Buenos Aires'),
(2, 'Ankara'),
(3, 'EEI'),
(4, 'Orbital Hotel'),
(5, 'Luna');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago`
--

CREATE TABLE `pago` (
  `id_pago` int(11) NOT NULL,
  `monto_pagado` decimal(10,2) DEFAULT NULL,
  `id_reserva` int(11) DEFAULT NULL,
  `dni` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `dni` int(11) NOT NULL,
  `nombre` varchar(40) DEFAULT NULL,
  `apellido` varchar(40) DEFAULT NULL,
  `direccion` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE `reserva` (
  `id_reserva` int(11) NOT NULL,
  `fecha_reserva` date DEFAULT NULL,
  `dni` int(11) DEFAULT NULL,
  `id_vuelo` int(11) DEFAULT NULL,
  `servicio` varchar(30) DEFAULT NULL,
  `cabina` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_de_cabina`
--

CREATE TABLE `tipo_de_cabina` (
  `tipo_de_cabina` varchar(10) NOT NULL,
  `id_equipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_de_servicio`
--

CREATE TABLE `tipo_de_servicio` (
  `tipo_de_servicio` varchar(10) NOT NULL,
  `id_vuelo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_de_vuelo`
--

CREATE TABLE `tipo_de_vuelo` (
  `tipo_de_vuelo` varchar(10) NOT NULL,
  `id_vuelo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turno`
--

CREATE TABLE `turno` (
  `id_turno` int(11) NOT NULL,
  `fechaturno` date DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `id_centroMedico` int(11) DEFAULT NULL,
  `resultado_chequeo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `calle` varchar(45) NOT NULL,
  `nro` int(8) NOT NULL,
  `provincia` varchar(30) NOT NULL,
  `localidad` varchar(30) NOT NULL,
  `password` varchar(80) NOT NULL,
  `nom_usuario` varchar(25) NOT NULL,
  `mail` varchar(24) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellido`, `calle`, `nro`, `provincia`, `localidad`, `password`, `nom_usuario`, `mail`, `admin`) VALUES
(1, 'Luis', 'Herrera', 'Alsina', 155, 'Buenos Aires', '\r\n					Ramos MejÃ­a', '85376a05516ccfbdda6e0968f8ad2a93', 'herreraluis.93', 'herreraluis.93@hotmail.c', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vuelo`
--

CREATE TABLE `vuelo` (
  `id_vuelo` int(11) NOT NULL,
  `duracion` varchar(20) DEFAULT NULL,
  `fecha_viaje` date DEFAULT NULL,
  `costo_vuelo` decimal(10,0) DEFAULT NULL,
  `descripcion` varchar(40) DEFAULT NULL,
  `id_destino` int(11) DEFAULT NULL,
  `id_origen` int(11) DEFAULT NULL,
  `tipo_vuelo` varchar(30) DEFAULT NULL,
  `imagen` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `vuelo`
--

INSERT INTO `vuelo` (`id_vuelo`, `duracion`, `fecha_viaje`, `costo_vuelo`, `descripcion`, `id_destino`, `id_origen`, `tipo_vuelo`, `imagen`) VALUES
(0, '4 hs', '2019-12-14', '3400', 'Entre Destino', 3, 1, 'entre-destino', 'img-entre1.jpg'),
(1, '10 Dias', '2019-10-31', '5000', 'Vuelo entre destinos', 1, 1, 'entre-destino', 'img-entre.jpg'),
(2, '35', '2019-11-27', '27000', NULL, NULL, 1, 'tour', 'img-tour.jpg');
(1, '10 Dias', '2019-11-30', '5000', 'Vuelo entre destinos', 1, 1, 'entre-destino', 'img-entre.jpg'),


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vuelo_equipo`
--

CREATE TABLE `vuelo_equipo` (
  `id_equipo` int(11) NOT NULL,
  `id_vuelo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD KEY `dni` (`dni`);

--
-- Indices de la tabla `centro_medico`
--
ALTER TABLE `centro_medico`
  ADD PRIMARY KEY (`id_centroMedico`);

--
-- Indices de la tabla `chequeo`
--
ALTER TABLE `chequeo`
  ADD PRIMARY KEY (`id_chequeo`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD KEY `dni` (`dni`);

--
-- Indices de la tabla `destino`
--
ALTER TABLE `destino`
  ADD PRIMARY KEY (`id_destino`);

--
-- Indices de la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD PRIMARY KEY (`id_equipo`);

--
-- Indices de la tabla `origen`
--
ALTER TABLE `origen`
  ADD PRIMARY KEY (`id_origen`);

--
-- Indices de la tabla `pago`
--
ALTER TABLE `pago`
  ADD PRIMARY KEY (`id_pago`),
  ADD KEY `dni` (`dni`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`dni`);

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`id_reserva`),
  ADD KEY `dni` (`dni`),
  ADD KEY `id_vuelo` (`id_vuelo`);

--
-- Indices de la tabla `tipo_de_cabina`
--
ALTER TABLE `tipo_de_cabina`
  ADD PRIMARY KEY (`tipo_de_cabina`,`id_equipo`),
  ADD KEY `id_equipo` (`id_equipo`);

--
-- Indices de la tabla `tipo_de_servicio`
--
ALTER TABLE `tipo_de_servicio`
  ADD PRIMARY KEY (`tipo_de_servicio`,`id_vuelo`),
  ADD KEY `id_vuelo` (`id_vuelo`);

--
-- Indices de la tabla `tipo_de_vuelo`
--
ALTER TABLE `tipo_de_vuelo`
  ADD PRIMARY KEY (`tipo_de_vuelo`,`id_vuelo`),
  ADD KEY `id_vuelo` (`id_vuelo`);

--
-- Indices de la tabla `turno`
--
ALTER TABLE `turno`
  ADD PRIMARY KEY (`id_turno`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_centroMedico` (`id_centroMedico`),
  ADD KEY `resultado_chequeo` (`resultado_chequeo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `vuelo`
--
ALTER TABLE `vuelo`
  ADD PRIMARY KEY (`id_vuelo`),
  ADD KEY `id_destino` (`id_destino`),
  ADD KEY `id_origen` (`id_origen`);

--
-- Indices de la tabla `vuelo_equipo`
--
ALTER TABLE `vuelo_equipo`
  ADD PRIMARY KEY (`id_equipo`,`id_vuelo`),
  ADD KEY `id_vuelo` (`id_vuelo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `centro_medico`
--
ALTER TABLE `centro_medico`
  MODIFY `id_centroMedico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `chequeo`
--
ALTER TABLE `chequeo`
  MODIFY `id_chequeo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `reserva`
--
ALTER TABLE `reserva`
  MODIFY `id_reserva` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `turno`
--
ALTER TABLE `turno`
  MODIFY `id_turno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD CONSTRAINT `administrador_ibfk_1` FOREIGN KEY (`dni`) REFERENCES `persona` (`dni`);

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`dni`) REFERENCES `persona` (`dni`);

--
-- Filtros para la tabla `pago`
--
ALTER TABLE `pago`
  ADD CONSTRAINT `pago_ibfk_1` FOREIGN KEY (`dni`) REFERENCES `cliente` (`dni`);

--
-- Filtros para la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `reserva_ibfk_1` FOREIGN KEY (`dni`) REFERENCES `cliente` (`dni`),
  ADD CONSTRAINT `reserva_ibfk_2` FOREIGN KEY (`id_vuelo`) REFERENCES `vuelo` (`id_vuelo`);

--
-- Filtros para la tabla `tipo_de_cabina`
--
ALTER TABLE `tipo_de_cabina`
  ADD CONSTRAINT `tipo_de_cabina_ibfk_1` FOREIGN KEY (`id_equipo`) REFERENCES `equipo` (`id_equipo`);

--
-- Filtros para la tabla `tipo_de_servicio`
--
ALTER TABLE `tipo_de_servicio`
  ADD CONSTRAINT `tipo_de_servicio_ibfk_1` FOREIGN KEY (`id_vuelo`) REFERENCES `vuelo` (`id_vuelo`);

--
-- Filtros para la tabla `tipo_de_vuelo`
--
ALTER TABLE `tipo_de_vuelo`
  ADD CONSTRAINT `tipo_de_vuelo_ibfk_1` FOREIGN KEY (`id_vuelo`) REFERENCES `vuelo` (`id_vuelo`);

--
-- Filtros para la tabla `turno`
--
ALTER TABLE `turno`
  ADD CONSTRAINT `turno_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `turno_ibfk_2` FOREIGN KEY (`id_centroMedico`) REFERENCES `centro_medico` (`id_centroMedico`),
  ADD CONSTRAINT `turno_ibfk_3` FOREIGN KEY (`resultado_chequeo`) REFERENCES `chequeo` (`id_chequeo`);

--
-- Filtros para la tabla `vuelo`
--
ALTER TABLE `vuelo`
  ADD CONSTRAINT `vuelo_ibfk_1` FOREIGN KEY (`id_destino`) REFERENCES `destino` (`id_destino`),
  ADD CONSTRAINT `vuelo_ibfk_2` FOREIGN KEY (`id_origen`) REFERENCES `origen` (`id_origen`);

--
-- Filtros para la tabla `vuelo_equipo`
--
ALTER TABLE `vuelo_equipo`
  ADD CONSTRAINT `vuelo_equipo_ibfk_1` FOREIGN KEY (`id_vuelo`) REFERENCES `vuelo` (`id_vuelo`),
  ADD CONSTRAINT `vuelo_equipo_ibfk_2` FOREIGN KEY (`id_equipo`) REFERENCES `equipo` (`id_equipo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
