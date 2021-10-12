 <?php
    require_once("UxDB.php");

    class Utilisateur extends UxDB
    {
        // PROPRIETES
        // La classe qui englobe toutes les autres classes au niveau du genre
        /*  protected $id;
        protected $nom;
        protected $prenom;
        protected $pseudo;
        protected $email;
        protected $localite; // relier à MySQL de type composite (rue, numéro, boite...) ???
        protected $bio;
        protected $mdp;
        // protected $photoprofil;
        protected $genre;
 */

        public function getUtilisateur($id)
        {

            try {
                $requete = "SELECT * FROM utilisateurs WHERE id = :id"; //injection SQL on rajoute un alias // sécuriser
                $params = array(
                    ":id" => $id
                );
                if ($this->execute($requete, $params) != null) {
                    return $this->execute($requete, $params)[0];
                } // [0] la première ligne de notre requête de notre BD
                //retourne la premièrte ligne de mon tbaleau

                else {
                    throw new Exception("Le thé n'existe pas");
                }
                return null;
            } catch (Exception $e) {
                var_dump($e);
                return null;
            }
        }


        // METHODES
        // TODO
    }
    ?>