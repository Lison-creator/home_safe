<?php 
    if(isset($_SESSION["nom"])){
        include("view/menu/menu-co.php");
    }
    else {
        include("view/menu/menu-nonco.php");
    }
?>