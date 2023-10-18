CREATE TABLE `catalogo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imagen` varchar(255) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `precio_unidad` decimal(10,2) DEFAULT NULL,
  `precio_fardo` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
INSERT INTO `catalogo` (`imagen`, `descripcion`, `precio_unidad`, `precio_fardo`) VALUES
('imagen.png', 'Descripción del producto', 100.00, 500.00);
-- Crear usuario administrador
CREATE USER `Admin`@`localhost` IDENTIFIED BY 'SomosFamilia1';
-- Asignar el rol de administrador al usuario
GRANT ALL PRIVILEGES ON *.* TO `Admin`@`localhost`;
-- Asignar los permisos necesarios para editar los campos de tu archivo catálogo
GRANT SELECT, INSERT, UPDATE, DELETE ON `catalogo`.* TO `Admin`@`localhost`;
