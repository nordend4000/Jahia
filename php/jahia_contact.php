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
         <title>Le site de Jahia - Contact</title>
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
         <h2><img src="images/push.png" alt="push decoration" width="5%">     Contactez moi !</h2>
         <div style="text-align: center">
         <img src="images/line.png" alt="line decoration" width="90%" style="text-align: center;"><br>  
         </div>     
         
         	<?php
         	if (empty($_GET['id']))
         	{?>
            <p>Bienvenue <strong>
                    <?php if (!empty($_SESSION['pseudo']))
                    { echo $_SESSION['pseudo'];}
                    elseif (!empty($_COOKIE['pseudo']))
                    { echo $_COOKIE['pseudo'];}
                    else {echo "";}?></strong> 
         		        sur le formulaire de contact !<br />
                    N'hésites surtout pas à m'écrire un petit mot, cela me fera très plaisir... <br>
                    Je demenderais à mon Papa de te repondre !</p> <?php
                    }
                    else 
                    {
                            echo '<p>' . $_GET['id'] . '!!!!!!</p>';
                    }
                    ?>
            
         <div class="image_centrer" style="text-align: center;"><img src="images/contact.jpg" alt="jahia contact photo" width="50%" ><br><br></div>
         <div style="text-align: center;">
         <h3>Merci de remplir le formulaire ci-dessous <br> afin de m'ecrire directement un Email  ... <br><br><img src="images/logo.png" alt="logo decoration" width="4%">    C'est beau la technologie !      <img src="images/logo.png" alt="logo decoration" width="4%"></h3></div>
         <p> </p>
         
         <div style="text-align: center;">
         <form action="jahia_contact_post.php" method="post">
         	<div class="contacter"><?php
          // si pas connecté ni session ni cookie
           if (empty($_SESSION['pseudo']) AND empty($_COOKIE['pseudo']))
             {  // on affiche la demande de l'auteur
           ?>
          <label>Auteur du message :</label><br>
          <input type="text" name="auteur" required placeholder="Ton nom ..." />
          <br>
          <label>Email de l'auteur du message :</label><br>
          <input type="text" name="email" required placeholder="Ton addresse de messagerie électronique genre .....     jahia@gioux_anderson.fr"/><br>
          <label>Message pour Jahia :</label><br><?php
            } 
          elseif (!empty($_SESSION['pseudo']))
          {
            echo '<h2>' . $_SESSION['pseudo'] . ' écris ton Email pour Jahia.</h2>';
          }
          else
          {
            echo '<h2>' . $_COOKIE['pseudo'] . ' écris ton Email pour Jahia.</h2>';
          }
          ?><br>
          <textarea name="message" required placeholder="Ton Email pour Jahia"></textarea>
          <br>
          </div>
          <input class="envoyer" type="submit" value="Envoyer" />
         </form>

         </div>
         </div> <!-- fin div corps -->
    </body>
    <?php include("footer.php"); ?>
</html>