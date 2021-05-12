drop database if exists iris_sd;
create database iris_sd;
use iris_sd;

create table Personne (
	idPersonne int auto_increment primary key ,
	nom varchar (20),
	prenom varchar(20)
);

create table Initial(
	idPersonne int primary key ,
	montant float,
	foreign key (idPersonne) references Personne(idPersonne)
);

create table Professeur(
	idPersonne int  primary key ,
	diplome varchar (20),
	foreign key (idPersonne) references Personne(idPersonne)
);

create table Alternant(
	idPersonne int  primary key ,
	entreprise varchar(20) ,
	foreign key (idPersonne) references Personne(idPersonne)
);

insert into personne values (null, "Yazid", "Kevin"), (null, "Audron", "Kos"), (null, "Choouky", "Abdel"), 
	(null, "Merlin", "Theo"), (null, "Sanou", "Sam"); 
insert into Professeur values (3, "Bac + 5"); 
insert into Initial values (1, 5000), (2, 3000); 
insert into Alternant values (4, "SNCF"), (5, "EDF");
