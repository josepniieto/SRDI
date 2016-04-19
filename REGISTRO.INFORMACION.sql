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