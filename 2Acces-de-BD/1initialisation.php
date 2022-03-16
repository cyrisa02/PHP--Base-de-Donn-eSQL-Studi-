<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=php_app', 'root', '');
    foreach ($pdo->query('SELECT name, email FROM users', PDO::FETCH_ASSOC) as $user) {
        echo $user['name'].' '.$user['email'].'<br>';
    }
} catch (PDOException $e) {
    echo 'Impossible de récupérer la liste des utilisateurs';
}