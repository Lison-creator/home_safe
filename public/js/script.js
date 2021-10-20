/* ------------------------------------------------------------------- */
// animation pour le bouton du menu permanent en jQuery

$("#iconPlus").on("click", function(e) {
    $(".blocNav").toggleClass("collapse"); // toggle le bloc
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
        }
        else {
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

/*--------------------------carte.php:

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


  const desactivation = document.querySelectorAll('animationCroixFun');
  console.log(desactivation);

  function toggleDesactivation(element, classeEnQuestion) {

       if (element.className) {
            element.remove(classeEnQuestion);
        }
    }

  //ici j'exécute le code 
desactivation.addEventListener('click', function(){
    toggleDesactivation();
});
