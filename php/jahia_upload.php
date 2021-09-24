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
         <title>Le site de Jahia : Photo profil</title>
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

            <h2><img src="images/push.png" alt="push decoration" width="5%">   AJOUTER UNE PHOTO DE PROFIL  :</h2>
            <div style="text-align: center">
                     <img src="images/line.png" alt="line decoration" width="90%" style="text-align: center;"> 
            </div>
            <div style="text-align: center;">
              <p>Bienvenue <strong>
               <?php if (!empty($_SESSION['pseudo']))
               { echo $_SESSION['pseudo'];}
               elseif (!empty($_COOKIE['pseudo']))
               { echo $_COOKIE['pseudo'];}
               else {echo "";}?></strong>  ici tu peux charger une photo de profil  !</p></div>

<?php // Connexion à la base de données 
echo '<h3>' . $_GET['pb'] . '</h3><br>'; ?>
<div class="info" style="text-align: center">
			<form action="jahia_upload_post.php" method="post" enctype="multipart/form-data">
			    <div id="ajout">
			        <input type="file" name="monfichier" /><br>
			        <input type="submit" value="Envoyer l'image" />
			    </div>
			</form>
      
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