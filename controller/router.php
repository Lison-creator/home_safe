<?php 
    if(isset($_GET["section"])){
        if(isset($_SESSION["nom"])){
            // il est connecté
            switch($_GET["section"]){
                case 'accueil' :
                    include("controller/accueilController.php");
                    break;
                case 'association' :
                    include("controller/associationController.php");
                    break;
                case 'contact' :
                    include("controller/contactController.php");
                    break;
                case 'deconnexion' :
                    include("controller/deconnexionController.php");
                    break;
                default:
                    include("view/error/404.php");
            }
        }
        else{
            // il n'est pas connecté
            switch($_GET["section"]){
                case 'accueil' :
                    include("controller/accueilController.php");
                    break;
                case 'association' :
                    include("controller/associationController.php");
                    break;
                case 'contact' :
                    include("controller/contactController.php");
                    break;
                case 'connexion' :
                    include("controller/connexionController.php");
                    break;
                default:
                    include("view/error/404.php");
            }
        }
        
    }
    else {
        include("controllers/accueilController.php");
    }
?>