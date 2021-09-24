<?php 
session_start();
?>
<DOCTYPE html>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Le site de Jahia">
    <link rel="stylesheet" href="jahia_style.css">
   
    
<html>
    <head>
         <title>Le site de Jahia : Informations personnelles</title>
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
                       }?>
              <h2><img src="images/push.png" alt="push decoration" width="5%">   Modifier mes informations personnelles  :</h2>
              <div style="text-align: center">
                 <img src="images/line.png" alt="line decoration" width="90%" style="text-align: center;"> 
              </div>
                  <div style="text-align: center;">
                    <?php echo '<h3>' . $_GET['pb'] . '</h3><br>'; ?>
                    <p>Bienvenue <strong>
                     <?php if (!empty($_SESSION['pseudo']))
                     { echo $_SESSION['pseudo'];}
                     elseif (!empty($_COOKIE['pseudo']))
                     { echo $_COOKIE['pseudo'];}
                     else {echo "";}?></strong>  ici tu peux ajouter et modifier tes informations personnelles !</p>
                   </div>
                   <h3> Ajouter mes informations personnelles :</h3>
                  <div class="info" style="text-align: center">
                     <form action="jahia_profil_perso_new_post.php" method="post">
                      <div id="ajout">
                        <label><strong>Nouveau Email :  </strong></label>
                        <input type="text" name="email_modif" /><br>
                        <label><strong>Telephone :  </strong></label>
                        <input type="text" name="telephone" /><br>
                        
                        <label><strong>Rue :  </strong></label>
                        <input type="text" name="rue" /><br>
                        <label><strong>Code Postal :  </strong></label>
                        <input type="text" name="code_postal" /><br>
                        <label><strong>Ville :  </strong></label>
                        <input type="text" name="ville" /><br>
                        <label><strong>Pays :  </strong></label>
                        <input type="text" name="pays" /><br>
                        <span><strong>Origine</strong>
                          <label>AUVERGNE</label><input type="radio" name="lang" value="Auvergne"/>
                          <label>Reste du Monde</label><input type="radio" name="lang" value="Monde"/>
                        </span>
                       </div>
                     <input class="envoyer" type="submit" value="Ajouter" />
                     </form><br>
                  </div>
                  <div style="text-align: center">
                    <img src="images/logo.png" alt="logo decoration" width="4%">
                      <h6><a href="jahia_profil.php">Retour au profil</a></h6>
                      
                      <h6><a href="jahia_index.php">Retour a l'accueil</a></h6>
                      <img src="images/logo.png" alt="logo decoration" width="4%">
                  </div>
                </div> <!-- fin div corps -->
              </body>
    <?php include("footer.php"); ?>
</html>