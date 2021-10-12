<?php 
    session_start();
    ob_start();

    include("view/html/head.php");

   include("controller/menuController.php"); 

    include("controller/router.php");

    include("view/html/footer.php");
?>