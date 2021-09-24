<!DOCTYPE html>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Le site de Jahia">
    <link rel="stylesheet" href="jahia_style.css">
   
    
<html>
    <head>
         <title>Jahia's website - Log in</title>
    </head>
    <body>
         <div id="bloc_page">
          <h5><a href="jahia_index_en.php">Back to home page</a></h5>
          <h5><a href="jahia_inscription_en.php">Register</a></h5>
             <br> 
             <?php
             if (isset($_GET['pbc'])){echo '<p>' . $_GET['pbc'] . '</p><br>';}
             if (isset($_GET['pb'])){echo '<p>' . $_GET['pb'] . '</p><br>';}
             ?> 
            <h2><img src="images/push.png" alt="push decoration" width="5%">   Log in into your personal space  :</h2>
            <div style="text-align: center;">
              <form action="jahia_connexion_post_en.php" method="post">
                <div class="contacter">
                  <label>Nickname</label> 
                  <input type="text" name="pseudo" required placeholder="Enter your nickname here" /><br>
                  <br>
                  <label>Password</label>
                  <input type="password" name="pass" required placeholder="Enter your password here" /><br>
                  <br>
                  <label>Automatic Log in</label>
                  </div>
                  <input class="gros" type="checkbox" name="auto" /><br>
                  <br>
                
                <input class="envoyer" type="submit" value="Log in" />
              </form>
            </div>
            <h5><a href="jahia_index_en.php">Back to home page</a></h5>
         </div> <!-- fin div corps -->
     
    </body>
    <?php include("footer_en.php"); ?>
</html>