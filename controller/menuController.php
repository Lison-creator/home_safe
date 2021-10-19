<?php

// inclure aussi ici toutes les class relatives à la page

/* $_SESSION["nom"] = "Manon"; */

/* TODO ne fonctionne pas - rentre tjs dans al boucle edit-profil */
/* voir avec le router : où mettre la page "inscriptionProfilController ? dans connecté ou non-connecté ? */

/* faire un switch ou else if */
// nom +  accueil
//nom + editer (elseif)

//Si j'ai un connecté et que l'on est déjà inscrite

if (isset($_SESSION['pseudo'], $_SESSION['count']) && $_SESSION["count"] == 1) {
    // il/elle est connecté
    // DE BASE, il inclut le menu permanent
    /*   var_dump("je suis rentrée dans les deux if - donc section + je suis connectée"); */

    switch ($_GET["section"]) {
        case 'accueil': // menu permanent + menu nom / deconnection
            include("view/menu/menu-co.php");
                /* var_dump("je suis rentrée dans case: accueil") */; //FONCTIONNE HOUURRRRAAA !!!
            break;
            /*  case 'inscriptionProfil': // menu permanent + logo de retour à la page d'accueil et pas le menu connecté
                include("view/menu/menuInscriptionProfil.php");
        var_dump("je suis rentrée dans case: inscriptionProfil"); */

            /* break; */
        case 'editerProfil': // menu permanent + logo de retour à la page d'accueil
            include("view/menu/menu-editer-profil.php");
                /* var_dump("je suis rentrée dans case: Editer Profil") */; //FONCTIONNE HOUURRRRAAA !!!
            break;

        case 'contact': // menu permanent + menu nom / deconnection
            include("view/menu/menu-co.php");
                /* var_dump("je suis rentrée dans case: contact") */; //FONCTIONNE HOUURRRRAAA !!!
            break;

        case 'faq': // menu permanent + menu nom / deconnection
            include("view/menu/menu-co.php");
                /* var_dump("je suis rentrée dans case: faq") */; //FONCTIONNE HOUURRRRAAA !!!
            break;

        case 'contact': // menu permanent + menu nom / deconnection
            include("view/menu/menu-co.php");
                /* var_dump("je suis rentrée dans case: contact") */; //FONCTIONNE HOUURRRRAAA !!!
            break;

        case 'association': // menu permanent + menu nom / deconnection
            include("view/menu/menu-co.php");
                /* var_dump("je suis rentrée dans case: association") */; //FONCTIONNE HOUURRRRAAA !!!
            break;

        case 'carte': // menu permanent + menu nom / deconnection
            include("view/menu/menu-co.php");
            /* var_dump("je suis rentrée dans case: carte"); */ //FONCTIONNE HOUURRRRAAA !!!
            break;
        default:
            include("view/error/404.php");
    }
} elseif (isset($_SESSION['pseudo'], $_SESSION['count']) && $_SESSION["count"] == 0) {


    switch ($_GET["section"]) {
        case 'accueil': // menu permanent + menu nom / deconnection
            include("view/menu/menu-co.php");
                /* var_dump("je suis rentrée dans case: accueil") */; //FONCTIONNE HOUURRRRAAA !!!
            break;
            /*  case 'inscriptionProfil': // menu permanent + logo de retour à la page d'accueil et pas le menu connecté
                include("view/menu/menuInscriptionProfil.php");
        var_dump("je suis rentrée dans case: inscriptionProfil"); */

            /* break; */
        case 'editerProfil': // menu permanent + logo de retour à la page d'accueil
            include("view/menu/menu-editer-profil.php");
                /* var_dump("je suis rentrée dans case: Editer Profil") */; //FONCTIONNE HOUURRRRAAA !!!
            break;

        case 'contact': // menu permanent + menu nom / deconnection
            include("view/menu/menu-co.php");
                /* var_dump("je suis rentrée dans case: contact") */; //FONCTIONNE HOUURRRRAAA !!!
            break;

        case 'faq': // menu permanent + menu nom / deconnection
            include("view/menu/menu-co.php");
                /* var_dump("je suis rentrée dans case: faq") */; //FONCTIONNE HOUURRRRAAA !!!
            break;

        case 'contact': // menu permanent + menu nom / deconnection
            include("view/menu/menu-co.php");
                /* var_dump("je suis rentrée dans case: contact") */; //FONCTIONNE HOUURRRRAAA !!!
            break;

        case 'association': // menu permanent + menu nom / deconnection
            include("view/menu/menu-co.php");
                /* var_dump("je suis rentrée dans case: association") */; //FONCTIONNE HOUURRRRAAA !!!
            break;

        case 'inscriptionProfil':
            include("view/menu/menuInscriptionProfil.php");
            break;
        default:
            include("view/error/404.php");
    }
} else { // si tu n'es pas connecté

    include("view/menu/menu-nonco.php");
    /* var_dump("je suis rentrée dans le else du else"); */
}



/* 

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
