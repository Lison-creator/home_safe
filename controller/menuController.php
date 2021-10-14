<?php

// inclure aussi ici toutes les class relatives à la page

/* $_SESSION["nom"] = "Manon"; */

/* TODO ne fonctionne pas - rentre tjs dans al boucle edit-profil */
/* voir avec le router : où mettre la page "inscriptionProfilController ? dans connecté ou non-connecté ? */

/* faire un switch ou else if */
// nom +  accueil
//nom + editer (elseif)


//Si j'ai un nom, que je suis déjà inscrite
if (isset($_SESSION["nom"])) {
    // DE BASE, il inclut toujours le menu disant "prenom" deconnection
    include("view/menu/menu-co.php");
    
    //et si en plus je clique sur la page editerProfil.php
    //menu permanent + menu editer de la page editerProfil + se deconnecter
    if (((isset($_SESSION["nom"])) && (isset($_GET["section"]))) == "editerProfil") {
        include("view/menu/menu-editer-profil.php");
        
         var_dump("bonjour page inscription profil connectée - menu editer en plus");
    }
    var_dump("bonjour page inscription profil connecté sans la boucle 'if'");
    
} 


// sinon je clique sur la page inscriptionProfil.php
//menu permanent + menu se deconnecter
elseif ((isset($_SESSION["nom"])) && (isset($_GET["section"]) == "inscriptionProfil")) {
        include("view/menu/menuInscriptionProfil.php");
        /* var_dump("bonjour page inscription profil non connecté"); */
    } 


else {
        include("view/menu/menu-nonco.php");
}
