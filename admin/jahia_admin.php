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
                
              <h2> AJOUTER / MODIFIER UN ARTICLE DU BLOG  :</h2>
              
                  
                    <?php echo '<p>' . $_GET['pb'] . '</p><br>'; ?>
                    
                   <h3> AJOUTER / MODIFIER UN ARTICLE DU BLOG  :</h3>
                 <div style="text-align: center">
                     <form action="jahia_admin_post.php" method="post">
                      <div class="contacter">
                        <!--<label><strong>Numero de l'article a modifier <br> laisser vide si nouveau article  </strong></label><br>
                        <input type="text" name="id_article" /><br> -->
                        <label><strong>Titre article:  </strong></label><br>
                        <input type="text" name="titre_article" /><br>
                        <label><strong>Contenu article:  </strong></label><br>
                        <input type="text" name="contenu_article" /><br>
                        <br>
                        
                       </div>
                     <input class="envoyer" type="submit" value="Ajouter" />
                     </form><br>
                  </div>
                  
                  <div style="text-align: center">
                      <h6><a href="../jahia_profil.php">Retour au profil</a></h6>
                      
                      <h6><a href="../jahia_index.php">Retour a l'accueil</a></h6>
                  </div>
          </div> <!-- fin div corps -->
       </body>
    <?php include("../footer.php"); ?>
</html>