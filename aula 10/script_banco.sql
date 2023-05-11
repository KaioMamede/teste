create database dbApiCarros;

use dbApiCarros;

create table carros 
(
codigo int primary key auto_increment,
modelo varchar(30),
placa varchar(7)
);

insert into carros (modelo, placa) 
value ('Toyota Corolla','GGG1515');

insert into carros (modelo, placa) 
value ('Honda Civic','EEE000');

select * from carros;