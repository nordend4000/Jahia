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

if (empty($_SESSION['id'])) 
    { $id = $_COOKIE['id']; }
else { $id = $_SESSION['id']; }

if (empty($_SESSION['pseudo'])) 
    { $pseudo = $_COOKIE['pseudo']; }
else { $pseudo = $_SESSION['pseudo']; }

if (empty($_SESSION['email'])) 
    { $email = $_COOKIE['email']; }
else { $email = $_SESSION['email']; }

if (!empty($_POST['pseudo_modif']))
{
   $nvpseudo = htmlspecialchars($_POST['pseudo_modif']);
} // fin du si nvpseudo existe
else { $nvpseudo = $pseudo; }


$req2 = $bdd->prepare('UPDATE membres SET pseudo = :nvpseudo WHERE id = :id');
        $req2->execute(array(
      'nvpseudo' => $nvpseudo,
      'id' => $id
        ));

$ok1 = "Modifications prisent en compte correctement, Merci de te connecter avec tes nouveaux identifiants.";
header('Location: jahia_connexion.php?pb=' . $ok1);

$req2->closeCursor(); // Important : on libère le curseur pour la prochaine requête 

if((!empty($_POST['pass_ancien'])) && (!empty($_POST['pass_modif'])) && (!empty($_POST['pass_modif2'])))
{
       // juste pour test l'ancien mdp
$verif = $bdd->prepare('SELECT pass FROM membres WHERE id = ?');
$verif->execute(array($id));
$verif_pass = $verif->fetch();

$isPasswordCorrect = password_verify($_POST['pass_ancien'], $verif_pass['pass']);

if (!$verif_pass)
{
    $pb1 = "l'ancien mot de passe ne correspond pas à la base de donnée.";
    header('Location: jahia_profil_perso_update.php?pb=' . $pb1);
}
else
{
    if ($isPasswordCorrect && (!empty($_POST['pass_modif'])))
    {
        $nvpass = password_hash($_POST['pass_modif2'], PASSWORD_DEFAULT);        
        // verif si les 2 nouveaux mdp correspondent
       if ($_POST['pass_modif'] === $_POST['pass_modif2'])
        {
            $req3 = $bdd->prepare('UPDATE membres SET pass = :nvpass WHERE id = :id');
            $req3->execute(array(
            'nvpass' => $nvpass,
            'id' => $id
            ));

            header('Location: jahia_connexion.php?pb=' . $ok1);

        }
       else 
        { 
            $pb2 = 'Les deux nouveaux mot de passe ne sont pas identiques !';
            header('Location: jahia_profil_perso_update.php?pb=' . $pb2);
        }

     }
         
     else 
      { 
         $pb3 = 'Mot de passe non modifé !';
        header('Location: jahia_profil_perso_update.php?pb=' . $pb3);
      }
 } // fin dernier else 
}  // fin du premier if mdp



$verif->closeCursor(); // Important : on libère le curseur pour la prochaine requête 
    
       
?>