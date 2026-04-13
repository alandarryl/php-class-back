<?php

//bootstrap.php



require_once join(DIRECTORY_SEPARATOR, [__DIR__, 'vendor', 'autoload.php']);



use Doctrine\ORM\EntityManager;

use Doctrine\ORM\ORMSetup;



$entitiesPath = [

    join(DIRECTORY_SEPARATOR, [__DIR__, "src", "entity"])

];



$isDevMode = true;

$proxyDir = null;

$cache = null;

$useSimpleAnnotationReader = false;



// Connexion à la base de données

$dbParams = [

    'driver'   => 'pdo_mysql',

    'host'     => 'localhost',

    'charset'  => 'utf8',

    'user'     => 'root',

    'password' => '',

    'dbname'   => 'php-doctrine',

];



$config = ORMSetup::createAnnotationMetadataConfiguration(

    $entitiesPath,

    $isDevMode,

    $proxyDir,

    $cache,

    $useSimpleAnnotationReader

);

$entityManager = EntityManager::create($dbParams, $config);