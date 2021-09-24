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
         <title>Jahia's website - Home page</title>
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
                 <br> 
                 <div id="bloc_titre"> 
                     <img src="images/line.png" alt="line decoration" width="90%" style="text-align: center;">
                     <img src="images/titre.png" alt="baby decoration" width="60%" style="text-align: center;">
                     <img src="images/line.png" alt="line decoration" width="90%" style="text-align: center;"><br>
                 </div>
                 <p>Welcome <strong>
                    <?php if (!empty($_SESSION['pseudo']))
                    { echo $_SESSION['pseudo'];}
                    elseif (!empty($_COOKIE['pseudo']))
                    { echo $_COOKIE['pseudo'];}
                    else {echo "";}?></strong> to the website dedicated to my first year.<br />
                    You're gonna love it, my Papa created it for me...<br> and for you .... families and friends !!!</p>
                 <h2><img src="images/push.png" alt="push decoration" width="5%">   My Birth :</h2>
                 <div id="naissance" style="text-align: center;">
                     <img src="images/naissance.jpg" alt="Photo Jahia 1er jour"  width="40%" ><br>
                     <br></div>
                     <h6><a href="jahia_naissance_en.php">Click here to know more about my birth</a><br></h6><br><br>
                 

                 <div id="month">
                     <h2><img src="images/push.png" alt="push decoration" width="5%">   My first year in pictures :</h2>
                     <?php include("jahia_includemois_en.php"); ?>
                 </div>
                 <div id="chapitre">
                    <br><br>

                 <h2><img src="images/push.png" alt="push decoration" width="5%">    Gallery of my Best pictures  :</h2>
                 <a href="jahia_galerie_en.php">Vote for your favorite picture...</a><br><br>
                 <h2><img src="images/push.png" alt="push decoration" width="5%">    Some games just to have fun :</h2>
                 <a href="jahia_jeux_en.php">Come and play with me...</a><br><br>
                 <h2><img src="images/push.png" alt="push decoration" width="5%">    All articles from my Blogg :</h2>
                 <a href="jahia_blog_en.php">Discover the news ...</a><br><br>
                 <h2><img src="images/push.png" alt="push decoration" width="5%">    To send me an e-mail directly :</h2>
                 <a href="jahia_contact_en.php">Tell me something ...</a><br>
             </div>
         </div> <!-- fin div corps -->
    </body>
    <?php include("footer_en.php"); ?>
</html>