<?php

$pdo = new PDO('mysql:host=localhost;dbname=intro_pdo', 'root', '');
$statement = $pdo->prepare('SELECT * FROM users LIMIT :start, 10'); // La deuxième valeur du LIMIT est 10
$statement->bindValue('start', 10 * ($_GET['page'] - 1), PDO::PARAM_INT); // On calcule la première valeur dans le bindValue. Ici, le numéro de page est passé dans l'URL.
if ($statement->execute()) {
    while ($user = $statement->fetch(PDO::FETCH_ASSOC)) {
        echo $user['name'].'<br>';
    }
}

//pagination = maitrise de la mémoire

//Attention bine mettre PDO::PARAM_INT
// Attention il y a deux fois 10 -> 10 items par page