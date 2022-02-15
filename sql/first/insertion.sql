# INSERTION
INSERT INTO `cheval` (`libelle`)
VALUES ("SuperAdmin");


INSERT INTO `rang` (`id`, `libelle`)
VALUES (12, "Invité");



INSERT INTO `roles` (`nom`)
VALUES ("admin"),
       ("invite");

# roles
#
# id 		nom
# 1 		admin
# 2		invite


INSERT INTO `user` (`login`, `prenom`, `date_inscription`, `roles_fk`)
VALUES ("the_boss_du_34", "Moi et moi seul", "2020-03-07 11:46:56", 1),
       ("the_subboss_du_34", "L'autre", NOW(), 2),
       ("the_subboss_du_34", "L'autre 2", NOW(), 2);


# Suppression dans une table " joueur " l'enregistrement numéro 5
DELETE FROM joueur where id = 5;


# MODIFICATION
# Tous les chevaux ayant le rang > 3 vont avoir le rang 3
UPDATE `cheval` SET `rang_id` = 3 WHERE `rang_id` > 3;

# Tous les chevaux vont avoir le rang = 3 (Attention c'est dangereux car on modifie tous les cheveaux car il n'y a aucune condition)
UPDATE `cheval` SET `rang_id` = 3;

# SUPPRESSION
DELETE FROM `user` WHERE `prenom`="L'autre" OR `prenom`="L'autre 2";