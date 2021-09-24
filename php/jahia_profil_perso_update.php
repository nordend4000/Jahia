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
         <title>Le site de Jahia : Modification Pseudo et Mot de passe</title>
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
                       } ?>
                  <h2><img src="images/push.png" alt="push decoration" width="5%">   Modifier mes identifiants de connexion :</h2>
                  <div style="text-align: center">
                     <img src="images/line.png" alt="line decoration" width="90%" style="text-align: center;"> 
                   </div>
                  <div style="text-align: center;">
                    <?php echo '<h3>' . $_GET['pb'] . '</h3><br>'; ?>
                    <p>Bienvenue <strong>
                     <?php if (!empty($_SESSION['pseudo']))
                     { echo $_SESSION['pseudo'];}
                     elseif (!empty($_COOKIE['pseudo']))
                     { echo $_COOKIE['pseudo'];}
                     else {echo "";}?></strong>  ici tu peux modifier ton pseudo, ton email et ton mot de passe !</p>
                   </div>

                   <?php
echo '<h3>' . $_GET['pb'] . '</h3><br>';
// Connexion à la base de données pour recuperation des données perso
try
{
    $bdd = new PDO('mysql:host=185.98.131.92;dbname=beyon1308768;charset=utf8', 'beyon1308768', '2qot2hfrvr', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
if (empty($_SESSION['pseudo'])) 
    { $perso = $_COOKIE['pseudo']; }
else { $perso = $_SESSION['pseudo']; }
// Récupération des info perso
$req = $bdd->prepare('SELECT id, pseudo, email, DATE_FORMAT(date_inscription, \'%d/%m/%Y à %Hh%imin%ss\') AS date_inscription_fr FROM membres WHERE pseudo = ?');
$req->execute(array($perso));
$donnees = $req->fetch();
//$insc = $donnees['date_inscription_fr'];
//$aj8 = date('d/m/Y h:i:s');
//$depuis = ($aj8)-($insc);
?>

<div class="info">
    <p> <img src="images/logo.png" alt="logo decoration" width="4%">   <strong>Membre N°<?php echo htmlspecialchars($donnees['id']); ?> :  </strong>  depuis le <?php echo htmlspecialchars($donnees['date_inscription_fr']); ?></p>
    <p><strong>Pseudo actuel : </strong> <?php echo htmlspecialchars($donnees['pseudo']);?></p>
    <p><strong>Email actuel : </strong> <?php echo htmlspecialchars($donnees['email']);?></p><br>
    
    <div style="text-align: center">
      <h3> Modifier mes identifiants de connexion :</h3>
    <form action="jahia_profil_perso_update_post.php" method="post">
      <div id="ajout">
          <label><strong>Nouveau Pseudo :  </strong></label>
          <input id="name" type="text" name="pseudo_modif" placeholder="Nouveau Pseudo" /><span id="aideName"></span><br>

          <h3> Modifier mon mot de passe de connexion : </h3><br>
          <label><strong>Ancien Mot de passe pour verification:  </strong></label>
          <input id="passwordOld" type="password" name="pass_ancien" placeholder="Ancien mot de passe" /><span id="aidePasswordOld"></span><br>
          <label><strong>Nouveau Mot de passe :  </strong></label><br>
          <input id="password1" type="password" name="pass_modif" placeholder="Nouveau mot de passe" /><span id="aidePassword1"></span><br>
          <label><strong>Retaper votre nouveau Mot de passe :  </strong></label><br>
          <input id="password2" type="password" name="pass_modif2" placeholder="Retaper le nouveau mot de passe" /><span id="aidePassword2"></span><br>
      </div>
    <input class="envoyer" type="submit" value="Modifier" />
         </form><br>
       </div>
       <div style="text-align: center">
        <br><img src="images/logo.png" alt="logo decoration" width="4%">
                      <h6><a href="jahia_profil.php">Retour au profil</a></h6>
                      
                      <h6><a href="jahia_index.php">Retour a l'accueil</a></h6>
                      <img src="images/logo.png" alt="logo decoration" width="4%">
                  </div>
</div>

<?php
$req->closeCursor(); // Important : on libère le curseur pour la prochaine requête
   ?> 



                   </div> <!-- fin div corps -->
              </body>
    <?php include("footer.php"); ?>
    <script src="aideFormUp.js"></script>
</html>