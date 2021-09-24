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
         <title>Jahia's website - Contact</title>
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
                         <h5><a href="jahia_index.php">Français</a></h5>
                         <h5><a href="jahia_index_en.php">English</a></h5></div> <?php
                       }
                      include("jahia_nav_en.php"); ?>
         <h2><img src="images/push.png" alt="push decoration" width="5%">     Contact me !</h2>
         <div style="text-align: center">
         <img src="images/line.png" alt="line decoration" width="90%" style="text-align: center;"><br>  
         </div>     
         
         	<?php
         	if (empty($_GET['id']))
         	{?>
            <p>Welcome <strong>
                    <?php if (!empty($_SESSION['pseudo']))
                    { echo $_SESSION['pseudo'];}
                    elseif (!empty($_COOKIE['pseudo']))
                    { echo $_COOKIE['pseudo'];}
                    else {echo "";}?></strong> 
         		        to the contact form !<br />
                    Do not hesitate to write me an e-mail, it will make me very happy... <br>
                    I will ask papa to answer you !</p> <?php
                    }
                    else 
                    {
                            echo '<p>' . $_GET['id'] . '!!!!!!</p>';
                    }
                    ?>
            
         <div class="image_centrer" style="text-align: center;"><img src="images/contact.jpg" alt="jahia contact photo" width="50%" ><br><br></div>
         <div style="text-align: center;">
         <h3>Please fill in the form below <br> to send me directly an email  ... <br><br><img src="images/logo.png" alt="logo decoration" width="4%">    Technology is great !      <img src="images/logo.png" alt="logo decoration" width="4%"></h3></div>
         <p> </p>
         
         <div style="text-align: center;">
         <form action="jahia_contact_post_en.php" method="post">
         	<div class="contacter"><?php
          // si pas connecté ni session ni cookie
           if (empty($_SESSION['pseudo']) AND empty($_COOKIE['pseudo']))
             {  // on affiche la demande de l'auteur
           ?>
          <label>Sender :</label><br>
          <input type="text" name="auteur" required placeholder="Your name ..." />
          <br>
          <label>Sender's E-mail :</label><br>
          <input type="text" name="email" required placeholder="Your e-mail address .....     jahia@gioux_anderson.fr"/><br>
          <label>Your Message for Jahia :</label><br><?php
            } 
          elseif (!empty($_SESSION['pseudo']))
          {
            echo '<h2>' . $_SESSION['pseudo'] . ' write your E-mail for Jahia below.</h2>';
          }
          else
          {
            echo '<h2>' . $_COOKIE['pseudo'] . ' write your E-mail for Jahia below.</h2>';
          }
          ?><br>
          <textarea name="message" required placeholder="Your message for Jahia"></textarea>
          <br>
          </div>
          <input class="envoyer" type="submit" value="Send" />
         </form>

         </div>
         </div> <!-- fin div corps -->
    </body>
    <?php include("footer_en.php"); ?>
</html>