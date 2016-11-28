DELIMITER ;
USE `natural_travel`;

DROP PROCEDURE IF EXISTS `INSERT_CATEGORIES`;
DROP PROCEDURE IF EXISTS `INSERT_LOCATIONS`;
DROP PROCEDURE IF EXISTS `INSERT_IMAGES`;
DROP PROCEDURE IF EXISTS `INSERT_A_NEW_TOUR`;
DROP PROCEDURE IF EXISTS `getAllDestinationsorTours`;

DELIMITER $$
-- ---------------------------------------------------------
-- INSERT A NEW CATEGORY
-- ---------------------------------------------------------

CREATE PROCEDURE `INSERT_CATEGORIES`(IN CAT_NAME VARCHAR(45))
  BEGIN
     DECLARE `_rollback` BOOL DEFAULT 0;
    DECLARE CONTINUE HANDLER FOR SQLEXCEPTION SET `_rollback` = 1;
    START TRANSACTION;
    BEGIN
      INSERT INTO `categories`(cat_name) VALUES (CAT_NAME);
      IF `_rollback` THEN
        ROLLBACK ;
        SELECT 'ERROR' AS 'MESSAGE';
      ELSE
        COMMIT ;
        SELECT 'OK' AS 'MESSAGE';
      END IF ;
    END ;
  END $$

-- ---------------------------------------------------------
-- INSERT A NEW LOCATION
-- ---------------------------------------------------------

CREATE PROCEDURE `INSERT_LOCATIONS`(IN LOC_LON VARCHAR(45), IN LOC_LAT VARCHAR(45))
  BEGIN
     DECLARE `_rollback` BOOL DEFAULT 0;
    DECLARE CONTINUE HANDLER FOR SQLEXCEPTION SET `_rollback` = 1;
    START TRANSACTION;
    BEGIN
      INSERT INTO `locations`(longitude, latitude) VALUES (LOC_LON, LOC_LAT);
      IF `_rollback` THEN
        ROLLBACK ;
        SELECT 'ERROR' AS 'MESSAGE';
      ELSE
        COMMIT ;
        SELECT 'OK' AS 'MESSAGE';
      END IF ;
    END ;
  END $$

-- ---------------------------------------------------------
-- INSERT A NEW IMAGE
-- ---------------------------------------------------------

CREATE PROCEDURE `INSERT_IMAGES`(IN IMG_NAME TEXT, IN IMG_DESC TEXT, IN IMG_IDTOUR INT)
  BEGIN
    DECLARE `_rollback` BOOL DEFAULT 0;
    DECLARE CONTINUE HANDLER FOR SQLEXCEPTION SET `_rollback` = 1;
    START TRANSACTION;
    BEGIN
      INSERT INTO `images`(url, description, Tours_idTours) VALUES (IMG_NAME, IMG_DESC, IMG_IDTOUR);
      IF `_rollback` THEN
        ROLLBACK ;
        SELECT 'ERROR' AS 'MESSAGE';
      ELSE
        COMMIT ;
        SELECT 'OK' AS 'MESSAGE';
      END IF ;
    END ;
  END $$

-- ---------------------------------------------------------
-- INSERT A NEW IMAGE
-- ---------------------------------------------------------

CREATE PROCEDURE `INSERT_INCLUDES`(IN INC_NAME TEXT, IN INC_DESC TEXT, IN INC_IDTOUR INT)
  BEGIN
    DECLARE `_rollback` BOOL DEFAULT 0;
    DECLARE CONTINUE HANDLER FOR SQLEXCEPTION SET `_rollback` = 1;
    START TRANSACTION;
    BEGIN
      INSERT INTO `includes`(name, description, Tours_idTours) VALUES (INC_NAME, INC_DESC, INC_IDTOUR);
      IF `_rollback` THEN
        ROLLBACK ;
        SELECT 'ERROR' AS 'MESSAGE';
      ELSE
        COMMIT ;
        SELECT 'OK' AS 'MESSAGE';
      END IF ;
    END ;
  END $$



-- ---------------------------------------------------------
-- INSERT A NEW TOUR
-- ---------------------------------------------------------

CREATE PROCEDURE `INSERT_A_NEW_TOUR`(
  IN TOUR_NAME VARCHAR(30), IN TOUR_DESCRIPTION TEXT, IN TOUR_PRICE DOUBLE,
  IN TOUR_CITY VARCHAR(50), IN TOUR_RATING INT, IN TOUR_REVIEWS INT, IN TOUR_DATE DATETIME,
  IN TOUR_DISCCOUNT DOUBLE, IN TOUR_ID_CATEGORIES INT, IN TOUR_ID_LOCATIONS INT, IN TD_TYPE INT
)
BEGIN
  DECLARE `_rollback` BOOL DEFAULT 0;
  DECLARE CONTINUE HANDLER FOR SQLEXCEPTION SET `_rollback` = 1;
  START TRANSACTION;
  BEGIN
    INSERT INTO `tours`(name, description, price, city, rating, reviews, date, disccount, Categories_idCategories, Locations_idLocations, type)
      VALUES (TOUR_NAME, TOUR_DESCRIPTION, TOUR_PRICE, TOUR_CITY, TOUR_RATING, TOUR_REVIEWS, TOUR_DATE, TOUR_DISCCOUNT, TOUR_ID_CATEGORIES, TOUR_ID_LOCATIONS, TD_TYPE);
    IF `_rollback` THEN
      ROLLBACK ;
      SELECT 'ERROR' AS 'MESSAGE';
    ELSE
      COMMIT ;
      SELECT 'OK' AS 'MESSAGE';
    END IF ;
  END ;
END $$

CREATE PROCEDURE `getAllDestinationsorTours`( IN TD_TYPE INT)
  BEGIN
    IF TD_TYPE = 10 THEN
      SELECT * FROM tours INNER JOIN categories ON tours.Categories_idCategories = categories.idCategories INNER JOIN locations ON tours.Locations_idLocations = locations.idLocations;
    ELSE
      SELECT * FROM tours INNER JOIN categories ON tours.Categories_idCategories = categories.idCategories INNER JOIN locations ON tours.Locations_idLocations = locations.idLocations WHERE tours.type = TD_TYPE;
    END IF ;
  END $$

CREATE PROCEDURE `getAllDestinationsName`( IN TD_NAME VARCHAR(45))
  BEGIN
    SELECT * FROM tours INNER JOIN categories ON tours.Categories_idCategories = categories.idCategories INNER JOIN locations ON tours.Locations_idLocations = locations.idLocations WHERE tours.name LIKE CONCAT('%', TD_NAME, '%');
  END $$

CREATE PROCEDURE `getAllINCLUDES`( IN INC_IDTOUR INT)
  BEGIN
    SELECT * FROM includes WHERE includes.Tours_idTours = INC_IDTOUR;
  END $$
