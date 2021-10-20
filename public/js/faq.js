/* $(".reponse").hide();

$('.articleFAQ').on("click", function(e) {
    $(".reponse").not(this).hide(); // cache toutes les autres reponses
    $(this).find(".reponse").show(); // montre la réponse ou on a cliqué
    $(".flecheDescend").toggleClass("flecheMonte"); // tourne la fleche vers le bas
});
 */

/* $(document).ready(function() {
    $('.articleFAQ').on('click', function() {
        $('.reponse').toggleClass('cache')
    })
}) */

/* ici je crée la fonction toggle */
/* const btnActivation = document.querySelectorAll('.articleFAQ');

function toggleFAQ(element, classeEnQuestion) {
    btnActivation.forEach((autreElement) => {
        if (element === autreElement) {
            autreElement.classList.add(classeEnQuestion)
        }
        else {
            autreElement.classList.remove(classeEnQuestion)
        }
    })
}

/* ici j'exécute la fonction */
/* btnActivation.forEach((element) => {
    element.addEventListener('click', (e) => {
        toggleFAQ(e.target, 'cache')
    })
}) */

// Je vais chercher mes elements
const btnActivation01 = document.getElementById('articleFAQ01');
const reponseFAQ01 = document.getElementById('reponseFAQ01');

// Créer une fonction
btnActivation01.addEventListener('click', (e) => {
    // pour l'élement qui contient la classe "caché" tu la lui enlève/tu la lui remet
    reponseFAQ01.classList.toggle('cache');
})

// DEUX
const btnActivation02 = document.getElementById('articleFAQ02');
const reponseFAQ02 = document.getElementById('reponseFAQ02');

// Créer une fonction
btnActivation02.addEventListener('click', (e) => {
    // pour l'élement qui contient la classe "caché" tu la lui enlève/tu la lui remet
    reponseFAQ02.classList.toggle('cache');
})

// TROIS
const btnActivation03 = document.getElementById('articleFAQ03');
const reponseFAQ03 = document.getElementById('reponseFAQ03');

// Créer une fonction
btnActivation03.addEventListener('click', (e) => {
    // pour l'élement qui contient la classe "caché" tu la lui enlève/tu la lui remet
    reponseFAQ03.classList.toggle('cache');
})

// QUATRE
const btnActivation04 = document.getElementById('articleFAQ04');
const reponseFAQ04 = document.getElementById('reponseFAQ04');

// Créer une fonction
btnActivation04.addEventListener('click', (e) => {
    // pour l'élement qui contient la classe "caché" tu la lui enlève/tu la lui remet
    reponseFAQ04.classList.toggle('cache');
})
