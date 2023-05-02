<?php
    require('afficheArticle.php');
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Blog</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header> 
    <h1>page article</h1>
    <div class="button">
        <?php
    if (!isset($_SESSION['login'])) { ?>
        <p><a href="login.html">Connexion/inscription</a></p>
    <?php } ?>
    <?php
    if (isset($_SESSION['login'])) {
        echo ("Bonjour " . $_SESSION['login']); ?>
        <form action="./controllers/logout.php">
            <input type="submit" value="deconnexion">
        </form>
    <?php
    if ($_SESSION['id'] == 1) { ?>
    <a href="./controllers/addarticle.php">Créer un article</a>
    <?php } ?>
    <?php } ?>
    </div>
    </header>

    <div class="allArticles">
    <?php foreach ($article as $a) { ?>
        <div class="article">
        <h2><?= $a->getName() ?></h2>
        <a href="./controllers/article.php?id=<?=$a->getId()?>">Lire cet article</a></div>
    <?php } ?></div>
    <p><a href="archive.php">Voir tout les articles</a></p>
</body>

</html>