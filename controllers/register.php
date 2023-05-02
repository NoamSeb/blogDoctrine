<?php
require_once('../bootstrap.php');

$userRepository = $entityManager->getRepository('Utilisateur')
    ->findBy(['login' => $_POST['login'] ?? '']);

function createUser($user, $entityManager) {
    if (!empty($user)) {
        return 1;
    } 

    $mdp = $_POST['PWD'];

    if ($mdp === $_POST['PWDCheck'] ?? '') {
        $login = $_POST['login'];

        $user = new Utilisateur();
        $user->setLogin($login);
        $user->setPassword(password_hash($mdp, PASSWORD_DEFAULT));

        /** User persist */
        $entityManager->persist($user);
        $entityManager->flush();
        return 2;
    }

    return 3;
}

$result = createUser($userRepository, $entityManager);

if ($result == 2) {
    echo "Votre compte à bien été créer, vous pouvez maintenant vous connecter !";
    require_once('../views/connexion.php');
} else {
    require_once('../views/register.php');
}