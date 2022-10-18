DROP TABLE IF EXISTS prices;
CREATE TABLE IF NOT EXISTS prices
(
    id                     TINYINT      UNSIGNED NOT NULL AUTO_INCREMENT,
    peperroni_pizza        DECIMAL(9,2) UNSIGNED NOT NULL,
    cheese_pizza           DECIMAL(9,2) UNSIGNED NOT NULL,
   

    PRIMARY KEY (id)
);

DROP TABLE IF EXISTS sales;
CREATE TABLE IF NOT EXISTS sales
(
    id                              INT          UNSIGNED           NOT NULL AUTO_INCREMENT,
    peperroni_pizza_qty             SMALLINT     UNSIGNED DEFAULT 0 NOT NULL,
    peperroni_pizza_price           DECIMAL(9,2) UNSIGNED DEFAULT 0 NOT NULL,
    cheese_pizza_qty                SMALLINT     UNSIGNED DEFAULT 0 NOT NULL,
    cheese_pizza_price              DECIMAL(9,2) UNSIGNED DEFAULT 0 NOT NULL,
    total                           DECIMAL(9,2) UNSIGNED DEFAULT 0 NOT NULL,

    PRIMARY KEY (id)
);

INSERT INTO prices
	VALUES
		(1, 15.00, 20.00);
