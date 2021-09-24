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
         <title>Jahia's website - list of comments</title>
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

            <h2><img src="images/push.png" alt="push decoration" width="5%">   My list of comments  :</h2>
            <div style="text-align: center">
               <img src="images/line.png" alt="line decoration" width="90%" style="text-align: center;"> 
            </div>
<?php 
                try
                {
                  $bdd1 = new PDO('mysql:host=185.98.131.92;dbname=beyon1308768;charset=utf8', 'beyon1308768', '2qot2hfrvr', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                }
                catch(Exception $e)
                {
                        die('Erreur : '.$e->getMessage());
                }
                if (empty($_SESSION['id'])) 
                  { $id_membre = $_COOKIE['id']; }
                else { $id_membre = $_SESSION['id']; }

                
                $reponse = $bdd1->prepare('SELECT id_article, auteur, commentaire, date_commentaire FROM commentaires WHERE id_membre = ? ORDER BY date_commentaire');
                $reponse->execute(array($id_membre));

                

                  // Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
                  while ($donnees = $reponse->fetch())
                  {
                    // recherche du titre de l'article
                    $id_article = $donnees['id_article'];
                    $req = $bdd1->prepare('SELECT titre_article FROM article WHERE id_article = ?');
                    $req->execute(array($id_article));
                    
                    $donnees1 = $req->fetch();
                    echo "<p></p>";
                    echo "<span><h4> Referring to the article :  <strong> " . $donnees1['titre_article'] . " </strong> : posted on <em>" . htmlspecialchars($donnees['date_commentaire']) . "</em></h4>";
                      echo '<div class="news"><p>' . htmlspecialchars($donnees['commentaire']) .'</p></div></span>';
                  }

                  $reponse->closeCursor(); ?>
        <div style="text-align: center">
          <img src="images/logo.png" alt="logo decoration" width="4%">
                      <h6><a href="jahia_profil_en.php">Back to profile</a></h6>
                      
                      <h6><a href="jahia_index_en.php">Back to home page</a></h6>
                      <img src="images/logo.png" alt="logo decoration" width="4%">
                  </div>

        
      </div> <!-- fin div corps -->
     
    </body>
    <?php include("footer_en.php"); ?>
</html>