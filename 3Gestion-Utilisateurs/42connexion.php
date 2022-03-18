<?php
// ... Processus de connexion
// $user est un objet User retourné par PDO

$statement = $pdo->prepare('SELECT * FROM userRoles JOIN roles ON roles.id = userRoles.roleId WHERE id = :id');
$statement->bindValue(':id', $user->getId());
if ($statement->execute()) {
    while ($role = $statement->fetch(PDO::FETCH_ASSOC)) {
        $user->addRole($role['name']);
    }
}