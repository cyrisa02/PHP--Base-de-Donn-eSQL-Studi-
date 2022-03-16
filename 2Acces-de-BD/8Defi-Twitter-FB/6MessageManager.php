<?php

class MessageManager
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        // Injection de dépendances de l'objet PDO
        $this->pdo = $pdo;
    }

    public function addMessage(string $message): bool
    {
        // L'identifiant et la date du message sont calculés automatiquement par le SGBD. Seul le contenu doit être inséré.
        $statement = $this->pdo->prepare('INSERT INTO messages (content) VALUES (:content)');
        $statement->bindValue(':content', $message, PDO::PARAM_STR);

        return $statement->execute();
    }
}
