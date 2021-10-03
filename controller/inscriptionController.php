<?php 
    // si la variable de session count n'existe pas
    if(!isset($_SESSION["count"])){
        // alors la créer et initialiser à 0
        $_SESSION["count"] = 0;
    }
    // initialiser la variable pour ne pas avoir d'erreur
    $msgErreurInscription = "";
    // si le form est soumis (une variable post nom)
    if(isset($_POST["nom"])){
        // si inférieur à 3 essais
        if($_SESSION["count"]< 3){
            // incrémente la variable de session
            $_SESSION["count"]++;
            // vérifie le nom et qu'il ne contient pas que des espaces
            if(trim($_POST["nom"])!=  ""){
                // enregistrer dans une variable de session
                $_SESSION["nom"] = trim($_POST["nom"]);
                // rediriger vers la page d'accueil
                header("Location:?section=accueil");
            }
            else {
                // message d'erreur
                // si inférieur à 3 essais
                if($_SESSION["count"] < 3){
                    $msgErreurInscription = "<p class='red'>Veuillez entrer un nom valide</p>";
                }
                else {
                    // si 3 essais négatifs sont faits
                    $msgErreurInscription = "<p class='red'>Votre compte est bloqué</p>";
                }
                
            }
        }
        else {
            // si 3 essais négatifs sont faits
            $msgErreurInscription = "<p class='red'>Votre compte est bloqué</p>";
        }
        
    }

    // var_dump($_SESSION["count"]);
    include("view/page/inscription.php");
    
?>