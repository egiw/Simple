<?php

/* @var $entityManager \Doctrine\ORM\EntityManager */

require './bootstrap.php';

$id = $argv[1];
/* @var $product Product */
$product = $entityManager->find('Product', $id);

if (null === $product) {
    echo "No product found.\n";
    exit(1);
}

echo sprintf("%s\n", $product->getName());