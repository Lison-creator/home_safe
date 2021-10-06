<?php 
    class Commissariat extends Lieu { // est-ce que le commissariat peut aussi extends Quartier ???
        // PROPRIETES
        protected $id; // est-ce que ça va poser un problème le fait que id se retrouve dans toutes les autres classes ?
        protected $nom; // même question qu'en haut
        protected $demarcheAdmin;
        protected $contactEmail;
        protected $tel;
        protected $adresse; // relier à MySQL de type composite (rue, numéro, boite...) ???
/*         même question qu'en haut
 */     protected $bio; /* même question qu'en haut */
        protected $quartier;
        protected $personneRecommande;

        // CONSTRUCTEUR
        public function __construct( $_id, $_nom, $_demarcheAdmin, $_contactEmail, $_tel, $_adresse, $_bio, $_quartier, $_personneRecommande) 
        {
            $this->id = $_id;
            $this->nom = $_nom;
            $this->demarcheAdmin = $_demarcheAdmin;
            $this->contactEmail = $_contactEmail;
            $this->tel = $_tel;
            $this->adresse = $_adresse;
            $this->bio = $_bio;
            $this->quartier = $_quartier;
            $this->personneRecommande = $_personneRecommande;
        }

        /* Setter - Getter */

        public function setId($_id){
            $this->id = $_id;
        }

        public function getId(){
            $this->id;
        }


        public function setNom($_nom){
            $this->nom = $_nom;
        }

        public function getNom(){
            return $this->nom;
        }

        public function setDemarcheAdmin($_demarcheAdmin){
            $this->demarcheAdmin = $_demarcheAdmin;
        }

        public function getDemarcheAdmin(){
            return $this->demarcheAdmin;
        }
        
        public function setContactEmail($_contactEmail){
            $this->contactEmail = $_contactEmail;
        }

        public function getContactEmail(){
            return $this->contactEmail;
        }

        public function setAdresse($_adresse){
            $this->adresse = $_adresse;
        }

        public function getAdresse(){
            return $this->adresse;
        }

        public function setTel($_tel){
            $this->tel = $_tel;
        }

        public function getTel(){
            return $this->tel;
        }

        public function setQuartier($_quartier){
            $this->quartier = $_quartier;
        }

        public function getQuartier(){
            return $this->quartier;
        }

        public function setBio($_bio){
            $this->bio = $_bio;
        }

        public function getBio(){
            return $this->bio;
        }

        public function setPersonneRecommande($_personneRecommande){
            $this->personneRecommande = $_personneRecommande;
        }

        public function getPersonneRecommande(){
            return $this->personneRecommande;
        }



        // METHODES

        public function get_commissariat($_id, $_nom, $_demarcheAdmin, $_contactEmail, $_tel, $_adresse, $_bio, $_quartier, $_personneRecommande)
    {
        /* Transforme les données du commissariat en tableau.  */

        $data_commissariat = [$_id, $_nom, $_demarcheAdmin, $_contactEmail, $_tel, $_adresse, $_bio, $_quartier, $_personneRecommande];
        return $data_commissariat;
    }

    /* Pour update et Delete, il existe des fonctions en php/mySql préécrites. Est-ce qu'on peut les utiliser ? 
       DELETE : $this->query(" DELETE FROM table " );  
       UPDATE : $this->query(" UPDATE table SET nom = '$_nom', prenom = '$_prenom' "; */

    public function update_commissariat($_id, $_nom, $_demarcheAdmin, $_contactEmail, $_tel, $_adresse, $_bio, $_quartier, $_personneRecommande)
    {
    }
    public function delete_commissariat($_id)
    {
    }



    }
?>