<?php 
    define('__ROOT__', dirname(dirname(__FILE__)));
    require_once(__ROOT__."/class/Utilisateur.php");
    

    /* test qui fonctionne */
    $Manon = new Utilisateur ("Lespes", "Manon", "Chatshimi", "m.lespes@interface3.be", " ", " ", " ", " ", " ", " ", "001");
    $Manon->setAdresse("Rue de la victoire");
    echo "<p>Voici l'adresse de" . $Manon->getPrenom() . " " . $Manon->getAdresse() . "</p>";
    $Manon->setMdp("azerty");
    $Manon->verificationConnection();
    echo "<p>Voici la vérifaction de".$Manon->getPrenom(). " :" . $Manon->verificationConnection()."</p>";
    
    
?>