<?php

$pdo = new PDO('mysql:host=localhost;dbname=intro_pdo', 'root', '');
$statement = $pdo->prepare('SELECT * FROM users WHERE email = :email');
// On récupère un utilisateur ayant le même login (ici, e-mail)
$statement->bindValue(':email', 'john@doe.fr');
if ($statement->execute()) {
    $user = $statement->fetch(PDO::FETCH_ASSOC);
    if ($user === false) {
        // Si aucun utilisateur ne correspond au login entré, on affiche une erreur
        echo 'Identifiants invalides';
    } else {
        // On vérifie le hash du password
        if (password_verify('p4$$w0rd', $user['password'])) {
            echo 'Bienvenue '.$user['username'];
        } else {
            echo 'Identifiants invalides';
        }
    }
} else {
    echo 'Impossible de récupérer l\'utilisateur';
}
