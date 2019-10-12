drop database if exists bd_ecommerce;

create database bd_ecommerce;

use bd_ecommerce;



CREATE TABLE usuario (
  id_usuario int(11) primary key AUTO_INCREMENT, 
  nombre varchar(25) COLLATE utf8_spanish_ci DEFAULT NULL,
  apellido varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  calle varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  nro int(8) DEFAULT NULL,
  provincia varchar (30) DEFAULT NULL,
  localidad varchar (30) DEFAULT NULL,
   password  varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  nom_usuario varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  mail varchar(24) COLLATE utf8_spanish_ci DEFAULT NULL,
  admin boolean DEFAULT 0
);

INSERT INTO usuario (password, nom_usuario, admin)
values ('AdminMaster', 'AdminMaster','1');

CREATE TABLE productos (
  id int(11) NOT NULL AUTO_INCREMENT,
  nombre varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  descripcion text COLLATE utf8_unicode_ci NOT NULL,
  precio float(10,2) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Volcar la base de datos para la tabla `mis_productos`
--

INSERT INTO productos (id, nombre, descripcion, precio) VALUES
(1, 'Producto 1','descripcion producto 1' , 15.00),
(2, 'Producto 2','descripcion producto 2' , 16.00),
(3, 'Producto 3','descripcion producto 3' , 70.00),
(4, 'Producto 4','descripcion producto 4' , 20.00)
