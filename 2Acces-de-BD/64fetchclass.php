<?php

require_once 'User.php';
$pdo = new PDO('mysql:host=localhost;dbname=intro_pdo', 'root', '');
$statement = $pdo->prepare('SELECT * FROM users WHERE name LIKE :name');
$statement->bindValue(':name', 'j%');
$statement->setFetchMode(PDO::FETCH_CLASS, '64User'); // On appelle setFetchMode en lui donnant le nom de la classe
if ($statement->execute()) {
    while ($user = $statement->fetch()) { // fetch n'a pas de paramètre : on a défini le mode au dessus
        echo $user->getDisplayedName(); // $user est un objet User
    }
}

// lié à 64User.php

// mieux que fetchobj

// appeler la méthode setFetchMode(2 paramètres)

// encore mieux c'est le 65!!!!
