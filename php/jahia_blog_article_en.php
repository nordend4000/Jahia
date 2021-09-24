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
         <title>Jahia's website - Blog's Articles</title>
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
                      include("jahia_nav_en.php");
			  	// Connexion à la base de données
    	 	if (isset($_GET['ok']))
    	 	{
    	 		echo '<p>' . $_GET['ok'] . '!!!!!!</p>';
    	 		echo '<div id="liens_blog"><img src="images/logo.png" alt="logo decoration" width="4%"><a href="jahia_blog_en.php">Back to Articles list</a></div>';
    	 	}
   
			try
			{
                $bdd1 = new PDO('mysql:host=185.98.131.92;dbname=beyon1308768;charset=utf8', 'beyon1308768', '2qot2hfrvr', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
              }
			catch(Exception $e)
			{
			        die('Erreur : '.$e->getMessage());
			}
			$id = $_GET['id_article'];

			// Récupération des données du mois
			$req2 = $bdd1->prepare('SELECT * FROM blog WHERE id_article = ?');
			$req2->execute(array($id));
			// Affichage des données de l'article de l'id passé en GET
			$donnees1 = $req2->fetch(); ?>


			<h2><img src="images/push.png" alt="push decoration" width="5%"><?php echo $donnees1['titre_article']; ?></h2>
			<p><?php echo $donnees1['contenu_article']; ?></p><br>
			<div id="affichage_article" style="text-align: center;">
			<?php
			$video = $donnees1['media_name'];
 
             //On teste l'URL avec une regex faite maison
             if(preg_match("#^https#", $video))
				{
					?>
					<div class="youtube">
					<iframe width="560" height="315" src="<?php echo $donnees1['media_name']; ?>" frameborder="2" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
					<br>
					<h4> <?php echo $donnees1['legende_media']; ?></h4>
					<br>
					<div id="affichage_mois" style="text-align: center;"><img src="blog/<?php echo $donnees1['photo_name']; ?>" alt="Photo article <?php echo $donnees1['id_article']; ?>" width="40%">
					<h4> <?php echo $donnees1['legende_photo']; ?></h4>
					</div>
					<?php
				}
				else
				{
					?>
					<div id="affichage_mois" style="text-align: center;">
					<br><img src="blog/<?php echo $donnees1['media_name']; ?>" alt="Photo article <?php echo $donnees1['id_article']; ?>" width="40%">
					<h4> <?php echo $donnees1['legende_media']; ?></h4>
					</div>
					<div id="affichage_mois" style="text-align: center;">
					<br><img src="blog/<?php echo $donnees1['photo_name']; ?>" alt="Photo article <?php echo $donnees1['id_article']; ?>" width="40%">
					<h4> <?php echo $donnees1['legende_photo']; ?></h4>
					</div>
					
					<?php
				} 
			
                $precedent = (($_GET['id_article']) - 1);
            	$suivant = (($_GET['id_article']) + 1);

            	if (($_GET['id_article']) >= 2)
            	{ ?>
                <h5><a href="jahia_blog_article_en.php?id_article=<?php echo $precedent ?>">Previous Article</a></h5><?php
            	} ?>
                <h5><a href="jahia_blog_en.php">Back to Blog</a></h5><?php
                if (($_GET['id_article']) <= 8)
                { ?>
                  <h5><a href="jahia_blog_article_en.php?id_article=<?php echo $suivant ?>">Next Article</a></h5>
                  </div><?php
                } ?> 
               

			
			<br>
			<div style="text-align: center">
		        <img src="images/line.png" alt="line decoration" width="90%"><br>
		    </div>
		    <br>
			<h3><img src="images/logo.png" alt="logo decoration" width="4%">      COMMENTS     <img src="images/logo.png" alt="logo decoration" width="4%"></h3>  
            <p>Referring to the article <?php echo $donnees1['titre_article']?></p>
            <?php
			$req2->closeCursor();

		     // afficher les commentaires
		    		// Récupération des 10 derniers messages
            		 $reponse = $bdd1->prepare('SELECT id_article, auteur, commentaire, date_commentaire FROM commentaires WHERE id_article = ? ORDER BY date_commentaire DESC');
            		 $reponse->execute(array($_GET['id_article']));

					// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
					while ($donnees = $reponse->fetch())
					{
						echo '<span><h4> Comments from : <strong>' . htmlspecialchars($donnees['auteur']) . '</strong> posted on <em>' . htmlspecialchars($donnees['date_commentaire']) . '</em></h4>';
					    echo '<div class="news"><p>' . htmlspecialchars($donnees['commentaire']) .'</p></div></span>';
					}

					$reponse->closeCursor();

					// envoyer un commentaire

					// si pas connecté ni session ni cookie
           if (empty($_SESSION['pseudo']) AND empty($_COOKIE['pseudo']))
	           {	// on affiche la demande de l'auteur
				$req = $bdd1->prepare('SELECT * FROM blog WHERE id_article = ?');
				$req->execute(array($id));
				// Affichage des données de l'article de l'id passé en GET
				$donnees2 = $req->fetch();
			    ?>
		            <h3><img src="images/logo.png" alt="logo decoration" width="4%">      ADD A NEW COMMENTS     <img src="images/logo.png" alt="logo decoration" width="4%"></h3>  
		            <p>Referring to the article <?php echo $donnees2['titre_article']?></p>

		            <div style="text-align: center;">
		              <form action="jahia_blog_article_post_en.php?id_article=<?php echo $donnees1['id_article']?>" method="post">
		            	<div class="contacter">
				          <label>Sender :</label><br>
				          <input type="text" name="auteur" required placeholder="Enter your name here ... " />
				          <br>
				          <label>Comment :</label><br>
				          <textarea name="commentaire" required placeholder="Enter your comments here ... "></textarea>
		                  <br>
				          </div>
				          <input class="envoyer" type="submit" value="Send" />
		              </form>
				    </div><?php
				    $req->closeCursor();
			     } // fin du if pas connecté
			elseif (!empty($_SESSION['pseudo'])) // si session ON
				{  
					// alors on  n'affiche pas la demande de l'auteur mais on transfert le pseudo et id_membre
			    $req = $bdd1->prepare('SELECT * FROM blog WHERE id_article = ?');
				$req->execute(array($id));
				// Affichage des données de l'article de l'id passé en GET
				$donnees2 = $req->fetch();
			    ?>
	            <h3><img src="images/logo.png" alt="logo decoration" width="4%">      ADD A NEW COMMENTS    <img src="images/logo.png" alt="logo decoration" width="4%"></h3>  
	            <p>Referring to the article <?php echo $donnees2['titre_article']?></p>

	             <div style="text-align: center;">
	            	
	              <form action="jahia_blog_article_post_en.php?id_article=<?php echo $id; ?>" method="post">
	            	<div class="contacter">
			          <label><?php echo $_SESSION['pseudo']; ?> post your comment below :</label><br>
			          <textarea name="commentaire" required placeholder="Enter your comment here ... "></textarea>
	                  <br>
			          </div>
			          <input class="envoyer" type="submit" value="Send" />
	              </form> 
	             
			    </div> <?php
			    $req->closeCursor();

				}  // fin du if connecté	 SESSION
			else  // alores cookie ON
			    {  // alors on  n'affiche pas la demande de l'auteur mais on transfert le pseudo et id_membre par COOKIE
			    $req = $bdd1->prepare('SELECT * FROM blog WHERE id_article = ?');
				$req->execute(array($id));
				// Affichage des données de l'article de l'id passé en GET
				$donnees2 = $req->fetch();
			    ?>
	            <h3><img src="images/logo.png" alt="logo decoration" width="4%">     ADD A NEW COMMENTS     <img src="images/logo.png" alt="logo decoration" width="4%"></h3>  
	            <p>Referring to the article  <?php echo $donnees2['titre_article']?></p>

	            <div style="text-align: center;">
	              <form action="jahia_blog_article_post_en.php?id_article=<?php echo $id; ?>" method="post">
	            	<div class="contacter">
			          <label><?php echo $_COOKIE['pseudo']; ?> post your comment below  :</label><br>
			          <textarea name="commentaire" required placeholder="Enter your comment here... "></textarea>
	                  <br>
			          </div>
			          <input class="envoyer" type="submit" value="Send" />
	              </form> 
			    </div> <?php
			    $req->closeCursor();

				}  // fin du if connecté	
			
		?>
	    </div>      
    </body>
    <?php include("footer_en.php"); ?>
</html>