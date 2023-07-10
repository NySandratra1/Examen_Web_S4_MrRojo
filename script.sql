CREATE DATABASE Regime;
Use Regime;
create table Membre(
    id_membre int PRIMARY KEY AUTO_INCREMENT,
    nom Varchar(20),
    mdp Varchar(15),
    poids Decimal(10,4),
    genre int,
    taille Decimal(10,2)
);
create table Tresorerie(
    id_tresorerie int  PRIMARY KEY AUTO_INCREMENT,
    montant Decimal(10,3)
);
create table Comptes(
    id_compte int PRIMARY KEY AUTO_INCREMENT,
    montant Decimal(10,3)
);
create table Code(
    num_code Varchar(15) PRIMARY KEY,
    montant Decimal(10,3)
);

create table Codeinvalide(
    id_membre int,
    num_code Varchar(15),
    FOREIGN KEY (id_membre) REFERENCES Membre (id_membre),
    FOREIGN KEY  (num_code) REFERENCES Code (num_code)
);

create table Attente(
    id_membre int,
    num_code Varchar(15),
    FOREIGN KEY (id_membre) REFERENCES Membre(id_membre),
    FOREIGN KEY (num_code) REFERENCES Code(num_code)
);
create table Regime(
    Repas Varchar(50),
    num_regime int
);
create table Sport(
    id_sport int PRIMARY KEY AUTO_INCREMENT,
    nom_sport Varchar(50)
);
create table Association(
    id_association int PRIMARY KEY AUTO_INCREMENT,
    id_sport int,
    num_regime int,
    duree_mensuelle int,
    intervalle1 int,
    intervalle2 int,
    objectif Varchar(15), 
    prix Decimal(10,3),
    FOREIGN KEY (id_sport) REFERENCES Sport(id_sport)
);
create table Suivi_de_poids(
    id_membre int not null,
    date_pesee date,
    poids Decimal(10,3),
    FOREIGN key(id_membre) REFERENCES Membre(id_membre)
);

insert into regime values('Vary sy anana',1);
insert into regime values('Jus de carotte',1);
insert into regime values('Hena mena',1);
insert into regime values('Madeleine',2);
insert into regime values('Chocolat',2);
insert into regime values('Ronono',2);
insert into regime values('Fruit',3);
insert into regime values('Pain',3);
insert into regime values('Yaourt',3);
insert into regime values('Tsaramaso',5);
insert into regime values('Hena fotsy',5);
insert into regime values('Legume haut',5);
insert into regime values('Trondro',4);
insert into regime values('Legume bas',4);
insert into regime values('Jus de persil',6);
insert into regime values('Voanjo',6);
insert into regime values('Atody',6);

insert into sport values(default,'velo');
insert into sport values(default,'nager');
insert into sport values(default,'courrir');
insert into sport values(default,'marcher');
insert into sport values(default,'developpee coucher');
insert into sport values(default,'squat');
insert into sport values(default,'parallele');
insert into sport values(default,'traction');

insert into Association values(default,1,4,1,1,3,'perte',35000);
insert into Association values(default,2,5,1,4,6,'perte',50000);
insert into Association values(default,3,6,2,7,10,'perte',60000);
insert into Association values(default,4,5,3,11,12,'perte',70000);
insert into Association values(default,5,1,1,1,2,'gain',60000);
insert into Association values(default,6,2,2,3,4,'gain',80000);
insert into Association values(default,7,3,3,3,4,'gain',70000);
insert into Association values(default,8,3,4,4,5,'gain',80000);

create view vDetailRepas as
    select a.id_association,r.repas,s.nom_sport,a.objectif,a.prix from Association as a 
    join regime as r on a.num_regime = r.num_regime
    join sport as s on a.id_sport = s.id_sport
    order by r.num_regime,a.objectif,a.id_association
;

select * from regime;