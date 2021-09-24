// Pseudo
document.getElementById('name').addEventListener('focus', function() {
        document.getElementById('name').style.backgroundColor = "#F5E9E4";
        document.getElementById('name').placeholder = "minimum 2 letters";
    });

document.getElementById("name").addEventListener("blur", function (e) {
    var validityName = "";
    if (e.target.value.length < 2) {
        validityName = "Nickname too short";
        document.getElementById('name').style.backgroundColor = "#E3A18A";
    }
     if (e.target.value.length >= 2){
    document.getElementById('name').style.backgroundColor = "#D5EBC8";// green light
    
    }
    document.getElementById("aideName").textContent = validityName;
       
});

//PASSWORD OLD

document.getElementById('passwordOld').addEventListener('focus', function() {
        document.getElementById('passwordOld').style.backgroundColor = "#F5E9E4";
        document.getElementById('passwordOld').placeholder = "minimum 4 characters";
    });
document.getElementById('passwordOld').addEventListener("blur", function (e) {
    var validityPassword1 = "";
    if (e.target.value.length < 4) {
        validityPassword1 = "Password too short : 4 characters minimum";
        document.getElementById('passwordOld').style.backgroundColor = "#E3A18A";
    }
     if (e.target.value.length >= 4){
    document.getElementById('passwordOld').style.backgroundColor = "#D5EBC8";// green light
    
    }
    document.getElementById("aidePasswordOld").textContent = validityPassword1;
      
});


//PASSWORD

document.getElementById('password1').addEventListener('focus', function() {
        document.getElementById('password1').style.backgroundColor = "#F5E9E4";
        document.getElementById('password1').placeholder = "minimum 4 characters";
    });
// Vérification de la longueur du mot de passe saisi
document.getElementById("password1").addEventListener("input", function (e) {

    var mdp = e.target.value; // Valeur saisie dans le champ mdp
    var longueurMdp = "Weak password";
    var couleurMsg = "red"; // Longueur faible => couleur rouge
    if (mdp.length >= 6) {
        longueurMdp = "Great password";
        couleurMsg = "green"; // Longueur suffisante => couleur verte
    } else if (mdp.length >= 4) {
        longueurMdp = "Average password";
        couleurMsg = "orange"; // Longueur moyenne => couleur orange
    }
    var aideMdpElt = document.getElementById("aidePassword1");
    aideMdpElt.textContent = "Length : " + longueurMdp; // Texte de l'aide
    aideMdpElt.style.color = couleurMsg; // Couleur du texte de l'aide
});

document.getElementById('password1').addEventListener("blur", function (e) {
    var validityPassword1 = "";
    if (e.target.value.length < 4) {
        validityPassword1 = "Password too short : 4 characters minimum";
        document.getElementById('password1').style.backgroundColor = "#E3A18A";
    }
     if (e.target.value.length >= 4){
    document.getElementById('password1').style.backgroundColor = "#D5EBC8";// green light
    
    }
    document.getElementById("aidePassword1").textContent = validityPassword1;
      
});

document.getElementById('password2').addEventListener("blur", function (e) {
    var validityPassword2 = "";
    var p1 = document.getElementById("password1").value;
    var p2 = e.target.value;

    if (p2 !== p1){
    	document.getElementById('password2').style.backgroundColor = "#E3A18A";
    	validityPassword2 = "Passwords are not equal"
    }
    if (p2 === p1){
    	document.getElementById('password2').style.backgroundColor = "#D5EBC8";// green light
    }
    
    document.getElementById("aidePassword2").textContent = validityPassword2;
});






