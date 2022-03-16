<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mon fil d'actualités</title>
</head>
<body>
<?php if ($hasSuccessAlert) { ?>
    <b>Votre message a bien été ajouté !</b>
<?php } ?>
    <form method="post">
        <textarea name="content"></textarea>
        <br>
        <button type="submit">Créer un message</button>
    </form>

<?php
    // Pour tous les messages de $messages, on appelle la vue messageView en y injectant le message à afficher.
    foreach ($messages as $message) {
        // Attention a ne pas utilise include_once ici : le but est d'inclure la vue autant de fois qu'il y a de messages
        include 'messageView.php';
    }
?>
</body>
</html>