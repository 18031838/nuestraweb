<?php

define("KEY","coffeyumi");
define("COD","AES-128-ECB");

define("SERVIDOR","localhost");
define("USUARIO","root");
define("PASSWORD","");
define("BD","cafeteria");

/*
create user admin@localhost identified by '1234';
create user cliente@localhost identified by '1234';
GRANT ALL on cafeteria.* TO admin@localhost;
GRANT ALL on cafeteria.* TO cliente@localhost;

create table tblRol(
	id_rol int auto_increment,
	nombre varchar(15),
	CONSTRAINT pk_rol PRIMARY KEY(id_rol));
    
    create table tblUsuario(
	id_usuario int auto_increment,
	nombre varchar(30),
	apepat varchar(25),
	apemat varchar(25),
	email varchar(30) unique,
	contraseña varchar(10),
    id_rol int,
    CONSTRAINT fk_rol FOREIGN KEY(id_rol) REFERENCES tblRol(id_rol),
	CONSTRAINT pk_usuario PRIMARY KEY(id_usuario));

    create table tblProducto(
	id_producto int auto_increment,
	nombre varchar(30),
    descripcion varchar(200),
    costo decimal(5,2),
	CONSTRAINT pk_producto PRIMARY KEY(id_producto));
    
    create table tblCarrito(
    	id_carrito int AUTO_INCREMENT,
     	id_producto int,
        id_usuario int,
        cantidad int,
        CONSTRAINT pk_carrito PRIMARY KEY(id_carrito),
        CONSTRAINT fk_producto_carrito FOREIGN KEY(id_producto) REFERENCES tblProducto(id_producto),
        CONSTRAINT fk_usuario_carrito FOREIGN KEY(id_usuario) REFERENCES tblUsuario(id_usuario));
    
    create table tblPedido(
        id_pedido int AUTO_INCREMENT,
        id_usuario int,
        fecha date,
        total decimal(6,2),
        CONSTRAINT pk_pedido PRIMARY KEY(id_pedido),
        CONSTRAINT fk_usuario_pedido FOREIGN KEY(id_usuario) REFERENCES tblUsuario(id_usuario));
        
    create table tblDetallePedido(
        id_detalle int AUTO_INCREMENT,
        id_pedido int,
        id_producto int,
        cantidad int,
        precio_unitario decimal(5,2),
        subtotal decimal(6,2),
        clave varchar(200),
        CONSTRAINT pk_detalle PRIMARY KEY(id_detalle),
        CONSTRAINT fk_producto_detallepedido FOREIGN KEY(id_producto) REFERENCES tblProducto(id_producto),
        CONSTRAINT fk_pedido_detallepedido FOREIGN KEY(id_pedido) REFERENCES tblPedido(id_pedido));
*/ 
?>