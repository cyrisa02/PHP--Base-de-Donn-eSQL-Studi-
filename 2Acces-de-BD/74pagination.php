<?php

// index.php
try {
    require_once 'Game.php';
    $pdo = new PDO('mysql:host=localhost;dbname=intro_pdo', 'root', '');
    $statement = $pdo->prepare('SELECT * FROM games LIMIT :start, 5'); // on crée le marqueur :start donc on a besoin de le déclarer dans bindvalue et PARAM_INT
    $statement->bindValue('start', 5 * ($_GET['page'] - 1), PDO::PARAM_INT);
    $statement->setFetchMode(PDO::FETCH_CLASS, 'Game');
    if ($statement->execute()) {
        while ($user = $statement->fetch()) {
            echo $user->getFullDescription();
        }
    } else {
        $errorInfo = $statement->errorInfo();
        echo $errorInfo[2];
    }
} catch (PDOException $e) {
    echo 'Une erreur s\'est produite lors de la communication avec la base';
}

//Modifiez le script d'affichage de la liste des jeux de la question précédente, pour n'afficher les jeux que 5 par 5, selon un numéro de page passé en paramètre. Pour rappel, voici la structure de la table des jeux et une liste de jeux à insérer, qui doivent être affichés sur deux pages 