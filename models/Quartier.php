<?php 
    class Quartier {

        /* Demander à Mélanie / Loïc */
        /* Est-ce qu'on doit rendre les noms plus précis ? Ou bien les classes appellées suffisent pour utiliser des propriétés similaires d'une classe à l'autre ? */

        /* Propriétés */

        protected $nom;
        protected $codePostal;
        protected $localisation; /* coordonnées géographiques */
        protected $quotation; /* Une note donnée par les utilisateur.ice.s ? */
        protected $description; /* Texte de description du quartier */

        /* CONSTRUCTEUR */

        public function __construct($_nom, $_codePostal, $_localisation, $_quotation, $_description){
            $this->nom = $_nom;
            $this->codePostal = $_codePostal;
            $this->localisation = $_localisation;
            $this->quotation = $_quotation;
            $this->description = $_description;
           
        }

        /* Setter - Getter */

        public function setNom($_nom){
            $this->nom = $_nom;
        }
        public function getNom(){
            return $this->nom;
        }

        public function setCodePostal($_codePostal){
            $this->codePostal = $_codePostal;
        }
        public function getCodePostal(){
            return $this->codePostal;
        }

        public function setLocalisation($_localisation){
            $this->localisation = $_localisation;
        }
        public function getLocalisation(){
            return $this->localisation;
        } 

        public function setQuotation($_quotation){
            $this->quotation = $_quotation;
        }
        public function getQuotation(){
            return $this->quotation;
        }

        public function setDescription($_description){
            $this->description = $_description;
        }
        public function getDescription(){
            return $this->description;
        }





    }
?>
