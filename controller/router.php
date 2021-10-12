<?php 

// ici aussi il faudra changer et pas forcément lister tous les cases

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
                case 'faq' :
                    include("controller/faqController.php");
                    break;
                case 'contact' :
                    include("controller/contactController.php");
                    break;
                case 'termes' :
                    include("controller/termesController.php");
                    break;
                case 'profil' :
                    include("controller/profilController.php");
                    break;
                /* case 'inscriptionProfil' :
                    include("controller/inscriptionProfilController.php");
                    break; */
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
                case 'faq' :
                    include("controller/faqController.php");
                    break;
                case 'contact' :
                    include("controller/contactController.php");
                    break;
                case 'termes' :
                    include("controller/termesController.php");
                    break;
                case 'connexion' :
                    include("controller/connexionController.php");
                    break;
                case 'inscription' :
                    include("controller/inscriptionController.php");
                    break;
                case 'inscriptionProfil' :
                    include("controller/inscriptionProfilController.php");
                    break;
                default:
                    include("view/error/404.php");
            }
        }
    }
    else {
        include("controller/accueilController.php");//suppression ici du s
    }
        
?>