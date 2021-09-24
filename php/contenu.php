
    <?php
            if (isset($_POST['dico']))
            { ?>
                <h4><img src="images/push.png" alt="push decoration" width="5%">  Pictionary : Definition d'un mot en image</h4>
                     <?php
              // SQL pour enregistrer le vote dans la bdd
              try
              {
              $bdd = new PDO('mysql:host=185.98.131.92;dbname=beyon1308768;charset=utf8', 'beyon1308768', '2qot2hfrvr', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
              }
              catch(Exception $e)
              {
                      die('Erreur : '.$e->getMessage());
              }
               $dico = $_POST['dico'];
               $req2 = $bdd->prepare('SELECT mot, dico FROM galerie WHERE mot = ?');
               $req2->execute(array($dico));
            
               $donnees2 = $req2->fetch(); 
               echo '<h3>' . $donnees2['mot'] . '</h3>';
               echo "<div class='image_centrer' style='text-align: center'><img src='galerie/" . $donnees2['dico'] . "' alt='definition dico' style='text-align: center;' width='40%'></div><br>";
               echo '<h6><a href="jahia_dictionnaire.php">Retour au Pictionnaire</a></h6>';

               $req2->closeCursor();
              
             }

            else 
            { echo 'merci de selectionner une image dans la liste'; }

          ?>
