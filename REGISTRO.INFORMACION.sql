create database registro;
show databases;
use registro;
show tables;
create table informacion(
tratamiento varchar(20), 
cliente varchar(30), 
direccion varchar(50), 
descripcion varchar(30),
cantidad bigint,
primary key(tratamiento));
select * from informacion

create database registro;
show databases;
use registro;
show tables;
create table clientes(
identificacion bigint, 
nombre varchar(30), 
direccion varchar(50), 
telefono bigint,
Email varchar(40),
primary key(identificacion));

create table informacion(
tratamiento varchar(10),
identificacion bigint,
descripcion varchar(30),
cantidad bigint,
primary key(tratamiento),
foreign key(identificacion) references clientes(identificacion));

drop table informacion;
