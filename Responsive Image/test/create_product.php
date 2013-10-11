<?php

/* @var $entityManager \Doctrine\ORM\EntityManager */

require_once '../bootstrap.php';

$productName = $argv[1];

$product = new Product;
$product->setName($productName);

$entityManager->persist($product);
$entityManager->flush();