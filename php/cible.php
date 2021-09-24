<!DOCTYPE html>
<link rel="stylesheet" href="mdp.css">
<html>
    <head>
        <meta charset="utf-8" />
        <title>Acces Reservé</title>
    </head>
    <body style="text-align: center;">
      
<?php
if (($_POST['lang']) == "Français")
{
 if (!empty($_POST['mdp']) AND ($_POST['mdp'] ==  "jahia"))
{
?>
    <h1>Acces Autorisé</h1>
    <p>Bravo <strong><?php echo $_POST['mdp'] ?></strong> est le bon mot de passe !</p>
    <p><a href="jahia/jahia_index.php">Le site de Jahia - Français</a></p><br>
    <img src="cible.jpg" alt="Photo b&w"  width="60%" >
<?php
}
else // SINON
{
    ?>
    <h1>Acces Refusé</h1>
    <p>Desolé <?php $_POST['mdp'] ?> n'est pas le bon mot de passe ! Vous n'avez pas l'acces au site</p>
    <p><a href="mot_de_passe.php" >Retour</a></p><br>
    <img src="mdp.jpg" alt="Photo b&w"  width="70%" >
<?php
} 
}
if (($_POST['lang']) == "English")
{
 if (!empty($_POST['mdp']) AND ($_POST['mdp'] ==  "jahia"))
{
?>
    <h1>Access Authorised </h1>
    <p>Great ! <strong><?php echo $_POST['mdp'] ?></strong> is the correct password ! </p>
    <p><a href="jahia/jahia_index_en.php" >Jahia's Website - English</a></p><br>
    <img src="cible.jpg" alt="Photo mdp"  width="60%" >
<?php
}
else // SINON
{
    ?>
    <h1>Access Denied</h1>
    <p>Sorry <?php $_POST['mdp'] ?> isn't the right password, you can't have access to the site</p>
    <p><a href="mot_de_passe.php" >Back</a></p><br>
    <img src="mdp.jpg" alt="Photo b&w"  width="70%" >
<?php
} 
}

?>
    
    </body>
</html>