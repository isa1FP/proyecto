/*
 Navicat Premium Data Transfer

 Source Server         : localhostSistema
 Source Server Type    : MySQL
 Source Server Version : 100411
 Source Host           : localhost:3306
 Source Schema         : proyecto

 Target Server Type    : MySQL
 Target Server Version : 100411
 File Encoding         : 65001

 Date: 29/08/2020 18:34:46
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for cita
-- ----------------------------
DROP TABLE IF EXISTS `cita`;
CREATE TABLE `cita`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `idpaciente` int NULL DEFAULT NULL,
  `idhora` int NULL DEFAULT NULL,
  `nombres` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `apellidos` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `fechacita` date NULL DEFAULT NULL,
  `horacita` date NULL DEFAULT NULL,
  `idrol` int NULL DEFAULT NULL,
  `usuario` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `fecha` timestamp(0) NOT NULL DEFAULT current_timestamp(0),
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `idrol`(`idrol`) USING BTREE,
  INDEX `idhora`(`idhora`) USING BTREE,
  INDEX `idpaciente`(`idpaciente`) USING BTREE,
  CONSTRAINT `cita_ibfk_1` FOREIGN KEY (`idrol`) REFERENCES `rol` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `cita_ibfk_2` FOREIGN KEY (`idhora`) REFERENCES `hora` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `cita_ibfk_3` FOREIGN KEY (`idpaciente`) REFERENCES `paciente` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of cita
-- ----------------------------

-- ----------------------------
-- Table structure for configuracion
-- ----------------------------
DROP TABLE IF EXISTS `configuracion`;
CREATE TABLE `configuracion`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `razonsocial` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nit` int NULL DEFAULT NULL,
  `direccion` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `telefono` int NULL DEFAULT NULL,
  `celular` int NULL DEFAULT NULL,
  `email` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `responsable` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `logo` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `idrol` int NULL DEFAULT NULL,
  `usuario` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `fecha` timestamp(0) NOT NULL DEFAULT current_timestamp(0),
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `idrol`(`idrol`) USING BTREE,
  CONSTRAINT `configuracion_ibfk_1` FOREIGN KEY (`idrol`) REFERENCES `rol` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of configuracion
-- ----------------------------
INSERT INTO `configuracion` VALUES (1, 'Pan Standart', 12345613, 'Barrio Casegural\r\nCalle Regimientos N° 23', 73464523, NULL, 'Standart@gmail.com', 'Severina Picha', NULL, NULL, NULL, '2020-08-25 17:59:15');
INSERT INTO `configuracion` VALUES (2, 'Odontolife', 123455613, 'Calle Orcullo N° 123', 12345678, NULL, 'odonto@gmail.com', 'Dr. Mari Poquechoque', NULL, NULL, NULL, '2020-08-25 18:01:00');

-- ----------------------------
-- Table structure for consultas
-- ----------------------------
DROP TABLE IF EXISTS `consultas`;
CREATE TABLE `consultas`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `idpaciente` int NULL DEFAULT NULL,
  `idestado` int NULL DEFAULT NULL,
  `idrol` int NULL DEFAULT NULL,
  `servicios` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `descripcion` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `usuario` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `fecha` timestamp(0) NOT NULL DEFAULT current_timestamp(0),
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `idrol`(`idrol`) USING BTREE,
  INDEX `idpaciente`(`idpaciente`) USING BTREE,
  INDEX `idestado`(`idestado`) USING BTREE,
  CONSTRAINT `consultas_ibfk_1` FOREIGN KEY (`idrol`) REFERENCES `rol` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `consultas_ibfk_2` FOREIGN KEY (`idpaciente`) REFERENCES `paciente` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `consultas_ibfk_3` FOREIGN KEY (`idestado`) REFERENCES `estado` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of consultas
-- ----------------------------
INSERT INTO `consultas` VALUES (2, 8, 1, NULL, NULL, NULL, NULL, '2020-08-12 13:20:38');
INSERT INTO `consultas` VALUES (3, 2, 1, NULL, NULL, NULL, NULL, '2020-08-20 23:12:51');
INSERT INTO `consultas` VALUES (4, 2, 1, NULL, NULL, NULL, NULL, '2020-08-24 10:20:11');
INSERT INTO `consultas` VALUES (5, 2, 1, NULL, NULL, NULL, NULL, '2020-08-24 12:48:25');
INSERT INTO `consultas` VALUES (6, 5, 1, NULL, NULL, NULL, NULL, '2020-08-25 11:32:59');
INSERT INTO `consultas` VALUES (7, 9, 1, NULL, NULL, NULL, NULL, '2020-08-26 15:00:39');
INSERT INTO `consultas` VALUES (8, 9, 1, NULL, NULL, 'descripcion nro 1', NULL, '2020-08-26 15:21:45');
INSERT INTO `consultas` VALUES (9, 4, 1, NULL, NULL, NULL, NULL, '2020-08-26 16:20:27');
INSERT INTO `consultas` VALUES (10, 7, 1, NULL, NULL, NULL, NULL, '2020-08-26 16:50:17');
INSERT INTO `consultas` VALUES (11, 2, 1, NULL, NULL, NULL, NULL, '2020-08-26 18:35:20');
INSERT INTO `consultas` VALUES (12, 4, 1, NULL, NULL, NULL, NULL, '2020-08-26 18:35:58');
INSERT INTO `consultas` VALUES (13, 10, 1, NULL, NULL, NULL, NULL, '2020-08-26 18:46:53');
INSERT INTO `consultas` VALUES (14, 2, 1, NULL, NULL, NULL, NULL, '2020-08-28 20:31:26');

-- ----------------------------
-- Table structure for consultasservicios
-- ----------------------------
DROP TABLE IF EXISTS `consultasservicios`;
CREATE TABLE `consultasservicios`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `idconsultas` int NULL DEFAULT NULL,
  `idservicios` int NULL DEFAULT NULL,
  `precio` decimal(20, 2) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `idconsultas`(`idconsultas`) USING BTREE,
  INDEX `idservicios`(`idservicios`) USING BTREE,
  CONSTRAINT `consultasservicios_ibfk_1` FOREIGN KEY (`idconsultas`) REFERENCES `consultas` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `consultasservicios_ibfk_2` FOREIGN KEY (`idservicios`) REFERENCES `servicios` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 42 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of consultasservicios
-- ----------------------------
INSERT INTO `consultasservicios` VALUES (4, 3, 6, 100.00);
INSERT INTO `consultasservicios` VALUES (5, 3, 7, 1000.00);
INSERT INTO `consultasservicios` VALUES (6, 4, 12, 500.00);
INSERT INTO `consultasservicios` VALUES (7, 5, 11, 350.00);
INSERT INTO `consultasservicios` VALUES (8, 6, 12, 500.00);
INSERT INTO `consultasservicios` VALUES (9, 6, 11, 350.00);
INSERT INTO `consultasservicios` VALUES (10, 6, 7, 1000.00);
INSERT INTO `consultasservicios` VALUES (11, 6, 10, 4000.00);
INSERT INTO `consultasservicios` VALUES (12, 7, 8, 10000.00);
INSERT INTO `consultasservicios` VALUES (13, 8, 11, 350.00);
INSERT INTO `consultasservicios` VALUES (14, 8, 10, 4000.00);
INSERT INTO `consultasservicios` VALUES (15, 9, 8, 10000.00);
INSERT INTO `consultasservicios` VALUES (16, 9, 11, 350.00);
INSERT INTO `consultasservicios` VALUES (17, 9, 6, 100.00);
INSERT INTO `consultasservicios` VALUES (18, 4, 12, 500.00);
INSERT INTO `consultasservicios` VALUES (19, 4, 7, 1000.00);
INSERT INTO `consultasservicios` VALUES (20, 10, 12, 500.00);
INSERT INTO `consultasservicios` VALUES (23, 4, 12, 500.00);
INSERT INTO `consultasservicios` VALUES (24, 4, 12, 500.00);
INSERT INTO `consultasservicios` VALUES (25, 4, 7, 1000.00);
INSERT INTO `consultasservicios` VALUES (34, 11, 12, 500.00);
INSERT INTO `consultasservicios` VALUES (35, 11, 8, 10000.00);
INSERT INTO `consultasservicios` VALUES (36, 2, 7, 1000.00);
INSERT INTO `consultasservicios` VALUES (37, 2, 6, 100.00);
INSERT INTO `consultasservicios` VALUES (38, 12, 12, 500.00);
INSERT INTO `consultasservicios` VALUES (39, 13, 12, 500.00);
INSERT INTO `consultasservicios` VALUES (40, 13, 11, 350.00);
INSERT INTO `consultasservicios` VALUES (41, 14, 12, 500.00);

-- ----------------------------
-- Table structure for estado
-- ----------------------------
DROP TABLE IF EXISTS `estado`;
CREATE TABLE `estado`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of estado
-- ----------------------------
INSERT INTO `estado` VALUES (1, 'INICIADO');
INSERT INTO `estado` VALUES (2, 'FINALIZADO');

-- ----------------------------
-- Table structure for hora
-- ----------------------------
DROP TABLE IF EXISTS `hora`;
CREATE TABLE `hora`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `hora` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hora
-- ----------------------------

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);

-- ----------------------------
-- Table structure for paciente
-- ----------------------------
DROP TABLE IF EXISTS `paciente`;
CREATE TABLE `paciente`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `ci` int NULL DEFAULT NULL,
  `nombres` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `apellidos` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `sexo` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `telefono` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `celular` int NULL DEFAULT NULL,
  `fecha_nacimiento` date NULL DEFAULT NULL,
  `direccion` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `email` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `idrol` int NULL DEFAULT NULL,
  `usuario` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `fecha` timestamp(0) NOT NULL DEFAULT current_timestamp(0),
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `idrol`(`idrol`) USING BTREE,
  CONSTRAINT `paciente_ibfk_1` FOREIGN KEY (`idrol`) REFERENCES `rol` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of paciente
-- ----------------------------
INSERT INTO `paciente` VALUES (1, NULL, 'juan', 'perez', 'M', NULL, NULL, NULL, 'xxxx', NULL, NULL, NULL, '2020-08-04 19:06:41');
INSERT INTO `paciente` VALUES (2, NULL, 'aa', 'bb', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-08-04 19:33:35');
INSERT INTO `paciente` VALUES (3, NULL, 'cc', 'ddd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-08-04 19:34:45');
INSERT INTO `paciente` VALUES (4, NULL, 'hola', 'y', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-08-04 19:36:20');
INSERT INTO `paciente` VALUES (5, NULL, 'actualizando', 'yy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-08-04 19:46:09');
INSERT INTO `paciente` VALUES (6, NULL, 'dora', 'doris', NULL, NULL, NULL, NULL, 'sssssss', NULL, NULL, NULL, '2020-08-05 20:03:36');
INSERT INTO `paciente` VALUES (7, 754560, 'isamar', 'flores picha', 'F', NULL, NULL, NULL, 'b. casegural', NULL, NULL, NULL, '2020-08-08 20:35:02');
INSERT INTO `paciente` VALUES (8, 12345, 'daniel', 'perez sandoval', 'M', '111111111', 2222222, NULL, 'loa #00', 'Daniel@gmail.com', NULL, NULL, '2020-08-08 20:48:55');
INSERT INTO `paciente` VALUES (9, 12345, 'daniela', 'perez', NULL, NULL, 1234567876, NULL, 'lalkdjfñlkasjl', 'id.icfp@gmail.com', NULL, NULL, '2020-08-21 00:08:53');
INSERT INTO `paciente` VALUES (10, 10002, 'doris', 'mendes', NULL, NULL, 1000056, NULL, 'lkasflaksh', 'doris@gmail.com', NULL, NULL, '2020-08-21 00:10:03');
INSERT INTO `paciente` VALUES (11, 1000023, 'dana paola', 'serrudo aguilar aguilar mmmmmmmm', NULL, 'sjfskjlfhls', 1234567, NULL, NULL, 'dana@gmail.com', NULL, NULL, '2020-08-25 18:21:18');

-- ----------------------------
-- Table structure for pagos
-- ----------------------------
DROP TABLE IF EXISTS `pagos`;
CREATE TABLE `pagos`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `fechapa` timestamp(0) NOT NULL DEFAULT current_timestamp(0),
  `servicio` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `monto` int NULL DEFAULT NULL,
  `saldo` int NULL DEFAULT NULL,
  `idservicios` int NULL DEFAULT NULL,
  `idrol` int NULL DEFAULT NULL,
  `usuario` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `fecha` timestamp(0) NOT NULL DEFAULT current_timestamp(0),
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `idservicios`(`idservicios`) USING BTREE,
  INDEX `idrol`(`idrol`) USING BTREE,
  CONSTRAINT `pagos_ibfk_1` FOREIGN KEY (`idservicios`) REFERENCES `servicios` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `pagos_ibfk_2` FOREIGN KEY (`idrol`) REFERENCES `rol` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pagos
-- ----------------------------
INSERT INTO `pagos` VALUES (1, '2020-08-10 22:23:51', 'limpieza', 200, 100, NULL, NULL, NULL, '2020-08-10 22:23:51');
INSERT INTO `pagos` VALUES (2, '2020-08-10 22:23:51', 'limpieza', 200, 50, NULL, NULL, NULL, '2020-08-10 22:25:06');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for personal
-- ----------------------------
DROP TABLE IF EXISTS `personal`;
CREATE TABLE `personal`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `ci` int NULL DEFAULT NULL,
  `nombres` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `apellidos` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `fecha_nacimiento` date NULL DEFAULT NULL,
  `sexo` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `estadocivil` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tipodocumento` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `numero` int NULL DEFAULT NULL,
  `direccion` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `telefono` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `celular` int NULL DEFAULT NULL,
  `email` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `ocupacion` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `cargo` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `especialidad` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `login` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `clave` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `permisos` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `imagen` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `idrol` int NULL DEFAULT NULL,
  `usuario` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `fecha` timestamp(0) NOT NULL DEFAULT current_timestamp(0),
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `idrol`(`idrol`) USING BTREE,
  CONSTRAINT `personal_ibfk_1` FOREIGN KEY (`idrol`) REFERENCES `rol` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of personal
-- ----------------------------
INSERT INTO `personal` VALUES (1, 12345, 'Mary', 'Poquechoque', NULL, NULL, 'C', 'credebcial', 123, NULL, NULL, NULL, NULL, NULL, 'Doctora', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-08-26 00:31:37');
INSERT INTO `personal` VALUES (2, 12345, 'Mary', 'Poquechoque', NULL, NULL, 'C', 'credebcial', 123, NULL, NULL, NULL, NULL, NULL, 'Doctora', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-08-26 00:31:37');

-- ----------------------------
-- Table structure for rol
-- ----------------------------
DROP TABLE IF EXISTS `rol`;
CREATE TABLE `rol`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of rol
-- ----------------------------
INSERT INTO `rol` VALUES (1, 'ADMINISTRADOR');
INSERT INTO `rol` VALUES (2, 'DOCTOR');
INSERT INTO `rol` VALUES (3, 'SECRETARIA');
INSERT INTO `rol` VALUES (4, 'ASISTENTE');
INSERT INTO `rol` VALUES (5, 'PACIENTE');
INSERT INTO `rol` VALUES (6, 'INICIADO');
INSERT INTO `rol` VALUES (7, 'FINALIZADO');

-- ----------------------------
-- Table structure for servicios
-- ----------------------------
DROP TABLE IF EXISTS `servicios`;
CREATE TABLE `servicios`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `codigo` int NULL DEFAULT NULL,
  `nombre` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `descripcion` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `precio` int NULL DEFAULT NULL,
  `imagen` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `idrol` int NULL DEFAULT NULL,
  `usuario` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `fecha` timestamp(0) NOT NULL DEFAULT current_timestamp(0),
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `idrol`(`idrol`) USING BTREE,
  CONSTRAINT `servicios_ibfk_1` FOREIGN KEY (`idrol`) REFERENCES `rol` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of servicios
-- ----------------------------
INSERT INTO `servicios` VALUES (6, 123, 'limpieza', 'aklsjdlkj', 100, NULL, NULL, NULL, '2020-08-06 17:57:31');
INSERT INTO `servicios` VALUES (7, 1, 'ortodoncia', 'sin placa', 1000, NULL, NULL, NULL, '2020-08-08 21:18:16');
INSERT INTO `servicios` VALUES (8, 20001, 'carillas', 'proceso de 3 años', 10000, NULL, NULL, NULL, '2020-08-21 00:13:04');
INSERT INTO `servicios` VALUES (9, 20002, 'gingibectomia', 'cirugia', 200, NULL, NULL, NULL, '2020-08-21 00:13:48');
INSERT INTO `servicios` VALUES (10, 20003, 'placa', 'posortodoncia', 4000, NULL, NULL, NULL, '2020-08-21 00:14:30');
INSERT INTO `servicios` VALUES (11, 20004, 'corona', 'por pieza', 350, NULL, NULL, NULL, '2020-08-21 00:15:25');
INSERT INTO `servicios` VALUES (12, 20006, 'blanqueamiento', 'todas las pieas', 500, NULL, NULL, NULL, '2020-08-21 00:17:41');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'juanito', 'juanito@gmail.com', NULL, '$2y$10$Uul1mzsr9/FblT1xbG1OkuKYVt2EsCSrvv33Tyvx7y1aXG16a1FKK', NULL, '2020-08-04 19:20:26', '2020-08-04 19:20:26');
INSERT INTO `users` VALUES (2, 'isa', 'isa@gmail.com', NULL, '$2y$10$FCnct9nxrC7xuH./Cvx8we4a1gen.DamDI5W54gydnfs2SihHprgS', NULL, '2020-08-04 23:44:23', '2020-08-04 23:44:23');

SET FOREIGN_KEY_CHECKS = 1;
