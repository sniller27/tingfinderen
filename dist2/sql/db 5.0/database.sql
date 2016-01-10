-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema somethi1_tingfinderdb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema somethi1_tingfinderdb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `somethi1_tingfinderdb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `somethi1_tingfinderdb` ;

-- -----------------------------------------------------
-- Table `somethi1_tingfinderdb`.`zipcodes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `somethi1_tingfinderdb`.`zipcodes` (
  `idzipcodes` INT NOT NULL,
  `Cityname` VARCHAR(45) NULL,
  `Region` VARCHAR(45) NULL,
  PRIMARY KEY (`idzipcodes`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `somethi1_tingfinderdb`.`pickupaddresses`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `somethi1_tingfinderdb`.`pickupaddresses` (
  `iddeliveryaddresses` INT NOT NULL AUTO_INCREMENT,
  `addressname` VARCHAR(70) NULL,
  PRIMARY KEY (`iddeliveryaddresses`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `somethi1_tingfinderdb`.`orders`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `somethi1_tingfinderdb`.`orders` (
  `idorders` INT NOT NULL AUTO_INCREMENT,
  `date` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` ENUM('ikke sendt', 'sendt') NULL,
  `deliveryaddresses_iddeliveryaddresses` INT NULL,
  PRIMARY KEY (`idorders`),
  INDEX `fk_orders_deliveryaddresses1_idx` (`deliveryaddresses_iddeliveryaddresses` ASC),
  CONSTRAINT `fk_orders_deliveryaddresses1`
    FOREIGN KEY (`deliveryaddresses_iddeliveryaddresses`)
    REFERENCES `somethi1_tingfinderdb`.`pickupaddresses` (`iddeliveryaddresses`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `somethi1_tingfinderdb`.`billinginformation`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `somethi1_tingfinderdb`.`billinginformation` (
  `idshippinginformation` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NULL,
  `lastname` VARCHAR(100) NULL,
  `address` VARCHAR(45) NULL,
  `mail` VARCHAR(100) NULL,
  `zipcodes_idzipcodes` INT NOT NULL,
  `orders_idorders` INT NOT NULL,
  PRIMARY KEY (`idshippinginformation`),
  INDEX `fk_shippinginformation_zipcodes1_idx` (`zipcodes_idzipcodes` ASC),
  INDEX `fk_shippinginformation_orders1_idx` (`orders_idorders` ASC),
  CONSTRAINT `fk_shippinginformation_zipcodes1`
    FOREIGN KEY (`zipcodes_idzipcodes`)
    REFERENCES `somethi1_tingfinderdb`.`zipcodes` (`idzipcodes`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_shippinginformation_orders1`
    FOREIGN KEY (`orders_idorders`)
    REFERENCES `somethi1_tingfinderdb`.`orders` (`idorders`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `somethi1_tingfinderdb`.`productcategory`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `somethi1_tingfinderdb`.`productcategory` (
  `idproductcategory` INT NOT NULL AUTO_INCREMENT,
  `categoryname` VARCHAR(45) NULL,
  PRIMARY KEY (`idproductcategory`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `somethi1_tingfinderdb`.`products`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `somethi1_tingfinderdb`.`products` (
  `idproducts` INT NOT NULL AUTO_INCREMENT,
  `productname` VARCHAR(60) NULL,
  `productdescription` TEXT(2000) NULL,
  `stock` INT NULL,
  `price` INT NULL,
  `date` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `mainimage` VARCHAR(100) NULL,
  `productcategory_idproductcategory` INT NOT NULL,
  PRIMARY KEY (`idproducts`),
  INDEX `fk_products_productcategory1_idx` (`productcategory_idproductcategory` ASC),
  CONSTRAINT `fk_products_productcategory1`
    FOREIGN KEY (`productcategory_idproductcategory`)
    REFERENCES `somethi1_tingfinderdb`.`productcategory` (`idproductcategory`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `somethi1_tingfinderdb`.`orders_has_products`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `somethi1_tingfinderdb`.`orders_has_products` (
  `orders_idorders` INT NOT NULL,
  `products_idproducts` INT NOT NULL,
  `quantity` INT NULL,
  PRIMARY KEY (`orders_idorders`, `products_idproducts`),
  INDEX `fk_orders_has_products_products1_idx` (`products_idproducts` ASC),
  INDEX `fk_orders_has_products_orders_idx` (`orders_idorders` ASC),
  CONSTRAINT `fk_orders_has_products_orders`
    FOREIGN KEY (`orders_idorders`)
    REFERENCES `somethi1_tingfinderdb`.`orders` (`idorders`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_orders_has_products_products1`
    FOREIGN KEY (`products_idproducts`)
    REFERENCES `somethi1_tingfinderdb`.`products` (`idproducts`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `somethi1_tingfinderdb`.`productimages`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `somethi1_tingfinderdb`.`productimages` (
  `idproductimages` INT NOT NULL AUTO_INCREMENT,
  `products_idproducts` INT NOT NULL,
  `imagesource` VARCHAR(100) NULL,
  PRIMARY KEY (`idproductimages`),
  INDEX `fk_productimages_products1_idx` (`products_idproducts` ASC),
  CONSTRAINT `fk_productimages_products1`
    FOREIGN KEY (`products_idproducts`)
    REFERENCES `somethi1_tingfinderdb`.`products` (`idproducts`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `somethi1_tingfinderdb`.`admin`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `somethi1_tingfinderdb`.`admin` (
  `idadmin` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(100) NULL,
  `password` VARCHAR(200) NULL,
  `adminname` VARCHAR(45) NULL,
  `rights` ENUM('semiadmin', 'admin') NULL,
  PRIMARY KEY (`idadmin`),
  UNIQUE INDEX `username_UNIQUE` (`username` ASC))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
