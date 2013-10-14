<?php

require_once '../../bootstrap.php';

$article = new Article();
$article->setTitle('acus ac lacus ac cursus dictumst est mauris ultricies porta');
$article->setContent('Aliquet purus rhoncus vel? Proin? Porta, integer cras porttitor in amet ac quis urna phasellus mus in sagittis lectus egestas penatibus cursus cum, magnis pulvinar sed? Nunc! Enim massa');
$article->setCreated(new DateTime('now'));

/* @var $entityManager Doctrine\ORM\EntityManager */
$entityManager->persist($article);
$entityManager->flush();

echo "An article with id {$article->getId()} has been created.\n";