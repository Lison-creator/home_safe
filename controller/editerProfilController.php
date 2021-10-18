<?php 


include("view/html/head.php");

if (isset($_SESSION)) {
    // il/elle est connecté
    include('view/menu/menu-co.php'); 
    var_dump('je suis dans la boulce du if');
    var_dump($_SESSION);
    
} else { // si tu n'es pas connecté
    include('view/menu/menu-nonco.php'); 
    var_dump('je suis dans la boulce du else');
    
}

include('view/page/editerProfil.php');
include('view/html/footer.php');



    
?>