<?php 
    class Communaute {
        // PROPRIETES
        protected $id;
        protected $nom;
        protected $bio;
        protected $caracteristiques;

        // CONSTRUCTEUR
        public function __construct($_id, $_nom, $_bio, $_caracteristiques) {
            $this->id = $_id;
            $this->nom = $_nom;
            $this->bio = $_bio;
            $this->caracteristiques = $_caracteristiques;
        }

        // SETTER & GETTER
        public function setId($_id){
            $this->id = $_id;
        }
        public function getId(){
            return $this->id;
        }

        public function setNom($_nom){
            $this->nom = $_nom;
        }
        public function getNom(){
            return $this->nom;
        }

        public function setBio($_bio){
            $this->bio = $_bio;
        }
        public function getBio(){
            return $this->bio;
        }

        public function setCaracteristiques($_caracteristiques){
            $this->caracteristiques = $_caracteristiques;
        }
        public function getCaracteristiques(){
            return $this->caracteristiques;
        }

        // METHODES
        public function getCommunaute(){
            return $this->id;
        }

        public function updateCommunaute(){
            $this->id;
        }

        public function deleteCommunaute(){
            $this->id;
        }
    }
?>