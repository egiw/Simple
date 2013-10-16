<?php

require_once '../../bootstrap.php';

$article = new Article();
$article->setTitle('Proin nunc elementum placerat! Et sit velit purus');
$article->setContent('Placerat eros, rhoncus dignissim nunc nec in, sit? Turpis in. Integer aliquam dapibus, pulvinar, elementum elementum mattis porttitor rhoncus. Non eu! Augue porttitor rhoncus montes? Elementum tempor vel. Phasellus ac dictumst, scelerisque, mattis scelerisque, et cras et, et mattis dapibus ultricies in. ');
$article->setCreated(new DateTime('now'));

/* @var $entityManager Doctrine\ORM\EntityManager */
$entityManager->persist($article);
$entityManager->flush();

echo "An article with id {$article->getId()} has been created.\n";