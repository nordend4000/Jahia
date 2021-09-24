<?php
session_start(); 
?>
<!DOCTYPE html>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Le site de Jahia">
    <link rel="stylesheet" href="jahia_style.css">
	<html>
	  <head>
	  	<meta charset="utf-8">
	  	<!-- <link rel="stylesheet" href="p.css" /> -->
	  	<title> Le site de Jahia : Quizz</title>
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
	        <h2><img src="images/push.png" alt="push decoration" width="5%">      QUIZZZ : tout sur ma première année</h2>
		    <div style="text-align: center">
		        <img src="images/line.png" alt="line decoration" width="90%"><br>
		    </div>
		    <p><strong>
                    <?php if (!empty($_SESSION['pseudo']))
                    { echo $_SESSION['pseudo'];}
                    elseif (!empty($_COOKIE['pseudo']))
                    { echo $_COOKIE['pseudo'];}
                    else {echo "";}?></strong>
		    Viens tester tes connaissances ... de ma naissance à ma première bougie<br>
		    <img src="images/logo.png" alt="logo decoration" width="4%"> Si tu as bien regardé le site tu connaîtras certainement toutes les réponses ... <img src="images/logo.png" alt="logo decoration" width="4%"> </p>
            <div class="quiz-container">
			<div id="quiz"></div>
			</div>
            
			<button class="envoyer" id="submit" >Valider le Quiz</button>
			<button class="envoyer" id="retry" onclick="window.open('jahia_quizz.php')">Reessayer le Quiz</button>
			<div id="results"></div>
      <br>
      <h6><a href="jahia_jeux.php">Retour aux Jeux</a></h6>
			    <script src="quizz2.js"></script> 
		  </div>
			
		</body>
		<?php include("footer.php"); ?>
	</html>
