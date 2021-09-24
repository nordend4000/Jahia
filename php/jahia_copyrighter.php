<?php
session_start(); 
//header ("Content-type: image/png"); // L'image que l'on va créer est un png
//header ("Content-type: image/jpeg"); // L'image que l'on va créer est un jpeg
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

// Requete pour select le nom de la photo de profil
$req1 = $bdd->prepare('SELECT id, photo_name, photo_ext FROM membres WHERE pseudo = ?');
$req1->execute(array($perso));
$donnees1 = $req1->fetch();
// verif photo profil
$extensions_autorisees2 = array('jpg', 'jpeg', 'JPG', 'JPEG');

//if le fichier photo commence par un chiffre ==> + si il est different de " "
if (preg_match("#^[0-9]#", $donnees1['photo_name']))
{
    $name_ext = $donnees1['photo_ext'];

    if (in_array($name_ext, $extensions_autorisees2))
	{ // alors use jpeg setting
		// creation de la photo de profil miniature
		header ("Content-type: image/jpeg"); // L'image que l'on va créer est un jpeg
		$name_photo_jpg = $donnees1['photo_name'];
		//$source = imagecreatetruecolor(200, 150); // On crée la miniature vide
		$source_petit = imagecreatefrompng("uploads/logo.png");

		$destination = imagecreatefromjpeg('uploads/'.$name_photo_jpg); // La photo est la source

		// Les fonctions imagesx et imagesy renvoient la largeur et la hauteur d'une image
		$largeur_destination = imagesx($destination);
		$hauteur_destination = imagesy($destination);
		$source = imagescale($source_petit, $largeur_destination, $hauteur_destination);
		$largeur_source = imagesx($source);
		$hauteur_source = imagesy($source);

		// On veut placer le logo en bas à droite, on calcule les coordonnées où on doit placer le logo sur la photo
		$destination_x = ($largeur_destination/2) - ($largeur_source/2);
		$destination_y =  ($hauteur_destination/2) - ($hauteur_source/2);
		// On met le logo (source) dans l'image de destination (la photo)
		imagecopymerge($destination, $source, $destination_x, $destination_y, 0, 0, $largeur_source, $hauteur_source, 50);
		// On enregistre la miniature sous le nom "mini_couchersoleil.jpg"
		imagejpeg($destination);
	 
		} // fin if jpeg
else  // sinon on utilise png
{
	header ("Content-type: image/png"); // L'image que l'on va créer est un png

	$name_photo_png = $donnees1['photo_name'];
	$source_petit = imagecreatefrompng("uploads/logo.png");

	$destination = imagecreatefrompng('uploads/'.$name_photo_png); // La photo est la source

	// Les fonctions imagesx et imagesy renvoient la largeur et la hauteur d'une image
	$largeur_destination = imagesx($destination);
	$hauteur_destination = imagesy($destination);
	$source = imagescale($source_petit, $largeur_destination, $hauteur_destination);
	$largeur_source = imagesx($source);
	$hauteur_source = imagesy($source);
	// On veut placer le logo en bas à droite, on calcule les coordonnées où on doit placer le logo sur la photo
	$destination_x = ($largeur_destination/2) - ($largeur_source/2);
	$destination_y =  ($hauteur_destination/2) - ($hauteur_source/2);
	//merge
	imagecopymerge($destination, $source, $destination_x, $destination_y, 0, 0, $largeur_source, $hauteur_source, 50);
	// On enregistre
	imagepng($destination); 

}
}

?>