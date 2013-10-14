<?php

require_once '../../bootstrap.php';

if (!isset($argv[1])) {
    echo "The correct syntax is delete_article.php ARTICLE_ID\n";
    exit(1);
}

$articleId = $argv[1];

/* @var $entityManager Doctrine\ORM\EntityManager */
/* @var $article Article */
$article = $entityManager->find('Article', $articleId);
if (null === $article) {
    echo "The article with id {$articleId} couldn't be found.\n";
    exit(1);
}

$entityManager->remove($article);
$entityManager->flush();

echo "The article with id {$articleId} has been deleted sucessfully";

