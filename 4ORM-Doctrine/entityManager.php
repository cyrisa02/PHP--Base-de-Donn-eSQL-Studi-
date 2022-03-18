<?php

require_once 'vendor/autoload.php';

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

function getEntityManager(): EntityManager
{
    $dbParams = [
        'driver' => 'pdo_mysql',
        'user' => 'root',
        'password' => '',
        'dbname' => 'doctrine_database',
    ];

    $config = Setup::createAnnotationMetadataConfiguration(['entities'], true, null, null, false);

    return $entityManager = EntityManager::create($dbParams, $config);
}
