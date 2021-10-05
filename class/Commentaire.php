<?php 
    class Commentaire {
        // PROPRIETES
        protected $id;
        protected $date;
        protected $auteur;
        protected $contenu;
        protected $lieu;

        // CONSTRUCTEUR
        public function __construct($_id, $_date, $_auteur, $_contenu, $_lieu) {
            $this->id = $_id;
            $this->date = $_date;
            $this->auteur = $_auteur;
            $this->contenu = $_contenu;
            $this->lieu = $_lieu;
        }

        // SETTER & GETTER
        public function setId($_id){
            $this->id = $_id;
        }
        public function getId(){
            return $this->id;
        }

        public function setDate($_date){
            $this->date = $_date;
        }
        public function getDate(){
            return $this->date;
        }

        public function setAuteur($_auteur){
            $this->auteur = $_auteur;
        }
        public function getAuteur(){
            return $this->auteur;
        }

        public function setContenu($_contenu){
            $this->contenu = $_contenu;
        }
        public function getContenu(){
            return $this->contenu;
        }

        public function setLieu($_lieu){
            $this->lieu = $_lieu;
        }
        public function getLieu(){
            return $this->lieu;
        }

        // METHODES
        public function insertCommentaire(){
            $this->id;
            $this->date;
            $this->auteur;
            $this->contenu;
            $this->lieu;
        }

        public function getCommentaire(){
            return $this->lieu;
        }

        public function updateCommentaire(){
            $this->id;
            $this->date;
            $this->auteur;
            $this->contenu;
            $this->lieu;
        }

        public function deleteCommentaire(){
            $this->id;
        }
    }
?>