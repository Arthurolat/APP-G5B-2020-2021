SHOW CHARACTER SET; 
create schema DB_app; 
use DB_app; 


#SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
#SET time_zone = "+00:00";


-- 
DROP TABLE IF EXISTS personne; 
CREATE TABLE personne(
idacteur int(10) PRIMARY KEY NOT NULL AUTO_INCREMENT , 
mdp varchar(25) NOT NULL, 
prenom varchar(50) NOT NULL, 
nom varchar(50) NOT NULL, 
mail varchar(150) NOT NULL, 
dateNaissance date NOT NULL, 
tel varchar(10) NOT NULL, 
adresse varchar(255) NOT NULL, 
statut varchar(25) NOT NULL
);

INSERT INTO personne VALUES (0, 'mdp','padmin', 'nadmin', 'administrateur@mail.com','2020-12-01','0600000000','paris','admin');
INSERT INTO personne VALUES (0, 'mdp','pgestionnaire', 'ngestionnaire', 'gestionnaire@mail.com','2020-12-01','0600000000','paris','gestionnaire');
INSERT INTO personne VALUES (0, 'mdp','putilisateur', 'nutilisateur', 'utilisateur@mail.com','2020-12-01','0600000000','paris','utilisateur');

select * from personne;
delete from personne;
#alter table personne auto_increment=1;


DROP TABLE IF EXISTS sessiontest; 
CREATE TABLE sessiontest(
idsession int(10) PRIMARY KEY NOT NULL auto_increment,
idacteur int(10),
datesession datetime, 
FOREIGN KEY (idacteur) REFERENCES personne(idacteur) on delete cascade
);

INSERT INTO sessiontest VALUES (0, 1, '2020-12-01');
select * from sessiontest;


insert into typecapteur values (0);
select * from typecapteur;
select * from capteur;
insert into capteur values (0, 1, "neuf", 0);


DROP TABLE IF EXISTS typecapteur; 
CREATE TABLE typecapteur(
idtypecapteur int(10) PRIMARY KEY NOT NULL auto_increment,
nomcapteur varchar(100),
seuil int(10),
photo blob, 
unite varchar(25)
);

DROP TABLE IF EXISTS capteur; 
CREATE TABLE capteur(
idcapteur int(10) PRIMARY KEY NOT NULL auto_increment,
idtypecapteur int(10),
etat  varchar(25), 
dispo varchar(5),
idtest int(10),
FOREIGN KEY (idtypecapteur) REFERENCES typecapteur(idtypecapteur) on delete cascade, 
FOREIGN KEY (idtest) REFERENCES testgenerique(idtest) on delete cascade
);

DROP TABLE IF EXISTS boitier; 
CREATE TABLE boitier(
idboitier int(10) PRIMARY KEY NOT NULL auto_increment, 
idcapteur int(10),
FOREIGN KEY (idcapteur) REFERENCES capteur(idcapteur) on delete cascade
);


DROP TABLE IF EXISTS testgenerique; 
CREATE TABLE testgenerique(
idtest int(10) PRIMARY KEY NOT NULL auto_increment, 
nom varchar(250),
descrition text
);

DROP TABLE IF EXISTS mesure; 
CREATE TABLE mesure(
idmesure int(10) PRIMARY KEY NOT NULL auto_increment,
datemesure datetime NOT NULL,
valeur int(20) DEFAULT NULL,
idcapteur int(10),
FOREIGN KEY (idcapteur) REFERENCES capteur(idcapteur)
);

DROP TABLE IF EXISTS resultat; 
CREATE TABLE resultat(
idsession int(10),
idtest int(10),
idmesure int(10),
PRIMARY KEY (idsession, idtest, idmesure),
FOREIGN KEY (idsession) REFERENCES sessiontest(idsession), 
FOREIGN KEY (idtest) REFERENCES testgenerique(idtest), 
FOREIGN KEY (idmesure) REFERENCES mesure(idmesure)
);

DROP TABLE IF EXISTS message; 
CREATE TABLE message(
idmessage int(10) PRIMARY KEY NOT NULL auto_increment,
datemessage date NOT NULL,
objet varchar(50) NOT NULL,
commentaire varchar(250),
emetteur int(10), 
destinataire int(10),
FOREIGN KEY (emetteur) REFERENCES personne(idacteur), 
FOREIGN KEY (destinataire) REFERENCES personne(idacteur)
);


DROP TABLE IF EXISTS faq; 
CREATE TABLE faq(
idfaq int(10) PRIMARY KEY NOT NULL auto_increment,
question varchar(250) NOT NULL,
reponse text NOT NULL
);

DROP TABLE IF EXISTS cgu; 
CREATE TABLE cgu(
idcgu int(10) PRIMARY KEY NOT NULL auto_increment,
titre varchar(250) NOT NULL,
contenu text NOT NULL
);



