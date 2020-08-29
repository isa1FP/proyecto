-- users
create table rol
(
	id 		integer auto_increment primary key,
	nombre  varchar(200)
);
create table estado
(
	id 		integer auto_increment primary key,
	nombre  varchar(200)
);
create table paciente
(
	id 			integer auto_increment primary key,
	ci			integer,
	nombres 	varchar(1000),
	apellidos   varchar(1000),
	sexo 		varchar(1),
	telefono 	varchar(1000),
	celular		integer,
	fecha_nacimiento date,
	direccion		text,
	email			varchar(1000),
	idrol			integer,
	usuario     	varchar(100),
	fecha 			timestamp default now(),
	foreign key(idrol) references rol(id)
);

alter table users add rol integer;
update users set rol = 1 where id = 1;
update users set rol = 5 where id = 2;
 
 create table servicios
(
	id 			    integer auto_increment primary key,
	codigo			integer,
	nombre          varchar(1000),
	descripcion 	varchar(1000),
	precio          integer,
	imagen          varchar(1000),
	idrol			integer,
	usuario     	varchar(100),
	fecha 			timestamp default now(),
	foreign key(idrol) references rol(id)
);

create table pagos
(
	id 			    integer auto_increment primary key,
	fechapa			timestamp default now(),
	monto           integer,
    idservicios     integer,
	idrol			integer,
	usuario     	varchar(100),
	fecha 			timestamp default now(),
	foreign key(idservicios) references servicios(id),
	foreign key(idrol) references rol(id)
);


  create table consultas
(
	id 			    integer auto_increment primary key,
	--piesa			integer,
	--servicios       varchar(1000),
	--precio          float check(precio > 0),
	idestado          integer,
	--saldo           float check(precio > 0),
	idrol			integer,
	idpaciente      integer,
    --idservicios     integer,
    --idpagos         integer,
    servicios 		text, -- LIMPIEZA, ORTODONCIA, ETC..
	usuario     	varchar(100),
	fecha 			timestamp default now(),
    foreign key(idrol) references rol(id),
	foreign key(idpaciente) references paciente(id),
	--foreign key(idservicios) references servicios(id),
	foreign key(idestado) references estado(id),
	--foreign key(idpagos) references pagos(id)
);

create table consultas
(
	id 			    integer auto_increment primary key,
    idpaciente      integer,
	idestado          integer,
	idrol			integer,
    servicios 		text, 
    descripcion     text,
	usuario     	varchar(100),
	fecha 			timestamp default now(),
    foreign key(idrol) references rol(id),
	foreign key(idpaciente) references paciente(id),
	foreign key(idestado) references estado(id)
);
create table consultasservicios
(
	id 	 		integer auto_increment primary key,
	idconsultas integer,
	idservicios integer,
	precio 		numeric(20, 2),
	foreign key(idconsultas) references consultas(id),
	foreign key(idservicios) references servicios(id)
);

create table recervarcita
(
	id 			integer auto_increment primary key,
	idpaciente  integer,
	idrol		integer,
	nombres 	varchar(1000),
	apellidos   varchar(1000),
	direccion   text,
	telefono 	varchar(1000),
	celular		integer,
	numcita     integer auto_increment,
	fechacita   date,
	horacita    date,
	usuario     varchar(100),
	fecha 		timestamp default now(),
    foreign key(idrol) references rol(id),
	foreign key(idpaciente) references paciente(id)
);

create table cita
(
	id 			      integer auto_increment primary key,
	idpaciente        integer,
	idhora            integer,
	nombres 		  varchar(1000),
	apellidos   	  varchar(1000),
	fechacita   	  date,
    horacita    	  date,
	idrol		      integer,
	usuario           varchar(100),
	fecha 		      timestamp default now(),
    foreign key(idrol) references rol(id),
    foreign key(idhora) references hora(id),
	foreign key(idpaciente) references paciente(id)
);

create table hora
(
	id 			 integer auto_increment primary key,
	hora         integer
);

 create table personal
(
	id 			integer auto_increment primary key,
	ci			integer,
	nombres 	varchar(1000),
	apellidos   varchar(1000),
	fecha_nacimiento date,
	sexo 		varchar(1),
	estadocivil varchar(1000),
	tipodocumento varchar(1000),
	numero        integer,
    direccion	  text,
	telefono 	varchar(1000),
	celular		integer,
	email			varchar(1000),
	ocupacion       varchar(1000),
	cargo           varchar(1000),
	especialidad    varchar(1000),
	login           varchar(20),
	clave           varchar(10),
	permisos        varchar(1000),
	imagen          varchar(10),
	idrol			integer,
	usuario     	varchar(100),
	fecha 			timestamp default now(),
	foreign key(idrol) references rol(id)
);

 create table configuracion
(
	id 			    integer auto_increment primary key,
	razonsocial 	varchar(1000),
	nit   			integer,
    direccion	    text,
	telefono 		integer,
	celular			integer,
	email			varchar(1000),
	responsable     varchar(1000),
	logo            varchar(10),
	idrol			integer,
	usuario     	varchar(100),
	fecha 			timestamp default now(),
	foreign key(idrol) references rol(id)
);


--CONSULTAS--
select c.id, p.ci, p.nombres, p.apellidos, e.nombre as estado,
	c.descripcion, c.fecha
from consultas as c inner join paciente as p on c.idpaciente = p.id
							   inner join estado as e on c.idestado = e.id
								 

select s.id, s.nombre, cs.precio
from consultasservicios as cs inner join servicios s on cs.idservicios = s.id
where idconsultas = 2

select * from servicios order by id desc
select * from consultas order by id desc
select * from consultasservicios order by id desc


select * from consultasservicios where idconsultas=2
