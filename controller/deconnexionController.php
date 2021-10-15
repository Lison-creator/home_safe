<?php 

// inclure aussi ici toutes les class relatives à la page


// vider les variables de session
    unset($_SESSION["pseudo"]);
    unset($_SESSION["count"]);
    // détruire la session
    session_destroy();
    // revenir sur la page de connexion
    header("Location:index.php?section=connexion");
?>