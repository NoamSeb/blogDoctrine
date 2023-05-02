<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>miniBlog</title>
    <link rel="stylesheet" href="../style.css">
</head>
<style>
    form{
        display:flex;
        flex-direction:column;
        justify-content: center;
        align-items: center;
    }
</style>
<body>

<?php if(isset($result)) {
    if ($result == false ) {
        echo 'Un problème est survenu, veuillez vérifier votre saisie.';
    } else {
        echo 'L\'article à bien été créer';
    }
} ?>

<a href="../index.php"><<< retour à la page d'accueil</a>
<form method="POST" action="../controllers/addarticle.php">
        <label for="nomArticle">Nom de l'article :*</label>
        <input type="text" id="nomArticle" name="nomArticle" required>
        <label for="contenuArticle">Contenu de l'article :*</label>
        <textarea id="contenuArticle" name="contenuArticle" rows="4" required></textarea>
        <p>Les champs marqué par l'indicateur * sont obligatoire.</p>
        <input type="submit">
    </form>
</body>
</html>