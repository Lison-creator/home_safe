/* ------------------------------------------------------------------- */
// animation pour le bouton du menu permanent en jQuery

$("#iconPlus").on("click", function(e) {
    $(".blocNav").toggleClass("collapse-menu"); // toggle le bloc
    $(".vertical").toggleClass("hidden"); // change le + en -
})



/*--------------------------carte.php:

Partie du coté droit qui toggle au clic */
// var visible = true;

function togglePanneau() {
    /*     console.log(visible); */
    var panneau = document.getElementById("panneau");
    panneau.classList.toggle("displayNone");

    /*     let aside = document.getElementById("aside");
        if (!visible) {
            visible = true;
        } else {
            visible = false;
        } */
}

/* Carte: fonction pour un menu aside qui change: Communauté, Nouveautés, Favoris */

/* console.log("hello"); */




/* Afficher le profil (aside par défaut au chargement de la page) */

function afficherProfil() {

    $("#profil").show();
    $("#nouveautes").hide();
    $("#communaute").hide();
    $("#favoris").hide();
}
/* Afficher les nouveautés*/


function afficherNouveautes() {

    //TODO /* Une classe qui permet de griser la catégorie du menu choisie  */
    /*   var menuNouveautes = document.getElementById("menuNouveautes");
      menuNouveautes.classList.toggle("bgGris"); */

    $("#nouveautes").show();
    $("#profil").hide();
    $("#communaute").hide();
    $("#favoris").hide();
}

/* Afficher la communauté*/

function afficherCommunaute() {
    $("#communaute").show();
    $("#nouveautes").hide();
    $("#profil").hide();
    $("#favoris").hide();
}

/* Afficher les favoris*/

function afficherFavoris() {
    $("#favoris").show();
    $("#nouveautes").hide();
    $("#communaute").hide();
    $("#profil").hide();
}


/* 
$("li").toggle(
    function() { $(this).css({ "color": "red" }); },
    function() { $(this).css({ "color": "blue" }); },
    function() { $(this).css({ "color": "purple" }); },
    function() {
        $(this).css({ "color": "turquoise" });
    }); */

/* ------------------------------------------------------------------- */
//Animation pour le bouton oeil de la page connection / inscritpion

function montrerMdp(id, element) {
    let x = document.getElementById(id);
    if (x.type === "password") {
        x.type = "text";
        element.className = 'fas fa-eye-slash oeilChange';
    } else {
        x.type = "password";
        element.className = 'fas fa-eye oeilChange';
    }
}


/* ------------------------------------------------------------------- */
// Animation utilisation jQuery pour slide page association
//https://demos.jquerymobile.com/1.4.5/transitions/

/* ------------------------------------------------------------------- */
// Animation utilisation jQuery pour slide page association
//https://demos.jquerymobile.com/1.4.5/transitions/



/* ------------------Désactivation de la petite croix du menu permanent au moment du clique- */

//je vais chercher mon élément via son id
const btnDesactivation = document.getElementById('iconPlus');
const btnCroix = document.getElementById('croix')

//je lance la fonction desactivation au clique
btnDesactivation.addEventListener('click', (e) => {
        //pour l'élement qui contient la class animationCroixFun, je veux que tu puisse l'enelver ou la remettre
        btnCroix.classList.toggle('animationCroixFun');
    })
    /* ------------------------------------------------------------------- */