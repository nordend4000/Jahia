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
         <title>Jahia website</title>
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
                       }?>
                  <h2><img src="images/push.png" alt="push decoration" width="5%">  Change my Login & Password  :</h2>
                  <div style="text-align: center">
                     <img src="images/line.png" alt="line decoration" width="90%" style="text-align: center;"> 
                   </div>
                  <div style="text-align: center;">
                    <?php echo '<h3>' . $_GET['pb'] . '</h3><br>'; ?>
                    <p>Welcome <strong>
                     <?php if (!empty($_SESSION['pseudo']))
                     { echo $_SESSION['pseudo'];}
                     elseif (!empty($_COOKIE['pseudo']))
                     { echo $_COOKIE['pseudo'];}
                     else {echo "";}?></strong>  here you can update your login and your password !</p>
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
$req = $bdd->prepare('SELECT id, pseudo, email, date_inscription FROM membres WHERE pseudo = ?');
$req->execute(array($perso));
$donnees = $req->fetch();
//$insc = $donnees['date_inscription_fr'];
//$aj8 = date('d/m/Y h:i:s');
//$depuis = ($aj8)-($insc);
?>

<div class="info">
    <p> <img src="images/logo.png" alt="logo decoration" width="4%">   <strong>User Id N°<?php echo htmlspecialchars($donnees['id']); ?> :  </strong>  from <?php echo htmlspecialchars($donnees['date_inscription']); ?></p>
    <div id="ajout" >
    <p><strong>Current Nickname : </strong> <?php echo htmlspecialchars($donnees['pseudo']);?></p>
    <p><strong>Current E-mail : </strong> <?php echo htmlspecialchars($donnees['email']);?></p><br>
    
    <div class="info" style="text-align: center">
      <h3> Update your login :</h3>
    <form action="jahia_profil_perso_update_post_en.php" method="post">
      <div id="ajout">
          <label><strong>New Nickname :  </strong></label>
          <input type="text" name="pseudo_modif" placeholder="New Nickname" /><span id="aidename"></span><br>

          <h3> Update your password : </h3><br>
          <label><strong>Old password :  </strong></label>
          <input id="passwordOld" type="password" name="pass_ancien" placeholder="Old Password" /><span id="aidePasswordOld"></span><br>
          <label><strong>New password :  </strong></label><br>
          <input id="password1" type="password" name="pass_modif" placeholder="New Password" /><span id="aidePassword1"></span><br>
          <label><strong>New password again :  </strong></label><br>
          <input id="password2" type="password" name="pass_modif2" placeholder="New Password again" /><span id="aidePassword2"></span><br>
     </div>
    <input class="envoyer" type="submit" value="Update"/>
         </form><br>
       </div>
      
       <div style="text-align: center">
        <br><img src="images/logo.png" alt="logo decoration" width="4%">
                      <h6><a href="jahia_profil_en.php">Back to profile</a></h6>
                      
                      <h6><a href="jahia_index_en.php">Retour to home page</a></h6>
                      <img src="images/logo.png" alt="logo decoration" width="4%">
      </div>
</div>

<?php
$req->closeCursor(); // Important : on libère le curseur pour la prochaine requête
   ?> 



                   </div> <!-- fin div corps -->
              </body>
    <?php include("footer_en.php"); ?>
    <script src="aideFormUp_en.js"></script>
</html>