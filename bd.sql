create database if not exists Tienda_Juegos;

drop table if exists detalles_orden cascade;
drop table if exists orden cascade;
drop table if exists pago cascade;
drop table if exists cliente cascade;
drop table if exists genero_juego cascade;
drop table if exists idioma_juego cascade;
drop table if exists mod_juego cascade;
drop table if exists juego cascade;
drop table if exists modalidad cascade;
drop table if exists idioma cascade;
drop table if exists genero cascade;

use Tienda_Juegos;

  CREATE TABLE genero(
  gen_id varchar(5) PRIMARY KEY,
  gen_nombre varchar(50));

  CREATE TABLE idioma(
  idi_id varchar(5) PRIMARY KEY,
  idi_nombre varchar(50));

  CREATE TABLE modalidad(
  mod_id varchar(5) PRIMARY KEY,
  mod_nombre varchar(50));

   CREATE TABLE juego(
  jue_id varchar(5) PRIMARY KEY,
  jue_titulo varchar(50),
  jue_desarrollador varchar(200),
  jue_editor varchar(200),
  jue_franquicia varchar(50),
  jue_precio float,
  jue_precio_des float);

CREATE TABLE genero_juego(
  gxj_gen_id varchar(5),
  gxj_jue_id varchar(5),
  PRIMARY KEY (gxj_gen_id, gxj_jue_id),
  FOREIGN KEY (gxj_gen_id) REFERENCES genero (gen_id),
  FOREIGN KEY (gxj_jue_id) REFERENCES juego (jue_id));

  CREATE TABLE idioma_juego(
  ixj_idi_id varchar(5),
  ixj_jue_id varchar(5),
  PRIMARY KEY (ixj_idi_id, ixj_jue_id),
  FOREIGN KEY (ixj_idi_id) REFERENCES idioma (idi_id),
  FOREIGN KEY (ixj_idi_id) REFERENCES juego (jue_id));

  CREATE TABLE mod_juego(
  mxj_mod_id varchar(5),
  mxj_jue_id varchar(5),
  PRIMARY KEY (mxj_mod_id, mxj_jue_id),
  FOREIGN KEY (mxj_mod_id) REFERENCES modalidad (mod_id),
  FOREIGN KEY (mxj_mod_id) REFERENCES juego (jue_id));
  
CREATE TABLE cliente(
  cli_id varchar(20) PRIMARY KEY,
  cli_nom varchar(50),
  cli_ape varchar(50),
  cli_pais varchar(50),
  cli_email varchar(50),
  cli_pass varchar(50),
  cli_tc varchar(20),
  cli_tcn varchar(20),
  cli_tcmes varchar(2),
  cli_tcanio varchar(4));

  CREATE TABLE pago(
  pag_id varchar(5) PRIMARY KEY,
  pag_tipo varchar(20),
  pag_permitido boolean);

  CREATE TABLE orden(
  ord_id varchar(5) PRIMARY KEY,
  ord_cli_id varchar(20),
  ord_pag_id varchar(5),
  ord_fecha_ord date,
  ord_fecha_pago date,
  FOREIGN KEY (ord_cli_id) REFERENCES cliente (cli_id),
  FOREIGN KEY (ord_cli_id) REFERENCES pago (pag_id));

  CREATE TABLE detalles_orden(
  do_id varchar(5) PRIMARY KEY,
  do_jue_id varchar(5),
  do_ord_id varchar(5),
  FOREIGN KEY (do_jue_id) REFERENCES juego (jue_id), 
  FOREIGN KEY (do_ord_id) REFERENCES orden (ord_id));
  
  

