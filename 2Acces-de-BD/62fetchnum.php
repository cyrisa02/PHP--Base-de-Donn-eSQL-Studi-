<?php
$pdo = new PDO('mysql:host=localhost;dbname=intro_pdo', 'root', '');
$statement = $pdo->prepare('SELECT * FROM users WHERE name LIKE :name');
$statement->bindValue(':name', 'j%');
if ($statement->execute()) {
    while ($user = $statement->fetch(PDO::FETCH_NUM)) {
        echo $user[1].'<br>'; // Affiche le nom
    }
}

//  met dans l'ordre le résultat

// FETCH_BOTH : Num + Assoc

