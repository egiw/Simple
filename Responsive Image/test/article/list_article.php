<?php

require_once '../../bootstrap.php';

/* @var $entityManager Doctrine\ORM\EntityManager */
/* @var $articles Article[] */
$articleRepo = $entityManager->getRepository('Article');
$articles = $articleRepo->findAll();

echo "Found " . count($articles) . " articles.\n";
echo "--------------------------------------------------\n";
foreach ($articles as $index => $article) {
    echo "{$index}.     {$article->getTitle()} "
    . "({$article->getCreated()->format('d/m/Y')})\n";
    echo "       {$article->getContent()}\n";
}