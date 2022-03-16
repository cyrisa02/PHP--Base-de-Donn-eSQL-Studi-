<?php

//$name = '%.com'; // on cherche tous ce qui se finit par .com, regarder bindValue
$pdo = new PDO('mysql:host=localhost;dbname=intro_pdo', 'root', '');
$statement = $pdo->prepare('SELECT * FROM users WHERE name LIKE :name');
$statement->bindValue(':name', '%.com');
if ($statement->execute()) {
    while ($user = $statement->fetch(PDO::FETCH_ASSOC)) {
        echo '<pre>';
        print_r($user);
        echo '</pre>';
    }
}

// grâce à l amethode fetch on récupère tous les utilsiateurs qui ont une adresse .com
