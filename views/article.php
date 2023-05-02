<?php
    if (!session_start()) {
        session_start();
    } 
?>
    
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MiniBlog - <?=$article->getName()?></title>
    <link rel="stylesheet" href="../style.css">
</head>
<style>
    .commentaire{
        display:none;
    }
    .hideComments{
        display:none;
        margin: auto;
    }
    .showComments{
        display: block;
        margin:auto;
    }
</style>
<body>
    <a href="../index.php"><<< retour à la page d'accueil</a>
    <div class="articleContent">
        <h1><?=$article->getName()?></h1>
    <p><?=$article->getContent()?></p>
    <p><?=$article->getDate()->format('d-m-Y')?></p> 
    <p>Commentaire :</p>
    <button class="showComments">Voir les commentaires</button>
    <button class="hideComments">Cacher les commentaires</button>
    <div class="commentaire">
        <?php include('comment.php');
        include('../afficheMessage.php') ?>
    </div>
    </div>
    
</body>
<script>
    const commentaire = document.querySelector(".commentaire");
    const showComments =document.querySelector(".showComments");
    const hideComments = document.querySelector(".hideComments");

    showComments.addEventListener('click',()=>{
        commentaire.style.display="block";
        showComments.style.display="none";
        hideComments.style.display="block";
    })
    hideComments.addEventListener('click',()=>{
        commentaire.style.display="none";
        showComments.style.display="block";
        hideComments.style.display="none";
    })
</script>
</html>
