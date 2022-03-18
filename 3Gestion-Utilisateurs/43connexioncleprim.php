<?php
// ... Processus de connexion
// $user est un objet User retourné par PDO

$statement = $pdo->prepare('SELECT COUNT(*) AS count FROM agences WHERE managerId = :id');
$statement->bindValue(':id', $user->getId());
if ($statement->execute()) {
    $count = $statement->fetch(PDO::FETCH_ASSOC);
    if ($count['count'] > 0) {
        // Si l'utilisateur est chef d'une agence, alors on lui ajoute le rôle ROLE_MANAGER
        $user->addRole('ROLE_MANAGER');
    }
}