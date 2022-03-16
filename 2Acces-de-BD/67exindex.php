<?php

// index.php

try {
    require_once 'Game.php';
    $pdo = new PDO('mysql:host=localhost;dbname=intro_pdo', 'root', '');
    $statement = $pdo->prepare('SELECT * FROM games WHERE name LIKE :search');
    $statement->bindValue(':search', $_GET['search'].'%', PDO::PARAM_STR);
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

//Puis, en vous aidant des exercices précédents, modifiez la page de la liste des jeux en utilisant une requête préparée qui récupère les jeux. Donnez la possibilité aux utilisateurs de renseigner un nom en paramètre de l'URL pour ne récupérer que les jeux qui commencent par ce nom.

//En cas d'erreur, affichez le message d'erreur.
