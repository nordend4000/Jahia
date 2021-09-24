<!DOCTYPE html>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Le site de Jahia">
    <link rel="stylesheet" href="jahia_style.css">
   
    
<html>
    <head>
         <title>Le site de Jahia - Connexion</title>
    </head>
    <body>
         <div id="bloc_page">
          <h5><a href="jahia_index.php">Retour au menu</a></h5>
          <h5><a href="jahia_inscription.php">S'inscrire</a></h5>
             <br> 
             <?php
             if (isset($_GET['pbc'])){echo '<p>' . $_GET['pbc'] . '</p><br>';}
             if (isset($_GET['pb'])){echo '<p>' . $_GET['pb'] . '</p><br>';}
             ?> 
            <h2><img src="images/push.png" alt="push decoration" width="5%">   CONNEXION A l'ESPACE MEMBRE  :</h2>
            <div style="text-align: center;">
              <form action="jahia_connexion_post.php" method="post">
                <div class="contacter">
                  <label>Pseudo</label> 
                  <input type="text" name="pseudo" required placeholder="Ecrivez votre nom ici" /><br>
                  <br>
                  <label>Mot de passe</label>
                  <input type="password" name="pass" required placeholder="Ecrivez votre mot de passe ici" /><br>
                  <br>
                  <label>Connexion Automatique</label>
                  </div>
                  <input class="gros" type="checkbox" name="auto" /><br>
                  <br>
                
                <input class="envoyer" type="submit" value="Se connecter" />
              </form>
            </div>
            <h5><a href="jahia_index.php">Retour au menu</a></h5>
         </div> <!-- fin div corps -->
     
    </body>
    <?php include("footer.php"); ?>
</html>