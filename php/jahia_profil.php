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
         <title>Le site de Jahia : Profil Perso</title>
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
                      include("jahia_nav.php"); ?>

            <h2><img src="images/push.png" alt="push decoration" width="5%">   PROFIL PERSO  :</h2>
            <div style="text-align: center">
               <img src="images/line.png" alt="line decoration" width="90%" style="text-align: center;"> 
            </div>

            <?php // Connexion à la base de données 
            echo '<h3>' . $_GET['pb'] . '</h3><br>'; 
try
{
    $bdd = new PDO('mysql:host=185.98.131.92;dbname=beyon1308768;charset=utf8', 'beyon1308768', '2qot2hfrvr', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}//--------------------------------------------------------------
if (empty($_SESSION['pseudo'])) 
    { $perso = $_COOKIE['pseudo']; }
else { $perso = $_SESSION['pseudo']; }
// Requete pour select le nom de la photo de profil
$req1 = $bdd->prepare('SELECT id, photo_name, photo_ext FROM membres WHERE pseudo = ?');
$req1->execute(array($perso));
$donnees1 = $req1->fetch();

// verif photo profil
$extensions_autorisees2 = array('jpg', 'jpeg', 'JPG', 'JPEG');
    //if ($donnees1['photo_name'] == " ")
  if (preg_match("#^[0-9]#", $donnees1['photo_name']))
  {
    $name_ext = $donnees1['photo_ext'];

    if (in_array($name_ext, $extensions_autorisees2))
    { // alors use jpeg setting
        // creation de la photo de profil miniature
        $name_photo = $donnees1['photo_name'];
        $source = imagecreatefromjpeg('uploads/'.$name_photo); // La photo est la source
        $destination = imagecreatetruecolor(200, 150); // On crée la miniature vide

        // Les fonctions imagesx et imagesy renvoient la largeur et la hauteur d'une image
        $largeur_source = imagesx($source);
        $hauteur_source = imagesy($source);
        $largeur_destination = imagesx($destination);
        $hauteur_destination = imagesy($destination);

        // On crée la miniature
        imagecopyresampled($destination, $source, 0, 0, 0, 0, $largeur_destination, $hauteur_destination, $largeur_source, $hauteur_source);
        $mininame = "mini_".$name_photo;
        // On enregistre la miniature sous le nom "mini_couchersoleil.jpg"
        imagejpeg($destination, 'uploads/'.$mininame); ?>

        <p>Bienvenue <strong>
               <?php if (!empty($_SESSION['pseudo']))
               { echo $_SESSION['pseudo'];}
               elseif (!empty($_COOKIE['pseudo']))
               { echo $_COOKIE['pseudo'];}
               else {echo "";}?></strong>  sur ton espace perso!</p> <?php

            echo '<span id="upload"><img src="uploads/'.$mininame.'" alt="photo de profil" />';
                
            echo '<h4><a href="jahia_copyrighter.php">Cliquez ici pour aggrandir</a></h4></span>'; 
         
        }

        else   // sinon on utilise png
        {
            // creation de la photo de profil miniature
            $name_photo = $donnees1['photo_name'];
            $source = imagecreatefrompng('uploads/'.$name_photo); // La photo est la source
            $destination = imagecreatetruecolor(200, 150); // On crée la miniature vide

            // Les fonctions imagesx et imagesy renvoient la largeur et la hauteur d'une image
            $largeur_source = imagesx($source);
            $hauteur_source = imagesy($source);
            $largeur_destination = imagesx($destination);
            $hauteur_destination = imagesy($destination);

            // On crée la miniature
            imagecopyresampled($destination, $source, 0, 0, 0, 0, $largeur_destination, $hauteur_destination, $largeur_source, $hauteur_source);
            $mininame = "mini_".$name_photo;
            // On enregistre la miniature sous le nom "mini_couchersoleil.jpg"
            imagepng($destination, 'uploads/'.$mininame); ?>

              <p>Bienvenue <strong>
               <?php if (!empty($_SESSION['pseudo']))
               { echo $_SESSION['pseudo'];}
               elseif (!empty($_COOKIE['pseudo']))
               { echo $_COOKIE['pseudo'];}
               else {echo "";}?></strong>  sur ton espace perso!</p> <?php

            echo '<span id="upload"><img src="uploads/'.$mininame.'" alt="photo de profil" />';
                
            echo '<h4><a href="jahia_copyrighter.php">Cliquez ici pour aggrandir</a></h4></span>'; 
             
        } // fin du else verif photo profil
    }// fin du if verif photo profil

            $req1->closeCursor(); // Important : on libère le curseur pour la prochaine requête
            //--------------------------------------------------------------

            // Récupération des info perso avant affichage
            $req = $bdd->prepare('SELECT id, pseudo, email, DATE_FORMAT(date_inscription, \'%d/%m/%Y \') AS date_inscription_fr, telephone, rue, code_postal, ville, pays FROM membres WHERE pseudo = ?');
            $req->execute(array($perso));
            $donnees = $req->fetch();
            //$insc = $donnees['date_inscription_fr'];
            //$aj8 = date('d/m/Y h:i:s');
            //$depuis = ($aj8)-($insc);
            ?>

        <div style="text-align: left">
            <p> <img src="images/logo.png" alt="logo decoration" width="4%">   <strong>Membre N°<?php echo htmlspecialchars($donnees['id']); ?> :  </strong>  depuis le <?php echo htmlspecialchars($donnees['date_inscription_fr']); ?></p>
            <p><strong>Pseudo : </strong> <?php echo htmlspecialchars($donnees['pseudo']);?></p>
            <p><strong>Email : </strong> <?php echo htmlspecialchars($donnees['email']);?></p>
            <p><strong>Telephone : </strong> <?php echo htmlspecialchars($donnees['telephone']);?></p>

            <h3>Mon adresse: </h3>
            <p><strong>Rue : </strong> <?php echo htmlspecialchars($donnees['rue']);?></p>
            <p><strong>Code Postal : </strong>  <?php echo htmlspecialchars($donnees['code_postal']);?></p>
            <p><strong>Ville : </strong> <?php echo htmlspecialchars($donnees['ville']);?></p>
            <p><strong>Pays : </strong> <?php echo htmlspecialchars($donnees['pays']);?></p>
        </div>
        <div class="centrer" style="text-align: center">
            <img src="images/logo.png" alt="logo decoration" width="4%">
            <h6><a href="jahia_profil_perso_update.php">Modifier mes identifiants de connexion</a></h6>
            
            <h6><a href="jahia_profil_perso_new.php">Mettre a jour mes informations personnelles</a></h6>
            
            <div id="photo_profil"><h6><a href="jahia_upload.php">Changer la photo de profil</a></h6>

            <h6><a href="jahia_profil_liste_commentaires.php">Afficher la liste de tous mes commentaires</a></h6>   
            
            <h6><a href="jahia_index.php">Retour a l'accueil</a></h6>
            <img src="images/logo.png" alt="logo decoration" width="4%">
            <br><br><h5><a href="admin/jahia_admin.php">Admin</a></h5>
            </div>
         </div>
        

        <?php
        $req->closeCursor(); // Important : on libère le curseur pour la prochaine requête
        ?>

      </div> <!-- fin div corps -->
     
    </body>
    <?php include("footer.php"); ?>
</html>