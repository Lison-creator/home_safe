<?php

// inclure aussi ici toutes les class relatives à la page

/* $_SESSION["nom"] = "Manon"; */

if (isset($_SESSION["nom"])) {

    if (isset($_GET["section"]) === "editerProfil") {
        include("view/menu/menu-editer-profil.php");

        var_dump("bonjour page inscription profil connecté");
    }
    var_dump("bonjour page inscription profil connecté sans la boucle 'if'");

    /* On inclut toujours le menu connecté pour qu'iel puisse se deconnecter */
    include("view/menu/menu-co.php");
} else {

    

    if ((isset($_GET["section"]) === "inscriptionProfil")) {
        include("view/menu/menuInscriptionProfil.php");
        var_dump("non connecté + inscription Profil (le if du else)");
    } 
    include("view/menu/menu-nonco.php");
    var_dump("bonjour page inscription profil non connecté Else du else");
    
}
