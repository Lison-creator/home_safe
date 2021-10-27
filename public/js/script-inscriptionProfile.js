/* ------------------------------------------------------------------- */
//JS pour la page inscriptionProfil > ajout d'un avatar


const btnImporterImage = document.getElementById('btnImporterImage');

const imageChoisie = document.getElementById('imageChoisie');

const affichageImgUploaded = document.querySelector('#affichageImgUploaded');

const miniAppareil = document.getElementById('miniAppareil');

/* variable pour garder en mémoire l'image uploader */
/* Création d'une varaible gloable pour y accéder quelque soit l'endroit où on est dans le programme */
var imgUploaded = '';

btnImporterImage.addEventListener('change', function () {
    
    /* met le nom du document uploadé à la place du petit texte "aucune image importée" */
    imageChoisie.textContent = this.files[0].name
    /* console.log(btnImporterImage.value); */

    const reader = new FileReader(); /* lecture de ce que la personne a envoyyé */

    /* ajout d'un event sur ce reader */
    reader.addEventListener('load', () => {
        imgUploaded = reader.result;
        document.querySelector('#affichageImgUploaded').style.backgroundImage = `url(${imgUploaded})`;

        miniAppareil.classList.replace('cacheAppareil', 'visibleAppareil');
    });

    reader.readAsDataURL(this.files[0]);



})