<?php

class User
{
    private string $id;
    private string $username;
    private string $password;
    private string $email;
    private array $roles = [];

    public static function connect(PDO $pdo, string $email, string $password): User
    {
        $statement = $pdo->prepare('SELECT * FROM users WHERE email = :email');
        $statement->setFetchMode(PDO::FETCH_CLASS, 'User');
        $statement->bindValue(':email', $email);
        if ($statement->execute()) {
            while ($user = $statement->fetch()) {
                if ($user->isPasswordValid($password)) {
                    // Si le mot de passe est valide, alors on récupère la somme des ventes de l'utilisateur
                    $sumStatement = $pdo->prepare('SELECT SUM(price) AS sum FROM sales WHERE idUser = :id');
                    $sumStatement->bindValue(':id', $user->getId());
                    if ($sumStatement->execute()) {
                        $sum = $sumStatement->fetch(PDO::FETCH_ASSOC);
                        // Si la somme est superieure à 1000€ (donc 100000 centimes), on attribue le rôle de senior.
                        if ($sum['sum'] > 100000) {
                            $user->addRole('ROLE_SENIOR');
                        } else {
                            $user->addRole('ROLE_JUNIOR');
                        }
                    } else {
                        throw new Exception('Erreur lors de la récupération des ventes');
                    }
                    return $user;
                }
            }
        }

        throw new Exception('Identifiants invalides');
    }

    public function isPasswordValid(string $password): bool
    {
        return password_verify($password, $this->password);
    }

    public function addRole(string $role): void
    {
        $this->roles[] = $role;
    }


    public function getRoles(): array
    {
        return $this->roles;
    }

    public function getId(): string
    {
        return $this->id;
    }
}