/* Aldo Menéndez */

drop database if exists dbUpzenith;
create database dbUpzenith;
use dbUpzenith;

CREATE TABLE usuarios(
      id_usuario INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
      nombre VARCHAR(75),
      apellido VARCHAR(75),
      provincia VARCHAR(75),
      ciudad VARCHAR(75),
      email VARCHAR(75),
      password VARCHAR(75),
      imagen LONGTEXT,
      fecha_creacion VARCHAR(60),
      rol ENUM('user', 'mod', 'admin') NULL DEFAULT NULL
      /* FOREIGN KEYS ABAJO */

);

CREATE TABLE equipo(
      id_equipo INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
      nombre_equipo VARCHAR(60),
      descripcion VARCHAR(240)
      /* FOREIGN KEYS ABAJO */

);

CREATE TABLE torneo(
      id_torneo INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
      nombre_torneo VARCHAR(60),
      descripcion_torneo VARCHAR(240),
      anfitrion VARCHAR(60),
      plazas ENUM('16', '32', '64') NULL DEFAULT NULL
      /* FOREIGN KEYS ABAJO */


);
