<?php
session_start(); 
?>
<!DOCTYPE html>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Le site de Jahia">
    
    <link rel="stylesheet" href="jahia_style.css">
    <title>Jahia's website - Pictionary</title>
    <style>
body {
  font-family: 'kaushan', 'Impact', 'Arial Black', 'Arial', 'Verdana', sans-serif;
  text-shadow: 2px 2px 1px #F3ADAD;
  color:  #B52626;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 30px; /* Location of the box */
  left: 20px;
  top: 20px;
  width: 60%; /* Full width */
  height: 90%; /* Full height */
  overflow: auto; /* Enable scroll if needed */

}

/* Modal Content */
.modal-content {
  
  background-color: rgba(243,173,173,0.9);
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
  border-radius: 10px;
  border: 2px #B52626 solid;
  box-shadow: 3px 3px 1px #EF7979;
  text-shadow: 2px 2px 1px #F3ADAD;
  color:  #B52626;
}
.modal-content h4 {
  
    font-size: 2em;
    font-family: 'kaushan', 'Impact', 'Arial Black', 'Arial', 'Verdana', sans-serif;
    color: #EF7979;
    margin-left: 30px;
    text-shadow: 2px 2px 1px #B52626;
}
.modal-content img
{
  margin:  auto;
  border-radius: 10px;
  width: 100%;
  border: 1px #B52626 solid;
  box-shadow: 2px 2px 1px #EF7979;
}
.close {
  color: #B52626;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #EF7979;
  text-decoration: none;
  cursor: pointer;
}
.close1 {
  color: #B52626;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close1:hover,
.close1:focus {
  color: #EF7979;
  text-decoration: none;
  cursor: pointer;
}
.close2 {
  color: #B52626;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close2:hover,
.close2:focus {
  color: #EF7979;
  text-decoration: none;
  cursor: pointer;
}
.close3 {
  color: #B52626;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close3:hover,
.close3:focus {
  color: #EF7979;
  text-decoration: none;
  cursor: pointer;
}
.close4 {
  color: #B52626;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close4:hover,
.close4:focus {
  color: #EF7979;
  text-decoration: none;
  cursor: pointer;
}
.close5 {
  color: #B52626;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close5:hover,
.close5:focus {
  color: #EF7979;
  text-decoration: none;
  cursor: pointer;
}
.close6 {
  color: #B52626;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close6:hover,
.close6:focus {
  color: #EF7979;
  text-decoration: none;
  cursor: pointer;
}
.close7 {
  color: #B52626;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close7:hover,
.close7:focus {
  color: #EF7979;
  text-decoration: none;
  cursor: pointer;
}
.close8 {
  color: #B52626;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close8:hover,
.close8:focus {
  color: #EF7979;
  text-decoration: none;
  cursor: pointer;
}
.close9 {
  color: #B52626;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close9:hover,
.close9:focus {
  color: #EF7979;
  text-decoration: none;
  cursor: pointer;
}
.close10 {
  color: #B52626;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close10:hover,
.close10:focus {
  color: #EF7979;
  text-decoration: none;
  cursor: pointer;
}
.close11 {
  color: #B52626;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close11:hover,
.close11:focus {
  color: #EF7979;
  text-decoration: none;
  cursor: pointer;
}
.close12 {
  color: #B52626;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close12:hover,
.close12:focus {
  color: #EF7979;
  text-decoration: none;
  cursor: pointer;
}
.close13 {
  color: #B52626;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close13:hover,
.close13:focus {
  color: #EF7979;
  text-decoration: none;
  cursor: pointer;
}
.close14 {
  color: #B52626;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close14:hover,
.close14:focus {
  color: #EF7979;
  text-decoration: none;
  cursor: pointer;
}
.close15 {
  color: #B52626;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close15:hover,
.close15:focus {
  color: #EF7979;
  text-decoration: none;
  cursor: pointer;
}
button
{
    font-size: 3em;
    font-family: 'kaushan', 'Impact', 'Arial Black', 'Arial', 'Verdana', sans-serif;
    color: #EF7979;
    text-align: center;
    margin-left: 40px;
    margin-right: 40px;
    margin-top: 40px;
    text-shadow: 2px 2px 1px #B52626;
}
#pointer button:hover,
#pointer button:focus
{
cursor: pointer;
  }
/* Responsive navigation menu - display links on top of each other instead of next to each other (for mobile devices) */
@media screen and (max-width: 600px) {

.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 03px; /* Location of the box */
  left: 10px;
  top: 10px;
  width: 80%; /* Full width */
  height: 90%; /* Full height */
  overflow: auto; /* Enable scroll if needed */

}


  }



/* The Close Button */


</style>
</head>

<body>
    
                <div id="bloc_page">
                  <!-- The Modal -->
<div id="myModal" class="modal">              
  <!-- Modal content -->
  <div class="modal-content" >
    <span class="close">&times;</span>
    <h4>  Eat </h4>
    <img src='galerie/dico1.jpg' alt='definition dico' style='text-align: center;' width='40%'>
  </div>
</div>
                  <!-- The Modal -->
<div id="myModal1" class="modal">              
  <!-- Modal content -->
  <div class="modal-content" >
    <span class="close1">&times;</span>
    <h4>  Sleep </h4>
    <img src='galerie/dico2.jpg' alt='definition dico' style='text-align: center;' width='40%'>
  </div>
</div>
                  <!-- The Modal -->
<div id="myModal2" class="modal">              
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close2">&times;</span>
    <h4>  Play </h4>
    <img src='galerie/dico3.jpg' alt='definition dico' style='text-align: center;' width='40%'>
  </div>
</div>
                  <!-- The Modal -->
<div id="myModal3" class="modal">              
  <!-- Modal content -->
  <div class="modal-content" >
    <span class="close3">&times;</span>
    <h4>  Pool </h4>
    <img src='galerie/dico4.jpg' alt='definition dico' style='text-align: center;' width='40%'>
  </div>
</div>
                  <!-- The Modal -->
<div id="myModal4" class="modal">              
  <!-- Modal content -->
  <div class="modal-content" >
    <span class="close4">&times;</span>
    <h4>  Tired </h4>
    <img src='galerie/dico5.jpg' alt='definition dico' style='text-align: center;' width='40%'>
  </div>
</div>
                  <!-- The Modal -->
<div id="myModal5" class="modal">              
  <!-- Modal content -->
  <div class="modal-content" >
    <span class="close5">&times;</span>
    <h4>  Grouchy </h4>
    <img src='galerie/dico6.jpg' alt='definition dico' style='text-align: center;' width='40%'>
  </div>
</div>
                  <!-- The Modal -->
<div id="myModal6" class="modal">              
  <!-- Modal content -->
  <div class="modal-content" >
    <span class="close6">&times;</span>
    <h4>  Drive </h4>
    <img src='galerie/dico7.jpg' alt='definition dico' style='text-align: center;' width='40%'>
  </div>
</div>
                  <!-- The Modal -->
<div id="myModal7" class="modal">              
  <!-- Modal content -->
  <div class="modal-content" >
    <span class="close7">&times;</span>
    <h4>  Potty </h4>
    <img src='galerie/dico8.jpg' alt='definition dico' style='text-align: center;' width='40%'>
  </div>
</div>
                  <!-- The Modal -->
<div id="myModal8" class="modal">              
  <!-- Modal content -->
  <div class="modal-content" >
    <span class="close8">&times;</span>
    <h4>  Champagne </h4>
    <img src='galerie/dico9.jpg' alt='definition dico' style='text-align: center;' width='40%'>
  </div>
</div>
                  <!-- The Modal -->
<div id="myModal9" class="modal">              
  <!-- Modal content -->
  <div class="modal-content" >
    <span class="close9">&times;</span>
    <h4>  Bath </h4>
    <img src='galerie/dico10.jpg' alt='definition dico' style='text-align: center;' width='40%'>
  </div>
</div>
                  <!-- The Modal -->
<div id="myModal10" class="modal">              
  <!-- Modal content -->
  <div class="modal-content" >
    <span class="close10">&times;</span>
    <h4>  Zoggs </h4>
    <img src='galerie/dico11.jpg' alt='definition dico' style='text-align: center;' width='40%'>
  </div>
</div>
                  <!-- The Modal -->
<div id="myModal11" class="modal">              
  <!-- Modal content -->
  <div class="modal-content" >
    <span class="close11">&times;</span>
    <h4>  Passport </h4>
    <img src='galerie/dico12.jpg' alt='definition dico' style='text-align: center;' width='10%'>
  </div>
</div>
                  <!-- The Modal -->
<div id="myModal12" class="modal">              
  <!-- Modal content -->
  <div class="modal-content" >
    <span class="close12">&times;</span>
    <h4>  Duo </h4>
    <img src='galerie/dico13.jpg' alt='definition dico' style='text-align: center;' width='40%'>
  </div>
</div>
                  <!-- The Modal -->
<div id="myModal13" class="modal">              
  <!-- Modal content -->
  <div class="modal-content" >
    <span class="close13">&times;</span>
    <h4>  Trio </h4>
    <img src='galerie/dico14.jpg' alt='definition dico' style='text-align: center;' width='40%'>
  </div>
</div>
                  <!-- The Modal -->
<div id="myModal14" class="modal">              
  <!-- Modal content -->
  <div class="modal-content" >
    <span class="close14">&times;</span>
    <h4>  Quartet </h4>
    <img src='galerie/dico15.jpg' alt='definition dico' style='text-align: center;' width='40%'>
  </div>
</div>
                  <!-- The Modal -->
<div id="myModal15" class="modal">              
  <!-- Modal content -->
  <div class="modal-content" >
    <span class="close15">&times;</span>
    <h4>  Sextet </h4>
    <img src='galerie/dico16.jpg' alt='definition dico' style='text-align: center;' width='40%'>
  </div>
</div>
<div id="bloc_page">
                <?php include("jahia_nav_en.php"); ?>

                     <h2><img src="images/push.png" alt="push decoration" width="5%">     Pictionary</h2>
                     <div style="text-align: center">
                     <img src="images/line.png" alt="line decoration" width="90%">
                     </div>
                     <p><?php echo $_SESSION['pseudo']?> Do you know how to speak baby's language ?? baba, gaga, mama, papa, aya .... too easy ??!!<br>
                        For more complicated words it is easier in pictures<br> Let's select a word from the list to know my definition...</p>
                     <div id="pointer" class="centrer">
                         
                            <button id="myBtn" type="submit" value="Manger"/>Eat</button>
                            <button id="myBtn1" type="submit" value="Dormir" />Sleep</button>
                            <button id="myBtn2" type="submit" value="Jouer" />Play</button>
                            <button id="myBtn3" type="submit" value="Piscine" />Pool</button>
                            <button id="myBtn4" type="submit" value="Manger"/>Tired</button>
                            <button id="myBtn5" type="submit" value="Dormir" />Grouchy</button>
                            <button id="myBtn6" type="submit" value="Jouer" />Drive</button>
                            <button id="myBtn7" type="submit" value="Piscine" />Potty</button>
                            <button id="myBtn8" type="submit" value="Manger"/>Champagne</button>
                            <button id="myBtn9" type="submit" value="Dormir" />Bath</button>
                            <button id="myBtn10" type="submit" value="Jouer" />Zoggs</button>
                            <button id="myBtn11" type="submit" value="Piscine" />Passport</button>
                            <button id="myBtn12" type="submit" value="Manger"/>Duo</button>
                            <button id="myBtn13" type="submit" value="Dormir" />Trio</button>
                            <button id="myBtn14" type="submit" value="Jouer" />Quartet</button>
                            <button id="myBtn15" type="submit" value="Piscine" />Sextet</button>
                          
                     </div>
                     <br><br>
                     <h6><a href="jahia_jeux_en.php">Back to games</a></h6>
             </div> <!-- fin du bloc-PAGE -->


</body>
<br>
<?php include("footer_en.php"); ?>
<script>
// Get the modal
var modal = document.getElementById("myModal");
var modal1 = document.getElementById("myModal1");
var modal2 = document.getElementById("myModal2");
var modal3 = document.getElementById("myModal3");
var modal4 = document.getElementById("myModal4");
var modal5 = document.getElementById("myModal5");
var modal6 = document.getElementById("myModal6");
var modal7 = document.getElementById("myModal7");
var modal8 = document.getElementById("myModal8");
var modal9 = document.getElementById("myModal9");
var modal10 = document.getElementById("myModal10");
var modal11 = document.getElementById("myModal11");
var modal12 = document.getElementById("myModal12");
var modal13 = document.getElementById("myModal13");
var modal14 = document.getElementById("myModal14");
var modal15 = document.getElementById("myModal15");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");
var btn1 = document.getElementById("myBtn1");
var btn2 = document.getElementById("myBtn2");
var btn3 = document.getElementById("myBtn3");
var btn4 = document.getElementById("myBtn4");
var btn5 = document.getElementById("myBtn5");
var btn6 = document.getElementById("myBtn6");
var btn7 = document.getElementById("myBtn7");
var btn8 = document.getElementById("myBtn8");
var btn9 = document.getElementById("myBtn9");
var btn10 = document.getElementById("myBtn10");
var btn11 = document.getElementById("myBtn11");
var btn12 = document.getElementById("myBtn12");
var btn13 = document.getElementById("myBtn13");
var btn14 = document.getElementById("myBtn14");
var btn15 = document.getElementById("myBtn15");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
var span1 = document.getElementsByClassName("close1")[0];
var span2 = document.getElementsByClassName("close2")[0];
var span3 = document.getElementsByClassName("close3")[0];
var span4 = document.getElementsByClassName("close4")[0];
var span5 = document.getElementsByClassName("close5")[0];
var span6 = document.getElementsByClassName("close6")[0];
var span7 = document.getElementsByClassName("close7")[0];
var span8 = document.getElementsByClassName("close8")[0];
var span9 = document.getElementsByClassName("close9")[0];
var span10 = document.getElementsByClassName("close10")[0];
var span11 = document.getElementsByClassName("close11")[0];
var span12 = document.getElementsByClassName("close12")[0];
var span13 = document.getElementsByClassName("close13")[0];
var span14 = document.getElementsByClassName("close14")[0];
var span15 = document.getElementsByClassName("close15")[0];
//var span = document.getElementById("x")[0];
//var span1 = document.getElementById("x1")[0];


// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}
btn1.onclick = function() {
  modal1.style.display = "block";
}
btn2.onclick = function() {
  modal2.style.display = "block";
}
btn3.onclick = function() {
  modal3.style.display = "block";
}
btn4.onclick = function() {
  modal4.style.display = "block";
}
btn5.onclick = function() {
  modal5.style.display = "block";
}

btn6.onclick = function() {
  modal6.style.display = "block";
}
btn7.onclick = function() {
  modal7.style.display = "block";
}
btn8.onclick = function() {
  modal8.style.display = "block";
}
btn9.onclick = function() {
  modal9.style.display = "block";
}
btn10.onclick = function() {
  modal10.style.display = "block";
}
btn11.onclick = function() {
  modal11.style.display = "block";
}
btn12.onclick = function() {
  modal12.style.display = "block";
}
btn13.onclick = function() {
  modal13.style.display = "block";
}
btn14.onclick = function() {
  modal14.style.display = "block";
}
btn15.onclick = function() {
  modal15.style.display = "block";
}



// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}
span1.onclick = function() {
  modal1.style.display = "none";
}
span2.onclick = function() {
  modal2.style.display = "none";
}
span3.onclick = function() {
  modal3.style.display = "none";
}
span4.onclick = function() {
  modal4.style.display = "none";
}
span5.onclick = function() {
  modal5.style.display = "none";
}
span6.onclick = function() {
  modal6.style.display = "none";
}
span7.onclick = function() {
  modal7.style.display = "none";
}
span8.onclick = function() {
  modal8.style.display = "none";
}
span9.onclick = function() {
  modal9.style.display = "none";
}
span10.onclick = function() {
  modal10.style.display = "none";
}
span11.onclick = function() {
  modal11.style.display = "none";
}
span12.onclick = function() {
  modal12.style.display = "none";
}
span13.onclick = function() {
  modal13.style.display = "none";
}
span14.onclick = function() {
  modal14.style.display = "none";
}
span15.onclick = function() {
  modal15.style.display = "none";
}






// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
  if (event.target == modal1) {
    modal1.style.display = "none";
  }
  if (event.target == modal2) {
    modal2.style.display = "none";
  }
  if (event.target == modal3) {
    modal3.style.display = "none";
  }
  if (event.target == modal4) {
    modal4.style.display = "none";
  }
  if (event.target == modal5) {
    modal5.style.display = "none";
  }
  if (event.target == modal6) {
    modal6.style.display = "none";
  }
  if (event.target == modal7) {
    modal7.style.display = "none";
  }
  if (event.target == modal8) {
    modal8.style.display = "none";
  }
  if (event.target == modal9) {
    modal9.style.display = "none";
  }
  if (event.target == modal10) {
    modal10.style.display = "none";
  }
  if (event.target == modal11) {
    modal11.style.display = "none";
  }
  if (event.target == modal12) {
    modal12.style.display = "none";
  }
  if (event.target == modal13) {
    modal13.style.display = "none";
  }
  if (event.target == modal14) {
    modal14.style.display = "none";
  }
  if (event.target == modal15) {
    modal15.style.display = "none";
  }
}


</script>
</html>
