<?php

require_once 'bootstrap.php';

//-------------------------------------------------
//             VIEW ALL ARTICLES
//-------------------------------------------------

$articleRepository = $entityManager->getRepository('Article');
$article = $articleRepository->findBy([], ['id_article' => 'DESC'], 3);


?>