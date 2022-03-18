<?php

require_once 'vendor/autoload.php';
require_once 'entityManager.php';

$entityManager = getEntityManager();

// On donne l'EntityManager à la ligne de commande

// voir la doc Doctrine pour $dbParams, parce que là on est en local, en remote il y aplus de paramètres à gérer

//création d'un dossier entities avec toutes les classes de notre base de données et paramamétrer $config

//$config = Setup::createAnnotationMetadataConfiguration(['entities'], true);  le true signifie mode développeur / false en mode production, true vide le cache et on en a besoin en mode développement!

//ATTENTION, il est nécessaire de créer un fichier cli-config.php + entitManager.php


//ATTENTION j'ai fait le composer dans le mauvais répertoire! il est dans le parent c'est pour cela que ça ne fonctionne pas!


// Doctrine ne crée que les tables pas la Base de données, donc il faut créer dans le terminal la base de données avec le user le password et son nom. Faire la mise à jour dans le fichier entityManager.php


// grâce à createAnnotationMetadataConfiguration on peut mettre le dossier dans lequel on =veut sauveagarder les BD

// ligne de commande pour générer les tables
// php vendor/bin/doctrine orm:schema-tool:create

// ligne de commande pour affihcer les tables
// php vendor/bin/doctrine orm:schema-tool:create --dump-sql




