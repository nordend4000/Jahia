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
         <meta charset="utf-8" />
         <title>Le site de Jahia - Blog</title>
    </head>
    <body>
    	 <div id="bloc_page">
            <div id = "container"></div>
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
    	 	<h2><img src="images/push.png" alt="push decoration" width="5%">       Liste des articles de mon blog</h2>
            <div style="text-align: center">
               <img src="images/line.png" alt="line decoration" width="90%" style="text-align: center;"><br>  
            </div> 
    	 	<ul class="bloc_interne">
    	 	<?php
			try // Connexion à la base de données
			{
                $bdd = new PDO('mysql:host=185.98.131.92;dbname=beyon1308768;charset=utf8', 'beyon1308768', '2qot2hfrvr', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
              }
			catch(Exception $e)
			{
			        die('Erreur : '.$e->getMessage());
			}
			// On récupère tout le contenu de la table article
            $reponse = $bdd->query('SELECT id_article, titre_article, media_name, DATE_FORMAT(date_publication, \'%d/%m/%Y\') AS date_publication_fr FROM article'); 

  
			// On affiche chaque entrée une à une
			while ($donnees = $reponse->fetch())
			{ // …code pour afficher réponse… exemple
                $video = $donnees['media_name'];
            ?>  
			     <?php
                if(preg_match("#^https#", $video))
                { ?>
                   <li><?php echo $donnees['titre_article']; ?> <a href="jahia_blog_article.php?id_article=<?php echo $donnees['id_article'];?>">Cliques ici <img src="images/logo.png" alt="logo decoration" width="4%">       Video      <img src="images/logo.png" alt="logo decoration" width="4%"></a></li>
                   <em>Publié le <?php echo $donnees['date_publication_fr']; ?></em><?php
                }
                else
                { ?>
                    <li><?php echo $donnees['titre_article']; ?> <a href="jahia_blog_article.php?id_article=<?php echo $donnees['id_article'];?>">Cliques ici</a></li>
                   <em>Publié le <?php echo $donnees['date_publication_fr']; ?></em><?php
                } 
			} // fin du while

			$reponse->closeCursor(); ?> 
            </ul>
         </div>
    </body>
    <?php include("footer.php"); ?>
</html>