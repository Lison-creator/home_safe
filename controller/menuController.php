<?php 

// inclure aussi ici toutes les class relatives à la page

    if(isset($_SESSION["nom"])){
        include("view/menu/menu-co.php");
        if(isset($_GET["section"]) == "editerProfil"){
            include("view/menu/menu-editer-profil.php");
        }
    }
    else {
        include("view/menu/menu-nonco.php");
    }
?>