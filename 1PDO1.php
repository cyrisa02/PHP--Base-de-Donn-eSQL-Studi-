<?php
// Le "root" et la chaîne vide ci-dessous correspondent respectivement au login et au mot de passe de la base de données. Ce sont les valeurs par défaut, modifiez-les si vous les avez changés.

// Manque le catch PDOEXCEPTION!!!
//$pdo = new PDO('mysql:host=localhost;dbname=intro_pdo', 'cyril', 'cyril');
//foreach ($pdo->query('SELECT * FROM tableaux') as $tableau) {
 //   echo $tableau['name'].' par '.$tableau['painter'].'<br>';
//}



try {
    $pdo = new PDO('mysql:host=localhost;dbname=intro_pdo', 'cyril', 'cyril');
    foreach ($pdo->query('SELECT * FROM tableaux') as $tableau) {
        echo $tableau['name'].' par '.$tableau['painter'].'<br>';
    }
} catch (PDOException $e) {
    file_put_contents('dblogs.log', $e->getMessage().PHP_EOL, FILE_APPEND);
    echo 'Une erreur est survenue';
}