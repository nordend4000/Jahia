<?php
session_start(); 
?>
<!DOCTYPE html>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Le site de Jahia">
    
    <link rel="stylesheet" href="jahia_style.css">
    <title>Jahia's website - Gallery</title>
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
                       }
                      include("jahia_nav_en.php"); ?>

         <h2><img src="images/push.png" alt="push decoration" width="5%">     Gallery of my best pictures</h2>
         <div style="text-align: center">
         <img src="images/line.png" alt="line decoration" width="90%">
         </div>
         <div class="centrer">
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
               // TRIAGE DES 3 meilleur votes
               $fav = $_POST['favorite'];
                $req2 = $bdd->query('SELECT id_galerie, vote, photo_name FROM galerie ORDER BY vote DESC LIMIT 0, 16');
               $favorite = $_POST['favorite'];
               while ($donnees2 = $req2->fetch())
               { 
               $podium[] = $donnees2['id_galerie'];
               $image_podium[] = $donnees2['photo_name'];
               }
               
               echo "<h3>Thanks for voting for picture N° <strong>" . $_POST['favorite'] . "</strong></h3><p>Your vote has been added to the leaderboard<br> I like this one too... </p> ";
               //echo "<img src='galerie/" . $image_podium[($fav)] . "' alt='medaille or' style='text-align: center;' width='10%'><br>";
               echo '<h2><img src="images/logo.png" alt="logo decoration" width="4%">      The new leaderboard is :    <img src="images/logo.png" alt="logo decoration" width="4%"></h2>'; ?>
              <div class="image_centrer">
              <p>Gold medal : </p>
              <h4>Picture N° <?php echo $podium[0]; ?></h4><?php
              echo "<img src='galerie/" . $image_podium[0] . "' alt='medaille or' style='text-align: center;' width=30%'><br>"; ?>
              <p>Silver medal : </p>
              <h4>Picture N° <?php echo $podium[1]; ?></h4><?php
              echo "<img src='galerie/" . $image_podium[1] . "' alt='medaille argent' style='text-align: center;' width='20%'><br>"; ?>
              <p>Bronze medal : </p>
              <h4>Picture N° <?php echo $podium[2]; ?></h4><?php
              echo "<img src='galerie/" . $image_podium[2] . "' alt='medaille bronze' style='text-align: center;' width='10%'><br>"; ?>
              </div>
              <br><br>
              <div style="text-align: center">
                <img src="images/line.png" alt="line decoration" width="90%">
              </div><?php

              $req2->closeCursor(); 
            }

                ?>
         </div>
         <br>
         <br>
         <div class="container">

            <!-- Full-width images with number text -->
            <div class="mySlides" style="text-align: center">
              <div class="numbertext">1 / 16</div>
                <img id="pic" src="galerie/one.jpg" style="width:50%">
            </div>

            <div class="mySlides" style="text-align: center">
              <div class="numbertext">2 / 16</div>
                <img id="pic" src="galerie/two.jpg" style="width:50%">
            </div>

            <div class="mySlides" style="text-align: center">
              <div class="numbertext">3 / 16</div>
                <img id="pic" src="galerie/three.jpg" style="width:50%">
            </div>

            <div class="mySlides" style="text-align: center">
              <div class="numbertext">4 / 16</div>
                <img id="pic" src="galerie/four.jpg" style="width:50%">
            </div>

            <div class="mySlides" style="text-align: center">
              <div class="numbertext">5 / 16</div>
                <img id="pic" src="galerie/five.jpg" style="width:50%">
            </div>

            <div class="mySlides" style="text-align: center">
              <div class="numbertext">6 / 16</div>
                <img id="pic" src="galerie/six.jpg" style="width:50%">
            </div>

            <div class="mySlides" style="text-align: center">
              <div class="numbertext">7 / 16</div>
                <img id="pic" src="galerie/seven.jpg" style="width:50%">
            </div>

            <div class="mySlides" style="text-align: center">
              <div class="numbertext">8 / 16</div>
                <img id="pic" src="galerie/eight.jpg" style="width:50%">
            </div>

            <div class="mySlides" style="text-align: center">
              <div class="numbertext">9 / 16</div>
                <img id="pic" src="galerie/nine.jpg" style="width:50%">
            </div>

            <div class="mySlides" style="text-align: center">
              <div class="numbertext">10 / 16</div>
                <img id="pic" src="galerie/ten.jpg" style="width:50%">
            </div>
            <div class="mySlides" style="text-align: center">
              <div class="numbertext">11 / 16</div>
                <img id="pic" src="galerie/eleven.jpg" style="width:50%">
            </div>
            <div class="mySlides" style="text-align: center">
              <div class="numbertext">12 / 16</div>
                <img id="pic" src="galerie/twelve.jpg" style="width:50%">
            </div>
            <div class="mySlides" style="text-align: center">
              <div class="numbertext">13 / 16</div>
                <img id="pic" src="galerie/thirteen.jpg" style="width:50%">
            </div>
            <div class="mySlides" style="text-align: center">
              <div class="numbertext">14 / 16</div>
                <img id="pic" src="galerie/fourteen.jpg" style="width:50%">
            </div>
            <div class="mySlides" style="text-align: center">
              <div class="numbertext">15 / 16</div>
                <img id="pic" src="galerie/fiveteen.jpg" style="width:50%">
            </div>
            <div class="mySlides" style="text-align: center">
              <div class="numbertext">16 / 16</div>
                <img id="pic" src="galerie/sixteen.jpg" style="width:50%">
            </div>
         
         <!-- Next and previous buttons -->
         <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
         <a class="next" onclick="plusSlides(1)">&#10095;</a>

          <!-- Image text -->
         <div class="caption-container">
            <p id="caption"></p>
         </div>

          <!-- Thumbnail images -->
         <div class="row">
            <div class="column">
              <img class="demo cursor" src="galerie/one.jpg" style="width:50%" onclick="currentSlide(1)" alt="I'm cute !">
            </div>
            <div class="column"> 
              <img class="demo cursor" src="galerie/two.jpg" style="width:50%" onclick="currentSlide(2)" alt="I'm cute even when sleeping !">
            </div>
            <div class="column">
              <img class="demo cursor" src="galerie/three.jpg" style="width:50%" onclick="currentSlide(3)" alt="I'm just serious...">
            </div>
            <div class="column">
              <img class="demo cursor" src="galerie/four.jpg" style="width:50%" onclick="currentSlide(4)" alt="Small bare feet ...">
            </div>
            <div class="column">
              <img class="demo cursor" src="galerie/five.jpg" style="width:50%" onclick="currentSlide(5)" alt="I'm having a rest...">
            </div> 
            <div class="column">
              <img class="demo cursor" src="galerie/six.jpg" style="width:50%" onclick="currentSlide(6)" alt="I'm thinking...">
            </div>
            <div class="column">
              <img class="demo cursor" src="galerie/seven.jpg" style="width:50%" onclick="currentSlide(7)" alt="I like playing in the sand.">
            </div>
            <div class="column">
              <img class="demo cursor" src="galerie/eight.jpg" style="width:50%" onclick="currentSlide(8)" alt="I don't find the Wifi signal !">
            </div>
            <div class="column">
              <img class="demo cursor" src="galerie/nine.jpg" style="width:50%" onclick="currentSlide(9)" alt="Give me your hand.">
            </div>
            <div class="column">
              <img class="demo cursor" src="galerie/ten.jpg" style="width:50%" onclick="currentSlide(10)" alt="I'm driving !">
            </div>
            <div class="column">
              <img class="demo cursor" src="galerie/eleven.jpg" style="width:50%" onclick="currentSlide(11)" alt="I’m just a naughty girl.">
            </div>
            <div class="column">
              <img class="demo cursor" src="galerie/twelve.jpg" style="width:50%" onclick="currentSlide(12)" alt="I got it.">
            </div>
            <div class="column">
              <img class="demo cursor" src="galerie/thirteen.jpg" style="width:50%" onclick="currentSlide(13)" alt="Yes, I got my cousin’s clothes and I like them !!">
            </div>
            <div class="column">
              <img class="demo cursor" src="galerie/fourteen.jpg" style="width:50%" onclick="currentSlide(14)" alt="I saw you...">
            </div>
            <div class="column">
              <img class="demo cursor" src="galerie/fiveteen.jpg" style="width:50%" onclick="currentSlide(15)" alt="Getting ready for the cold.">
            </div>
            <div class="column">
              <img class="demo cursor" src="galerie/sixteen.jpg" style="width:50%" onclick="currentSlide(16)" alt="Naked on the beach, the best !!">
            </div>
            <br>
           </div>
           </div>
           <div style="text-align: center">
              <img src="images/line.png" alt="line decoration" width="90%">
           </div>
           <div class="centrer">
              <h2>Vote for your favorite picture !!!</h2>
              <img src="images/logo.png" alt="logo decoration" width="4%">
              <p> Select the number of your favorite photo</p>
              <img src="images/logo.png" alt="logo decoration" width="4%">
              <form action="jahia_galerie_en.php" method="post">
                <SELECT name="favorite" size="1">
                    <OPTION>1
                    <OPTION>2
                    <OPTION>3
                    <OPTION>4
                    <OPTION>5
                    <OPTION>6
                    <OPTION>7
                    <OPTION>8
                    <OPTION>9
                    <OPTION>10
                    <OPTION>11
                    <OPTION>12
                    <OPTION>13
                    <OPTION>14
                    <OPTION>15
                    <OPTION>16
                </SELECT>
                <br>
                <input class="envoyer" type="submit" value="Vote" />
              </form>
            </div>
            

         </div> <!-- fin du bloc-PAGE -->
    
  
    <script src="galerie.js"></script>

</body>
<br>
<?php include("footer_en.php"); ?>
</html>