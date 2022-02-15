# création de la table ville
CREATE TABLE ville
(
    id          int(11) not null AUTO_INCREMENT, # on précise que id va s'autoincrémenter
    nom         char(50),
    superficie  int(11),
    code_postal int(11),
    PRIMARY KEY (`id`) # on lui dit que id est une clé primaire
);

CREATE TABLE joueur
(
    id         int(11) not null AUTO_INCREMENT,
    nom        char(50),
    prenom     char(50),
    profession char(50),
    age        int(11),
    ville      int(11),
    PRIMARY KEY (`id`)
);

# on insere des enregistrement dans notre base
INSERT INTO ville (nom, superficie, code_postal)
VALUES ("sete", 10, 34200),
       ("mpl", 11, 34),
       ("nimes", 5, 30);

INSERT INTO joueur (nom, prenom, age, profession, ville)
VALUES ("baby", "boss", 1, "tennisman", 34343),
       ("snoop", "cat", 10, "foot", 1),
       ("tar", "tuffe", 99, "pétanqueur", 3),
       ("mas", "jeanne", 123, "retraite", 2),
       ("la taupe", "renné", 689, "nageur", 2);


# affiche toutes les villes
select * from ville;

select * from joueur where id = 4;

# variante en utilisant des alias et une jointure entre joueur et ville
select * from joueur j
inner join ville v on j.id = v.id
where j.id = 4;