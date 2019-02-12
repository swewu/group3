-- MySQL Script generated by MySQL Workbench
-- 02/07/19 13:56:14
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema sweregrade
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `sweregrade` ;

-- -----------------------------------------------------
-- Schema sweregrade
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `sweregrade` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `sweregrade` ;

-- -----------------------------------------------------
-- Table `sweregrade`.`student`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sweregrade`.`student` ;

CREATE TABLE IF NOT EXISTS `sweregrade`.`student` (
  `studentid` INT(10) NOT NULL AUTO_INCREMENT,
  `studentname` VARCHAR(200) NOT NULL,
  PRIMARY KEY (`studentid`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sweregrade`.`course`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sweregrade`.`course` ;

CREATE TABLE IF NOT EXISTS `sweregrade`.`course` (
  `courseid` VARCHAR(20) NOT NULL,
  `coursename` VARCHAR(200) NULL,
  PRIMARY KEY (`courseid`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sweregrade`.`historygrade`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sweregrade`.`historygrade` ;

CREATE TABLE IF NOT EXISTS `sweregrade`.`historygrade` (
  `historyid` INT(10) NOT NULL AUTO_INCREMENT,
  `term` INT(3) NOT NULL,
  `year` INT(5) NOT NULL,
  `grade` VARCHAR(3) NOT NULL,
  `studentid` INT(10) NOT NULL,
  `courseid` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`historyid`),
  INDEX `fk_historygrade_student_idx` (`studentid` ASC),
  INDEX `fk_historygrade_course1_idx` (`courseid` ASC),
  CONSTRAINT `fk_historygrade_student`
    FOREIGN KEY (`studentid`)
    REFERENCES `sweregrade`.`student` (`studentid`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_historygrade_course1`
    FOREIGN KEY (`courseid`)
    REFERENCES `sweregrade`.`course` (`courseid`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sweregrade`.`regrade`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sweregrade`.`regrade` ;

CREATE TABLE IF NOT EXISTS `sweregrade`.`regrade` (
  `gradeid` INT(10) NOT NULL AUTO_INCREMENT,
  `term` INT(3) NOT NULL,
  `year` INT(5) NOT NULL,
  `grade` VARCHAR(3) NOT NULL,
  `studentid` INT(10) NOT NULL,
  `courseid` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`gradeid`),
  INDEX `fk_regrade_student1_idx` (`studentid` ASC),
  INDEX `fk_regrade_course1_idx` (`courseid` ASC),
  CONSTRAINT `fk_regrade_student1`
    FOREIGN KEY (`studentid`)
    REFERENCES `sweregrade`.`student` (`studentid`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_regrade_course1`
    FOREIGN KEY (`courseid`)
    REFERENCES `sweregrade`.`course` (`courseid`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sweregrade`.`user`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sweregrade`.`user` ;

CREATE TABLE IF NOT EXISTS `sweregrade`.`user` (
  `userid` INT(10) ZEROFILL NOT NULL,
  `username` VARCHAR(45) NOT NULL,
  `password` VARCHAR(200) NOT NULL,
  `role` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`userid`))
ENGINE = InnoDB;
