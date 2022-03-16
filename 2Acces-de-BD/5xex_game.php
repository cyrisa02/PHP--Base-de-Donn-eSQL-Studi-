<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=testgame', 'studi1', 'stdu1');
    $statement = $pdo->prepare('DELETE FROM games WHERE id = :id');
    $statement->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
    if ($statement->execute()) {
        echo 'La suppression a bien été effectuée';
    } else {
        $errorInfo = $statement->errorInfo();
        echo $errorInfo[2];
    }
} catch (PDOException $e) {
    echo 'Une erreur s\'est produite lors de la communication avec la base';
}

//L'administrateur de notre site de tests de jeux doit pouvoir supprimer un jeu de son choix. Pour cela, créez une page permettant de récupérer l'identifiant d'un jeu depuis un paramètre passé dans l'URL et de supprimer le jeu associé.

//En cas de problème lors de l'exécution de la requête, affichez simplement le message d'erreur, et en cas de succès, un message de succès.

//On peut noter que, pour simplifier l'exercice, nous passons l'ID dans l'URL. Mais, dans la pratique, il serait grandement préférable de passer l'identifiant via un formulaire.
