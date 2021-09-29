
<?php 

class Utilisateur {
        // PROPRIETES
        // La classe qui englobe toutes les autres classes au niveau du genre
        protected $type;
        protected $localite; // relier à MySQL de type composite (rue, numéro, boite...) ???
        protected $bio;//private : ne peut être modifié qu'à l'intérieur de la classe

        
        // CONSTRUCTEUR
        public function __construct() 
        {
            
        }

?>