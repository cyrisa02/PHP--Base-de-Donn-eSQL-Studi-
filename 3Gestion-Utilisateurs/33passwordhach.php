<?php

$pdo = new PDO('mysql:host=localhost;dbname=intro_pdo', 'root', '');
$statement = $pdo->prepare('INSERT INTO users(email, username, password) VALUES (:email, :username, :password)');
$statement->bindValue(':email', 'john@doe.fr');
$statement->bindValue(':username', 'john');

// Hash du mot de passe en utilisant BCRYPT
$statement->bindValue(':password', password_hash('p4$$w0rd', PASSWORD_BCRYPT));
if ($statement->execute()) {
    echo 'L\'utilisateur a bien été créé';
} else {
    echo 'Impossible de créer l\'utilisateur';
}