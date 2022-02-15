# ------------------------------
# BASE DE DONNÉES
# ------------------------------
# Création
CREATE DATABASE IF NOT EXISTS `nom_de_ma_base` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;


# Utilisation
USE `nom_de_ma_base`;

# Suppression
DROP DATABASE IF EXISTS `nom_de_ma_base`;



# ------------------------------
# TABLE (ENTITÉ)
# ------------------------------
# Création
CREATE TABLE IF NOT EXISTS `robe`
(
    `id`  INT(11)     NOT NULL,
    `nom` VARCHAR(50) NOT NULL DEFAULT ""
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8;


# Création avec actions combinées
CREATE TABLE IF NOT EXISTS `cheval`
(
    `num_enregistrement` INT(11) NOT NULL AUTO_INCREMENT,
    `date_naissance`     DATE    NOT NULL DEFAULT "0000-00-00",
    PRIMARY KEY (`num_enregistrement`)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8;