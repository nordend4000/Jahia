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
elseif (!empty($_SESSION['pseudo']) OR !empty($_COOKIE['pseudo']))
{
  $auteur = $donnees['pseudo'];
  $email = $donnees['email'];
}
else
{
 $pb1 = '<img src="images/logo.png" alt="logo decoration" width="4%">      Please fill out the form correctly otherwise it will not works !!!     <img src="images/logo.png" alt="logo decoration" width="4%">';
       // Puis redirection problem
       header('Location: jahia_contact_en.php?id='.$pb1); 
}
if (isset($_POST['message']))
     {
       
       $msg = htmlspecialchars($_POST['message']);

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);
$msg_email = $msg . " from ". $auteur . " ==> " . $email;
$headers = "From: jahia@jahia.com";


// send email
mail("romaingioux@live.fr", $auteur, $msg_email);

       
     $ok = '<img src="images/logo.png" alt="logo decoration" width="4%">      The message has been sent successfully!     <img src="images/logo.png" alt="logo decoration" width="4%"><br> Thank you for your message, I will answer you as soon as my dad has 5 minutes';
     // Puis redirection ok
       header('Location: jahia_contact_en.php?id='.$ok);
     }
     else // SINON
     {
       $pb = '<img src="images/logo.png" alt="logo decoration" width="4%">      Please fill out the form correctly otherwise it will not works !!!    <img src="images/logo.png" alt="logo decoration" width="4%">';
       // Puis redirection problem
       header('Location: jahia_contact_en.php?id='.$pb);
     }

     $req->closeCursor();
?>