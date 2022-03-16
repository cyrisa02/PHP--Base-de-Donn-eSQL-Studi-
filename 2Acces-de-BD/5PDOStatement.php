<?php

$name = 'a%';
// utiliser plutot bindValue et la méthode prepare
// Marqueurs nommés :
$statement = $pdo->prepare('SELECT * FROM users WHERE name LIKE :name');
$statement->bindValue(':name', 'a%', PDO::PARAM_STR); 
// ou
$statement->bindParam(':name', $name, PDO::PARAM_STR);

// Marqueurs interrogatifs :
$statement = $pdo->prepare('SELECT * FROM users WHERE name LIKE ?');
$statement->bindValue(1, 'a%', PDO::PARAM_STR);
// ou
$statement->bindParam(1, $name, PDO::PARAM_STR);
