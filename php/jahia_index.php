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
         <title>Le site de Jahia : Accueil</title>
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
                 <br> 
                 <div id="bloc_titre"> 
                     <img src="images/line.png" alt="line decoration" width="90%" style="text-align: center;">
                     <img src="images/titre.png" alt="baby decoration" width="60%" style="text-align: center;">
                     <img src="images/line.png" alt="line decoration" width="90%" style="text-align: center;"><br>
                 </div>
                 <p>Bienvenue <strong>
                    <?php if (!empty($_SESSION['pseudo']))
                    { echo $_SESSION['pseudo'];}
                    elseif (!empty($_COOKIE['pseudo']))
                    { echo $_COOKIE['pseudo'];}
                    else {echo "";}?></strong> sur le site consacré à ma première année.<br />
                    Tu vas adorer, c'est mon papa qui l'a crée pour moi...<br> et pour la famille et les amis bien sure !!!</p>
                 <h2><img src="images/push.png" alt="push decoration" width="5%">   Ma Naissance :</h2>
                 <div id="naissance" style="text-align: center;">
                     <img src="images/naissance.jpg" alt="Photo Jahia 1er jour"  width="40%" ><br>
                     <br></div>
                     <h6><a href="jahia_naissance.php">Cliques ici pour tout savoir sur ma naissance</a></h6><br>
                     <br>
                 

                 <div id="month">
                     <h2><img src="images/push.png" alt="push decoration" width="5%">   Ma première année en images :</h2>
                     <?php include("jahia_includemois.php"); ?>
                 </div>
                 <div id="chapitre">
                    <br><br>

                 <h2><img src="images/push.png" alt="push decoration" width="5%">    La Galerie de mes meilleures photos  :</h2>
                 <a href="jahia_galerie.php">Votes pour ta photo favorite ...</a><br><br>
                 <h2><img src="images/push.png" alt="push decoration" width="5%">    Des petits jeux pour s'amuser :</h2>
                 <a href="jahia_jeux.php">Viens jouer avec moi...</a><br><br>
                 <h2><img src="images/push.png" alt="push decoration" width="5%">    Tous les articles de mon Blogg :</h2>
                 <a href="jahia_blog.php">Decouvres les news ...</a><br><br>
                 <h2><img src="images/push.png" alt="push decoration" width="5%">    Pour me contacter directement par email :</h2>
                 <a href="jahia_contact.php">Dis moi tout ...</a><br>
             </div>
         </div> <!-- fin div corps -->
    </body>
    <?php include("footer.php"); ?>
</html>