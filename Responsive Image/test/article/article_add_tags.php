<?php

require_once '../../bootstrap.php';

if (!isset($argv[1]) || !isset($argv[2])) {
    echo "Please specify article id and tag Ids separated with comma.";
    exit(1);
}

$articleId = $argv[1];
$tagsId = explode(',', $argv[2]);

/* @var $entityManager Doctrine\ORM\EntityManager */
/* @var $article Article */
$article = $entityManager->find('Article', $articleId);

if (null === $article) {
    echo "The article with id {$articleId} couldn't be found.\n";
    exit(1);
}

foreach ($tagsId as $tagId) {
    /* @var $tag Tag */
    $tag = $entityManager->find('Tag', $tagId);
    if (null !== $tag)
        $article->addTag($tag);
}

$entityManager->persist($article);
$entityManager->flush();

echo "Tag(s) have been added successfully.";