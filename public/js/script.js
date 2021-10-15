$("#iconPlus").on("click", function(e) {
    $(".blocNav").toggleClass("collapse");
})

/* ------------------------------------------------------------------- */
//JS pour la page inscriptionProfil > ajout d'un avatar

const btnImporterImage = document.getElementById('btnImporterImage');

const imageChoisie = document.getElementById('imageChoisie');

btnImporterImage.addEventListener('change', function(){
    imageChoisie.textContent =  this.files[0].name
    console.log(this.files[0].name);
})

/* ------------------------------------------------------------------- */
