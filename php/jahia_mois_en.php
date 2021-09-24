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
         <title>Jahia's website - 12 Month</title>
    </head>
    <body>
         <div id="bloc_page">
            <?php
                    
                    if (empty($_SESSION['pseudo']) AND empty($_COOKIE['pseudo']))
                      {
                        ?>
                        <div style="text-align: center;">
                         <h5><a href="jahia_inscription_en.php">Register</a></h5>
                         <h5><a href="jahia_connexion_en.php">Log in</a></h5>
                         <h5><a href="jahia_index.php">Francais</a></h5>
                         <h5><a href="jahia_index_en.php">English</a></h5></div>
                         <?php
                      }
                     elseif (!empty($_SESSION['pseudo']))
                      { ?>
                        <div style="text-align: center;">
                         <h5><?php echo $_SESSION['pseudo']?></h5><br>
                         <h5><a href="jahia_profil_en.php">Profile</a></h5>
                         <h5><a href="jahia_deconnexion_en.php">Log out</a></h5>
                         <h5><a href="jahia_index.php">Francais</a></h5>
                         <h5><a href="jahia_index_en.php">English</a></h5></div> <?php
                       }
                       else
                       { ?>
                         <div style="text-align: center;">
                         <h5><?php echo $_COOKIE['pseudo'] ?></h5><br>
                         <h5><a href="jahia_profil_en.php">Profile</a></h5>
                         <h5><a href="jahia_deconnexion_en.php">Log out</a></h5>
                         <h5><a href="jahia_index.php">Francais</a></h5>
                         <h5><a href="jahia_index_en.php">English</a></h5></div> <?php
                       }
         include("jahia_nav_en.php"); ?> <!--  MENU  -->
         <h2><img src="images/push.png" alt="push decoration" width="5%">   My first year in pictures :</h2>
         <div style="text-align: center">
            <img src="images/line.png" alt="line decoration" width="90%"><br>
         </div>
        <br>
         <div id="month">
             <?php include("jahia_includemois_en.php"); ?> <!--  12 MOIS  -->
         </div>
         <div class="centrer" style="text-align: center">
                <br>
                <img src="images/logo.png" alt="logo decoration" width="4%">
                <p> You can click on each picture above to visit the monthly page !</p><img src="images/logo.png" alt="logo decoration" width="4%"><br>
                <h5><a href="jahia_index_en.php">Back to home page</a></h5></div>
         </div> <!-- fin div corps -->
     
    </body>
    <?php include("footer_en.php"); ?>
</html>