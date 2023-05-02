<?php 
    require_once("../bootstrap.php");
    function getComments($entityManager){
        $article = $entityManager->getRepository('Article')->find($_GET['id']);
        return $article->getComments();
    }

    $commentaires = getComments($entityManager);
    
    if (isset($_SESSION['login'])) { ?>
        <form method="POST" action="../controllers/addcomment.php?id=<?=$_GET['id']?>">
            <label for="contenuComment">Laissez un commentaire :</label>
            <textarea id="contenuComment" name="contenuComment" rows="4" required></textarea>
            <input type="submit">
        </form>
    <?php } else { ?>
        <p>Connectez vous pour laisser un commentaire</p>
    <?php } ?>