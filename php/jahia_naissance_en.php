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
         <title>Jahia's website - Birth</title>
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
                      include("jahia_nav_en.php"); ?>
         <h2><img src="images/push.png" alt="push decoration" width="5%">     My Birth</h2>
         <div style="text-align: center">
         <img src="images/line.png" alt="line decoration" width="90%" style="text-align: center;"><br>  
         </div>     
         <p>
            Welcome  <strong>
                    <?php if (!empty($_SESSION['pseudo']))
                    { echo $_SESSION['pseudo'];}
                    elseif (!empty($_COOKIE['pseudo']))
                    { echo $_COOKIE['pseudo'];}
                    else {echo "";}?>  </strong>   to the page dedicated to my birth !<br />
            Let's make this moment great again !... 
         </p>
         <div class="image_centrer" style="text-align: center"><img src="images/naissance2.jpg" alt="jahia jour 1" width="40%" ></div></div><br>
         <div class="centrer" style="text-align: center">
         <img src="images/logo.png" alt="logo decoration" width="4%"><br>
         <h4> My parents are very happy that I finally came to join them after 9 long months <br>
         I am very happy to be out, there is so much to discover outside!</h4><img src="images/logo.png" alt="logo decoration" width="4%"><br>
         <br></div>
         <h2><img src="images/push.png" alt="push decoration" width="5%">    Figures of that great day...</h2>
         <div class="bloc_interne">
            <ul>
                 <li>April 26th 2019</li>
                 <li>4 : 31 AM</li>
                 <li>3,174 kg</li>
                 <li>52 cm</li>
                 <li>5 hours of labour for Mama</li>
                 <li>1000 pushes for Mama</li>
                 <li>1 ombilical cord cut for Papa</li>
                 <li>O loss of consciousness for Papa</li>
            </ul></div><br>
            <br><p> That was an event at the Mater Mothers hospital of Brisbane, so many emotions !</p>
         <div class="image_centrer" style="text-align: center"><img src="images/3174g.jpg" alt="jahia balance 1er jour" width="40%" >
         <p>Just out, already been weighed ...</p>
         <img src="images/blue.jpg" alt="jahia après son premier bain" width="30%" ></div>
         <div class="centrer" style="text-align: center">
         <p>After my first bath ...</p><br>
        <br><img src="images/logo.png" alt="logo decoration" width="4%"> <h6><a href="jahia_blog_article_en.php?id_article=1.php">   Birth Annoucement video ... Here  ... </a></h6><br>
        <img src="images/logo.png" alt="logo decoration" width="4%">
         <br>
         <h5><a href="jahia_index_en.php">Back to home page</a></h5></div>
         </div> <!-- fin div corps -->
     
    </body>
    <?php include("footer_en.php"); ?>
</html>