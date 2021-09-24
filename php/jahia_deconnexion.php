<?php 
session_start();

// Suppression des variables de session et de la session
$_SESSION = array();
session_destroy();

// Suppression des cookies de connexion automatique
setcookie('login', '');
setcookie('pass_hache', '');
?>
<!DOCTYPE html>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Le site de Jahia">
    <link rel="stylesheet" href="jahia_style.css">
<html>
    <head>
         <title>Le site de Jahia - Deconnexion</title>
    </head>
    <body>
         <div id="bloc_page">
          <h5><a href="jahia_index.php">Retour au menu</a></h5>
          <h5><a href="jahia_connexion.php">Re-Connexion</a></h5>
          <h2><img src="images/push.png" alt="push decoration" width="5%"> DECONNECTION DE l'ESPACE MEMBRE</h2>
          <p> Vous avez été correctement deconnecté. A bientôt !</p>
    </body>
    <?php include("footer.php"); ?>
</html>