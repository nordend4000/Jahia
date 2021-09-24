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


// recupérer id del'article posté au dessus pour le nom de l'image
$id = htmlspecialchars($_GET['id']);


// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
if (isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] == 0)
{
        // Testons si le fichier n'est pas trop gros
        if ($_FILES['monfichier']['size'] <= 6000000)
        {
                // Testons si l'extension est autorisée

                $infosfichier = pathinfo($_FILES['monfichier']['name']);
                $extension_upload = $infosfichier['extension'];
                $extension_upload_low = strtolower($extension_upload);
                $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png', 'JPG', 'GIF', 'PNG', 'JPEG');
                //$name = $infosfichier['filename'];
                //$file = '' .$name. '.' .$extension_upload;
                //$file = .$id . '.' .$extension_upload;
            
                
                $name2 =  $id . "_2." . $extension_upload_low;
                $name = "article_" . $name2;
                  //$ext = ".". $extension_upload_low;
 
                if (in_array($extension_upload, $extensions_autorisees))
                {
                        // On peut valider le fichier et le stocker définitivement
                        move_uploaded_file($_FILES['monfichier']['tmp_name'], '../blog/' . $name);
                        // if !empty alors video pas nom article_N.jpg

                }else
                {
                     
                        $pb1 = "<font color='red'>L'extension du fichier n'est pas autorisée. <br /></font><font color='red'> (Seuls les fichiers jpg, jpeg, gif, png sont acceptés.)</font> ";
                        header('Location: ../jahia_profil.php?pb=' . $pb1);
                     
                     }
                 }else
                 {
                     $pb2 = "<font color='red'>Le fichier est trop volumineux.</font> <br /><font color='red'>(Poids limité à 6Mo)</font>";
                     header('Location: ../jahia_profil.php?pb=' . $pb2);
                 }
                 }else
                 { 
                     $pb3 = "<font color='red'>Veuillez selectionner un fichier image valide.</font>"; 
                     header('Location: ../jahia_profil.php?pb=' . $pb3);
                 } 
// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
if (isset($_FILES['monfichier1']) AND $_FILES['monfichier1']['error'] == 0)
{
        // Testons si le fichier n'est pas trop gros
        if ($_FILES['monfichier1']['size'] <= 6000000)
        {
                // Testons si l'extension est autorisée

                $infosfichier1 = pathinfo($_FILES['monfichier1']['name']);
                $extension_upload1 = $infosfichier1['extension'];
                $extension_upload_low1 = strtolower($extension_upload);
                $extensions_autorisees1 = array('jpg', 'jpeg', 'gif', 'png', 'JPG', 'GIF', 'PNG', 'JPEG');
                //$name = $infosfichier['filename'];
                //$file = '' .$name. '.' .$extension_upload;
                //$file = .$id . '.' .$extension_upload;
                $nvmedia2 = $id . "." . $extension_upload_low1;
                $nvmedia = "article_" . $nvmedia2;
                  //$ext = ".". $extension_upload_low;
 
                if (in_array($extension_upload1, $extensions_autorisees1))
                {
                        // On peut valider le fichier et le stocker définitivement
                        move_uploaded_file($_FILES['monfichier1']['tmp_name'], '../blog/' . $nvmedia);
                        // if !empty alors video pas nom article_N.jpg

                }else
                {
                     
                        $pb1 = "<font color='red'>L'extension du fichier n'est pas autorisée. <br /></font><font color='red'> (Seuls les fichiers jpg, jpeg, gif, png sont acceptés.)</font> ";
                        header('Location: ../jahia_profil.php?pb=' . $pb1);
                     
                     }
                 }else
                 {
                     $pb2 = "<font color='red'>Le fichier est trop volumineux.</font> <br /><font color='red'>(Poids limité à 6Mo)</font>";
                     header('Location: ../jahia_profil.php?pb=' . $pb2);
                 }
                 }else
                 { 
                     $pb3 = "<font color='red'>Veuillez selectionner un fichier image valide.</font>"; 
                     header('Location: ../jahia_profil.php?pb=' . $pb3);
                 } 

                       
                        if (!empty($_POST['media_name'])) // si pas d'url alors nom phto a partir de l'upload
                        {
                        $nvmedia = htmlspecialchars($_POST['media_name']); 
                        }


                        //$id_article = htmlspecialchars($_POST['id_article']);

                        $nvlegende = htmlspecialchars($_POST['legende_media']); 
                        $nvlegendephoto = htmlspecialchars($_POST['legende_photo']);

                        $req2 = $bdd->prepare('UPDATE article SET legende_media = :legende_media, media_name = :media_name, legende_photo = :legende_photo, photo_name = :photo_name WHERE id_article = :id_article');

                        $req2->execute(array(
                            'legende_media' => $nvlegende,
                            'media_name' => $nvmedia,
                            'legende_photo' => $nvlegendephoto,
                            'photo_name' => $name,
                            'id_article' => $id
                            ));

                        $req2->closeCursor(); // Important : on libère le curseur pour la prochaine requête

                        $ok1 = "L'article a bien été publié et les photos enregistrées";

                        header('Location: ../jahia_profil.php?pb=' . $ok1);

?>
