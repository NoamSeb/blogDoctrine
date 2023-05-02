<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blog PHP</title>
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
    <form action="../controllers/register.php" method="POST">
        <label for="login">Entrez votre login*</label>
        <input type="text" id="login" name="login" required>
        <?php if(isset($result) && ($result==1)){
            echo "Ce login est déjà utilisé, veuillez changer de login ou vous connecter.";
        }
        ?>
        <label for="PWD">Entrez votre mot de passe*</label>
        <input type="password" id="PWD" name="PWD" required>
        <label for="PWDCheck">Confirmez le mot de passe*</label>
        <input type="password" id="PWDCheck" name="PWDCheck" required>
        <?php if(isset($result) && ($result==3)){
            echo "Les mots de passe sont différents.";
        }
        ?>
        <input type="submit" value="créer utilisateur">
    </form>
</body>

</html>