<?php
require_once('../bootstrap.php');

session_start();


function addArticle($entityManager, $user) {
    $user = $entityManager->getRepository('Utilisateur')
        ->find($user);

    $article = new Article();   
    $article->setName($_POST['nomArticle'] ?? '');
    $article->setContent($_POST['contenuArticle'] ?? '');
    $article->setDate((new \DateTime('now')));
    $article->setUtilisateur($user);

    $entityManager->persist($article);
    $entityManager->flush();
}

if((isset($_SESSION['id']) && $_SESSION['id'] !== 1) || !(isset($_SESSION))) {
    header('location: ../index.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['nomArticle'])) {
    addArticle($entityManager, getCurrentUser());
}


require_once('../views/addarticle.php');

