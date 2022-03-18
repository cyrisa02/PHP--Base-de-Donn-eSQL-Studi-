<?php

// Importation de l'autoloader de Composer
require_once 'vendor/autoload.php';

use Doctrine\ORM\Tools\Setup;

$config = Setup::createAnnotationMetadataConfiguration(['entities'], false);

// faire la commande composer require doctrine/orm + mettre require_once 'vendor/autolaod
