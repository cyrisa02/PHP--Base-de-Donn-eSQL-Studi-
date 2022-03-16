<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=userstudi', 'studi', 'studi');
    // On utilise un alias, grâce au mot-clef AS
    foreach ($pdo->query('SELECT users.name AS nom, users.email AS adresse, groups.name AS groupName FROM users JOIN groups ON users.group_id = groups.id', PDO::FETCH_ASSOC) as $user) {
        // Ici, on utilise le nom de l'alias et non celui de la colonne
        echo $user['nom'].' '.$user['adresse'].' '.$user['groupName'].'<br>';
    }
} catch (PDOException $e) {
    echo 'Impossible de récupérer la liste des utilisateurs';
}
