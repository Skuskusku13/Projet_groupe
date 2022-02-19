drop database if exists groupe_cfa_250;
create database groupe_cfa_250;
use groupe_cfa_250;

create table classe(
    idclasse int(3) not null auto_increment,
    nomClasse varchar(50) not null,
    salle varchar(50) not null,
    diplome varchar(50),
    nbEtudiants int(3) not null,
    primary key (idclasse)
);

create table etudiant(
    idetudiant int(3) not null auto_increment,
    nom varchar(50) not null,
    prenom varchar(50) not null,
    adresse varchar(50),
    email varchar(50) not null,
    mdp varchar(50) not null,
    tel varchar(50),
    idclasse int(3) not null,
    primary key (idetudiant),
    foreign key(idclasse) references classe(idclasse)
);

create table professeur(
    idprofesseur int(3) not null auto_increment,
    nom varchar(50) not null,
    prenom varchar(50) not null,
    email varchar(50) not null,
    mdp varchar(50) not null,
    tel varchar(50),
    primary key (idprofesseur)
);

create table matiere(
    idmatiere int(3) not null auto_increment,
    nomMatiere varchar(50) not null,
    coef int(2) not null,
    nbHeures int(3) not null,
    idclasse int(3) not null,
    idprofesseur int(3) not null,
    primary key (idmatiere),
    foreign key(idclasse) references classe(idclasse),
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

/******** classe *********/
insert into classe values (null, "Promo 250", "Salle 4", "BTS SIO SLAM", 26);
insert into classe values (null, "Promo 245", "Salle 3", "BTS SIO SISR", 25);
insert into classe values (null, "Promo 242", "Salle 2", "BTS SIO SLAM", 23);
insert into classe values (null, "Promo 241", "Salle 1", "BTS SIO SISR", 24);

/******** etudiant *********/
insert into etudiant values (null, "LEVY", "Dan", "Paris","Levy@gmail.com", "dl123", "0758965896", 1);
insert into etudiant values (null, "AKILAL", "Amazigh", "Montmagny", "akil@gmail.com", "aa123", "0578469255", 1);
insert into etudiant values (null, "GUENDOUZI", "Mehdi", "Nanterre", "Guen@gmail.com", "gm123", "0548796581", 2);
insert into etudiant values (null, "CHARDON", "Julia", "Paris", "Char@gmail.com", "cj123", "0625487568", 2);

/******** professeur *********/
insert into professeur values (null, "NOEL", "Guillaume","Noel@gmail.com", "ng123", "0754856996");
insert into professeur values (null, "OKACHA", "Ben Ahmed", "Okac@gmail.com", "ob123", "0548689525");
insert into professeur values (null, "MAION ", "Nicole", "Maio@gmail.com", "mn123", "0557849681");
insert into professeur values (null, "SEDIKHI", "J.Philippe", "Sedh@gmail.com", "sj123", "05689624568");

/******** matiere *********/
insert into matiere values (null, "Info", 4, 8, 2, 2);
insert into matiere values (null, "Maths", 2, 2, 4, 1);
insert into matiere values (null, "Français", 1, 2, 3, 3);
insert into matiere values (null, "AEMJSI", 3, 3, 4, 4);

/******** admin et user *********/
insert into user values (null, "LEVY", "Dan", "a@gmail.com", "123", "admin"), (null, "AKILAL", "Amazigh", "b@gmail.com", "456", "user");