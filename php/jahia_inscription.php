<!DOCTYPE html>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Le site de Jahia">
    <link rel="stylesheet" href="jahia_style.css">
   
    
<html>
    <head>
         <title>Le site de Jahia : Inscription</title>
    </head>
    <body>
         <div id="bloc_page">
            <h5><a href="jahia_index.php">Retour au menu</a></h5>
            <h5><a href="jahia_connexion.php">Deja inscrit</a></h5>
            <h2><img src="images/push.png" alt="push decoration" width="5%">   INSCRIPTION A l'ESPACE MEMBRE  :</h2>
            <?php
             if (isset($_GET['pb'])) { echo '<p>' . $_GET['pb'] . '</p><br>'; } 
             ?> 
            <div style="text-align: center;">
              <form action="jahia_inscription_post.php" method="post">
                <div class="contacter">
                      <label>Pseudo</label> 
                      <input id="name" type="text" name="pseudo" required placeholder="Ecris ton nom ici" /><span id="aideName"></span>
                      <br>
                      <label>E-mail</label>
                      <input id="mail" type="email" name="email" required placeholder="Ecris ton adresse de messagerie électronique"/><span id="aideEmail"></span>
                      <br>
                      <label>Mot de passe</label>
                      <input id="password1" type="password" name="mdp1" required placeholder="Ecris ton mot de passe ici" /><span id="aidePassword1"></span>
                      <br>
                      <label>Confirmer le Mot de passe</label>
                      <input id="password2" type="password" name="mdp2" required placeholder="Confirmes ton mot de passe ici" /><span id="aidePassword2"></span>
                      <br>
                </div>
                  <input class="envoyer" type="submit" value="S'inscrire" />
              </form>
            </div>
         </div> <!-- fin div corps -->
     
    </body>
    <?php include("footer.php"); ?>
    <script src="aideForm.js"></script>
</html>