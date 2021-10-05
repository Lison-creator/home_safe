 <?php 
    class Utilisateur {
        // PROPRIETES
        // La classe qui englobe toutes les autres classes au niveau du genre
        protected $id; // est-ce que ça va poser un problème le fait que id se retrouve dans toutes les autres classes ?
        protected $nom; // même question qu'en haut
        protected $prenom;
        protected $pseudo;
        protected $email;
        protected $adresse; // relier à MySQL de type composite (rue, numéro, boite...) ???
/*         même question qu'en haut
 */     protected $bio; /* même question qu'en haut */
        protected $mdp;
        protected $photoProfil;/* même question qu'en haut */
        protected $genre;
        protected $quartier;

        // CONSTRUCTEUR
        public function __construct($_nom, $_prenom, $_pseudo, $_email, $_adresse, $_bio, $_mdp, $_genre, $_photoProfil, $_quartier, $_id) 
        {
            $this->nom = $_nom;
            $this->prenom = $_prenom;
            $this->pseudo = $_pseudo;
            $this->email = $_email;
            $this->adresse = $_adresse;
            $this->bio = $_bio;
            $this->mdp = $_mdp;
            $this->genre = $_genre;
            $this->photoProfil = $_photoProfil;
            $this->quartier = $_quartier;
            $this->id = $_id;
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

        public function setPrenom($_prenom){
            $this->prenom = $_prenom;
        }

        public function getPrenom(){
            return $this->prenom;
        }
        
        public function setPseudo($_pseudo){
            $this->pseudo = $_pseudo;
        }

        public function getPseudo(){
            return $this->pseudo;
        }

        public function setAdresse($_adresse){
            $this->adresse = $_adresse;
        }

        public function getAdresse(){
            return $this->adresse;
        }

        public function setMdp($_mdp){
            $this->mdp = $_mdp;
        }

        public function getMdp(){
            return $this->mdp;
        }

        public function setQuartier($_quartier){
            $this->quartier = $_quartier;
        }

        public function getQuartier(){
            return $this->quartier;
        }

        public function setPhotoProfil($_photoProfil){
            $this->photoProfil = $_photoProfil;
        }

        public function getPhotoProfil(){
            return $this->photoProfil;
        }

        public function setEmail($_email){
            $this->email = $_email;
        }

        public function getEmail(){
            return $this->email;
        }

        public function setBio($_bio){
            $this->bio = $_bio;
        }

        public function getBio(){
            return $this->bio;
        }

        public function setGenre($_genre){
            $this->genre = $_genre;
        }

        public function getGenre(){
            return $this->genre;
        }

        // METHODES

        public function verificationConnection () {
           return $this->pseudo . $this->mdp;
        }

        public function deleteUtilisateur (){
            /* TODO à définir */
        }










    }
?>