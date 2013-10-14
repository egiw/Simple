<?php




require_once '../bootstrap.php';

$theBugId = $argv[1];

/* @var $entityManager Doctrine\ORM\EntityManager */
/* @var $bug Bug */
$bug = $entityManager->find("Bug", $theBugId);


if(null === $bug) {
    echo "The bug with id {$theBugId} couldn't be found.";
    exit(1);
}

echo "Bug: {$bug->getDescription()}. \n";
echo "Reporter: {$bug->getReporter()->getName()}. \n";
echo "Engineer: {$bug->getEngineer()->getName()}. \n";
