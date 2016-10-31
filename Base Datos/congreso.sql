-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-10-2016 a las 22:01:00
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `congreso`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informacion`
--

CREATE TABLE IF NOT EXISTS `informacion` (
  `id_iniciativa` int(11) NOT NULL,
  `fondo` varchar(20) NOT NULL,
  `sub_fondo` varchar(20) NOT NULL,
  `seccion` varchar(30) NOT NULL,
  `lugar` varchar(20) NOT NULL,
  `comicion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `informacion`
--

INSERT INTO `informacion` (`id_iniciativa`, `fondo`, `sub_fondo`, `seccion`, `lugar`, `comicion`) VALUES
(63188, 'Poder Legislativo', 'Congreso del Estado', 'Sesiones Pleno y Permanente', 'Guanajuato', 'Hacienda y Fiscalización'),
(63187, 'Poder Legislativo', 'Congreso del Estado', 'Sesiones Pleno y Permanente', 'Guanajuato', 'Gobernación y Puntos Co'),
(62186, 'Poder Legislativo', 'Congreso del Estado', 'Sesiones Pleno y Permanente', 'Guanajuato', 'Salud Pública'),
(63186, 'Poder Legislativo', 'Congreso del Estado', 'Sesiones Pleno y Permanente', 'Guanajuato', 'Desarrollo Urbano y Obra P'),
(63185, 'Poder Legislativo', 'Congreso del Estado', 'Sesiones Pleno y Permanente', 'Guanajuato', 'Unidas de Hacienda y Fiscaliza');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `iniciativas`
--

CREATE TABLE IF NOT EXISTS `iniciativas` (
  `id_iniciativa` int(11) NOT NULL,
  `descripcion` varchar(600) NOT NULL,
  `fecha` date NOT NULL,
  `estado` varchar(10) NOT NULL,
  `dictamen` varchar(100) NOT NULL,
  `votos_favor` int(11) DEFAULT NULL,
  `votos_contra` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `iniciativas`
--

INSERT INTO `iniciativas` (`id_iniciativa`, `descripcion`, `fecha`, `estado`, `dictamen`, `votos_favor`, `votos_contra`) VALUES
(62186, 'Iniciativa de Ley para la Atención Integral del Cáncer de Mama en el Estado de Guanajuato, suscrita por el diputado y las diputadas integrantes del Grupo Parlamentario del Partido de la Revolución Democrática de esta Sexagésima Segunda Legislatura. SE ARCHIVA', '2016-10-24', 'Concluido', 'Dictamen emitido por la Comisión de Salud Pública', NULL, NULL),
(63185, 'Iniciativa formulada por diputadas y diputados integrantes del Grupo Parlamentario del Partido Acción Nacional, a efecto de reformar la Ley de Alcoholes para el Estado de Guanajuato, a fin de regular la producción, distribución y venta de cerveza artesanal.', '2016-10-20', 'Tramite', 'Aún no Dictaminada', NULL, NULL),
(63186, 'Iniciativa suscrita por diputadas y diputados integrantes del Grupo Parlamentario del Partido Acción Nacional, mediante la cual se reforman la fracción VII del artículo 23, el primer párrafo del artículo 56, se adiciona una fracción IV al artículo 56, un artículo 57 bis, una sección octava, los artículos 89 Bis y 89 Ter, y se reforma el último párrafo del artículo 64 de la Ley Agraria, que tiene como objeto construir un respaldo normativo que permita garantizar certeza jurídica en las escuelas que se ubican en la zona rural, principalmente en tierras ejidales.', '2016-10-20', 'Tramite', 'Aún no Dictaminada', NULL, NULL),
(63187, 'Iniciativa formulada por las diputadas y los diputados integrantes del Grupo Parlamentario del Partido Revolucionario Institucional, a efecto de reformar la Constitución Política para el Estado de Guanajuato y de reforma y adiciones a la Ley para la Protección de los Derechos Humanos en el Estado de Guanajuato, en materia de designación del titular del organismo estatal de protección de los derechos humanos.', '2016-10-27', 'Tramite', 'Aún no Dictaminada', NULL, NULL),
(63188, 'Iniciativa formulada por el ayuntamiento de Yuriria, Gto., a efecto de que se le autorice para que, en garantía del cumplimiento de las obligaciones a su cargo por concepto de derechos y aprovechamientos de agua y derechos por descargas de aguas residuales, afecte los ingresos que le corresponden a dicho Municipio del Fondo de Aportaciones para el Fortalecimiento de los Municipios y de las Demarcaciones Territoriales del Distrito Federal.', '2016-10-27', 'Tramite', 'Aún no Dictaminada', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id_usuario` smallint(6) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` smallint(6) NOT NULL,
  `nombre_completo` varchar(50) NOT NULL,
  `domicilio` varchar(50) NOT NULL,
  `curp` varchar(18) NOT NULL,
  `edad` smallint(3) NOT NULL,
  `sexo` varchar(6) NOT NULL,
  `escolaridad` varchar(20) NOT NULL,
  `ocupacion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `iniciativas`
--
ALTER TABLE `iniciativas`
 ADD PRIMARY KEY (`id_iniciativa`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`id_usuario`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
