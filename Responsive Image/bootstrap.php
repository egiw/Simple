<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require 'vendor/autoload.php';

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__ . "/src"), $isDevMode);

// database configuration parameters
$conn_mysql = array(
    'driver' => 'pdo_mysql',
    'host' => 'localhost',
    'dbname' => 'Simple',
    'user' => 'root',
    'password' => '',
);

$conn_sqlite = array(
    'driver' => 'pdo_sqlite',
    'path' => __DIR__ . '/db.sqlite'
);

// obtaining the entity manager
$entityManager = EntityManager::create($conn_mysql, $config);
