
<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=testgame', 'studi1', 'studi1');
    $search = 'jo%'; // % c'est comme l'étoile * TOUJOURS METTRE un % pour une recherche- utilise WHERE LIKE \
    foreach ($pdo->query('SELECT * FROM games WHERE name LIKE :search', PDO::FETCH_ASSOC) as $user) {
        echo $user['name'].' : '.$user['description'].'<br>';
    }
} catch (PDOException $e) {
    echo 'Impossible de récupérer la liste des jeux';
}
