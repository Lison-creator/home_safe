 <?php 
    class Utilisateur {
        // PROPRIETES
        // La classe qui englobe toutes les autres classes au niveau du genre
        protected $id;
        protected $nom;
        protected $prenom;
        protected $pseudo;
        protected $email;
        protected $localite; // relier à MySQL de type composite (rue, numéro, boite...) ???
        protected $bio;
        protected $mdp;
        // protected $photoprofil;
        protected $genre;

        // CONSTRUCTEUR
        public function __construct($_nom, $_prenom, $_pseudo, $_email, $_localite, $_bio, $_mdp, $_genre) 
        {
            $this->nom = $_nom;
            $this->prenom = $_prenom;
            $this->pseudo = $_pseudo;
            $this->email = $_email;
            $this->localite = $_localite;
            $this->bio = $_bio;
            $this->mdp = $_mdp;
            $this->genre = $_genre;
        }

        // METHODES
        // TODO
    }
?>