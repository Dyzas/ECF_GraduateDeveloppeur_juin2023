# ECF_GraduateDeveloppeur_juin2023
application vitrine pour un restaurant

Spécification Technique : 

Front-End : 

HTML 5 

CSS 3 

JavaScript 

Back-End : 

PHP 8.2.4 

MySQL 

HTTP POST 

Chartes Graphique de mon application : 

Couleurs : 

Couleur de fond du corps de la page : #f4f4f4 

Couleur de fond de l'en-tête : #333 

Couleur de fond de la bannière : image de fond 

Couleur de fond des sections : #fff 

Couleur de fond du pied de page : #333 

Couleur du texte : #fff et #333 (dans le corps de la page) 

Typographie : 

Police de caractères du corps de la page : 'Montserrat', sans-serif 

Police de caractères des titres : 'Playfair Display', serif 

Police de caractères du texte : 'Open Sans', sans-serif 

 
Mon script SQL pour la création et l’alimentation de ma base de donnée: 

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

  
-- Insérer un utilisateur admin pour les tests 

INSERT INTO users (email, password, role) VALUES ('admin@example.com', '$2y$10$BUEtVivMq3jKQf.ksZj5ROXe5AbTxnROvm7VbmCvFX1hQVgS5S8jW', 'admin'); 

 
