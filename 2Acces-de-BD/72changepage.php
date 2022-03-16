<?php
$statement = $pdo->prepare('SELECT COUNT(*) AS totalUsers FROM users');
if ($statement->execute()) {
    $totalUsers = $statement->fetch(PDO::FETCH_ASSOC); // Ici, nous savons que nous n'allons recevoir qu'une seule ligne, donc il est possible d'appeller fetch directement
    for ($i = 1; $i <= ceil($totalUsers['totalUsers'] / 10); $i++) {
        echo '<a href="?page=' . $i . '">' . $i . '</a> - ';
    }
}

// on reçoit qu'un unique résultat: le nbre total d'utilisateur
// 10 utilsateurs/page , ceil arrondit au supérieur
// pour la boucle, on part de la page 1 jusqu'à ceil($totalUsers['totalUsers'] / 10