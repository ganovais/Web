-- -----------------------------------------------------
-- Table `library`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `library`.`users` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `email_verified_at` TIMESTAMP(1) NULL,
  `password` VARCHAR(255) NOT NULL,
  `is_customer` TINYINT(1) UNSIGNED NOT NULL DEFAULT 1,
  `remember_token` VARCHAR(100) NULL,
  `created_at` TIMESTAMP(1) NULL,
  `updated_at` TIMESTAMP(1) NULL,
  `deleted_at` TIMESTAMP(1) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `library`.`password_resets`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `library`.`password_resets` (
  `email` VARCHAR(255) NOT NULL,
  `token` VARCHAR(255) NOT NULL,
  `created_at` TIMESTAMP(1) NULL)
ENGINE = InnoDB;
-- -----------------------------------------------------
-- Table `library`.`authors`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `library`.`authors` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `about` TEXT(1) NOT NULL,
  `age` INT NULL,
  `created_at` TIMESTAMP(1) NULL,
  `updated_at` TIMESTAMP(1) NULL,
  `deleted_at` TIMESTAMP(1) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `library`.`books`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `library`.`books` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(255) NOT NULL,
  `description` TEXT(1) NULL,
  `author_id` INT UNSIGNED NOT NULL,
  `created_at` TIMESTAMP(1) NULL,
  `updated_at` TIMESTAMP(1) NULL,
  `deleted_at` TIMESTAMP(1) NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_books_authors1_idx` (`author_id` ASC),
  CONSTRAINT `fk_books_authors1`
    FOREIGN KEY (`author_id`)
    REFERENCES `library`.`authors` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `library`.`genders`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `library`.`genders` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `created_at` TIMESTAMP(1) NULL,
  `updated_at` TIMESTAMP(1) NULL,
  `deleted_at` TIMESTAMP(1) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `library`.`book_gender`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `library`.`book_gender` (
  `book_id` INT UNSIGNED NOT NULL,
  `gender_id` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`book_id`, `gender_id`),
  INDEX `fk_books_has_genders_genders1_idx` (`gender_id` ASC),
  INDEX `fk_books_has_genders_books_idx` (`book_id` ASC),
  CONSTRAINT `fk_books_has_genders_books`
    FOREIGN KEY (`book_id`)
    REFERENCES `library`.`books` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_books_has_genders_genders1`
    FOREIGN KEY (`gender_id`)
    REFERENCES `library`.`genders` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `library`.`images`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `library`.`images` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `imageable_type` VARCHAR(45) NULL,
  `imageable_id` INT NULL,
  `path` VARCHAR(255) NULL,
  `category` VARCHAR(100) NULL,
  `created_at` TIMESTAMP(1) NULL,
  `updated_at` TIMESTAMP(1) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `library`.`configs`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `library`.`configs` (
  `key` VARCHAR(255) NOT NULL,
  `value` TEXT(1) NULL)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `library`.`banners`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `library`.`banners` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(255) NULL,
  `description` VARCHAR(255) NULL,
  `created_at` TIMESTAMP(1) NULL,
  `updated_at` TIMESTAMP(1) NULL,
  `deleted_at` TIMESTAMP(1) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;