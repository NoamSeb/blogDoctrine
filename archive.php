<?php
    require_once('afficheArticle.php');
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>miniBlog - Archive</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <p><a href="index.php">
            <<< Retour à l'accueil</a>
    </p>
    <h1>Archive</h1>
    <div class="allArticles">
        <?php 
        $article = $articleRepository->findBy([], ['id_article' => 'ASC']);
        foreach ($article as $a) { ?>
            <div class="article">
                <h2><?= $a->getName()?></h2>
                <p><?= $a->getContent()?></p>
                <a href="./controllers/article.php?id=<?=$a->getId()?>">Lire cet article</a>
            </div>
        <?php } ?>
    </div>
</body>

</html>