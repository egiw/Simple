<?php

require_once '../bootstrap.php';

$userId = $argv[1];
$dql = "SELECT b, e, r FROM Bug b JOIN b.engineer e JOIN b.reporter r"
        . " WHERE b.status = 'OPEN' AND (e.id = ?1 OR r.id = ?1)"
        . " ORDER BY b.created DESC";

/* @var $entityManager Doctrine\ORM\EntityManager */
/* @var $bugs Bug[] */
$bugs = $entityManager->createQuery($dql)
        ->setMaxResults(15)
        ->setParameter(1, $userId)
        ->getResult();

echo "You have created or assigned to " . count($bugs) . " Open bugs:\n\n";
foreach ($bugs as $bug) {
    echo "{$bug->getId()} - {$bug->getDescription()}.\n";
}