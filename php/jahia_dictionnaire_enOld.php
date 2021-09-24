<?php
session_start(); 
?>
<!DOCTYPE html>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Le site de Jahia">
    
    <link rel="stylesheet" href="jahia_style.css">
    <title>Jahia's website - Pictionary</title>
</head>

<body>
    <?php
            if (isset($_POST['dico']))
            { ?>
                <h4><img src="images/push.png" alt="push decoration" width="5%">  Pictionary : Word's definition on pictures</h4>
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
               $req2 = $bdd->prepare('SELECT dico, word FROM galerie WHERE word = ?');
               $req2->execute(array($dico));
            
               $donnees2 = $req2->fetch(); 
               echo '<h3>' . $donnees2['word'] . '</h3>';
               echo "<div class='image_centrer' style='text-align: center'><img src='galerie/" . $donnees2['dico'] . "' alt='definition dico' style='text-align: center;' width='40%'></div><br>";
               echo '<h6><a href="jahia_dictionnaire_en.php">Back to Pictionary</a></h6>';

               $req2->closeCursor();
              
             }

            else 
            { ?>
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

                     <h2><img src="images/push.png" alt="push decoration" width="5%">     Pictionary</h2>
                     <div style="text-align: center">
                     <img src="images/line.png" alt="line decoration" width="90%">
                     </div>
                     <p><?php echo $_SESSION['pseudo']?> Do you know how to speak baby's language ?? baba, gaga, mama, papa, aya .... too easy ??!!<br>
                        For more complicated words it is easier in pictures<br> Let's select a word from the list to know my definition...</p>
                     <div class="centrer">
                          <form action="jahia_dictionnaire_en.php" method="post">
                            <SELECT name="dico" size="1">
                                <OPTION>Eat
                                <OPTION>Sleep
                                <OPTION>Play
                                <OPTION>Pool
                                <OPTION>Tired
                                <OPTION>Grouchy
                                <OPTION>Drive
                                <OPTION>Potty
                                <OPTION>Champagne
                                <OPTION>Bath
                                <OPTION>Zoggs
                                <OPTION>Passport
                                <OPTION>Duo
                                <OPTION>Trio
                                <OPTION>Quartet
                                <OPTION>Sextet
                            </SELECT><br>
                            <input class="envoyer" type="submit" value="Definition" />
                          </form>
                     </div>
                     <br><br>
                     <h6><a href="jahia_jeux_en.php">Back to games</a></h6>
             </div> <!-- fin du bloc-PAGE -->
            <?php } ?>


</body>
<br>
<?php include("footer_en.php"); ?>
</html>