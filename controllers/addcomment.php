<?php
require_once('../bootstrap.php');

function addComment($id, $idArticle, $entityManager, $user)
{
    $NewMessage = $_POST['contenuComment'];
    $article = $entityManager->getRepository('Article')->find($idArticle);

    $message = new Message();
    $message->setText($NewMessage);
    $message->setUtilisateur($user);
    $message->setArticle($article);

    $entityManager->persist($message);
    $entityManager->flush();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    session_start();
    addComment($_SESSION['id'], $_GET['id'], $entityManager, getCurrentUser());
    header('location: ../controllers/article.php?id=' . $_GET['id']);
}

require_once("../controllers/article.php");