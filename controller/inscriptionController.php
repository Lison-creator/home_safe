<?php 

// inclure aussi ici toutes les class relatives à la page

include("models/Utilisateur.php");

    $user1 = new Utilisateur();

   
    // initialiser la variable pour ne pas avoir d'erreur
    $msgErreurInscription = "";
    
    // si le form est soumis (une variable post nom)
    if((isset($_POST["nom"]))&&(isset($_POST["prenom"]))){
        
    // vérifie le nom et qu'il ne contient pas que des espace
        if((trim($_POST["nom"])!= "") && (trim($_POST["prenom"])!= "")){
            $user1->addUtilisateur($_POST["nom"], $_POST["prenom"]);
            header("Location:?section=accueil");
            /* Renvoie à la page d'accueil une fois le formulaire envoyé */
        }
        else {
            $msgErreurInscription ="<p style='color:red'>Veuillez remplir le champ nom</p>";
        }
        }
        

    include("view/html/head.php");
    include("controller/menuController.php"); 
    include("view/page/inscription.php");
    include("view/html/footer.php");
