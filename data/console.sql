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

CREATE PROCEDURE `INSERT_IMAGES`(IN IMG_NAME TEXT, IN IMG_DESC TEXT)
  BEGIN
    DECLARE `_rollback` BOOL DEFAULT 0;
    DECLARE CONTINUE HANDLER FOR SQLEXCEPTION SET `_rollback` = 1;
    START TRANSACTION;
    BEGIN
      INSERT INTO `images`(url, description) VALUES (IMG_NAME, IMG_DESC);
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
    SELECT * FROM tours INNER JOIN categories ON tours.Categories_idCategories = categories.idCategories INNER JOIN locations ON tours.Locations_idLocations = locations.idLocations WHERE tours.type = TD_TYPE;
  END $$

DELIMITER ;

CALL INSERT_CATEGORIES('TOUR ECOLÓGICO');

CALL INSERT_LOCATIONS('21.1437017','-86.9260116'); #CANCUN
CALL INSERT_LOCATIONS('21.2425466','-86.755116'); # ISLA MUJERES
CALL INSERT_LOCATIONS('20.4320275','-87.0143395'); # COZUMEL
CALL INSERT_LOCATIONS('21.5227804','-87.3879634'); # HOLBOX
CALL INSERT_LOCATIONS('18.6696524','-88.41682'); # BACALAR
CALL INSERT_LOCATIONS('18.6811901','-87.7503598'); # MAHAHUAL

CALL INSERT_IMAGES('isla_mujeres.jpg', 'Sin descripción');

CALL INSERT_A_NEW_TOUR('cancun', 'Cancún es una ciudad mexicana con playas paradisíacas de arena blanca y mar turquesa, acuarios para nadar con delfines, ruinas mayas a pocos pasos de tu hotel, islas con playas desiertas, un mar transparente lleno de vida para hacer snorkel y buceo, buena vida nocturna, una gastronomía única en el mundo y decenas de destinos cercanos para descubrir en la Riviera Maya.',860, 'MÉXICO', 5, 586, NOW(), 10, 1,1, 0);
CALL INSERT_A_NEW_TOUR('isla mujeres', 'Isla Mujeres es una isla que se localiza cruzando la bahía desde Basaseachi. Sus aguas tibias y transparentes son el hogar perfecto para los delfines y tortugas, y nadar con ellos es una de las más atractivas actividades que pueden realizarse aquí.!', 600, 'MÉXICO', 5, 423, NOW(), 10, 1,2,0);
CALL INSERT_A_NEW_TOUR('cozumel', 'Ubicada en el Caribe mexicano, Cozumel es una isla llana formada de roca caliza misma que proviene de los arrecifes. Los cenotes formados por la filtración de agua a través de la piedra caliza durante miles de años pueden ser explorados nadando o mediante actividades como el snorkel y el buceo; pueden apreciarse distintas especies marinas.', 455, 'MÉXICO', 5, 353, NOW(), 10, 1,3, 0);
CALL INSERT_A_NEW_TOUR('holbox', 'Al llegar a Holbox uno sabe que descubrió algo especial. Su nombre significa hoyo negro, aunque en realidad todo es verdor y transparencia. Entre selva y mar, la isla desborda encantos para todo tipo de viajeros. Recorre sus manglares en kayak, ten un encuentro cercano con el pez más grande del mundo y descubre por qué este destino es sinónimo de belleza, tranquilidad, aventura y placer.', 990, 'MÉXICO', 5, 723, NOW(), 10, 1,4, 0);
CALL INSERT_A_NEW_TOUR('bacalar', 'Bacalar es una pintoresca comunidad en la que amantes de la naturaleza, la aventura, la historia y las manifestaciones culturales encuentran un perfecto escenario.', 860, 'MÉXICO', 5, 923, NOW(), 10, 1,5, 0);
CALL INSERT_A_NEW_TOUR('mahahual', 'El pequeño pueblo pesquero de Mahahual será el lugar ideal para que goces de unas vacaciones de ensueño, sin preocupaciones y lejos de la vida tan ajetreada de las grandes urbes. Comienza el día navegando por la zona lagunar que nace del rompeolas formado por el arrecife. Sumérgete en sus aguas azul turquesa, bucea y descubre bellezas inimaginables.', 600, 'MÉXICO', 5, 235, NOW(), 10, 1,6, 0);

SELECT * from categories;
SELECT * from locations;
SELECT * from images;
SELECT * from tours;


CALL getAllDestinationsorTours(0);
