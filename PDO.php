<?php
// Le "root" et la chaîne vide ci-dessous correspondent respectivement au login et au mot de passe de la base de données. Ce sont les valeurs par défaut, modifiez-les si vous les avez changés.
$pdo = new PDO('mysql:host=localhost;dbname=intro_pdo', 'cyril', 'cyril');
foreach ($pdo->query('SELECT * FROM tableaux') as $tableau) {
    echo $tableau['name'].' par '.$tableau['painter'].'<br>';
}