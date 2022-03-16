<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=userstudi', 'studi', 'studi');
    $search = 'jo%'; // % c'est comme l'étoile * TOUJOURS METTRE un % pour une recherche- utilise WHERE LIKE \
    // On utilise un alias, grâce au mot-clef AS
    foreach ($pdo->query('SELECT users.name, users.email FROM users WHERE name LIKE \''.$search.'\'', PDO::FETCH_ASSOC) as $user) {
        // Ici, on utilise le nom de l'alias et non celui de la colonne
        echo $user['name'].' '.$user['email'].'<br>';
    }
} catch (PDOException $e) {
    echo 'Impossible de récupérer la liste des utilisateurs';
}


// trouve partout où il y a jo
// pour D'Artagnan   $search= 'D\'\'%';

//Requêtes préparées gèrent les apostrophes
// 2 types de marqueurs: les nommés (qu'on uitlise ) et les interogatifs -> ? est un marqueur

