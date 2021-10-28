/* ------------------------------------------------------------------- */
// animation pour le bouton du menu permanent en jQuery

$("#iconPlus").on("click", function(e) {
    $(".blocNav").toggleClass("collapse-menu"); // toggle le bloc
    $(".vertical").toggleClass("hidden"); // change le + en -
})


/* --------------------------Boutons de la page Association au moment du clique */

/* on veut que l'élément prenne une classe et donc le CSS associé au moment du clic et que cela l'enlève ensuite */
/* Je récupère mon élément avec la classe */
const btnAssociation = document.querySelectorAll('.blocTitresAssociation');

/* ici je crée la fonction toggle */
function toggleAssociation(element, classeEnQuestion) {

    btnAssociation.forEach((autreElement) => {

        if (element.id === autreElement.id) {
            autreElement.classList.add(classeEnQuestion)
        } else {
            autreElement.classList.remove(classeEnQuestion)
        }

        /* si element qui contient la class blocTitresAssociation ne contient pas en plus la class selectionne */
        // if (!(element.classList.contains(classeEnQuestion))) {
        //     /* tu l'as lui rajoute */
        //     element.classList.add(classeEnQuestion)
        // }
        // /* autrement tu l'as lui enlève */
        // else {
        //     element.classList.remove(classeEnQuestion)
        // }
    })
}

/* ici j'exécute la fonction */
btnAssociation.forEach((element) => {
    element.addEventListener('click', (e) => {
        toggleAssociation(e.target, 'selectionne')
    })
})


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