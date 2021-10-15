<?php

// inclure aussi ici toutes les class relatives à la page

/* $_SESSION["nom"] = "Manon"; */

if (isset($_SESSION["nom"])) {
    
    if (isset($_GET["section"]) == "editerProfil") {
        include("view/menu/menu-editer-profil.php");
  
        var_dump("bonjour page inscription profil connecté");
    }
    var_dump("bonjour page inscription profil connecté sans la boucle 'if'");

    include("view/menu/menu-co.php");

} else {
    
    /* Ligne suivante va dans le premier "if", non ? Car c'est une condition connectée... */
    if ((isset($_SESSION["nom"])) && (isset($_GET["section"]) == "inscriptionProfil")) {
            include("view/menu/menuInscriptionProfil.php");} 

    include("view/menu/menu-nonco.php");
    var_dump("bonjour page inscription profil non connecté");
}
