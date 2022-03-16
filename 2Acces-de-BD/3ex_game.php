
<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=testgame', 'studi1', 'studi1');
    foreach ($pdo->query('SELECT name, description FROM games', PDO::FETCH_ASSOC) as $user) {
        echo $user['name'].' : '.$user['description'].'<br>';
    }
} catch (PDOException $e) {
    echo 'Impossible de récupérer la liste des jeux';
}
