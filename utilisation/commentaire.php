<?php
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__."/class/Utilisateur.php");
require_once(__ROOT__."/class/Commentaire.php");

$Manon = new Utilisateur ("Lespes", "Manon", "Chatshimi", "m.lespes@interface3.be", " ", " ", " ", " ", " ", " ", "001");
$com = new Commentaire ("0005", "12/02/2021", "", "Bonjour", "Ixelles", "");

echo "<p>Voici le nom de l'utilisateur " . $com->getAuteur($Manon). "</p>";


?>