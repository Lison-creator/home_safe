$("#iconPlus").on("click", function(e) {
    $(".blocNav").toggleClass("collapse"); // toggle le bloc
    $(".vertical").toggleClass("hidden"); // change le + en -
})

/* ------------------------------------------------------------------- */
//JS pour la page inscriptionProfil > ajout d'un avatar

const btnImporterImage = document.getElementById('btnImporterImage');

const imageChoisie = document.getElementById('imageChoisie');

btnImporterImage.addEventListener('change', function() {
    imageChoisie.textContent = this.files[0].name
    console.log(this.files[0].name);
})

/* ------------------------------------------------------------------- */



/* --------------------------Boutons de la page Association au moment du clique */
/* on veut que l'élément prenne une classe et donc le CSS associé au moment du clic et que cela l'enlève ensuite */
/* Je récupère mon élément avec la classe */
const btnAssociation = document.querySelectorAll('.blocTitresAssociation');
/* ici je crée la fonction toggle avec un callback !!!!*/
function toggle(element, classeEnQuestion) {

    btnAssociation.forEach((autreElement) => {

        if (!(autreElement == element)) {
            element.classList.add(classeEnQuestion)
        }
        /* si element qui contient la class blocTitresAssociation ne contient pas en plus la class selectionne */
        if (!(element.classList.contains(classeEnQuestion))) {
            /* tu l'as lui rajoute */
            element.classList.add(classeEnQuestion)
        }
        /* autrement tu l'as lui enlève */
        else {
            element.classList.remove(classeEnQuestion)
        }
    })
}
/* ici j'exécute la fonction */
btnAssociation.forEach((element) => {
    element.addEventListener('click', (e) => {
        toggle(e.target, 'selectionne')
        const xx = btnAssociation.filter(x => !x)
        console.log(xx);
    })
})

/*carte.php:

Partie du coté droit qui toggle au clic */
var visible = true;

function togglePanneau() {
    console.log(visible);
    var panneau = document.getElementById("panneau");
    panneau.classList.toggle("displayNone");
    let aside = document.getElementById("aside");
    if (!visible) {
        aside.hidden = true;
        visible = true;
    } else {
        aside.hidden = false;
        visible = false;
    }


}


/* 
$("li").toggle(
    function() { $(this).css({ "color": "red" }); },
    function() { $(this).css({ "color": "blue" }); },
    function() { $(this).css({ "color": "purple" }); },
    function() {
        $(this).css({ "color": "turquoise" });
    }); */