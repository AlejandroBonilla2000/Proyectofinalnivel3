-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-11-2023 a las 15:51:57
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `university_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id` int(11) NOT NULL,
  `DNI` int(11) DEFAULT NULL,
  `Nombre` varchar(255) DEFAULT NULL,
  `Correo` varchar(255) DEFAULT NULL,
  `Direccion` varchar(255) DEFAULT NULL,
  `FechaNacimiento` date DEFAULT NULL,
  `MaestroID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `DNI`, `Nombre`, `Correo`, `Direccion`, `FechaNacimiento`, `MaestroID`) VALUES
(12, 12345678, 'Ana', 'alumno1@example.com', 'Dirección Alumno 1', '2000-05-10', 1),
(13, 23456789, 'Valentina', 'alumno2@example.com', 'Dirección Alumno 2', '2001-08-25', 1),
(14, 34567890, 'Mateo', 'alumno3@example.com', 'Dirección Alumno 3', '1999-11-30', 1),
(15, 45678901, 'Isabella', 'alumno4@example.com', 'Dirección Alumno 4', '2002-02-14', 1),
(16, 56789012, 'Sebastián', 'alumno5@example.com', 'Dirección Alumno 5', '2003-04-18', 1),
(17, 67890123, 'Sofía', 'alumno6@example.com', 'Dirección Alumno 6', '2004-06-22', 2),
(18, 78901234, 'Leonardo', 'alumno7@example.com', 'Dirección Alumno 7', '2005-09-10', 2),
(19, 89012345, 'Carlos', 'alumno8@example.com', 'Dirección Alumno 8', '2006-12-05', 2),
(20, 90123456, 'Emiliano', 'alumno9@example.com', 'Dirección Alumno 9', '2007-02-28', 2),
(21, 12345098, 'Regina', 'alumno10@example.com', 'Dirección Alumno 10', '2008-05-14', 2),
(22, 23450123, 'Matías', 'alumno11@example.com', 'Dirección Alumno 11', '2009-08-01', 3),
(23, 34561234, 'María José', 'alumno12@example.com', 'Dirección Alumno 12', '2010-11-20', 3),
(24, 45672345, 'Benjamín', 'alumno13@example.com', 'Dirección Alumno 13', '2011-03-07', 3),
(25, 56783456, 'Luciana', 'alumno14@example.com', 'Dirección Alumno 14', '2012-06-15', 3),
(26, 67894567, 'Samuel', 'alumno15@example.com', 'Dirección Alumno 15', '2013-09-30', 3),
(27, 78905678, 'Camila', 'alumno16@example.com', 'Dirección Alumno 16', '2014-01-12', 4),
(28, 89016789, 'Emiliana', 'alumno17@example.com', 'Dirección Alumno 17', '2015-04-28', 4),
(29, 90127890, 'Tomás', 'alumno18@example.com', 'Dirección Alumno 18', '2016-07-10', 4),
(30, 12338901, 'Renata', 'alumno19@example.com', 'Dirección Alumno 19', '2017-10-25', 4),
(31, 23449012, 'Daniel', 'alumno20@example.com', 'Dirección Alumno 20', '2018-12-31', 4),
(32, 34550123, 'Victoria', 'alumno21@example.com', 'Dirección Alumno 21', '2019-03-15', 5),
(33, 45661234, 'Alejandro', 'alumno22@example.com', 'Dirección Alumno 22', '2020-06-02', 5),
(34, 56772345, 'Renzo', 'alumno23@example.com', 'Dirección Alumno 23', '2021-09-18', 5),
(35, 67883456, 'Antonella', 'alumno24@example.com', 'Dirección Alumno 24', '2022-12-05', 5),
(36, 78994567, 'Adrián', 'alumno25@example.com', 'Dirección Alumno 25', '2023-02-20', 5),
(37, 89005678, 'Celeste', 'alumno31@example.com', 'Dirección Alumno 31', '2029-06-22', 6),
(38, 90116789, 'Nicolás', 'alumno32@example.com', 'Dirección Alumno 32', '2030-09-10', 6),
(39, 12327890, 'Miranda', 'alumno33@example.com', 'Dirección Alumno 33', '2031-12-05', 6),
(40, 23438901, 'Martín', 'alumno34@example.com', 'Dirección Alumno 34', '2032-02-28', 6),
(41, 34549012, 'Antonia', 'alumno35@example.com', 'Dirección Alumno 35', '2033-05-14', 6),
(42, 45650123, 'Thiago', 'alumno36@example.com', 'Dirección Alumno 36', '2034-08-01', 7),
(43, 56761234, 'Agustina', 'alumno37@example.com', 'Dirección Alumno 37', '2035-11-20', 7),
(44, 67872345, 'Gabriel', 'alumno38@example.com', 'Dirección Alumno 38', '2036-03-07', 7),
(45, 78983456, 'Isidora', 'alumno39@example.com', 'Dirección Alumno 39', '2037-06-15', 7),
(46, 89094567, 'Juan Pablo', 'alumno40@example.com', 'Dirección Alumno 40', '2038-09-30', 7),
(47, 90105678, 'Martina', 'alumno41@example.com', 'Dirección Alumno 41', '2039-01-12', 8),
(48, 12316789, 'Ángel', 'alumno42@example.com', 'Dirección Alumno 42', '2040-04-28', 8),
(49, 23427890, 'Fernanda', 'alumno43@example.com', 'Dirección Alumno 43', '2041-07-10', 8),
(50, 34538901, 'Lucas', 'alumno44@example.com', 'Dirección Alumno 44', '2042-10-25', 8),
(51, 45649012, 'Maite', 'alumno45@example.com', 'Dirección Alumno 45', '2043-12-31', 8),
(52, 56750123, 'David', 'alumno46@example.com', 'Dirección Alumno 46', '2044-03-15', 9),
(53, 67861234, 'Javiera', 'alumno47@example.com', 'Dirección Alumno 47', '2045-06-02', 9),
(54, 78972345, 'Franco', 'alumno48@example.com', 'Dirección Alumno 48', '2046-09-18', 9),
(55, 89083456, 'Josefa', 'alumno49@example.com', 'Dirección Alumno 49', '2047-12-05', 9),
(56, 90194567, 'Álvaro', 'alumno50@example.com', 'Dirección Alumno 50', '2048-02-20', 9),
(57, 12350123, 'Trinidad', 'alumno51@example.com', 'Dirección Alumno 51', '2049-05-01', 10),
(58, 23461234, 'Facundo', 'alumno52@example.com', 'Dirección Alumno 52', '2050-08-18', 10),
(59, 34572345, 'Isabelle', 'alumno53@example.com', 'Dirección Alumno 53', '2051-11-05', 10),
(60, 45683456, 'Damián', 'alumno54@example.com', 'Dirección Alumno 54', '2052-02-20', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clases`
--

