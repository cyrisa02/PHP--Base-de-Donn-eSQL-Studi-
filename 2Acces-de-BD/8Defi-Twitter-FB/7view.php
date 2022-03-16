<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mon fil d'actualités</title>
</head>
<body>
<!-- On regarde la valeur de $hasSuccessAlert et affiche le message en conséquence -->
<?php if ($hasSuccessAlert) { ?>
    <b>Votre message a bien été ajouté !</b>
<?php } ?>
    <form method="post">
        <textarea name="content"></textarea>
        <br>
        <button type="submit">Créer un message</button>
    </form>
</body>
</html>