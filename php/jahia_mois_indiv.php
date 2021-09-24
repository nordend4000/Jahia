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
         <title>Le site de Jahia - Moi par mois</title>
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
    	 	include("jahia_nav.php"); 
			  	// Connexion à la base de données
			try
			{
               $bdd = new PDO('mysql:host=185.98.131.92;dbname=beyon1308768;charset=utf8', 'beyon1308768', '2qot2hfrvr', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            }
			catch(Exception $e)
			{
			        die('Erreur : '.$e->getMessage());
			}
			$id = $_GET['mois'];

			// Récupération des données du mois
			$reponse = $bdd->prepare('SELECT id, titre, commentaire, legende, photo_mois, legende_ext, photo_ext FROM month WHERE id = ?');
			//$reponse->execute(array($_GET['mois']));
			$reponse->execute(array($id));
			// Affichage des données du mois passé en GET
			$donnees = $reponse->fetch();?>

			<h2><img src="images/push.png" alt="push decoration" width="5%"><?php echo $donnees['titre']; ?></h2>
			<div style="text-align: center">
                  <img src="images/line.png" alt="line decoration" width="90%" style="text-align: center;"><br>  
            </div>
		    <p><?php echo $donnees['commentaire']; ?> </p><br>
			<div id="affichage_mois" style="text-align: center;">
				  <img src="images/<?php echo $donnees['photo_mois']; ?>" alt="Photo Jahia mois <?php echo $donnees['id']; ?>" width="40%">
			      <h4> <?php echo $donnees['legende']; ?></h4><br>
			</div>
			<div id="affichage_mois" style="text-align: center;">
				<br>
				  <img src="images/<?php echo $donnees['photo_ext']; ?>" alt="Photo Jahia mois <?php echo $donnees['id']; ?>" width="40%">
			      <h4> <?php echo $donnees['legende_ext']; ?></h4><br>
			</div>

            <div class="centrer">
                <img src="images/logo.png" alt="logo decoration" width="4%"><br>
            	<?php 
            	$reponse->closeCursor();
            	
                $precedent = (($_GET['mois']) - 1);
            	$suivant = (($_GET['mois']) + 1);

            	if (($_GET['mois']) >= 2)
            	{ ?>
                <h5><a href="jahia_mois_indiv.php?mois=<?php echo $precedent ?>">Mois precedent</a></h5><?php
            	} ?>
                <h5><a href="jahia_mois.php">Retour 12 mois</a></h5><?php
                if (($_GET['mois']) <= 11)
                { ?>
                  <h5><a href="jahia_mois_indiv.php?mois=<?php echo $suivant ?>">Mois suivant</a></h5><?php
                } ?> 
                <br><img src="images/logo.png" alt="logo decoration" width="4%">
            </div>
         </div>
    </body>
    <?php include("footer.php"); ?>
</html>