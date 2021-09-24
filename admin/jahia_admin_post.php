<?php
session_start(); 

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



//$id_article = htmlspecialchars($_POST['id_article']);

$nvtitre = htmlspecialchars($_POST['titre_article']);
$nvcontenu= htmlspecialchars($_POST['contenu_article']);
$nvlegende = " ";
$nvmedia = " ";
$nvlegendephoto = " ";
$nvphoto = " ";
$nvvideo = " ";

$req2 = $bdd->prepare('INSERT INTO article(titre_article, contenu_article, legende_media, media_name, legende_photo, photo_name, date_publication, video) VALUES(:titre_article, :contenu_article, :legende_media, :media_name, :legende_photo, :photo_name, CURDATE(), :video)');

$req2->execute(array(
    'titre_article' => $nvtitre,
    'contenu_article' => $nvcontenu,
    'legende_media' => $nvlegende,
    'media_name' => $nvmedia,
    'legende_photo' => $nvlegendephoto,
    'photo_name' => $nvphoto,
    'video' => $nvvideo
    ));


$req2->closeCursor(); // Important : on libère le curseur pour la prochaine requête

                    

$ok1 = "L'article a bien été publié! Il faut maintenant charger les photos et les legendes";

header('Location: jahia_admin_photo.php?titre_article=' . $nvtitre);

?>