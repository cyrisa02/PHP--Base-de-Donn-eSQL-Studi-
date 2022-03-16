<?php
$pdo = new PDO('mysql:host=localhost;dbname=intro_pdo', 'root', '');
$statement = $pdo->prepare('SELECT * FROM users WHERE name LIKE :name');
$statement->bindValue(':name', 'j%');
if ($statement->execute()) {
    while ($user = $statement->fetch(PDO::FETCH_OBJ)) {
        echo $user->name.'<br>'; // Affiche le nom
    }
}

// sous forme de classe , moins bien que fetchclass!!

// notation objet
// echo $user->name;
