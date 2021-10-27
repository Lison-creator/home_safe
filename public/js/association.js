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