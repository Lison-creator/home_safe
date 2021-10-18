<?php 

// inclure aussi ici toutes les class relatives à la page

include("models/Utilisateur.php");

    $user1 = new Utilisateur();

   
    // initialiser la variable pour ne pas avoir d'erreur
    $msgErreurInscription = "";
    
    // si le form est soumis (une variable post nom)

    if((isset($_POST["pseudo"]))&&(isset($_POST["email"]))&&(isset($_POST["mdp"]))){
        $email = $_POST["email"];
        $pseudo = $_POST["pseudo"];
        $mdp = $_POST["mdp"];
        /* $email = $_POST["emailConnection"]; */

    // vérifie le pseudo et qu'il ne contient pas que des espace

        if(((trim($pseudo))!= "") && (trim($email)!= "") && (trim($mdp)!= "")){
            $last_insert_id = $user1->addUtilisateur($pseudo, $email, $mdp);
            $_SESSION["last_id"] = $last_insert_id[0]["LAST_INSERT_ID()"];
            header("Location:?section=inscriptionProfil");
            /* Renvoie à la page d'accueil une fois le formulaire envoyé */
        }
        else {
            $msgErreurInscription ="<p style='color:red'>Veuillez remplir tous les champs </p>";
        }
        }
        

    include("view/html/head.php");
    include("controller/menuController.php"); 
    include("view/page/inscription.php");
    include("view/html/footer.php");
    ?>;
