<?php
            if (isset($_POST['favorite']))
            {
              // SQL pour enregistrer le vote dans la bdd
              try
              {
                $bdd = new PDO('mysql:host=185.98.131.92;dbname=beyon1308768;charset=utf8', 'beyon1308768', '2qot2hfrvr', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
              }
              catch(Exception $e)
              {
                      die('Erreur : '.$e->getMessage());
              }
              $id_galerie = ceil($_POST['favorite']);
              // recuperer la valeur de vote pour la photo choisi et ajouté 1
              $reqvote = $bdd->prepare('SELECT vote FROM galerie WHERE id_galerie = ?');
              $reqvote->execute(array($_POST['favorite']));
              $donnee1 = $reqvote->fetch();

              $nvvote = ($donnee1['vote'] + 1);
              $reqvote->closeCursor();

              //ajouter la nouvelle valeur de vote a la photo choisi
               $req = $bdd->prepare('UPDATE galerie SET vote = :nvvote WHERE id_galerie = :id_galerie');
                $req->execute(array(
                  'nvvote' => $nvvote,
                  'id_galerie' => $id_galerie
                  ));
                $req->closeCursor();

                //$reponse = $bdd->query('SELECT * FROM galerie WHERE vote DESC LIMIT 0, 3');
                //while ($donnees2 = $reponse->fetch())
                //{ 
                  //<p> <?php echo $donnees2;         </p>
                //}
                //$reponse->closeCursor();

              


              
            
            
            } 
            // fin du if "a voter"
         


         ?>