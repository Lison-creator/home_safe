<?php

// inclure aussi ici toutes les class relatives à la page

include("models/Utilisateur.php");
echo password_hash('utilisateur', PASSWORD_DEFAULT);

$user1 = new Utilisateur();


// initialiser la variable pour ne pas avoir d'erreur
$msgErreurInscription = "";

// avant de soumettre quoi que ce soit dans le formulaire
if (isset($_POST)){
    var_dump('coucou');
        // si le form est soumis (une variable post nom)
    if ((isset($_POST["pseudo"])) && (isset($_POST["email"])) && (isset($_POST["mdp"]))) {var_dump('les champs sont bien remplis');
        $email = $_POST["email"];
        $pseudo = $_POST["pseudo"];
        $mdp = $_POST["mdp"];

        // vérifie le pseudo et qu'il ne contient pas que des espace
        /*     var_dump("hors de la boucle :("); */

        if (((trim($pseudo)) != "") && (trim($email) != "") && (trim($mdp) != "")) {

            /* If pour vérifier si la combinaison email/pseudo n'existe pas déja dans la db */
            $userComparaison = $user1->verify(htmlspecialchars($_POST['pseudo']), htmlspecialchars($_POST['email']), htmlspecialchars($_POST['mdp']));
            var_dump($user1);


            if ($userComparaison != null) {
                var_dump('function verify okay');

                // enregistrer dans une variable de session
                $_SESSION["pseudo"] = $userComparaison["pseudo"];

                /*  $_SESSION["user"] = $user; */
                var_dump($_SESSION["pseudo"]);

                // incrémente la variable de session
                $_SESSION["count"] = 1;

                $last_insert_id = $user1->addUtilisateur($pseudo, $email, $mdp);
                $user = $user1->getUtilisateur($last_insert_id);

                $_SESSION["last_id"] = $last_insert_id;
                $_SESSION["pseudo"] = $user["pseudo"];

                header("Location:?section=inscriptionProfil");
                /* var_dump("inscriptionProfil"); */
                /* Renvoie à la page d'accueil une fois le formulaire envoyé */
            } 
            
            else {
                var_dump('le else du verify : le compte existe déjà');

                $msgError = '<p style="color:red">Ce compte existe déjà. Voulez-vous <a href="?section=connexion">connecter</a></p>';
            }
        }
    }
}

else {
    $msgErreurInscription = "<p style='color:red'>Veuillez remplir tous les champs </p>";
    var_dump('aucun champs');
}


include("view/html/head.php");
include("controller/menuController.php");
include("view/page/inscription.php");
include("view/html/footer.php");
?>;