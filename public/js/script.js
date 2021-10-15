





























/* --------------------------Boutons de la page Association au moment du clique */
/* on veut que l'élément prenne une classe et donc le CSS associé au moment du clic et que cela l'enlève ensuite */

/* Je récupère mon élément avec la classe */
/* const btnAssociation = document.getElementsByClassName('blocTitresAssociation')[0]; */

/* ici je crée la fonction toggle avec un callback !!!!*/
//function toggle(element, classeEnQuestion) {
    /* si element qui contient la class blocTitresAssociation ne contient pas la class selectionne */
    //if (!(element.classList.contains(classeEnQuestion))) {

        /* tu l'as lui rajoute */
    //    element.classList.add(classeEnQuestion)
   // }
    /* autrement tu l'as lui enlève */
    //else {
   //     element.classList.remove(classeEnQuestion)
    //}
//}

/* ici j'exécute la fonction */
/* btnAssociation.addEventListener('click', (e) => {
    toggle(e.target, 'selectionne')
}) */

$(".blocTitresAssociation").on("click", function(e){
    $(".blocTitresAssociation").toggleClass("selectionne");
})

/* --------------------------Boutons de la page Association */