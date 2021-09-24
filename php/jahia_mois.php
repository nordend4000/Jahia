<?php 
session_start();
?>
<!DOCTYPE html>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Le site de Jahia">
    <link rel="stylesheet" href="jahia_style.css">
   
    
<html>
    <head>
         <meta charset="utf-8" />
         <title>Le site de Jahia - 12 Mois</title>
    </head>
    <body>
         <div id="bloc_page">
            <?php
                    
                    if (empty($_SESSION['pseudo']) AND empty($_COOKIE['pseudo']))
                      {
                        ?>
                        <div style="text-align: center;">
                         <h5><a href="jahia_inscription.php">S'inscrire</a></h5>
                         <h5><a href="jahia_connexion.php">Se connecter</a></h5>
                         <h5><a href="jahia_index.php">Francais</a></h5>
                         <h5><a href="jahia_index_en.php">English</a></h5></div>
                         <?php
                      }
                     elseif (!empty($_SESSION['pseudo']))
                      { ?>
                        <div style="text-align: center;">
                         <h5><?php echo $_SESSION['pseudo']?></h5><br>
                         <h5><a href="jahia_profil.php">Profil Perso</a></h5>
                         <h5><a href="jahia_deconnexion.php">Se deconnecter</a></h5>
                         <h5><a href="jahia_index.php">Francais</a></h5>
                         <h5><a href="jahia_index_en.php">English</a></h5></div> <?php
                       }
                       else
                       { ?>
                         <div style="text-align: center;">
                         <h5><?php echo $_COOKIE['pseudo'] ?></h5><br>
                         <h5><a href="jahia_profil.php">Profil Perso</a></h5>
                         <h5><a href="jahia_deconnexion.php">Se deconnecter</a></h5>
                         <h5><a href="jahia_index.php">Francais</a></h5>
                         <h5><a href="jahia_index_en.php">English</a></h5></div><?php
                       }
         include("jahia_nav.php"); ?> <!--  MENU  -->
         <h2><img src="images/push.png" alt="push decoration" width="5%">   Ma première année en images :</h2>
         <div style="text-align: center">
            <img src="images/line.png" alt="line decoration" width="90%"><br>
         </div>
        <br>
         <div id="month">
             <?php include("jahia_includemois.php"); ?> <!--  12 MOIS  -->
         </div>
         <div class="centrer" style="text-align: center">
                <br>
                <img src="images/logo.png" alt="logo decoration" width="4%">
                <p> Tu peux cliquer sur chacune des photos au dessus pour accéder à la page du mois correspondant !</p><img src="images/logo.png" alt="logo decoration" width="4%"><br>
                <h5><a href="jahia_index.php">Retour a l'accueil</a></h5></div>
         </div> <!-- fin div corps -->
     
    </body>
    <?php include("footer.php"); ?>
</html>