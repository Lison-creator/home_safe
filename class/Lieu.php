<?php 

class Lieu {
        // PROPRIETES
        protected $type;
        protected $adresse; // relier à MySQL de type composite (rue, numéro, boite...) ???
        //protected $num;
        //protected $boite;
        //protected $rue;
        //protected $zip;
        //protected $localite;
        protected $description;//private : ne peut être modifié qu'à l'intérieur de la classe

        
        // CONSTRUCTEUR
        public function __construct($_type, $_adresse, $_description) 
        {
            $this->type = $type;
            $this->adresse = $adresse;
            $this->description = $description;
        }

        // MÉTHODES
       /*  public lieuAjoute (){
            return '<p>'. $this->type . ' ' . $this->adresse . ' ' . $this->description . '</p>';
        } public lieuModifie(){

        }
        public lieuPartage(){

        } 
        
        public adresseEntiere(){
            return $this->rue . ' ' . $this->num . ' , boîte ' . $this->boite . '<br />' . $this->zip . ' ' . $this->localite; 
        }
    
        */

?>