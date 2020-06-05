-- phpMyAdmin SQL Dump
-- version 2.9.2
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 30-05-2012 a las 20:05:10
-- Versión del servidor: 5.0.27
-- Versión de PHP: 5.2.1
-- 
-- Base de datos: `biblioteca`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `alumnos`
-- 

CREATE TABLE `alumnos` (
  `carnet` varchar(10) NOT NULL default '',
  `password` varchar(15) NOT NULL default '',
  `password2` varchar(15) NOT NULL default '',
  `nombreAlumno` varchar(50) NOT NULL default '',
  `telefonoAlumno` varchar(8) NOT NULL default '',
  `emailAlumno` varchar(25) NOT NULL default '',
  `direccionAlumno` text NOT NULL,
  PRIMARY KEY  (`carnet`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Volcar la base de datos para la tabla `alumnos`
-- 

INSERT INTO `alumnos` VALUES ('2523942001', '54321', '54321', 'Carlos Daniel Estrada', '78339330', 'cestrada@hotmail.com', 'Distrito Italia');
INSERT INTO `alumnos` VALUES ('2523782007', 'stan', 'stan', 'Walter Stanley Santacruz', '78171059', 'walter_07_8@hotmail.com', 'Col. Escalon');
INSERT INTO `alumnos` VALUES ('1736282005', 'entrar', 'entrar', 'Marco Antonio Solis', '73838392', 'user@hotmail.com', 'Soyapango');
INSERT INTO `alumnos` VALUES ('2539022007', 'miguel', 'miguel', 'Miguel Tomasino', '79448333', 'tomy@hotmail.es', 'Col. Ivu');
INSERT INTO `alumnos` VALUES ('2512122007', '12345', '12345', 'Stefany Castillo', '72283393', 'stey7_xenia@hotmail.com', 'Col. Cima 2');
INSERT INTO `alumnos` VALUES ('2548952007', 'love1989', 'love1989', 'Karla Molina', '78362879', 'karlanaturalgirl@hotmail.', 'Altavista');
INSERT INTO `alumnos` VALUES ('1720932007', 'rebe', 'rebe', 'Rebeca Torres', '77338838', 'rebek_03@hotmail.com', 'Col. Dina');
INSERT INTO `alumnos` VALUES ('2510022001', '0002', '0002', 'Angela Daniela Flores', '73933982', 'ccflores@hotmail.com', 'Col. Jardines del Sell Sutt');
INSERT INTO `alumnos` VALUES ('2548742006', '1234', '1234', 'Yancy Garay', '27363783', 'yancybegave@hotmail.com', 'San Salvador');
INSERT INTO `alumnos` VALUES ('2534972007', '1234', '1234', 'Ralex Remun', '55555555', 'rarm.88@gmail.com', 'utec');
INSERT INTO `alumnos` VALUES ('2538942005', '1234', '1234', 'Julio Molina', '22222222', 'juliom@hotmail,com', 'san salvador');
INSERT INTO `alumnos` VALUES ('2233212008', 'asdf', 'asdf', 'Karla Mena', '22453678', 'kmena@hotmail,com', 'soyapango');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `bibliotecario`
-- 

CREATE TABLE `bibliotecario` (
  `id_empleado` int(11) NOT NULL auto_increment,
  `user` text NOT NULL,
  `password` varchar(15) NOT NULL default '',
  `password2` varchar(15) NOT NULL default '',
  `nombreEmpleado` varchar(50) NOT NULL default '',
  `telefonoEmpleado` varchar(8) NOT NULL default '',
  `emailEmpleado` varchar(20) NOT NULL default '',
  `direccionEmpleado` text NOT NULL,
  PRIMARY KEY  (`id_empleado`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

-- 
-- Volcar la base de datos para la tabla `bibliotecario`
-- 

INSERT INTO `bibliotecario` VALUES (26, 'cestrada', 'jajaja', 'jajaja', 'Cesar Estrada', '22839949', 'estrada2@yahoo.com', 'Col. Matasano');
INSERT INTO `bibliotecario` VALUES (16, 'walt', '12345', '12345', 'Walter Humberto Vega', '77777777', 'walt@hotmail.com', 'san salvador');
INSERT INTO `bibliotecario` VALUES (24, 'jaquita', 'mena', 'mena', 'Jaqui Mena', '21312312', 'jaqui.mena@hotmail.c', 'utec');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `categoria`
-- 

CREATE TABLE `categoria` (
  `idCategoria` int(11) NOT NULL auto_increment,
  `nombreCategoria` varchar(50) NOT NULL default '',
  PRIMARY KEY  (`idCategoria`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

-- 
-- Volcar la base de datos para la tabla `categoria`
-- 

INSERT INTO `categoria` VALUES (1, 'Psicologia');
INSERT INTO `categoria` VALUES (2, 'Informatica');
INSERT INTO `categoria` VALUES (3, 'Matematicas');
INSERT INTO `categoria` VALUES (4, 'Arte');
INSERT INTO `categoria` VALUES (5, 'Filosofia');
INSERT INTO `categoria` VALUES (6, 'Lenguas');
INSERT INTO `categoria` VALUES (7, 'Religion');
INSERT INTO `categoria` VALUES (8, 'Sociales');
INSERT INTO `categoria` VALUES (9, 'Biografia');
INSERT INTO `categoria` VALUES (10, 'Economia');
INSERT INTO `categoria` VALUES (11, 'Historia');
INSERT INTO `categoria` VALUES (12, 'Humor');
INSERT INTO `categoria` VALUES (13, 'Politica');
INSERT INTO `categoria` VALUES (14, 'Musica');
INSERT INTO `categoria` VALUES (15, 'Anatomia');
INSERT INTO `categoria` VALUES (16, 'Varios');
INSERT INTO `categoria` VALUES (17, 'Mistica Y Esoterismo');
INSERT INTO `categoria` VALUES (18, 'Literatura');
INSERT INTO `categoria` VALUES (24, 'Poesia');
INSERT INTO `categoria` VALUES (23, 'Ingles');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `comprobante`
-- 

CREATE TABLE `comprobante` (
  `idComprobante` int(11) NOT NULL auto_increment,
  `carnet` varchar(10) NOT NULL,
  `nombreAlumno` varchar(50) NOT NULL,
  `idLibro` int(11) NOT NULL,
  `Titulo` varchar(50) NOT NULL,
  `Autor` varchar(20) NOT NULL,
  `Editorial` varchar(15) NOT NULL,
  `fechaPrestamoLibro` datetime NOT NULL,
  `fechaPL` date NOT NULL,
  PRIMARY KEY  (`idComprobante`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

-- 
-- Volcar la base de datos para la tabla `comprobante`
-- 

INSERT INTO `comprobante` VALUES (24, '2523782007', 'Walter Stanley Santacruz', 27, 'Escalas Musicales', 'Steve Wonder', 'Life Today', '2012-05-21 15:09:31', '2012-05-21');
INSERT INTO `comprobante` VALUES (23, '2523782007', 'Walter Stanley Santacruz', 1, 'Programacion WEB', 'Yo', 'Prentice Hall', '2012-05-28 15:09:31', '2012-05-28');
INSERT INTO `comprobante` VALUES (22, '2523782007', 'Walter Stanley Santacruz', 48, 'Matematicas avanzada', 'Kreyszig', 'Limusa', '2012-05-28 15:09:31', '2012-05-28');
INSERT INTO `comprobante` VALUES (28, '2534972007', 'Edwin Callejas', 3, 'Redes e Informatica', 'Carlos Torres', 'Prentice Hall', '2012-05-28 15:16:55', '2012-05-28');
INSERT INTO `comprobante` VALUES (29, '2534972007', 'Edwin Callejas', 48, 'Matematicas avanzada', 'Kreyszig', 'Limusa', '2012-05-28 15:16:55', '2012-05-28');
INSERT INTO `comprobante` VALUES (30, '1736282005', 'Marco Antonio Solis', 12, 'El Codigo del Campeo', 'Dante Gebel', 'Vida', '2012-05-29 13:36:54', '2012-05-29');
INSERT INTO `comprobante` VALUES (31, '1736282005', 'Marco Antonio Solis', 56, '600 Chistes Irresist', 'Jose Viera Campos', 'Vecchi', '2012-05-29 13:36:54', '2012-05-29');
INSERT INTO `comprobante` VALUES (32, '2512122007', 'Stefany Castillo', 62, 'El Mundo de la Music', 'Gago', 'Oceano', '2012-05-29 14:08:52', '2012-05-29');
INSERT INTO `comprobante` VALUES (33, '2512122007', 'Stefany Castillo', 41, 'MicroEconomia', 'Robert Pindyck', 'Prentice Hall', '2012-05-29 14:08:52', '2012-05-29');
INSERT INTO `comprobante` VALUES (34, '2548952007', 'Karla Molina', 7, 'Programacion en C++ para Ingenieros', 'Fatos Xhafa', '2006', '2012-05-29 17:24:22', '2012-05-29');
INSERT INTO `comprobante` VALUES (35, '2548952007', 'Karla Molina', 69, 'La politica vigilada', 'Antony Gutierres', 'Doc', '2012-05-29 17:24:22', '2012-05-29');
INSERT INTO `comprobante` VALUES (36, '2523782007', 'Walter Stanley Santacruz', 4, 'Programacion en Consola', 'Arturo Castro', 'Prentice Hall', '2012-05-29 19:19:19', '2012-05-29');
INSERT INTO `comprobante` VALUES (37, '2523942001', 'Carlos Daniel Estrada', 6, 'Hardware para Moviles', 'Joe Stalin', 'Vida', '2012-05-30 05:50:11', '2012-05-30');
INSERT INTO `comprobante` VALUES (38, '2539022007', 'Miguel Tomasino', 25, 'Si, Tu Puedes', 'Sam Deep', 'Sirio', '2012-05-30 05:50:53', '2012-05-30');
INSERT INTO `comprobante` VALUES (39, '2539022007', 'Miguel Tomasino', 29, 'Nacimiento Del Melodrama', 'Historia De La Music', 'Sacra', '2012-05-03 05:50:53', '2012-05-03');
INSERT INTO `comprobante` VALUES (40, '1720932007', 'Rebeca Torres', 20, 'Programación en Internet: clientes Web', 'Sergio Luján Mora', 'Club Universita', '2012-05-30 05:51:39', '2012-05-30');
INSERT INTO `comprobante` VALUES (41, '1720932007', 'Rebeca Torres', 24, 'La sangre de los elfos', 'Andrzej Sapkowski', 'Alamut', '2012-05-30 05:51:39', '2012-05-30');
INSERT INTO `comprobante` VALUES (42, '2510022001', 'Angela Daniela Flores', 58, 'Bife 2', 'Gustavo Sala', 'La Flor', '2012-05-15 05:52:24', '2012-05-15');
INSERT INTO `comprobante` VALUES (43, '2510022001', 'Angela Daniela Flores', 43, 'PHP Avanzado para Web Profesional', 'Christofer Consentin', 'Advance', '2012-05-30 06:27:58', '2012-05-30');
INSERT INTO `comprobante` VALUES (44, '2548742006', 'Yancy Garay', 48, 'Matematicas avanzadas para Ingenieria', 'Kreyszig', 'Limusa', '2012-05-30 16:09:24', '2012-05-30');
INSERT INTO `comprobante` VALUES (45, '2512122007', 'Stefany Castillo', 13, 'Psicologia Basica', 'Miguel Angel Ramos', 'Psico', '2012-05-30 17:06:16', '2012-05-30');
INSERT INTO `comprobante` VALUES (46, '2548742006', 'Yancy Garay', 23, 'Sistemas Operativos Modernos', 'Andrew S. Tanenbaum', 'Prentice Hall', '2012-05-30 17:33:34', '2012-05-30');
INSERT INTO `comprobante` VALUES (47, '2534972007', 'Ralex Remun', 23, 'Sistemas Operativos Modernos', 'Andrew S. Tanenbaum', 'Prentice Hall', '2012-05-30 17:39:52', '2012-05-30');
INSERT INTO `comprobante` VALUES (48, '2534972007', 'Ralex Remun', 52, 'Filosofia final', 'Ada Albrecht', 'Hastinapura', '2012-05-30 17:49:33', '2012-05-30');
INSERT INTO `comprobante` VALUES (49, '2548742006', 'Yancy Garay', 23, 'Sistemas Operativos Modernos', 'Andrew S. Tanenbaum', 'Prentice Hall', '2012-05-30 18:09:19', '2012-05-30');
INSERT INTO `comprobante` VALUES (50, '2538942005', 'Julio Molina', 48, 'Matematicas avanzadas para Ingenieria', 'Kreyszig', 'Limusa', '2012-05-30 18:34:03', '2012-05-30');
INSERT INTO `comprobante` VALUES (51, '2233212008', 'Karla Mena', 76, 'Literatura Infantil', '---', '---', '2012-05-30 18:38:10', '2012-05-30');
INSERT INTO `comprobante` VALUES (52, '2548742006', 'Yancy Garay', 46, 'Programacion en ASP.NET', 'ORelly', 'Hall', '2012-05-30 18:47:14', '2012-05-30');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `libros`
-- 

CREATE TABLE `libros` (
  `idLibro` int(11) NOT NULL auto_increment,
  `Titulo` varchar(100) NOT NULL default '',
  `Autor` varchar(50) NOT NULL default '',
  `Editorial` varchar(50) NOT NULL default '',
  `Paginas` int(11) NOT NULL default '0',
  `Stock` int(11) NOT NULL default '0',
  `Contenido` text NOT NULL,
  `idCategoria` int(11) NOT NULL default '0',
  PRIMARY KEY  (`idLibro`),
  KEY `relacionCL` (`idCategoria`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=81 ;

-- 
-- Volcar la base de datos para la tabla `libros`
-- 

INSERT INTO `libros` VALUES (1, 'Programacion WEB', 'Yo', 'Prentice Hall', 728, 6, 'Koky', 2);
INSERT INTO `libros` VALUES (2, 'Iniciando Programacion en C#', 'Yolanda Cerezo López', 'Delta', 304, 2, 'NNEETT En este capítulo se presentará la estructura básica de un programa escrito en el lenguaje de programación C# y se mostrará cuál es el procedimiento a seguir para su creación, compilación y depuración con la plataforma .NET.', 2);
INSERT INTO `libros` VALUES (3, 'Redes e Informatica', 'Carlos Torres', 'Prentice Hall', 453, 6, 'Redes e Informacion, Cableado, TCP IP, Subneteado.', 2);
INSERT INTO `libros` VALUES (4, 'Programacion en Consola', 'Arturo Castro', 'Prentice Hall', 728, 7, '', 2);
INSERT INTO `libros` VALUES (5, 'La Biblia del C#', 'Jeff Ferguson', 'Anaya', 806, 16, 'MEDIO AVANZADO CON 1 CDDomine las variables, expresiones, metodos y clases en la programacion con C#.C# es un lenguaje orientado a objetos moderno y seguro, resultado de las mejores ideas de lenguajes como C, C++ y Java, y con las mejoras de productividad de la plataforma .NET de Microsoft. ', 2);
INSERT INTO `libros` VALUES (6, 'Hardware para Moviles', 'Joe Stalin', 'Vida', 394, 4, 'Hardware, monitores y CPU', 2);
INSERT INTO `libros` VALUES (7, 'Programacion en C++ para Ingenieros', 'Fatos Xhafa', '2006', 477, 2, 'Este libro trata de proporcionar conocimientos basicos de la programacion que permitan al lector sentar una base solida.', 2);
INSERT INTO `libros` VALUES (8, 'Android Programar Facil', 'Les Paul', 'Prentice Hall', 733, 10, 'Programacion Movil', 2);
INSERT INTO `libros` VALUES (9, 'Tocar Guitarra', 'Stanley Santacruz', 'Guitarr xD', 428, 6, 'Aprenda a tocar guitarra', 14);
INSERT INTO `libros` VALUES (10, 'Assembler', 'Irvine', 'Prentice Hall', 3422, 2, 'Programacion a Bajo Nivel, Registros EAX, EBX, ECX, EDX... Etc', 2);
INSERT INTO `libros` VALUES (11, 'Las Arenas del Alma', 'Dante Gebel', 'Vida', 538, 5, 'Nunca lo ha leido, pero lo quiere leer xD', 7);
INSERT INTO `libros` VALUES (12, 'El Codigo del Campeon', 'Dante Gebel', 'Vida', 487, 8, 'Codigos de campeones xD, Cambiar estrella, Walter Mercado', 7);
INSERT INTO `libros` VALUES (13, 'Psicologia Basica', 'Miguel Angel Ramos', 'Psico', 453, 6, 'Psicologia Basica, para el estudiante, para el futuro Psicologo', 1);
INSERT INTO `libros` VALUES (14, 'Biologia y Anatomia Humana', 'Marck Ramos', 'PRD', 843, 6, 'Informacion basica sobre el ser humano y sus organos internos', 15);
INSERT INTO `libros` VALUES (15, 'Guitarra Avanzada', 'John Citriani', 'Guitarr', 348, 2, 'Guitarra para expertos', 14);
INSERT INTO `libros` VALUES (16, 'Corazon Valiente', 'Dante Gebel', 'Vida', 345, 11, 'Los grandes hombres siempre estan dispuestos a cambiar', 7);
INSERT INTO `libros` VALUES (17, 'Algebra de Baldor', 'Baldor', 'Santillana', 923, 5, 'Ejercicios de Matematica, Basica y Avanzada', 3);
INSERT INTO `libros` VALUES (18, 'Manual de Homiletica', 'Samuel Vila', 'Clie', 228, 4, 'Estudio de la Homiletica para predicar con Excelencia, Sermones Escogidos, Pulpito y Meditaciones', 7);
INSERT INTO `libros` VALUES (19, 'Lenguajes de programación: principios y práctica', 'Kenneth C. Louden', 'C e Ingenieria', 712, 1, 'Este libro trata de proporcionar conocimientos basicos de la programacion que permitan al lector sentar una base solida.', 2);
INSERT INTO `libros` VALUES (20, 'Programación en Internet: clientes Web', 'Sergio Luján Mora', 'Club Universitario', 224, 3, 'Capítulo 1 Arquitecturas cliente/servidor Las aplicaciones web son un tipo\r\nespecial de aplicaciones cliente/servidor. Antes de aprender a programar\r\naplicaciones web conviene conocer las características básicas de las\r\narquitecturas', 2);
INSERT INTO `libros` VALUES (21, 'Psicología del desarrollo: infancia y adolescencia', 'David Reed Shaffer', 'Club Universitario', 712, 2, 'Estudio del desarrollo Psicologico del Infante Adolescente', 1);
INSERT INTO `libros` VALUES (22, 'Lenguaje Ensanblador para Computadoras Basadas en Intel', 'Kip R. Irvine', 'Prentice Hall', 1092, 3, 'Codigo Assembler y Programacion desde Basica hasta avanzada en consola', 2);
INSERT INTO `libros` VALUES (23, 'Sistemas Operativos Modernos', 'Andrew S. Tanenbaum', 'Prentice Hall', 951, 9, '(Microsoft tenía plena conciencia de UNIX, e incluso vendió durante sus primeros años una versión para microcomputadora a ... buena cantidad de lenguaje ensamblador Intel de 16 bits.', 2);
INSERT INTO `libros` VALUES (24, 'La sangre de los elfos', 'Andrzej Sapkowski', 'Alamut', 256, 4, 'Historia Mitica', 5);
INSERT INTO `libros` VALUES (25, 'Si, Tu Puedes', 'Sam Deep', 'Sirio', 265, 3, '1200 Ideas que inspiraran tu trabajo, tu hogar, y tu felicidad', 1);
INSERT INTO `libros` VALUES (26, 'La Cibernetica Y Lo Humano', 'Aurel David', 'Anonima', 473, 2, 'Todo el mundo habla de la cibernetica, del ciberespacio, de cibercafes... etc. ¿Pero sabeis lo que es en realidad?. Se parece tanto ha ello, como la mecanica cuantica a la reparacion de automoviles.', 2);
INSERT INTO `libros` VALUES (27, 'Escalas Musicales', 'Steve Wonder', 'Life Today', 233, 6, 'Aprender todo tipo de escalas, basicas y avanzadas', 14);
INSERT INTO `libros` VALUES (28, 'Edad Media Y Musica Sacra', 'Historia De La Musica', 'Sacra', 382, 1, 'Ninguna descripcion', 4);
INSERT INTO `libros` VALUES (29, 'Nacimiento Del Melodrama', 'Historia De La Musica', 'Sacra', 322, 5, 'Todavía no hay críticas ni reseñas sobre esta obra.', 4);
INSERT INTO `libros` VALUES (30, '17 De Octubre De 1945', 'Galasso Norberto', '..', 533, 3, '', 8);
INSERT INTO `libros` VALUES (31, 'Ecuaciones Diferenciales Notas De Clase', 'Dario Sanchez', 'Notas', 233, 3, 'Ecuaciones Diferenciales Notas De Clase', 3);
INSERT INTO `libros` VALUES (32, 'La Sociedad Abierta Y Sus Enemigos', 'Popper Karl', 'Siegmund', 232, 1, 'Tras presentar en 1928 una tesis doctoral fuertemente matemática dirigida por el psicólogo y lingüista Karl Bühler, Popper adquirió en 1929 la capacitación para dar lecciones universitarias de matemáticas y física.', 5);
INSERT INTO `libros` VALUES (33, 'Texto Y Contexto', 'Van Dijk Teun', 'Naaldwijk', 432, 16, 'Innovador y pionero en la lingüística del texto, que aborda en el libro Text and context (1977).', 18);
INSERT INTO `libros` VALUES (34, 'Manual De La Nueva Gramatica De La Lengua Española', 'RAE', 'RAE', 349, 2, 'Debe cuidar igualmente de que esta evolución conserve el genio propio de la lengua, tal como ha ido consolidándose con el correr de los siglos, así como de establecer y difundir los criterios de propiedad y corrección, y de contribuir a su esplendor. Para alcanzar dichos fines, estudiará e impulsará los estudios sobre la historia y sobre el presente del español, divulgará los escritos literarios, especialmente clásicos, y no literarios, que juzgue importantes para el conocimiento de tales cuestiones, y procurará mantener vivo el recuerdo de quienes, en España o en América, han cultivado con gloria nuestra lengua.', 18);
INSERT INTO `libros` VALUES (35, 'Linguistica Literalidad Poeticidad', 'Garcia Rio', 'Prentice', 442, 2, '', 18);
INSERT INTO `libros` VALUES (39, 'Romeo y Julieta', 'shakespeare', 'santillana', 600, 2, 'Es una novela romantica', 18);
INSERT INTO `libros` VALUES (40, 'El principito', 'loy sainz', 'macarthy', 125, 1, 'Historias y aventuras de viajes a 7 planetas.', 18);
INSERT INTO `libros` VALUES (41, 'MicroEconomia', 'Robert Pindyck', 'Prentice Hall', 543, 6, 'Estudio socioeconomico de la constituacion', 10);
INSERT INTO `libros` VALUES (42, 'Como programar en Java', 'Deitel', 'Deitel & Deitel', 860, 2, 'Introduccion y avance de OOD, UML,  Diseño de Sitios Web, JDBC,  Servlerts y JSP.', 2);
INSERT INTO `libros` VALUES (43, 'PHP Avanzado para Web Profesional', 'Christofer Consentino', 'Advance', 743, 4, 'Build complex, PHP-Driven WebSites-Fast.', 2);
INSERT INTO `libros` VALUES (44, 'Linux Avanzado', 'CHMod', 'Find', 452, 1, 'Aprende Linuz con este poderoso manual', 2);
INSERT INTO `libros` VALUES (45, 'PHP y Mysql para DUMMIES', 'Janeth Valade', 'Segunda', 755, 3, 'Una referencia para todo WebMaster.', 2);
INSERT INTO `libros` VALUES (46, 'Programacion en ASP.NET', 'ORelly', 'Hall', 356, 1, 'Sitios ASP.NET para Web-Master', 2);
INSERT INTO `libros` VALUES (47, 'Diseño de Bases de Datos', 'AlfaOmega', 'Ra-Ma', 538, 6, 'Problemas resueltos y ejercicios de Bases de Datos.', 2);
INSERT INTO `libros` VALUES (48, 'Matematicas avanzadas para Ingenieria', 'Kreyszig', 'Limusa', 429, 3, 'Diviertete con estos ejercicios de matematica', 3);
INSERT INTO `libros` VALUES (49, 'Matematicas', 'Harcourt', 'Harcourt', 455, 2, '', 3);
INSERT INTO `libros` VALUES (50, 'Matematica para universitarios', 'Navarro', 'Caracas', 456, 3, '', 3);
INSERT INTO `libros` VALUES (51, 'Analisis Matematico', 'Carlos Castillo', 'Hall', 365, 1, '', 3);
INSERT INTO `libros` VALUES (52, 'Filosofia final', 'Ada Albrecht', 'Hastinapura', 732, 5, 'Enseñanza de los monjes en los himalayas', 1);
INSERT INTO `libros` VALUES (53, 'Psicologia positiva', 'Beatriz Vera Poseck', 'Calamar', 332, 3, 'Una nueva forma de entender la psicologia', 1);
INSERT INTO `libros` VALUES (54, 'Psicologia', 'Charles Morris', 'Prentice Hall', 433, 1, '', 1);
INSERT INTO `libros` VALUES (55, 'Psicologia para principiantes', 'Ricardo Brus', 'Pearson', 344, 2, '', 1);
INSERT INTO `libros` VALUES (56, '600 Chistes Irresistibles', 'Jose Viera Campos', 'Vecchi', 321, 3, 'Riete hasta morir!!', 12);
INSERT INTO `libros` VALUES (57, 'Magos del Humor', 'Simpson', 'Pizza', 231, 3, '', 12);
INSERT INTO `libros` VALUES (58, 'Bife 2', 'Gustavo Sala', 'La Flor', 433, 3, 'Show de Gustavo Sala', 12);
INSERT INTO `libros` VALUES (59, 'Ordinario', 'Gustavo Sala', 'La Flor', 211, 2, '', 12);
INSERT INTO `libros` VALUES (60, 'Ja Ja Ja', 'Jorh', 'Aj', 129, 3, 'Alianza Francesa Palermo presenta los chistes y humor de Jorh', 12);
INSERT INTO `libros` VALUES (61, 'Curso Completo de Guitarra', 'Feirson', 'Feirson', 539, 2, 'Guitarra Clasica, Electrica, Española, etc, etc', 14);
INSERT INTO `libros` VALUES (62, 'El Mundo de la Musica', 'Gago', 'Oceano', 392, 4, 'Grandes Autores y Grandes Obras', 14);
INSERT INTO `libros` VALUES (63, 'Metodo completo de Piano', 'Terry Burrows', 'Parramon', 430, 3, 'Metodo del piano, escalas y ejercicios', 14);
INSERT INTO `libros` VALUES (64, 'Metodo de Guitarra Electrica', 'Terry Burrows', 'Parramon', 583, 4, 'Guitarra Electrica avanzada, ejercicios  y escalas, hammer on, pull off etc.', 14);
INSERT INTO `libros` VALUES (65, '21 leyes irrefutables del liderazgo', 'John Maxwell', 'Zig Ziglar', 432, 3, 'Siga estas leyes, y la gente lo seguira a usted', 7);
INSERT INTO `libros` VALUES (66, 'Jovenes, Religion e iglesia', 'Jose Luis Moral', 'Khaf', 394, 1, '', 7);
INSERT INTO `libros` VALUES (67, 'La Religion de Jesus', 'Jose Manuel Castillo', 'Brouwer', 293, 4, 'Comentario Evangelico Diario', 7);
INSERT INTO `libros` VALUES (68, 'Destinado al Exito', 'Dante Gebel', 'Vida', 329, 6, 'Los secretos para alcanzar tus sueños', 7);
INSERT INTO `libros` VALUES (69, 'La politica vigilada', 'Antony Gutierres', 'Doc', 43, 5, 'Casos politicos', 13);
INSERT INTO `libros` VALUES (70, 'Cronica de la historia', '---', '---', 332, 3, '', 13);
INSERT INTO `libros` VALUES (71, 'Filosofia y teorias politicas entre critica y utopia', 'Guillermo Hoyos', 'Clacso', 492, 4, 'Politica filosofica', 13);
INSERT INTO `libros` VALUES (72, 'Clasicos de Bolsillo', 'Nicolas Maquiavelo', 'Logseller', 421, 1, '', 24);
INSERT INTO `libros` VALUES (73, 'Don Quijote de la Mancha', 'Miguel de Cervantes', 'Algar', 320, 3, 'La Historia de Don Quijote de la Mancha', 18);
INSERT INTO `libros` VALUES (74, 'El Salvador-Historia General', 'Oscar Martinez Peñate', 'Guanakos', 342, 2, 'Literratura puramente salvadoreña', 18);
INSERT INTO `libros` VALUES (75, 'Concurso de Fotografia y literatura', '---', '---', 34, 1, '', 4);
INSERT INTO `libros` VALUES (76, 'Literatura Infantil', '---', '---', 33, 2, '', 18);
INSERT INTO `libros` VALUES (77, 'Economia, principios y aplicaciones', 'Francisco Monchon', 'McGrawHill', 449, 3, 'Aplicaciones de la economia =)', 10);
INSERT INTO `libros` VALUES (78, 'Economia internacional', 'Krugman', 'Wesley', 442, 2, 'Economia politica, teorica e internacional', 10);
INSERT INTO `libros` VALUES (79, 'Arquitectura del Exito', 'Dr Camilo Cruz', 'Exo', 339, 3, 'Diseñando un plan para alcanzar una vida plena y feliz', 10);
INSERT INTO `libros` VALUES (80, 'Tecnicas de configuracion de router cisco', 'Ernesto Ariganello', 'Alfaomega', 259, 3, 'Contiene tecnicas basicas ey avanzadas de como configurar una router dentro de una red.', 2);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `mora`
-- 

CREATE TABLE `mora` (
  `idMora` int(11) NOT NULL auto_increment,
  `carnet` varchar(10) NOT NULL default '',
  `tipoMora` varchar(50) default NULL,
  `estadoMora` varchar(15) default NULL,
  `cantidad` decimal(10,2) default NULL,
  `fechaMora` date NOT NULL,
  PRIMARY KEY  (`idMora`),
  KEY `relacionMA` (`carnet`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=66 ;

-- 
-- Volcar la base de datos para la tabla `mora`
-- 

INSERT INTO `mora` VALUES (59, '2512122007', 'Retardo de Libro', 'Inactiva', 2.30, '2012-05-29');
INSERT INTO `mora` VALUES (55, '2523782007', 'Retardo de Libro', 'Inactiva', 2.30, '2012-05-27');
INSERT INTO `mora` VALUES (58, '1736282005', 'Retardo de Libro', 'Inactiva', 2.30, '2012-05-29');
INSERT INTO `mora` VALUES (60, '2548952007', 'Retardo de Libro Escaso', 'Inactiva', 6.40, '2012-05-29');
INSERT INTO `mora` VALUES (61, '2523782007', 'Retardo de Libro', 'Inactiva', 1.15, '2012-05-29');
INSERT INTO `mora` VALUES (62, '2523942001', 'Retardo de Libro', 'Activa', 1.15, '2012-05-30');
INSERT INTO `mora` VALUES (63, '1720932007', 'Retardo de Libro', 'Activa', 2.30, '2012-05-30');
INSERT INTO `mora` VALUES (64, '2539022007', 'Retardo de Libro', 'Activa', 2.30, '2012-05-30');
INSERT INTO `mora` VALUES (65, '2534972007', 'Retardo de Libro', 'Activa', 1.15, '2012-05-30');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `prestamo`
-- 

CREATE TABLE `prestamo` (
  `idLibro` int(11) NOT NULL default '0',
  `carnet` varchar(10) NOT NULL default '',
  `fechaSalida` date default '0000-00-00',
  `fechaDevolucion` date default '0000-00-00',
  `Estado` varchar(50) default NULL,
  KEY `relacionPL` (`idLibro`),
  KEY `relacionPA` (`carnet`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Volcar la base de datos para la tabla `prestamo`
-- 

INSERT INTO `prestamo` VALUES (46, '2548742006', '2012-05-30', '2012-05-30', 'Autorizado');
INSERT INTO `prestamo` VALUES (48, '2538942005', '0000-00-00', '0000-00-00', 'En Canasta');
