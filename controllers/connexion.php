<?php
require_once('../bootstrap.php');

// $entityManager = getEntityManager();
$utilisateurRepository = $entityManager->getRepository('Utilisateur')->findOneBy(['login' => $_POST['login']]);
$user = $utilisateurRepository;
function connectUser($user)
{
    $passwd=$_POST['password'];
    // var_dump($passwd, $user->getPassword());
    if (!$user || !password_verify($passwd, $user->getPassword())) {
        return false;
    }else{
        return $user;
    }
}

$result = connectUser($user);


if ($result == false){
    require_once ('../views/connexion.php');
}else{
    session_start();
    $_SESSION['login']=$result->getLogin();
    $_SESSION['id']=$result->getId();
    header('location: ../index.php');
}
