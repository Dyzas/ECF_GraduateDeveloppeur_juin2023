-- Créer une base de données appelée "myDB"

CREATE DATABASE myDB;

-- Utiliser cette base de données

USE myDB;

-- Créer une table "reservations" avec les colonnes nécessaires

CREATE TABLE reservations (

id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,

date DATE NOT NULL,

time TIME NOT NULL,

couverts INT(3) NOT NULL,

allergies VARCHAR(255),

created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP

);

-- Créer une table "users" avec les colonnes nécessaires

CREATE TABLE users (

id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,

email VARCHAR(255) NOT NULL,

password VARCHAR(255) NOT NULL,

role VARCHAR(20) NOT NULL DEFAULT 'client',

created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP

);

-- Insérer un utilisateur admin pour les tests (modifier ses valeurs pour avoir un compte administrateur)

INSERT INTO users (email, password, role) VALUES ('admin@example.com', '$2y$10$BUEtVivMq3jKQf.ksZj5ROXe5AbTxnROvm7VbmCvFX1hQVgS5S8jW', 'admin');