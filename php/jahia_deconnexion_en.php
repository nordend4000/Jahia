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
         <title>Jahia's website - Log out</title>
    </head>
    <body>
         <div id="bloc_page">
          <h5><a href="jahia_index_en.php">Back to home page</a></h5>
          <h5><a href="jahia_connexion_en.php">Login</a></h5>
          <h2><img src="images/push.png" alt="push decoration" width="5%"> Log out from your personal space</h2>
          <p> You've been logged out properly, See you soon !</p>
    </body>
    <?php include("footer_en.php"); ?>
</html>