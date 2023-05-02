<?php
require_once('../bootstrap.php');

$articleRepository = $entityManager->getRepository('Article')->find($_GET['id']);
$article = $articleRepository;

if (empty($article)) {
    header('location: ../index.php');
}

require_once('../views/article.php');