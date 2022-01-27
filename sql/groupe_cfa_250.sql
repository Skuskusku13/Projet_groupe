drop database if exists groupe_cfa_250;
create database groupe_cfa_250;
use groupe_cfa_250;

create table etudiant(
    idetudiant int(3) not null auto_increment,
    nom varchar(50) not null,
    prenom varchar(50) not null,
    adresse varchar(50),
    email varchar(50) not null,
    mdp varchar(50) not null,
    tel varchar(50),
    primary key (idetudiant)
);

create table classe(
    idclasse int(3) not null auto_increment,
    salle varchar(50) not null,
    professeur varchar(50) not null,
    email varchar(50) not null,
    tel varchar(50),
    promo varchar(50) not null,
    idetudiant int(3) not null,
    primary key (idclasse),
    foreign key(idetudiant) references etudiant(idetudiant)
);

create table professeur(
    idprofesseur int(3) not null auto_increment,
    nom varchar(50) not null,
    prenom varchar(50) not null,
    adresse varchar(50),
    salle varchar(50) not null,
    email varchar(50) not null,
    mdp varchar(50) not null,
    tel varchar(50),
    idclasse int(3) not null,
    idetudiant int(3) not null,
    primary key (idprofesseur),
    foreign key(idclasse) references classe(idclasse),
    foreign key(idetudiant) references etudiant(idetudiant)
);

create table matiere(
    idmatiere int(3) not null auto_increment,
    nomMatiere varchar(50) not null,
    salle varchar(50) not null,
    idetudiant int(3) not null,
    idprofesseur int(3) not null,
    primary key (idmatiere),
    foreign key(idetudiant) references etudiant(idetudiant),
    foreign key(idprofesseur) references professeur(idprofesseur)
);

create table user (
    iduser int(3) not null auto_increment,
    nom varchar(30),
    prenom varchar(30),
    email varchar(50),
    mdp varchar(255),
    role enum("admin", "user"),
    primary key(iduser)
);