<?php 
    session_start();
    ob_start();
    if(isset($_SESSION)){
   /*      var_dump($_SESSION); */
    }
    
    include("controller/router.php");

?>
