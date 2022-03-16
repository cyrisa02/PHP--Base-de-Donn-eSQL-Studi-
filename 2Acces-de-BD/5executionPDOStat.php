<?php

// methode execute

$pdo = new PDO('mysql:host=localhost;dbname=intro_pdo', 'root', '');
// Faute de frappe volontaire dans la requête pour tester l'erreur
$statement = $pdo->prepare('ELECT * FROM users WHERE name LIKE :name');
$statement->bindValue(':name', 'a%', PDO::PARAM_STR);
if ($statement->execute()) {
    // La requête s'est bien déroulée
} else {
    $errorInfo = $statement->errorInfo();
    echo 'SQLSTATE : '.$errorInfo[0].'<br>'; // attetnion ne pas afficher ce message en PROD, pbm de sécurité, regarder ex 5 gamettaberror, on stocke les erreurs dans une nouvelle table de la BD
    echo 'Erreur du driver : '.$errorInfo[1].'<br>';
    echo 'Message : '.$errorInfo[2];
}
