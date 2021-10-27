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

/* Section: Fonctionnement General */

const fonctionnementGeneral = document.getElementById('fonctionnementGeneral');

// UN
const btnActivation01 = document.getElementById('articleFAQ01');
const reponseFAQ01 = document.getElementById('reponseFAQ01');
const flecheDescend01 = document.getElementById('flecheDescend01');

btnActivation01.addEventListener('click', (e) => {
    reponseFAQ01.classList.toggle('cache'); // montre la reponse
    flecheDescend01.classList.toggle('flecheMonte'); // tourne la fleche
});

// DEUX
const btnActivation02 = document.getElementById('articleFAQ02');
const reponseFAQ02 = document.getElementById('reponseFAQ02');
const flecheDescend02 = document.getElementById('flecheDescend02');

btnActivation02.addEventListener('click', (e) => {
    reponseFAQ02.classList.toggle('cache');
    flecheDescend02.classList.toggle('flecheMonte');
});

// TROIS
const btnActivation03 = document.getElementById('articleFAQ03');
const reponseFAQ03 = document.getElementById('reponseFAQ03');
const flecheDescend03 = document.getElementById('flecheDescend03');

btnActivation03.addEventListener('click', (e) => {
    reponseFAQ03.classList.toggle('cache');
    flecheDescend03.classList.toggle('flecheMonte');
});

// QUATRE
const btnActivation04 = document.getElementById('articleFAQ04');
const reponseFAQ04 = document.getElementById('reponseFAQ04');
const flecheDescend04 = document.getElementById('flecheDescend04');

btnActivation04.addEventListener('click', (e) => {
    reponseFAQ04.classList.toggle('cache');
    flecheDescend04.classList.toggle('flecheMonte');
});