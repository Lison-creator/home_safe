<?php 

include("models/Utilisateur.php");

$user1 = new Utilisateur();
/* //TODO Il ne comprends pas cette ligne, ne trouve pas l'id */
   
    // initialiser la variable pour ne pas avoir d'erreur
   // $msgErreurInscription = "";
    
    // si le form est soumis (une variable post nom)

//TODO Code chouette pour insérer nos données
/* https://www.youtube.com/watch?v=AHmZ1sKNz64 */

    if(isset($_POST["ad_cp"]))
    {
    //     print_r($_POST);
    //     print_r($_SESSION);
        $user1->addZipPhoto($_SESSION["last_id"], $_POST["ad_cp"]);
        header("Location:?section=editerProfil");

    }
            /* Renvoie à la page d'accueil une fois le formulaire envoyé */
    
        
       /*  else {
            $msgErreurInscription ="<p style='color:red'>Veuillez remplir tous les champs </p>";
        } */
        


include("view/html/head.php");
include("controller/menuController.php"); 
include("view/page/inscriptionProfil.php");
include("view/html/footer.php");


    
?>
