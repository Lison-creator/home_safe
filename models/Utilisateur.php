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
                    throw new Exception("Pas de donnée");
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
                ":mdp" => password_hash($mdp, PASSWORD_DEFAULT)
            );
            $this->execute($requete, $params);

            $requete = "SELECT LAST_INSERT_ID() as id";

            if ($this->execute($requete) != null) {
                return $this->execute($requete, $params)[0]["id"];
            } // [0] la première ligne de notre requête de notre BD
            //retourne la premièrte ligne de mon tbaleau

            else {
                throw new Exception("Soucis lors de la création de l'user");
            }
        }


        /*  Ajoute le zip code et la photo */
        public function addZipPhoto($id, $ad_cp)
        {

            /*  modifier les données */
            $requete = "UPDATE utilisateurs SET ad_cp=:ad_cp WHERE id = :id";
            $params = array(
                ":id" => $id,
                ":ad_cp" => $ad_cp
            );
            $this->execute($requete, $params);
            /* L'index 0 permet de récupérer la ligne 0 du tableau */
        }

        // ============ CONNEXION =========
        // retourne l'utilisateur si il existe
        public function verify($pseudo, $email, $mdp)
        {
            if (empty($pseudo) || empty($email) || empty($mdp)) {
                return null;
            }
            try {
                $requete = "SELECT * FROM utilisateurs WHERE email = :email AND pseudo = :pseudo";
                $params = array(
                    ":email" => $email,
                    ":pseudo" => $pseudo,

                );

                //rajout d'une contrainte dans la structure SQL de notre DB
                /*                 ALTER TABLE utilisateurs
                ADD CONSTRAINT UQ_utilisateurs_email
                UNIQUE (email) */


                $data = $this->execute($requete, $params);
                // var_dump($data);


                if ($data == null || sizeof($data) != 1) {
                    return null;
                }

                $userData = $data[0];
                /* var_dump($userData); */

                $hashed_mdp = password_hash($mdp, PASSWORD_DEFAULT);
                /* var_dump($hashed_mdp); */

                if (password_verify($mdp, $hashed_mdp)) {
                    // var_dump('Utilisateur is ok');
                    $arrayData = array(
                        "id" => $userData["id"],
                        "email" => $userData["email"],
                        "pseudo" => $userData["pseudo"]
                    );
                    return $arrayData;
                } else {
                    // le mot de passe n'est pas valide
                    return null;
                }
            } catch (PDOException $e) {
                return null;
            }
        }


        // ============ INSCRIPTION=========
        // retourne si le compte n'existe pas

        public function checkAccountNotExist($pseudo, $email)
        {
            try {
                $requete = "SELECT * FROM utilisateurs WHERE email = :email AND pseudo = :pseudo";
                $params = array(
                    ":email" => $email,
                    ":pseudo" => $pseudo,
                );

                $data = $this->execute($requete, $params);


                if ($data != null && sizeof($data) == 1) {
                    var_dump("le compte existe");
                    return false;
                }
                return true;
            } catch (PDOException $e) {
               var_dump($e);
                return true;
            }
        }
    
    


    /* Accolade globale: NE PAS SUPPRIMER => */ }





    /*  supprime un thé
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
        }  */


    ?>