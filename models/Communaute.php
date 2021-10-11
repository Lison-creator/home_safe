<?php 
    class Communaute {
        // PROPRIETES
        protected $nom;
        protected $membres;

        // CONSTRUCTEUR
        public function __construct($_nom, $_membres)
        {
            $this->nom = $_nom;
            $this->membres = $_membres;
        }
    }
?>