<?php 
session_start();

     try
     {
      $bdd = new PDO('mysql:host=185.98.131.92;dbname=beyon1308768;charset=utf8', 'beyon1308768', '2qot2hfrvr', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
     }
     catch(Exception $e)
     {
       // En cas d'erreur, on affiche un message et on arrête tout
       die('Erreur : '.$e->getMessage());
     }
      
       $id_article = htmlspecialchars($_GET['id_article']);
       $auteur = htmlspecialchars($_POST['auteur']);
       $commentaire = htmlspecialchars($_POST['commentaire']);
      
       if (empty($_SESSION['pseudo'])) 
                   { $membre = $_COOKIE['pseudo']; }
                else { $membre = $_SESSION['pseudo'];}
       if (empty($_SESSION['id'])) 
                   { $id_membre = $_COOKIE['id']; }
                else { $id_membre = $_SESSION['id'];} 
      
       $zero = 0;
       //$date_comentaire = NOW();
      
     if ((!empty($_SESSION['pseudo'])) OR (!empty($_COOKIE['pseudo']))) // si connecté alors on utilise $membre et $ id
     { 
       $req2 = $bdd->prepare('INSERT INTO commentaires (id_article, auteur, commentaire, date_commentaire, id_membre) VALUES( :id_article, :auteur, :commentaire, NOW(), :id_membre)');
       $req2->execute(array(
     'id_article' => $id_article, 
     'auteur' => $membre,
     'commentaire' => $commentaire,
     'id_membre' => $id_membre
     //'date_comentaire' => $date_comentaire
     ));
     $ok = 'Thank you the comment has been added !';
     // Puis rediriger vers commentaire du billet
     header('Location: jahia_blog_article_en.php?id_article='.$_GET['id_article'].'&ok='.$ok );

     } // si pas membre alors on aura un Get_post ==> auteur
     elseif  (isset($_POST['auteur']) AND isset($_POST['commentaire'])) 
       {
   
       $req2 = $bdd->prepare('INSERT INTO commentaires (id_article, auteur, commentaire, date_commentaire, id_membre) VALUES( :id_article, :auteur, :commentaire, NOW(), :id_membre)');
       $req2->execute(array(
     'id_article' => $id_article, 
     'auteur' => $auteur,
     'commentaire' => $commentaire,
     'id_membre' => $zero
     //'date_comentaire' => $date_comentaire
     ));
     $ok = 'Thank you the comment has been added !';
   

     // Puis rediriger vers commentaire du billet
     header('Location: jahia_blog_article_en.php?id_article='.$_GET['id_article'].'&ok='.$ok );
     
     }
     else // SINON ca a pas marché
     {
       $pb = "The comment's post failed. <br>Thanks to fill in the form properly...";
       // Puis rediriger vers la meme page
       header('Location: jahia_blog_article_en.php?id_article='.$_GET['id_article'].'&ok='.$ok );
     }
 
     
?>