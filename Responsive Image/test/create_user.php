<?php

/* @var $entityManager \Doctrine\ORM\EntityManager */
/* @var $product Product */

require '../bootstrap.php';

$newUsername = $argv[1];

$user = new User();
$user->setName($newUsername);

$entityManager->persist($user);
$entityManager->flush();

echo "Created user with ID {$user->getId()} \n";