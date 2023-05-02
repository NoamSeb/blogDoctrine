<?php

require_once 'bootstrap.php';

//-------------------------------------------------
//             VIEW ALL MESSAGES
//-------------------------------------------------
$messages = [];

if (isset($_GET['id'])) {
    $article = $entityManager
        ->getRepository('Article')
        ->find($_GET['id']);

    $messages = $article->getComments();
}

foreach ($messages as $message) {
    $user = $entityManager->getRepository('Utilisateur')->find($message->getUtilisateur()->getId());
    echo $user->getLogin() . " a écrit : <br>" . $message->getText() . "<br>";
}
?>