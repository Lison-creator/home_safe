<?php 

// inclure aussi ici toutes les class relatives à la page



    // si la variable de session count n'existe pas
    if(!isset($_SESSION["count"])){
        // alors la créer et initialiser à 0
        $_SESSION["count"] = 0;
    }
    // initialiser la variable pour ne pas avoir d'erreur
    $msgError = "";
    // si le form est soumis (une variable post nom)
    if(isset($_POST["pseudo"])){
        // si inférieur à 3 essais
        if($_SESSION["count"]< 3){
            // incrémente la variable de session
            $_SESSION["count"]++;
            // vérifie le pseudo et qu'il ne contient pas que des espaces
            if(trim($_POST["pseudo"])!=  ""){
                // enregistrer dans une variable de session
                $_SESSION["pseudo"] = trim($_POST["pseudo"]);
                // rediriger vers la page d'accueil
                header("Location:?section=accueil");
            }
            else {
                // message d'erreur
                // si inférieur à 3 essais
                if($_SESSION["count"] < 3){
                    $msgError = "<p class='red'>Veuillez entrer un pseudo valide</p>";
                }
                else {
                    // si 3 essais négatifs sont faits
                    $msgError = "<p class='red'>Votre compte est bloqué</p>";
                }
                
            }
        }
        else {
            // si 3 essais négatifs sont faits
            $msgError = "<p class='red'>Votre compte est bloqué</p>";
        }
        
    }

    // var_dump($_SESSION["count"]);
    
    
    include("view/html/head.php");
    include("controller/menuController.php"); 
    include("view/page/connexion.php");
    include("view/html/footer.php");
