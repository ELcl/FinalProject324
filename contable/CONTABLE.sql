# Creamos la base de dato
CREATE DATABASE contable1;

# Instanciamos las Tablas
create table flujo
(
flujo  varchar(5),
proceso  varchar(5),
proceso_siguiente varchar(5),
tipo varchar(1),
rol varchar(10),
pantalla varchar(20),
descripcion VARCHAR(60)
);

create table condicional
(
flujo varchar(5),
proceso varchar(5),
si VARCHAR(2),tiempo
no VARCHAR(2)
);

CREATE TABLE roles(
    rol VARCHAR(16),
    usuario VARCHAR(16)
);

CREATE TABLE descripcion(
    flujo VARCHAR(5),
    descripcion VARCHAR(64)
);

CREATE TABLE tiempo(
	flujo VARCHAR (4),
	proceso VARCHAR (4),
	nro_tramite INT(4),
	fecha_ini DATETIME,
	fecha_fin DATETIME,
	usuario VARCHAR(5)
);

# Llenamos los datos

# Flujo
insert into flujo values('F1','P1','P2','I','Usuario','inicio','Se informa de la fecha de inscripcion');
insert into flujo values('F1','P2','P3','P','Usuario','busca','Busca una sucursaldel Banco Union');
insert into flujo values('F1','P3','P4','P','Usuario','asiste','Asiste al banco');
insert into flujo values('F1','P4','P5','P','Usuario','espera','Espera su turno');
insert into flujo values('F1','P5','','C','Usuario','desocupado','Algun cajero desocupado');
insert into flujo values('F1','P6','P7','P','Usuario','deposito','Realiza el deposito');
insert into flujo values('F1','P7','P8','P','Cajas','recibe_dinero','Recibe el dinero');
insert into flujo values('F1','P8','','C','Cajas','verifica','Verifica el monto correcto');
insert into flujo values('F1','P9','P10','P','Cajas','comprobante','Emite comprobante de pago');
insert into flujo values('F1','P10','P11','P','Usuario','recibe_comprobante','Recibe el comprobante de pago');
insert into flujo values('F1','P11','P12','P','Usuario','registro_sistema','Realiza su registro a sistema');
insert into flujo values('F1','P12','P13','P','Usuario','llena_datos','Llena sus datos');
insert into flujo values('F1','P13','','F','Usuario','imprime_datos','Imprime los datos y los firma');

#descripcion
insert into descripcion values('F1','prefacultativo');		
insert into descripcion values('F2','matriculacion');		
insert into descripcion values('F3','temporada');		

#condicional
insert into condicional values('F1','P5','P6','P4');
insert into condicional values('F1','P8','P9','P6');roles

#roles
insert into roles values ('usuario','efrain');
insert into roles values ('usuario','micaela');
insert into roles values ('Kardex','alejandra');
insert into roles values ('Karde ','sara');

insert into tiempo values('F1','P1','500','2022-12-10 22:43:12', NULL ,'efrain');
insert into tiempo values('F1','P1','554','2022-02-10 10:00:00',NULL,'micaela');


# Updates test
UPDATE tiempo SET fecha_fin = '2022-12-12 15:24:49' WHERE proceso = 'P1';
select * from tiempo where usuario='Efra' AND fecha_fin is NULL;
