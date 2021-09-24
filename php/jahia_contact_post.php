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
if (empty($_SESSION['pseudo'])) 
    { $perso = $_COOKIE['pseudo']; }
else { $perso = $_SESSION['pseudo']; }

$req = $bdd->prepare('SELECT id, pseudo, email FROM membres WHERE pseudo = ?');
            $req->execute(array($perso));
            $donnees = $req->fetch();

if (isset($_POST['auteur']) AND isset($_POST['email']))
  {
  $auteur = htmlspecialchars($_POST['auteur']);
  $email = htmlspecialchars($_POST['email']);
  }
elseif (!empty($_SESSION['pseudo']))
{
  $auteur = $donnees['pseudo'];
  $email = $donnees['email'];
}
else
{
 $pb1 = '<img src="images/logo.png" alt="logo decoration" width="4%">       Merci de remplir le formulaire correctement sinon ca marchera pas !!!     <img src="images/logo.png" alt="logo decoration" width="4%">';
       // Puis redirection problem
       header('Location: jahia_contact.php?id='.$pb1); 
}
if (isset($_POST['message']))
     {
       
       $msg = htmlspecialchars($_POST['message']);

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);
$msg_email = $msg . " de la part de ". $auteur . " ==> " . $email;
$headers = "From: jahia@jahia.com";


// send email
mail("romaingioux@live.fr", $auteur, $msg_email);

       
     $ok = '<img src="images/logo.png" alt="logo decoration" width="4%">      Le message a bien été envoyé !     <img src="images/logo.png" alt="logo decoration" width="4%"><br> Merci pour votre message, je vous repondrais dès que mon papa aura 5 minutes';
     // Puis redirection ok
       header('Location: jahia_contact.php?id='.$ok);
     }
     else // SINON
     {
       $pb = '<img src="images/logo.png" alt="logo decoration" width="4%">       Merci de remplir le formulaire correctement sinon ca marchera pas !!!     <img src="images/logo.png" alt="logo decoration" width="4%">';
       // Puis redirection problem
       header('Location: jahia_contact.php?id='.$pb);
     }

     $req->closeCursor();
?>