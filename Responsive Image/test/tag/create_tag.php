<?php

require_once '../../bootstrap.php';

if (!isset($argv[1])) {
    echo "Please specify the name of tag";
    exit(1);
}

$tagName = $argv[1];
$tag = new Tag();
$tag->setName($tagName);

/* @var $entityManager Doctrine\ORM\EntityManager */
$entityManager->persist($tag);
$entityManager->flush();
echo "Tag has been created successfully.\n";