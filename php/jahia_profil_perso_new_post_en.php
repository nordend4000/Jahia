<?php
session_start(); 

// Connexion à la base de données pour recuperation des données perso
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

// Récupération des info perso
$req = $bdd->prepare('SELECT id, email, telephone, rue, code_postal, ville, pays FROM membres WHERE pseudo = ?');
$req->execute(array($pseudo));
$donnees = $req->fetch();


if (empty($_POST['email_modif'])) 
 { $nvemail = $donnees['email']; }     
else 
{ 
   if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['email_modif']))
     {
        $nvemail = htmlspecialchars($_POST['email_modif']); 
     }
     else 
     {
        $pb4 = "The email format is not correct, changes have not  been saved properly.";
        header('jahia_profil_en.php?pb=' . $pb4);
     }
     
} // fin du si nvemail existe

if (!empty($_POST['telephone']))
    { $nvtelephone = htmlspecialchars($_POST['telephone']); } 
else { $nvtelephone = $donnees['telephone']; }

if (!empty($_POST['rue']))
    { $nvrue = htmlspecialchars($_POST['rue']); } 
else { $nvrue = $donnees['rue']; }

if (!empty($_POST['code_postal']))
    { $nvcode_postal = htmlspecialchars($_POST['code_postal']); } 
else { $nvcode_postal = $donnees['code_postal']; }

if (!empty($_POST['ville'])) 
    { $nvville = htmlspecialchars($_POST['ville']); } 
else { $nvville = $donnees['ville']; } 

if (!empty($_POST['pays'])) 
    { $nvpays = htmlspecialchars($_POST['pays']); } 
else { $nvpays = $donnees['pays']; } 

$req->closeCursor(); // Important : on libère le curseur pour la prochaine requête


$req2 = $bdd->prepare('UPDATE membres SET email = :nvemail, telephone = :nvtelephone, rue = :nvrue, code_postal = :nvcode_postal, ville = :nvville, pays = :nvpays WHERE id = :id');
$req2->execute(array(
    'nvemail' => $nvemail,
    'nvtelephone' => $nvtelephone,
    'nvrue' => $nvrue,
    'nvcode_postal' => $nvcode_postal,
    'nvville' => $nvville,
    'nvpays' => $nvpays,
    'id' => $id
    ));
// Requète pour ajout donnée
//$bdd->exec('UPDATE membres SET ville = $_POST['ville']  WHERE membres.id = $id');
//$bdd->exec(UPDATE `membres` SET `ville` = $ville WHERE `membres`.`id` = $id);

$ok = 'Well done mate ! Your informations have been modified properly!';
header('Location: jahia_profil_en.php?pb=' . $ok);
$req2->closeCursor(); // Important : on libère le curseur pour la prochaine requête

 
?>