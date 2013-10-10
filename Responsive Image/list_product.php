<?php

/* @var $entityManager \Doctrine\ORM\EntityManager */

require './bootstrap.php';
require './src/Product.php';

$productRepo = $entityManager->getRepository('Product');
$products = $productRepo->findAll();

foreach ($products as $product) {
    /* @var $product Product */
    echo sprintf("-%s\n", $product->getName());
}