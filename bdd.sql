SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

DROP SCHEMA IF EXISTS `mydb` ;


CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;


DROP TABLE IF EXISTS `mydb`.`membre` ;

CREATE TABLE IF NOT EXISTS `mydb`.`membre` (
  `id` INT NOT NULL,
  `Prénom` VARCHAR(45) NOT NULL,
  `nom_de_famille` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `adresse postale` VARCHAR(45) NOT NULL,
  `solde` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


DROP TABLE IF EXISTS `mydb`.`restaurateurs` ;

CREATE TABLE IF NOT EXISTS `mydb`.`restaurateurs` (
  `restaurateurs_id` INT NOT NULL,
  `restaurateur_nom` VARCHAR(45) NOT NULL,
  `restaurateurs_logo` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `` VARCHAR(45) NULL,
  `Menu_menu_id` INT NOT NULL,
  PRIMARY KEY (`restaurateurs_id`, `Menu_menu_id`),
  INDEX `fk_restaurateurs_Menu1_idx` (`Menu_menu_id` ASC) VISIBLE,
  CONSTRAINT `fk_restaurateurs_Menu1`
    FOREIGN KEY (`Menu_menu_id`)
    REFERENCES `mydb`.`Menu` (`menu_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


DROP TABLE IF EXISTS `mydb`.`platArticle` ;

CREATE TABLE IF NOT EXISTS `mydb`.`platArticle` (
  `plat_id` INT NOT NULL,
  `nom` VARCHAR(45) NOT NULL,
  `prix` VARCHAR(45) NOT NULL,
  `restaurateurs_restaurateurs_id` INT NOT NULL,
  PRIMARY KEY (`plat_id`, `restaurateurs_restaurateurs_id`),
  INDEX `fk_plateArticle_restaurateurs1_idx` (`restaurateurs_restaurateurs_id` ASC) VISIBLE,
  CONSTRAINT `fk_plateArticle_restaurateurs1`
    FOREIGN KEY (`restaurateurs_restaurateurs_id`)
    REFERENCES `mydb`.`restaurateurs` (`restaurateurs_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


DROP TABLE IF EXISTS `mydb`.`Menu` ;

CREATE TABLE IF NOT EXISTS `mydb`.`Menu` (
  `menu_id` INT NOT NULL,
  `prix` VARCHAR(45) NOT NULL,
  `plat_id` VARCHAR(45) NOT NULL,
  `platArticle_plat_id` INT NOT NULL,
  `platArticle_restaurateurs_restaurateurs_id` INT NOT NULL,
  PRIMARY KEY (`menu_id`, `platArticle_plat_id`, `platArticle_restaurateurs_restaurateurs_id`),
  INDEX `fk_Menu_plateArticle1_idx` (`platArticle_plat_id` ASC, `platArticle_restaurateurs_restaurateurs_id` ASC) VISIBLE,
  CONSTRAINT `fk_Menu_plateArticle1`
    FOREIGN KEY (`platArticle_plat_id` , `platArticle_restaurateurs_restaurateurs_id`)
    REFERENCES `mydb`.`platArticle` (`plat_id` , `restaurateurs_restaurateurs_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



DROP TABLE IF EXISTS `mydb`.`Commande` ;

CREATE TABLE IF NOT EXISTS `mydb`.`Commande` (
  `id` INT NOT NULL,
  `commande_date` VARCHAR(45) NOT NULL,
  `membre_id` VARCHAR(45) NOT NULL,
  `quantitie` VARCHAR(45) NOT NULL,
  `reception` VARCHAR(45) NOT NULL,
  `membre_id1` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Commande_membre_idx` (`membre_id1` ASC) VISIBLE,
  CONSTRAINT `fk_Commande_membre`
    FOREIGN KEY (`membre_id1`)
    REFERENCES `mydb`.`membre` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


DROP TABLE IF EXISTS `mydb`.`articleDeCommande` ;

CREATE TABLE IF NOT EXISTS `mydb`.`articleDeCommande` (
  `quantité` VARCHAR(45) NOT NULL,
  `prix` VARCHAR(45) NOT NULL,
  `Commande_id` INT NOT NULL,
  PRIMARY KEY (`Commande_id`),
  CONSTRAINT `fk_articleDeCommande_Commande1`
    FOREIGN KEY (`Commande_id`)
    REFERENCES `mydb`.`Commande` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


DROP TABLE IF EXISTS `mydb`.`administrateur` ;

CREATE TABLE IF NOT EXISTS `mydb`.`administrateur` (
  `admin_id` INT NOT NULL,
  `prenom` VARCHAR(45) NOT NULL,
  `nom_de_famille` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`admin_id`))
ENGINE = InnoDB;


DROP TABLE IF EXISTS `mydb`.`Login` ;

CREATE TABLE IF NOT EXISTS `mydb`.`Login` (
  `id` INT NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `membre_id` INT NOT NULL,
  PRIMARY KEY (`id`, `membre_id`),
  INDEX `fk_Login_membre1_idx` (`membre_id` ASC) VISIBLE,
  CONSTRAINT `fk_Login_membre1`
    FOREIGN KEY (`membre_id`)
    REFERENCES `mydb`.`membre` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
