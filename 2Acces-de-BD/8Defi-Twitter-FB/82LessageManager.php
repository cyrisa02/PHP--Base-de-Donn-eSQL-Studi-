<?php

class MessageManager
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function addMessage(string $message): bool
    {
        $statement = $this->pdo->prepare('INSERT INTO messages (content) VALUES (:content)');
        $statement->bindValue(':content', $message, PDO::PARAM_STR);

        return $statement->execute();
    }

    public function getMessages(int $page): array
    {
        require_once 'Message.php';
        $statement = $this->pdo->prepare('SELECT * FROM messages LIMIT :start, 10');
        // On récupère les messages sous forme d'objets Message
        $statement->setFetchMode(PDO::FETCH_CLASS, 'Message');
        // La position de départ du LIMIT dépend de la page. Attention au type de données, qui doit être en PARAM_INT
        $statement->bindValue(':start', 10 * ($page - 1), PDO::PARAM_INT);
        $statement->execute();

        return $statement->fetchAll();
    }
}