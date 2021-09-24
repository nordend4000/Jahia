<?php
 if (!empty($_POST['pseudo']) AND !empty($_POST['email']) AND !empty($_POST['mdp1']) AND !empty($_POST['mdp2']))
 {
   if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['email']))
   {
     if ($_POST['mdp1'] === $_POST['mdp2'])
     {  
         $pseudo = htmlspecialchars($_POST['pseudo']);
         $mdp = password_hash($_POST['mdp2'], PASSWORD_DEFAULT);
         $email = htmlspecialchars($_POST['email']);

         try
         { 
           $bdd = new PDO('mysql:host=185.98.131.92;dbname=beyon1308768;charset=utf8', 'beyon1308768', '2qot2hfrvr', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
           //lire bdd pour verifier si pseudo / email deja existant
            $query = $bdd->prepare("SELECT COUNT(*) FROM membres WHERE pseudo = :pseudo");
            $query->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
            $query->execute();
            $num_row = $query->fetchColumn();
            $query->closeCursor(); // Important : on libère le curseur pour la prochaine requête
            $query2 = $bdd->prepare("SELECT COUNT(*) FROM membres WHERE email = :email");
            $query2->bindValue(':email', $email, PDO::PARAM_STR);
            $query2->execute();
            $num_row2 = $query2->fetchColumn();
            $query2->closeCursor(); // Important : on libère le curseur pour la prochaine requête

            if ($num_row == 1)// Si le pseudo est déjà existant
                   {
                     $pb4 = "Sorry this nickname aleardy exist, you have to choose another one. !";
                     // Puis rediriger vers inscription_pb
                     header('Location: jahia_inscription_en.php?pb=' . $pb4);
                   }
                   else if ($num_row2 == 1)
                   {
                     $pb5 = "Sorry this e-mail aleardy exist, you have to choose another one !";
                     // Puis rediriger vers inscription_pb
                     header('Location: jahia_inscription_en.php?pb=' . $pb5);
                   }
                   else // pseudo et mail good
                   { 
                     $telephone = " ";
                     $rue = " ";
                     $code_postal = " ";
                     $ville = " ";
                     $pays = " ";
                     $photo_name = " ";
                     $photo_ext = " ";
                     $req = $bdd->prepare('INSERT INTO membres(pseudo, pass, email, date_inscription, telephone, rue, code_postal, ville, pays, photo_name, photo_ext) VALUES(:pseudo, :pass, :email, CURDATE(), :telephone, :rue, :code_postal, :ville, :pays, :photo_name, :photo_ext)');
                     $req->execute(array(
                     'pseudo' => $pseudo,
                     'pass' => $mdp,
                     'email' => $email,
                     'telephone' => $telephone,
                     'rue' => $rue,
                     'code_postal' => $code_postal,
                     'ville' => $ville,
                     'pays' => $pays,
                     'photo_name' => $photo_name,
                     'photo_ext' => $photo_ext
                     ));
             
                     // Puis rediriger vers connexion avec message d'ajout
                     $added = "You have been added to the membership list ! <br> You can now log in";
                     header('Location: jahia_connexion_en.php?pb=' . $added);
                     $req->closeCursor(); // Important : on libère le curseur pour la prochaine requête
                    
                     } // fin du dernier else pour enregistrer new membre
             } // fin du try
         catch(Exception $e)
         {
         // En cas d'erreur, on affiche un message et on arrête tout
         die('Erreur : '.$e->getMessage());
         }
     } //si mdps egaux
     else // SINON
       {
         $pb3 = "Please fill in the two identical passwords";
         
         // Puis rediriger vers inscription_pb
         header('Location: jahia_inscription_en.php?pb=' . $pb3);
       }
     }//si email valide
   else // SINON
       {
         $pb2 = "Please fill in a valid email";
         
         // Puis rediriger vers inscription_pb
         header('Location: jahia_inscription_en.php?pb=' . $pb2);
       }
 }// si les champs ne sont pas vide
 else // SINON
     {
     $pb1 = "Please fill in the form correctly";
     
     // Puis rediriger vers inscription_pb
     header('Location: jahia_inscription_en.php?pb=' . $pb1);
     }
             
?>
 