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
         <title>Admin website</title>
    </head>
    <body>
        <div id="bloc_page"> 
                
              <h2>  AJOUTER / MODIFIER UN ARTICLE DU BLOG  :</h2>
              
                  
                    <?php echo '<h3>' . $_GET['pb'] . '</h3><br>'; 
 try
     { 
       // On se connecte à MySQL
       $bdd = new PDO('mysql:host=localhost;dbname=jahia;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
     }
     catch(Exception $e)
     {
       // En cas d'erreur, on affiche un message et on arrête tout
       die('Erreur : '.$e->getMessage());
     }


// recupérer id del'article posté au dessus pour le nom de l'image
$titre = htmlspecialchars($_GET['titre_article']);
$req3 = $bdd->prepare('SELECT * FROM article WHERE titre_article = ?');
$req3->execute(array($titre));
$donnees3 = $req3->fetch();
$id = $donnees3['id_article'];


?>
                    
                   <h3> AJOUTER / MODIFIER UN ARTICLE DU BLOG  :</h3>
                 <div style="text-align: center">
                     <form action="jahia_admin_photo_post.php?id=<?php echo $id ?>" method="post" enctype="multipart/form-data">
                      <div class="contacter">
                        <p> CHOIX ENTRE un LIEN VIDEO EN DESSOUS ou charger une photo</p>
                      	<label><strong>lien de la video:  </strong>si pas de video ne rien mettre ici et charger une photo à la place en dessous</label><br>
                        <input type="text" name="media_name" placeholder="commencant par http..... si photo ne rien ecrire ici" /><br>
                        <label><strong>Charger la photo 1 :</strong></label><br>
                        <input type="file" name="monfichier1" /><br>

                        <label><strong>Legende Video ou Photo 1 :  </strong></label><br>
                        <input type="text" name="legende_media" /><br>
                        
                        <label><strong>Legende photo 2 :  </strong></label><br>
                        <input type="text" name="legende_photo" /><br>
                      
                        <label><strong>Charger la photo 2:  </strong></label><br>
                        <input type="file" name="monfichier" /><br>


                        </div>
                     <input class="envoyer" type="submit" value="Ajouter" />
                     </form><br>
                  </div>
                  
                  <div style="text-align: center">
                      <h6><a href="../jahia_profil.php">Retour au profil</a></h6>
                      
                      <h6><a href="../jahia_index.php">Retour a l'accueil</a></h6>
                  </div>
                  <?php $req3->closeCursor();   ?>
          </div> <!-- fin div corps -->
       </body>
    <footer> &copy; Jahia GIOUX ANDERSON - 2019 - tous droits réservés</footer>
</html>