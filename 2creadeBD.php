<?php
try {
    // Exemple avec une base de données MySQL avec les identifiants par défaut
    $pdo = new PDO('mysql:host=localhost', 'cyril2', 'cyril2');
    if ($pdo->exec('CREATE DATABASE museum_database') !== false) {
        echo 'Base de données créée';
    } else {
        echo 'Une erreur est survenue';
    }
} catch (PDOException $e) {
    //Gestion de l'erreur de connexion
    print "Erreur:" . $e->getMessage() . "<br>";
    die;
}