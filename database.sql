DROP DATABASE Gestion;
CREATE DATABASE Gestion;
USE Gestion;

CREATE TABLE user (
    id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    email VARCHAR(255) NOT NULL,
    mot_de_passe VARCHAR(255) NOT NULL,
    role VARCHAR(100) NOT NULL
);
INSERT INTO user(email,mot_de_passe,role) VALUES ('admin@gmail.com','123456','administrateur');

CREATE TABLE tea_varieties (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom_variete VARCHAR(255),
    occupation_pied FLOAT,
    rendement_pied_mois FLOAT
);

INSERT INTO tea_varieties (nom_variete, occupation_pied, rendement_pied_mois) VALUES
('Thé vert', 1.8, 2.5),
('Thé noir', 2.0, 3.0);

CREATE TABLE plots (
    id INT AUTO_INCREMENT PRIMARY KEY,
    numero_parcelle VARCHAR(255),
    surface_hectare FLOAT,
    variete_plantee_id INT,
    FOREIGN KEY (variete_plantee_id) REFERENCES tea_varieties(id)
);

INSERT INTO plots (numero_parcelle, surface_hectare, variete_plantee_id) VALUES
('P001', 5.0, 1),
('P002', 3.5, 2);

CREATE TABLE harvesters (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255),
    genre ENUM('Homme', 'Femme'),
    date_naissance DATE
);

INSERT INTO harvesters (nom, genre, date_naissance) VALUES
('Rakoto Be', 'Homme', '1990-05-15'),
('Francine Zety', 'Femme', '1985-09-20');

CREATE TABLE expense_categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom_categorie VARCHAR(255)
);

INSERT INTO expense_categories (nom_categorie) VALUES
('Engrais'),
('Carburant'),
('Logistique');

CREATE TABLE wage_config (
    id INT AUTO_INCREMENT PRIMARY KEY,
    montant_salaire_kg FLOAT
);

INSERT INTO wage_config (montant_salaire_kg) VALUES
(5.0);
