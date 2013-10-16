<?php

require_once '../../bootstrap.php';

if (!isset($argv[1]) || !isset($argv[2])) {
    echo "The correct syntax is article_remove_tags.php ARTICLE_ID TAG_IDs";
    exit(1);
}

$articleId = $argv[1];
$tagIds = explode(',', $argv[2]);

/* @var $entityManager Doctrine\ORM\EntityManager */
/* @var $article Article */
$article = $entityManager->find('Article', $articleId);

if (null === $article) {
    echo "The article with id {$articleId} couldn't be found.\n";
    exit(1);
}

foreach ($tagIds as $index => $tagId) {
    $tag = $entityManager->find('Tag', $tagId);
    if (null !== $tag)
        $article->getTags()->removeElement($tag);
}

$entityManager->persist($article);
$entityManager->flush();
echo "Tags have been removed successfully.\n";