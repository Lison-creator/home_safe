<?php

// inclure aussi ici toutes les class relatives à la page
include("models/Utilisateur.php");


// si la variable de session count n'existe pas
if (!isset($_SESSION["count"])) {
    // alors la créer et initialiser à 0
    $_SESSION["count"] = 0;
}
// initialiser la variable pour ne pas avoir d'erreur
$msgError = "";
// si le form est soumis (une variable post nom)
if (isset($_POST["pseudo"], $_POST["email"], $_POST["mdp"])) {
    var_dump('les champs sont bien remplis');

    // si inférieur à 3 essais
    if ($_SESSION["count"] < 3) {

        // vérifie le pseudo email et mdp et qu'il ne contient pas que des espaces
        if ((trim($_POST["pseudo"]) !=  "") && (trim($_POST["email"]) !=  "") && (trim($_POST["mdp"]) !=  "")) {

        var_dump('pas d\'espaces ok');

            //création d'un nouvel objet type utilisateur pour effectuer une comparaison avec un utilisateur déjà existant => appel ensuite de la fonciton "verify"
            $connexionUtilisateur = new Utilisateur();

            //vérifie que les connections (email, pseudo et mdp) existe déjà ou pas dans la db en passant par un tableau nommé $data
            $userComparaison = $connexionUtilisateur->verify(htmlspecialchars($_POST['pseudo']), htmlspecialchars($_POST['email']), htmlspecialchars($_POST['mdp']));

            if ($userComparaison != false) {
                var_dump('function verify okay');

                // enregistrer dans une variable de session
                $_SESSION["pseudo"] = $userComparaisoner["pseudo"];

                /*  $_SESSION["user"] = $user; */
                var_dump($_SESSION["pseudo"]);
            
                // incrémente la variable de session
                $_SESSION["count"] = 1;

                // rediriger vers la page d'accueil
                header("Location:?section=accueil");
            } 
            else {
                var_dump('le else du verify : le verify est faux - L\'email ou mot de passe ne sont pas valides');

                $msgError = "<p style='color:red'>L'email / mot de passe ne sont pas valides</p>";
            }
        } else {
            // message d'erreur
            // si inférieur à 3 essais
            if ($_SESSION["count"] < 3) {
                var_dump('Veuillez entrer un pseudo valide');

                $msgError = "<p class='red'>Veuillez entrer un pseudo valide</p>";
            } else {
                // si 3 essais négatifs sont faits
                $msgError = "<p class='red'>Votre compte est bloqué</p>";
            }
        }
    } else {
        // si 3 essais négatifs sont faits
        $msgError = "<p class='red'>Votre compte est bloqué</p>";
    }
}

// var_dump($_SESSION["count"]);


include("view/html/head.php");
include("controller/menuController.php");
include("view/page/connexion.php");
include("view/html/footer.php");