CREATE TABLE `clases` (
  `id` int(11) NOT NULL,
  `NombreClase` varchar(255) DEFAULT NULL,
  `MaestroID` int(11) DEFAULT NULL,
  `AlumnosInscritos` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clases`
--

INSERT INTO `clases` (`id`, `NombreClase`, `MaestroID`, `AlumnosInscritos`) VALUES
(1, 'Matemáticas', 1, 25),
(2, 'Historia', 2, 20),
(3, 'Ciencias', 3, 22),
(4, 'Literatura', 4, 18),
(5, 'Inglés', 5, 30),
(6, 'Educación Física', 6, 25),
(7, 'Química', 7, 28),
(8, 'Biología', 8, 24),
(9, 'Arte', 9, 20),
(15, 'Informatica', 10, 30);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maestros`
--

CREATE TABLE `maestros` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Direccion` varchar(255) DEFAULT NULL,
  `FechaNacimiento` date DEFAULT NULL,
  `ClaseAsignada` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `maestros`
--

INSERT INTO `maestros` (`id`, `Nombre`, `Email`, `Direccion`, `FechaNacimiento`, `ClaseAsignada`) VALUES
(1, 'Ana García', 'ana.garcia@email.com', 'Calle 123, Ciudad', '1980-05-20', 'Matemáticas'),
(2, 'Carlos López', 'carlos.lopez@email.com', 'Avenida Principal, Pueblo', '1975-08-15', 'Historia'),
(3, 'Laura Rodríguez', 'laura.rodriguez@email.com', 'Carrera 45, Ciudadela', '1982-03-10', 'Ciencias'),
(4, 'Juan Martínez', 'juan.martinez@email.com', 'Calle Secundaria, Villa', '1978-11-28', 'Literatura'),
(5, 'Sofía Sánchez', 'sofia.sanchez@email.com', 'Carrera 78, Ciudad', '1985-07-03', 'Inglés'),
(6, 'Diego Torres', 'diego.torres@email.com', 'Avenida del Sol, Ciudadela', '1987-01-19', 'Educación Física'),
(7, 'Isabel Ramírez', 'isabel.ramirez@email.com', 'Callejón 12, Villa', '1983-09-05', 'Química'),
(8, 'Pedro Gómez', 'pedro.gomez@email.com', 'Avenida Central, Pueblo', '1986-06-14', 'Biología'),
(9, 'María Herrera', 'maria.herrera@email.com', 'Calle Principal, Pueblo', '1976-04-07', 'Arte'),
(10, 'Juan Perez', 'juan.perez@email.com', '12312', '1980-05-05', 'Informatica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `correo` varchar(255) DEFAULT NULL,
  `contrasena` varchar(255) DEFAULT NULL,
  `rol` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `correo`, `contrasena`, `rol`) VALUES
(1, 'Administrador', 'admin@admin', '$2y$10$79uFtQjnjYNt81rfmJghCu1NvY8HzFRuOlzQTTDrpr8k.oIcFBcxa', 'admin'),
(2, 'Maestro', 'maestro@maestro', '$2y$10$3zzmjqVLempKd7T8ihGpkOE07mgdisaIt2lurlMdrfgekwSwHb4a2', 'maestro'),
(3, 'Alumno', 'alumno@alumno', '$2y$10$2M1EubJjdxSroknRmXldm.OOk8DgoaBUjJvl6DraAdMKKeCsGKhI6', 'alumno');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `MaestroID` (`MaestroID`);

--
-- Indices de la tabla `clases`
--
ALTER TABLE `clases`
  ADD PRIMARY KEY (`id`),
  ADD KEY `MaestroID` (`MaestroID`);

--
-- Indices de la tabla `maestros`
--
ALTER TABLE `maestros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT de la tabla `clases`
--
ALTER TABLE `clases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `maestros`
--
ALTER TABLE `maestros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD CONSTRAINT `alumnos_ibfk_1` FOREIGN KEY (`MaestroID`) REFERENCES `maestros` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `clases`
--
ALTER TABLE `clases`
  ADD CONSTRAINT `clases_ibfk_1` FOREIGN KEY (`MaestroID`) REFERENCES `maestros` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
