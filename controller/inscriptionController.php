<?php

// inclure aussi ici toutes les class relatives à la page

include("models/Utilisateur.php");
/* echo password_hash('utilisateur', PASSWORD_DEFAULT); */

$user1 = new Utilisateur();


// initialiser la variable pour ne pas avoir d'erreur
$msgErreurInscription = "";

// avant de soumettre quoi que ce soit dans le formulaire
if (isset($_POST)){
    /* var_dump('coucou'); */

        // si le form est soumis (une variable post nom)
    if ((isset($_POST["pseudo"])) && (isset($_POST["email"])) && (isset($_POST["mdp"]))) {
        $email = $_POST["email"];
        $pseudo = $_POST["pseudo"];
        $mdp = $_POST["mdp"];

       
        // vérifie le pseudo et qu'il ne contient pas que des espace
        /*     var_dump("hors de la boucle :("); */

        if (((trim($pseudo)) != "") && (trim($email) != "") && (trim($mdp) != "")) {

            /* If si mon user n'existe pas */
            $userNotExist = $user1->checkAccountNotExist(htmlspecialchars($_POST['pseudo']), htmlspecialchars($_POST['email']));
            //var_dump($userNotExist);

            //retourner vrai si n'existe pas

            if ($userNotExist) {
               // var_dump('function verify good');

                // contient le spsueod, email et le mdp haché
                $last_insert_id = $user1->addUtilisateur($pseudo, $email, $mdp);
                $user = $user1->getUtilisateur($last_insert_id);
                
                $_SESSION["last_id"] = $last_insert_id;
                $_SESSION["pseudo"] = $user["pseudo"];
                
                // incrémente la variable de session
                $_SESSION["count"] = 0;
                
                /*  $_SESSION["user"] = $user; */
               // var_dump($_SESSION);
                
                header("Location:?section=inscriptionProfil");
               // var_dump("inscriptionProfil");
            } 
            
            else {
               // var_dump('le else du checkAccountNotExist : le compte existe déjà');

                $msgErrorInscription = '<i class="fas fa-exclamation-circle"><p class="erreur">Ce compte existe déjà. Voulez-vous <a href="?section=connexion">connecter</a></p>';
            }
        }
    }
}

else {
    $msgErreurInscription = '<i class="fas fa-exclamation-circle"><p class="erreur">Veuillez remplir tous les champs s\'il vous plaît.</p>';
    //var_dump('aucun champs');
}


include("view/html/head.php");
include("controller/menuController.php");
include("view/page/inscription.php");
include("view/html/footer.php");
?>;