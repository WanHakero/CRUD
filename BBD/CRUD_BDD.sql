

CREATE DATABASE crud;

CREATE TABLE langue
(
	idLang VARCHAR(255) NOT NULL,
	langue VARCHAR(255),
	PRIMARY KEY (`idLang`)
);

CREATE TABLE produit 
(
	idProduit INT NOT NULL AUTO_INCREMENT,
	reference VARCHAR(255),
	description VARCHAR(255), 
	priceTaxIncl INT, 
	priceTaxExcl INT, 
	idLang VARCHAR(255),
	quantity INT,
	PRIMARY KEY (`idProduit`),
	FOREIGN KEY (idLang) REFERENCES langue(idLang)
);

INSERT INTO langue (idLang,langue)
VALUES 
('FR', 'Français'),
('EN', 'Anglais'),
('DE', 'Allemand'),
('ES', 'Espagnol');