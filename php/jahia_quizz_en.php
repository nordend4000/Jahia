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
	  	<!--<link rel="stylesheet" href="p.css" /> -->
	  	<title> Jahia's Quizz</title>
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
	        <h2><img src="images/push.png" alt="push decoration" width="5%">      QUIZZZ : My first year</h2>
		    <div style="text-align: center">
		        <img src="images/line.png" alt="line decoration" width="90%"><br>
		    </div>
		    <p><strong>
                    <?php if (!empty($_SESSION['pseudo']))
                    { echo $_SESSION['pseudo'];}
                    elseif (!empty($_COOKIE['pseudo']))
                    { echo $_COOKIE['pseudo'];}
                    else {echo "";}?></strong>
                    
		    Let's test your knowledge ... from my birth day to my first candle<br>
		    <img src="images/logo.png" alt="logo decoration" width="4%"> If you looked at my website properly you should know each answers ... <img src="images/logo.png" alt="logo decoration" width="4%"> </p>
            <div class="quiz-container">
			<div id="quiz"></div>
			</div>

			
			<button class="envoyer" id="submit" >Confirm</button>
			<button class="envoyer" id="retry" onclick="window.open('jahia_quizz_en.php')">Re-try</button></div>
			<div id="results">
      
		  </div>
		  <br>
          <h6><a href="jahia_jeux_en.php">Back to Games</a></h6>
			    <script src="quizz2_en.js"></script> 
	     </div>
		</body>
		<?php include("footer_en.php"); ?>
	</html>
