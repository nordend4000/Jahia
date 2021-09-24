<?php
session_start(); 
?>
<!DOCTYPE html>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Le site de Jahia">
    
    <link rel="stylesheet" href="jahia_style.css">
    <title>Le site de Jahia : Jeux</title>
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
                         <h5><?php echo $_SESSION['pseudo']?></h5>
                         <h5><a href="jahia_profil.php">Profil Perso</a></h5>
                         <h5><a href="jahia_deconnexion.php">Se deconnecter</a></h5>
                         <h5><a href="jahia_index.php">Francais</a></h5>
                         <h5><a href="jahia_index_en.php">English</a></h5></div> <?php
                       }
                       else
                       { ?>
                         <div style="text-align: center;">
                         <h5><?php echo $_COOKIE['pseudo'] ?></h5>
                         <h5><a href="jahia_profil.php">Profil Perso</a></h5>
                         <h5><a href="jahia_deconnexion.php">Se deconnecter</a></h5>
                         <h5><a href="jahia_index.php">Francais</a></h5>
                         <h5><a href="jahia_index_en.php">English</a></h5></div><?php
                       }
         include("jahia_nav.php"); ?>

         <h2><img src="images/push.png" alt="push decoration" width="5%">     Jeux pour petits et grands ...</h2>
         <div style="text-align: center">
         <img src="images/line.png" alt="line decoration" width="90%">
         </div> 
         <h2><img src="images/logo.png" alt="logo decoration" width="4%">    Quizz : As tu bien regardé le site ??!! </h2>
                 <h6><a href="jahia_quizz.php">Testes tes connaissances !</a></h6><br>
                 <h2><img src="images/logo.png" alt="logo decoration" width="4%">   Pictionnaire en images ... </h2>
                 <h6><a href="jahia_dictionnaire.php">Apprends le language bebe !</a></h6><br>
                 <h2><img src="images/logo.png" alt="logo decoration" width="4%">   Jeux de mémoire ... </h2>
                 <h6><a href="memory2.php">As tu une bonne memoire ?</a></h6><br>
                 

         </div> <!-- fin div corps -->
    </body>
    <?php include("footer.php"); ?>
</html>