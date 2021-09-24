<!DOCTYPE html>
<html lang="fr">
<head>
  <title>Exemple Bootstrap</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="centrer">
                          <form action="jahia_dictionnaire.php" method="post">
                            <SELECT name="dico" size="1">
                                <OPTION>Manger
                                <OPTION>Dormir
                                <OPTION>Jouer
                                <OPTION>Piscine
                                <OPTION>Fatigue
                                <OPTION>Grognon
                                <OPTION>Conduire
                                <OPTION>Chier
                                <OPTION>Champagne
                                <OPTION>Bain
                                <OPTION>Zogg
                                <OPTION>Passeport
                                <OPTION>Duo
                                <OPTION>Trio
                                <OPTION>Quartette
                                <OPTION>Sextette
                            </SELECT><br>
                            <input class="btn btn-success openBtn" type="submit" value="Definition" />
                          </form>
<!-- Affichage du Modal avec un bouton -->
<!--<button type="button" class="btn btn-success openBtn">Ouvrir le Modal</button> -->

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <!-- Contenu du Modal-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal avec contenu dynamique</h4>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>

<script>
// Ouvrir le modal avec le contenu dynamique
$('.openBtn').on('click',function(){
    $('.modal-body').load('contenu.php',function(){
        $('#myModal').modal({show:true});
    });
});
</script>


</body>
</html>