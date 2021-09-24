<?php
session_start();
try
{
    $bdd = new PDO('mysql:host=185.98.131.92;dbname=beyon1308768;charset=utf8', 'beyon1308768', '2qot2hfrvr', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
if (isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] == 0)
{
        // Testons si le fichier n'est pas trop gros
        if ($_FILES['monfichier']['size'] <= 6000000)
        {
                // Testons si l'extension est autorisée
                if (empty($_SESSION['id'])) 
                   { $id = $_COOKIE['id']; }
                else { $id = $_SESSION['id']; }

                $infosfichier = pathinfo($_FILES['monfichier']['name']);
                $extension_upload = $infosfichier['extension'];
                $extension_upload_low = strtolower($extension_upload);
                $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png', 'JPG', 'GIF', 'PNG', 'JPEG');
                //$name = $infosfichier['filename'];
                //$file = '' .$name. '.' .$extension_upload;
                //$file = .$id . '.' .$extension_upload;
                $name = $id .".". $extension_upload_low;
                //$ext = ".". $extension_upload_low;
 
                if (in_array($extension_upload, $extensions_autorisees))
                {
                        // On peut valider le fichier et le stocker définitivement
                        move_uploaded_file($_FILES['monfichier']['tmp_name'], 'uploads/' . $name);
                        //echo "<font color='green'>L'envoi de votre image a bien été effectué !</font><br />";
                        //echo'<center><a href="http://localhost:8888/tests/uploads/'.$name.' "/>Voir l\'image</a></center>';
                        //echo'<p><a href="memb_espace_perso2.php">Retour au profil</a></p>';
                        // methode avec GET ===> pourrri
                        //echo'<p><a href="memb_espace_perso1.php?id=.'. $extension_upload.'">Retour au profil</a></p>';
                        // methode avec cookie ==> pourri
                        //setcookie('id', $id, time() + 365*24*3600, null, null, false, true);
                        //setcookie('pseudo', $_SESSION['pseudo'], time() + 365*24*3600, null, null, false, true);
                        //setcookie('name_photo', $name, time() + 365*24*3600, null, null, false, true); // On écrit un cookie
                        //setcookie('photo_ext', $extension_upload, time() + 365*24*3600, null, null, false, true); // On écrit un autre cookie...
                        // Methode en ecrivant le photo_name dans la BDD


                        $req2 = $bdd->prepare('UPDATE membres SET photo_name = :nvphoto_name, photo_ext = :nvphoto_ext WHERE id = :id');
                        $req2->execute(array(
                            'nvphoto_name' => $name,
                            'nvphoto_ext' => $extension_upload_low,
                            'id' => $id
                            ));
                        // Requète pour ajout donnée
                        //$bdd->exec('UPDATE membres SET ville = $_POST['ville']  WHERE membres.id = $id');
                        //$bdd->exec(UPDATE `membres` SET `ville` = $ville WHERE `membres`.`id` = $id);

                        $ok = 'Your profile picture has been set successfully !';
                        header('Location: jahia_profil_en.php?pb=' . $ok);

                }else
                {
                     
                        $pb1 = "<font color='red'>File extension is not allowed. <br /></font><font color='red'> (only files jpg, jpeg, gif, png allowed.)</font> ";
                        header('Location: jahia_upload_en.php?pb=' . $pb1);
                     
                     }
        }else
        {
            $pb2 = "<font color='red'>The size of our file is too large.</font> <br /><font color='red'>(6Mo limited)</font>";
            header('Location: jahia_upload_en.php?pb=' . $pb2);
        }
}else
{
    $pb3 = "<font color='red'>Please select a image file valid (only files jpg, jpeg, gif, png allowed.).</font>"; 
    header('Location: jahia_upload_en.php?pb=' . $pb3);
}

?>