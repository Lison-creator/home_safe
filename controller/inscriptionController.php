<?php 

// inclure aussi ici toutes les class relatives à la page

include("models/Utilisateur.php");

    $user1 = new Utilisateur();

   
    // initialiser la variable pour ne pas avoir d'erreur
    $msgErreurInscription = "";
    
    // si le form est soumis (une variable post nom)
    if((isset($_POST["nom"]))&&(isset($_POST["prenom"]))){
        $prenom = $_POST["prenom"];
        $nom = $_POST["nom"];
        /* $email = $_POST["emailConnection"]; */
    // vérifie le nom et qu'il ne contient pas que des espace
        if(((trim($nom))!= "") && (trim($prenom)!= "")){
            $user1->addUtilisateur($nom, $prenom);
            header("Location:?section=inscriptionProfil");
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
    ?>;
