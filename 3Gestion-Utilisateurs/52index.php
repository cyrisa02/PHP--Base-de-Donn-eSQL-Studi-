<?php

require_once 'User.php';

$pdo = new PDO('mysql:host=localhost;dbname=intro_pdo', 'root', '');
$user = User::connect($pdo, 'dupond@monmail.com', 'r0r0dµp0nt');
//$user = User::connect($pdo, 'laure@mondi.com', 'ch4t0n!');

if (!in_array('ROLE_SENIOR', $user->getRoles())) {
    echo 'Accès interdit';
} else {
    echo 'Bonjour vendeur senior !';
}
