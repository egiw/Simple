<?php

require_once '../bootstrap.php';

$bugId = $argv[1];
/* @var $entityManager Doctrine\ORM\EntityManager */
/* @var $bug Bug */
$bug = $entityManager->find("Bug", (int) $bugId);
$bug->close();

if (null === $bug) {
    echo "The bug with id {$bugId} couldn't be found";
    exit(1);
}

$entityManager->flush();