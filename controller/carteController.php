<?php 

include('models/Lieu.php');

$lieu = new Lieu();


//rajouter le footer et les menus différents en fonction de la situation connecté ou non (faire des if par conséquent ici)
    include("view/html/head.php");
    include("controller/menuController.php"); 
    include("view/page/carte.php");
    include("view/html/footer.php");
    
?>