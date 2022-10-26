DROP TABLE IF EXISTS prices;
CREATE TABLE IF NOT EXISTS prices
(
    id                     TINYINT      UNSIGNED NOT NULL AUTO_INCREMENT,
    peperroni_pizza        DECIMAL(9,2) UNSIGNED NOT NULL,
    mushroom_pizza         DECIMAL(9,2) UNSIGNED NOT NULL,
	french_fries        	DECIMAL(9,2) UNSIGNED NOT NULL,
	coleslaw          		DECIMAL(9,2) UNSIGNED NOT NULL,
	green_tea          		DECIMAL(9,2) UNSIGNED NOT NULL,
	coke       	  			DECIMAL(9,2) UNSIGNED NOT NULL,
   

    PRIMARY KEY (id)
);

DROP TABLE IF EXISTS sales;
CREATE TABLE IF NOT EXISTS sales
(
    id                              INT          UNSIGNED           NOT NULL AUTO_INCREMENT,
    peperroni_pizza             	SMALLINT     UNSIGNED DEFAULT 0 NOT NULL,
    mushroom_pizza                	SMALLINT     UNSIGNED DEFAULT 0 NOT NULL,
	french_fries                	SMALLINT     UNSIGNED DEFAULT 0 NOT NULL,
	coleslaw	                	SMALLINT     UNSIGNED DEFAULT 0 NOT NULL,
	green_tea                		SMALLINT     UNSIGNED DEFAULT 0 NOT NULL,
	coke	                		SMALLINT     UNSIGNED DEFAULT 0 NOT NULL,
    total                           DECIMAL(9,2) UNSIGNED DEFAULT 0 NOT NULL,

    PRIMARY KEY (id)
);

DROP TABLE IF EXISTS particulars;
CREATE TABLE IF NOT EXISTS particulars
(
    id                     	TINYINT  UNSIGNED NOT NULL AUTO_INCREMENT,
    name       				VARCHAR(30),
	email       			VARCHAR(30),
    credit_card_number      INT UNSIGNED DEFAULT 0 NOT NULL,
	cvv        				SMALLINT UNSIGNED DEFAULT 0 NOT NULL,
   

    PRIMARY KEY (id)
);


INSERT INTO prices
	VALUES
		(1, 15.00, 20.00, 6.00, 4.00, 2.00,2.00);
		