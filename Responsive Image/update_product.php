<?php

/* @var $entityManager \Doctrine\ORM\EntityManager */
/* @var $product Product */

require './bootstrap.php';
require './src/Product.php';

$id = $argv[1];
$newName = $argv[2];

$product = $entityManager->find('Product', $id);

if(null === $product) {
    echo "Product with id {$id} doesn't exist.\n";
    exit(1);
}

$product->setName($newName);
$entityManager->flush();