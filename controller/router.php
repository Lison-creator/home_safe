<?php 
    if(isset($_GET["section"])){
        if(isset($_SESSION["nom"])){
            // il est connecté
            switch($_GET["section"]){
                case 'accueil' :
                    include("controllers/accueilController.php");
                    break;
                case 'association' :
                    include("controllers/associationController.php");
                    break;
                case 'contact' :
                    include("controllers/contactController.php");
                    break;
                case 'deconnexion' :
                    include("controllers/deconnexionController.php");
                    break;
                default:
                    include("views/error/404.php");
            }
        }
        else{
            // il n'est pas connecté
            switch($_GET["section"]){
                case 'accueil' :
                    include("controllers/accueilController.php");
                    break;
                case 'association' :
                    include("controllers/associationController.php");
                    break;
                case 'contact' :
                    include("controllers/contactController.php");
                    break;
                case 'connexion' :
                    include("controllers/connexionController.php");
                    break;
                default:
                    include("views/error/404.php");
            }
        }
        
    }
    else {
        include("controllers/accueilController.php");
    }
?>