<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=testgame', 'studi1', 'stdui1');
    // Erreur de requête volontaire pour tester l'erreur
    $statement = $pdo->prepare('DELETE FROM games WHERE id = :id');
    $statement->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
    if ($statement->execute()) {
        echo 'La suppression a bien été effectuée';
    } else {
        //On a créé un enouvelle table errors qui récupère les erreurs
        $insertStatement = $pdo->prepare('INSERT INTO errors(state, driverError, message) VALUES (?,?,?)');
        $errorInfo = $statement->errorInfo();
        $insertStatement->execute($errorInfo);
        echo $errorInfo[2];
    }
} catch (PDOException $e) {
    echo 'Une erreur s\'est produite lors de la communication avec la base';
}

// Programme de la table errors

//CREATE TABLE errors(
   // id INTEGER(11) PRIMARY KEY AUTO_INCREMENT,
    //state VARCHAR(10),
   // driverError VARCHAR(50),
   // message VARCHAR(500)
// );
