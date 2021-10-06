<?php 
    require_once("Lieu.php");
    class Bar extends Lieu {
        // PROPRIETES
        protected $id;
        protected $astuce;

        // CONSTRUCTEUR
        public function __construct($_id, $_astuce) {
            $this->id = $_id;
            $this->astuce = $_astuce;
        }

        // SETTER & GETTER
        public function setId($_id){
            $this->id = $_id;
        }
        public function getId(){
            return $this->id;
        }

        public function setAstuce($_astuce){
            $this->astuce = $_astuce;
        }
        public function getAstuce(){
            return $this->astuce;
        }

        // METHODES
        public function getBar(){
            return $this->id;
        }

        public function updateBar(){
            $this->id;
            $this->astuce;
        }

        public function deleteBar(){
            $this->id;
        }
    }
?>