<!-- La vue met en forme un objet de type Message contenu dans une variable $message -->
<div>
    <p><?php echo $message->getContent(); ?></p>
    <i>Le <?php echo $message->getDate(); ?></i>
</div>