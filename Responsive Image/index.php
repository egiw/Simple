<?php

use Slim\Slim;
use Respect\Validation\Validator as Validator;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require './bootstrap.php';

// instantiate a Slim application
$app = new Slim(array(
    "debug" => true,
    "mode" => "development"));

// get instance of Respect Validator
$validator = Validator::create();

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__ . "/src"), $isDevMode);

// database configuration parameters
$conn = array(
    'driver' => 'pdo_sqlite',
    'path' => __DIR__ . '/db.sqlite');

// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);

// show homepage
$app->get('/', function() use($app, $validator, $entityManager) {
            echo "Welcome Guest,";
        });

// show about page.
$app->get('/about', function() {
            echo "About Us.";
        });

$app->run();

