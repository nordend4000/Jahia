<?php
session_start(); 
?>
<!DOCTYPE html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Le site de Jahia">
    <link rel="stylesheet" href="jahia_style.css">
<html>
    <head>
         <meta charset="utf-8" />
         <title>Le site de Jahia - Naissance</title>
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
                include("jahia_nav.php"); ?>
         <h2><img src="images/push.png" alt="push decoration" width="5%">     Ma naissance</h2>
         <div style="text-align: center">
         <img src="images/line.png" alt="line decoration" width="90%" style="text-align: center;"><br>  
         </div>     
         <p>
            Bienvenue  <strong>
                    <?php if (!empty($_SESSION['pseudo']))
                    { echo $_SESSION['pseudo'];}
                    elseif (!empty($_COOKIE['pseudo']))
                    { echo $_COOKIE['pseudo'];}
                    else {echo "";}?>  </strong>   sur la page consacré à ma naissance ... tout est reuni pour revivre ce grand moment !
         </p>
         <div class="image_centrer" style="text-align: center"><img src="images/naissance2.jpg" alt="jahia jour 1" width="40%" ><br></div>
         <div class="centrer" style="text-align: center">
            <br><img src="images/logo.png" alt="logo decoration" width="4%"><br>
         <h4> Mes parents sont très heureux que je sois enfin venue les retrouver après 9 mois d'attente <br> Moi je suis très heureuse d'être enfin sortie, il y a tellement de choses à découvrir ici dehors !!! </h4><br><img src="images/logo.png" alt="logo decoration" width="4%"></div><br>
         <br>
         <h2><img src="images/push.png" alt="push decoration" width="5%">    Ma naissance en chiffres...</h2>
         <div class="bloc_interne">
            <ul>
                 <li>26 Avril 2019</li>
                 <li>4 h 31 du matin</li>
                 <li>3,174 kg</h4></li>
                 <li>52 cm</li>
                 <li>5h de travail pour Mama</li>
                 <li>100 pouuuuussées pour Mama</li>
                 <li>1 cordon coupé pour Papa</li>
                 <li>O perte de conscience pour Papa</li>
            </ul> </div> <br>
            <br>  <p> Quel évenement à la maternité de Brisbane et que d'émotions !</p>   
         <div class="image_centrer" style="text-align: center"><img src="images/3174g.jpg" alt="jahia balance 1er jour" width="40%" >
         <p>Juste sortie, deja la pesée ...</p>
         <img src="images/blue.jpg" alt="jahia après son premier bain" width="30%" ></div>
         <div class="centrer" style="text-align: center">
         <p>Après mon premier bain ...</p><br>
         <br>

            <img src="images/logo.png" alt="logo decoration" width="4%">
            <h6><a href="jahia_blog_article.php?id_article=1.php">   Le Faire part de Naissance video ici  ... </a></h6><img src="images/logo.png" alt="logo decoration" width="4%"><br>
            <h5><a href="jahia_index.php">Retour a l'accueil</a></h5></div>
        
         </div> <!-- fin div corps -->
     
    </body>
    <?php include("footer.php"); ?>
</html>