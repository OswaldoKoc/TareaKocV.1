create database dona_solinadb character set utf8mb4;
use dona_solinadb;

-- 1. Tabla Usuario (Para control de acceso, independiente)
CREATE TABLE usuario (
    id_usuario INT PRIMARY KEY AUTO_INCREMENT,
    nombre_usuario VARCHAR(50) NOT NULL,
    correo VARCHAR(100) NOT NULL UNIQUE,
    contrasena VARCHAR(255) NOT NULL,
    rol VARCHAR(20) NOT NULL,
    estado VARCHAR(20) NOT NULL
);

-- 2. Tabla Cliente
CREATE TABLE cliente (
    id_cliente INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL,
    apellido VARCHAR(50) NOT NULL,
    dni VARCHAR(8) NOT NULL,
    telefono VARCHAR(15),
    direccion VARCHAR(150),
    correo VARCHAR(100) NOT NULL UNIQUE
);

-- 3. Tabla Producto Regional
CREATE TABLE producto_regional (
    id_producto INT PRIMARY KEY AUTO_INCREMENT,
    nombre_producto VARCHAR(100) NOT NULL,
    categoria VARCHAR(50),
    region_origen VARCHAR(50),
    precio DECIMAL(10,2) NOT NULL,
    stock INT NOT NULL,
    descripcion TEXT
);

-- 4. Tabla Pedido (Relaciona Cliente y Producto)
CREATE TABLE pedido (
    id_pedido INT PRIMARY KEY AUTO_INCREMENT,
    id_cliente INT,
    id_producto INT,
    fecha_pedido DATETIME DEFAULT CURRENT_TIMESTAMP,
    cantidad INT NOT NULL,
    total DECIMAL(10,2) NOT NULL,
    estado_pedido VARCHAR(20),
    FOREIGN KEY (id_cliente) REFERENCES cliente(id_cliente),
    FOREIGN KEY (id_producto) REFERENCES producto_regional(id_producto)
);
insert into usuario(nombre_usuario,correo, contrasena, rol, estado) 
values('oswaldo','oswaldo@senati.pe','123', 'admin', 'activo');
select * from usuario;
