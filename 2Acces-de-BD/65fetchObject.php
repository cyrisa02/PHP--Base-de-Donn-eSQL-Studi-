<?php
require_once 'User.php';
$pdo = new PDO('mysql:host=localhost;dbname=intro_pdo', 'root', '');
$statement = $pdo->prepare('SELECT * FROM users WHERE name LIKE :name');
$statement->bindValue(':name', 'j%');
if ($statement->execute()) {
    while ($user = $statement->fetchObject('User')) { // On utilise fetchObject
        echo $user->getDisplayedName(); 
    }
}


// plus facile que fetchclass!!!
