<?php
$pdo = new PDO('mysql:host=localhost', 'cyril3', 'cyril3');
if ($pdo->exec('DROP DATABASE IF EXISTS musee') !== false) {
    if ($pdo->exec('CREATE DATABASE musee') !== false) {
        $museumPdo = new PDO('mysql:dbname=musee;host=localhost', 'cyril3', 'cyril3');
        if ($museumPdo->exec('CREATE TABLE tableaux (
   id INT(11) PRIMARY KEY AUTO_INCREMENT,
   name VARCHAR(100),
   painter VARCHAR(100)
)') !== false) {
            if ($museumPdo->exec('INSERT INTO tableaux (name, painter) VALUES ("Mona Lisa", "Léonard de Vinci"),("Ecole d\'Athènes", "Raphaël"),("Création d\'Adam", "Michel-Ange");') !== false) {
                echo 'Installation terminée !';
            } else {
                echo 'Impossible de créer les données de test<br>';
            }
        } else {
            echo 'Impossible de créer la table<br>';
        }
    } else {
        echo 'Impossible de créer la base<br>';
    }
} else {
    echo 'Impossible de supprimer la base<br>';
}