<?php
session_start(); 
?>
<!DOCTYPE html>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Le site de Jahia">
    
    <link rel="stylesheet" href="jahia_style.css">
    <title>Jahia's website - Games</title>
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
                         <h5><?php echo $_SESSION['pseudo']?></h5>
                         <h5><a href="jahia_profil_en.php">Profile</a></h5>
                         <h5><a href="jahia_deconnexion_en.php">Log out</a></h5>
                         <h5><a href="jahia_index.php">Francais</a></h5>
                         <h5><a href="jahia_index_en.php">English</a></h5></div> <?php
                       }
                       else
                       { ?>
                         <div style="text-align: center;">
                         <h5><?php echo $_COOKIE['pseudo'] ?></h5>
                         <h5><a href="jahia_profil_en.php">Profile</a></h5>
                         <h5><a href="jahia_deconnexion_en.php">Log out</a></h5>
                         <h5><a href="jahia_index.php">Francais</a></h5>
                         <h5><a href="jahia_index_en.php">English</a></h5></div> <?php
                       }
                      include("jahia_nav_en.php"); ?>

         <h2><img src="images/push.png" alt="push decoration" width="5%">     Games for all ages ...</h2>
         <div style="text-align: center">
         <img src="images/line.png" alt="line decoration" width="90%">
         </div> 
         <h2><img src="images/logo.png" alt="logo decoration" width="4%">    Quizz ... </h2>
                 <h6><a href="jahia_quizz_en.php">Test your knowledge !</a></h6><br>
                 <h2><img src="images/logo.png" alt="logo decoration" width="4%">   Pictionary ... </h2>
                 <h6><a href="jahia_dictionnaire_en.php">Learn baby's language !</a></h6><br>
                 <h2><img src="images/logo.png" alt="logo decoration" width="4%">   Memory game ... </h2>
                 <h6><a href="memory2_en.php">Do you have a good memory ?</a></h6><br>
                 

         </div> <!-- fin div corps -->
    </body>
    <?php include("footer_en.php"); ?>
</html>