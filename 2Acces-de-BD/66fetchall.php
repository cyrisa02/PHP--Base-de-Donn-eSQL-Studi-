<?php

$pdo = new PDO('mysql:host=localhost;dbname=intro_pdo', 'root', '');
$statement = $pdo->prepare('SELECT * FROM users WHERE name LIKE :name');
$statement->bindValue(':name', 'j%');
if ($statement->execute()) {
    $users = $statement->fetchAll(PDO::FETCH_OBJ); // $users contient un tableau d'objets StdClass
}
// attention à la mémoire RAM , très gourmand