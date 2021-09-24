<!DOCTYPE html>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Le site de Jahia">
    <link rel="stylesheet" href="jahia_style.css">
   
    
<html>
    <head>
         <title>Jahia's website - Register</title>
    </head>
    <body>
         <div id="bloc_page">
            <h5><a href="jahia_index_en.php">Back to home page</a></h5>
            <h5><a href="jahia_connexion_en.php">Already registered</a></h5>
            <h2><img src="images/push.png" alt="push decoration" width="5%">   Register to user space  :</h2>
            <?php
             if (isset($_GET['pb'])) { echo '<p>' . $_GET['pb'] . '</p><br>'; } 
             ?> 
            <div style="text-align: center;">
              <form action="jahia_inscription_post_en.php" method="post">
                <div class="contacter">
                      <label>Nickname</label> 
                      <input id="name" type="text" name="pseudo" required placeholder="Enter your name here" /><span id="aideName"></span>
                      <br>
                      <label>E-mail</label>
                      <input id="mail" type="email" name="email" required placeholder="Enter your e-mail address here"/><span id="aideEmail"></span>
                      <br>
                      <label>Password</label>
                      <input id="password1" type="password" name="mdp1" required placeholder="Enter your password here" /><span id="aidePassword1"></span>
                      <br>
                      <label>Confirm your password</label>
                      <input id="password2" type="password" name="mdp2" required placeholder="Confirm your password here" /><span id="aidePassword2"></span>
                      <br>
                </div>
                  <input class="envoyer" type="submit" value="Register" />
              </form>
            </div>
         </div> <!-- fin div corps -->
     
    </body>
    <?php include("footer_en.php"); ?>
    <script src="aideForm_en.js"></script>
</html>