

<?php
if (isset($_POST['auto']))
{
  $pseudo_cookie = htmlspecialchars($_POST['pseudo']);
  $mdp_cookie = htmlspecialchars($_POST['pass']);
  setcookie('pseudo', $pseudo_cookie, time() + 365*24*3600, null, null, false, true); // On écrit un cookie
  setcookie('pass', $mdp_cookie, time() + 365*24*3600, null, null, false, true); // On écrit un autre cookie...
  
}
// Le mot de passe n'a pas été envoyé ou n'est pas bon
if (empty($_POST['pseudo']) OR empty($_POST['pass']))
{
  // Afficher le formulaire de saisie du mot de passe
   //header('Location: memb_connexion.php');
   $pbc1 = 'Mauvais identifiant ou mot de passe !';
   header('Location: jahia_connexion.php?pbc=' . $pbc1);
} // grand if
// Le mot de passe a été envoyé et il est bon
else
{
  try
  {
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $pass = htmlspecialchars($_POST['pass']);
  // On se connecte à MySQL

  $bdd = new PDO('mysql:host=185.98.131.92;dbname=beyon1308768;charset=utf8', 'beyon1308768', '2qot2hfrvr', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

//  Récupération de l'utilisateur et de son pass hashé
$req = $bdd->prepare('SELECT id, pass, email FROM membres WHERE pseudo = :pseudo');
$req->execute(array(
  'pseudo' => $pseudo));
$resultat = $req->fetch();
$email = $resultat['email'];
// Comparaison du pass envoyé via le formulaire avec la base
$isPasswordCorrect = password_verify($_POST['pass'], $resultat['pass']);

if (!$resultat)
{
    $pbc2 = 'Mauvais identifiant ou mot de passe !';
    header('Location: jahia_connexion.php?pbc=' . $pbc2);
}
else
{
    if ($isPasswordCorrect) {
        session_start();
        $_SESSION['id'] = $resultat['id'];
        $_SESSION['pseudo'] = $pseudo;
        $_SESSION['email'] = $email;
        $_SESSION['photo_ext'];
        $_SESSION['name_photo'];
        
        header('Location: jahia_index.php');
        echo 'Vous êtes connecté !';
    }
    else {
        $pbc3 = 'Mauvais identifiant ou mot de passe !';
        header('Location: jahia_connexion.php?pbc=' . $pbc3);
    }
}
if (isset($_POST['auto']))
{
   $id_cookie = $resultat['id'];
   setcookie('id', $id_cookie, time() + 365*24*3600, null, null, false, true); // On écrit un autre cookie.
   $email_cookie = $resultat['email'];
   setcookie('email', $email_cookie, time() + 365*24*3600, null, null, false, true); // On écrit un autre cookie.
}
} // fin du try
catch(Exception $e)
         {
         // En cas d'erreur, on affiche un message et on arrête tout
         die('Erreur : '.$e->getMessage());
         }
} // grand else


?>
