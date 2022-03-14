<?php
echo "Bonjour";


try
{
    $db = new PDO ('mysql:host=localhost;dbname=intro_pdo', 'cyril', 'cyril');
    foreach ($db->query('SELECT * FROM tableaux') as $row)
    {
        print_r($row);
    }
}
catch (PDOException $e)
{
    print "Erreur:" . $e->getMessage() . "<br>";
    die;
}