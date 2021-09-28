<?php 
    if(isset($_SESSION["nom"])){
        include("views/menu/menu-co.php");
    }
    else {
        include("views/menu/menu-nonco.php");
    }
?>