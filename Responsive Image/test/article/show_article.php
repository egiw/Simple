<?php

require_once '../../bootstrap.php';


if (!isset($argv[1])) {
    echo "The correct syntax is: show_article.php ARTICLE_ID.\n";
    exit(1);
}
    
$id = $argv[1];

/* @var $entityManager Doctrine\ORM\EntityManager */
/* @var $article Article */
$article = $entityManager->find('Article', $id);

if (null === $article) {
    echo "The artiche with id {$id} couldn't be found";
    exit(1);
}

echo "Title: {$article->getTitle()}.\n";
echo "Created at: {$article->getCreated()->format('d/m/Y')}.\n";
echo "Content: {$article->getContent()}.\n";
foreach ($article->getTags() as $tag){
    echo "  - {$tag->getName()}\n";
}