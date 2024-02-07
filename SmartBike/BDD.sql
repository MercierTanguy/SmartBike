-- Database: SmartBike

-- DROP DATABASE IF EXISTS "SmartBike";

CREATE DATABASE "SmartBike"
    WITH
    OWNER = postgres
    ENCODING = 'UTF8'
    LC_COLLATE = 'French_France.1252'
    LC_CTYPE = 'French_France.1252'
    TABLESPACE = pg_default
    CONNECTION LIMIT = -1
    IS_TEMPLATE = False;
	
	CREATE TABLE velos(
	id SERIAL NOT NULL,
	nom VARCHAR(50),
	prix INT);
	
	INSERT INTO velos(nom,prix) VALUES ('Bike5',150);
	INSERT INTO velos(nom,prix) VALUES ('BikeOne',160);
	INSERT INTO velos(nom,prix) VALUES ('Bike22',200);
	INSERT INTO velos(nom,prix) VALUES ('BikeFirs',100);
	
	CREATE TABLE contact(
	id_demande SERIAL NOT NULL,
	nom VARCHAR(50),
	prenom VARCHAR(50),
	email VARCHAR(40),
	message VARCHAR(500)
	);
	
	CREATE TABLE commander(
	id int NOT NULL,
	nom Varchar(50),
	prenom varchar(50),
	email varchar(50),
	message varchar(500));
