<?php 

include("models/Utilisateur.php");

$user1 = new Utilisateur();
/* //TODO Il ne comprends pas cette ligne, ne trouve pas l'id */
   
    // initialiser la variable pour ne pas avoir d'erreur
   // $msgErreurInscription = "";
    
    // si le form est soumis (une variable post nom)

//TODO Code chouette pour insérer nos données
/* https://www.youtube.com/watch?v=AHmZ1sKNz64 */
/* https://mauricemuteti2015.medium.com/how-to-upload-and-insert-image-into-mysql-database-using-php-and-html-32633a06d372 */
 /* https://www.php.net/manual/fr/features.file-upload.post-method.php */

    if(isset($_POST["ad_cp"]))
    {
        print_r($_POST);
        print_r($_FILES);
    //     print_r($_POST);
    //     print_r($_SESSION);
        $nomImage = $_FILES["image"]["name"];

        $filetmpname = $_FILES["image"]["tmp_name"];

        //folder where images will be uploaded
        $imageDossier = __DIR__.'/public/images/imagesDossier/';

        echo $filetmpname;
        echo $imageDossier;
        echo $nomImage;

        //function for saving the uploaded images in a specific folder
        move_uploaded_file($filetmpname, $imageDossier.$nomImage);
/*TODO  Finir l'upload de l'image dans le bon dossier: voir l'error (2) sur la page web */

            
        $user1->addZipPhoto($_SESSION["last_id"], $_POST["ad_cp"], $_FILES["image"]["name"]);
        //header("Location:?section=editerProfil");

    }
            /* Renvoie à la page d'accueil une fois le formulaire envoyé */
 /*    var_dump("en dehors de la boucle pour le code postal");
         */
       /*  else {
            $msgErreurInscription ="<p style='color:red'>Veuillez remplir tous les champs </p>";
        } */
        


include("view/html/head.php");
include("controller/menuController.php"); 
include("view/page/inscriptionProfil.php");
include("view/html/footer.php");


    
?>
