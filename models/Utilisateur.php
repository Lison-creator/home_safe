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
                die();

                return null;
            }
        }


        // METHODES

        // récupérer tous les utilisateurs

        public function getAllUtilisateurs()
        {
            $requete = "SELECT * FROM utilisateurs";
            return $this->execute($requete);
        }

        // ajoute un utilisateur : enregistrer un profil
        //TODO Ajouter le code pour les images https://beaussier.developpez.com/articles/php/mysql/blob/#LIII-B

        public function addUtilisateur($pseudo, $email, $mdp)
        {
            $requete = "INSERT INTO utilisateurs (pseudo, email, mdp) VALUES ( :pseudo, :email, :mdp)"; /* On passe par des alias pour éviter les piratages de données */
            $params = array(
              
                ":pseudo" => $pseudo,
                ":email" => $email,
                ":mdp" => $mdp
            );
            $this->execute($requete, $params);
        }

        /*   met à jour un thé
        public function updateTea($id, $nom)
        {
            modifier les données
            $requete = "UPDATE the SET nom=:nom WHERE the_id = :id";
            $params = array(
                ":id" => $id,
                ":nom" => $nom
            );
            $this->execute($requete, $params)[0]; /* L'index 0 permet de récupérer la ligne 0 du tableau 
        }
         supprime un thé
        public function deleteTea($id)
        {
            supprimer les données
            $requete = "DELETE FROM the WHERE the_id = :id";
            $params = array(
                ":id" => $id
            );
            $this->execute($requete, $params);
        }

         supprime plusieurs thés
        public function deleteTeas($tab_id)
        {
            foreach ($tab_id as $id) {
                $this->deleteTea($id);
            }
        } */
    }

    ?>