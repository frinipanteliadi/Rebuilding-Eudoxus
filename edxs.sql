-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema eudoxus
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema eudoxus
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `eudoxus` DEFAULT CHARACTER SET utf8 ;
USE `eudoxus` ;

-- -----------------------------------------------------
-- Table `eudoxus`.`User`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `eudoxus`.`User` (
  `id` INT NOT NULL,
  `name` VARCHAR(35) NOT NULL,
  `surname` VARCHAR(45) NOT NULL,
  `type` INT NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `eudoxus`.`Login`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `eudoxus`.`Login` (
  `email` VARCHAR(60) NOT NULL,
  `password` VARCHAR(20) NOT NULL,
  `type` INT NOT NULL,
  `User_id` INT NOT NULL,
  PRIMARY KEY (`email`),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC),
  INDEX `fk_Login_User1_idx` (`User_id` ASC),
  CONSTRAINT `fk_Login_User1`
    FOREIGN KEY (`User_id`)
    REFERENCES `eudoxus`.`User` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `eudoxus`.`Bookstore`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `eudoxus`.`Bookstore` (
  `id` INT NOT NULL,
  `name` VARCHAR(45) NOT NULL,
  `street` VARCHAR(45) NOT NULL,
  `User_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `name_UNIQUE` (`name` ASC),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `fk_Bookstore_User1_idx` (`User_id` ASC),
  CONSTRAINT `fk_Bookstore_User1`
    FOREIGN KEY (`User_id`)
    REFERENCES `eudoxus`.`User` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `eudoxus`.`Student`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `eudoxus`.`Student` (
  `id` INT NOT NULL,
  `university` VARCHAR(45) NOT NULL,
  `semester` INT NOT NULL,
  `User_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `fk_Student_User1_idx` (`User_id` ASC),
  CONSTRAINT `fk_Student_User1`
    FOREIGN KEY (`User_id`)
    REFERENCES `eudoxus`.`User` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `eudoxus`.`Book`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `eudoxus`.`Book` (
  `id` INT NOT NULL,
  `name` VARCHAR(45) NOT NULL,
  `author` VARCHAR(45) NOT NULL,
  `publication` VARCHAR(45) NOT NULL,
  `Bookstore_id` INT NOT NULL,
  `Bookstore_id1` INT NOT NULL,
  PRIMARY KEY (`id`, `Bookstore_id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  UNIQUE INDEX `name_UNIQUE` (`name` ASC),
  INDEX `fk_Book_Bookstore1_idx` (`Bookstore_id1` ASC),
  CONSTRAINT `fk_Book_Bookstore1`
    FOREIGN KEY (`Bookstore_id1`)
    REFERENCES `eudoxus`.`Bookstore` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `eudoxus`.`Student_has_Book`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `eudoxus`.`Student_has_Book` (
  `Student_id` INT NOT NULL,
  `Book_id` INT NOT NULL,
  `Book_Bookstore_id` INT NOT NULL,
  PRIMARY KEY (`Student_id`, `Book_id`, `Book_Bookstore_id`),
  INDEX `fk_Student_has_Book_Book1_idx` (`Book_id` ASC, `Book_Bookstore_id` ASC),
  INDEX `fk_Student_has_Book_Student1_idx` (`Student_id` ASC),
  CONSTRAINT `fk_Student_has_Book_Student1`
    FOREIGN KEY (`Student_id`)
    REFERENCES `eudoxus`.`Student` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Student_has_Book_Book1`
    FOREIGN KEY (`Book_id` , `Book_Bookstore_id`)
    REFERENCES `eudoxus`.`Book` (`id` , `Bookstore_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
