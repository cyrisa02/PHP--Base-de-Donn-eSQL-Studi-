<?php

require_once 'MessageManager.php';

// On créé une instance de PDO et on l'injecte dans notre manager
$pdo = new PDO('mysql:host=localhost;dbname=intro_pdo', 'root', '');
$manager = new MessageManager($pdo);

// On stocke l'affichage du message de succès dans une variable $hasSuccessAlert, qui sera utilisée dans la vue
$hasSuccessAlert = false;
if (!empty($_POST['content'])) {
    // Si un contenu a été posté, alors on ajoute le message.
    $hasSuccessAlert = $manager->addMessage($_POST['content']);
}

include 'view.php';