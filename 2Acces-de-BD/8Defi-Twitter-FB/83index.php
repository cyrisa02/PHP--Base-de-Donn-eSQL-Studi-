<?php

require_once 'MessageManager.php';

$pdo = new PDO('mysql:host=localhost;dbname=intro_pdo', 'root', '');
$page = $_GET['page'] ?? 1;
$manager = new MessageManager($pdo);
$hasSuccessAlert = false;
if (!empty($_POST['content'])) {
    $hasSuccessAlert = $manager->addMessage($_POST['content']);
}

//On stocke les messages dans une variable $messages, qui sera utilisée dans la vue.
$messages = $manager->getMessages($page);
include 'view.php';