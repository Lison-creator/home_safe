<?php
class Rue extends Quartier{
    //mais devrait aussi être relier aux class Commentaire.php + Quartier.php + Utilisateur.php

    /* Demander à Mélanie / Loïc */
    /* Est-ce qu'on doit rendre les noms plus précis ? Ou bien les classes appellées suffisent pour utiliser des propriétés similaires d'une classe à l'autre ? */

    /* Propriétés */
    protected $id;
    protected $type; // boulevard, rue, avenue ...
    protected $num;
    protected $localisation; /* coordonnées géographiques */
    protected $commentaire; /* Une note donnée par les utilisateur.ice.s ?  ou est-ce que cela devrait être relier à la classe commentaire ?*/
    protected $description; /* Texte de description d'une rue en particulier*/

    /* CONSTRUCTEUR */

    public function __construct($_id, $_type, $_num, $_localisation, $_commentaire, $_description)
    {
        $this->id = $_id;
        $this->type = $_type;
        $this->num = $_num;
        $this->localisation = $_localisation;
        $this->commentaire = $_commentaire;
        $this->description = $_description;
    }

    /* Setter - Getter */

    public function setId($_id)
    {
        $this->id = $_id;
    }
    public function getId()
    {
        return $this->id;
    }

    public function setType($_type)
    {
        $this->type = $_type;
    }
    public function getType()
    {
        return $this->type;
    }

    public function setNum($_num){
        $this->num =$_num;
    }

    public function getNum(){
        return $this->num;
    }

    public function setLocalisation($_localisation)
    {
        $this->localisation = $_localisation;
    }
    public function getLocalisation()
    {
        return $this->localisation;
    }

    public function setCommentaire($_commentaire)
    {
        $this->commentaire = $_commentaire;
    }
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    public function setDescription($_description)
    {
        $this->description = $_description;
    }
    public function getDescription()
    {
        return $this->description;
    }
    
    /* Fonctions */

    /** Renvoie les données du quartier sous forme de tableau
     * @param{text} $_id;
     * @param{text}$_type;
     * @param{text}$_num;
     * @param{text}$_localisation;
     * @param{text}$_commentaire;
     * @param{text}$_description;
     * @returns {array} Renvoie un tableau avec les données
     */

    public function get_rue($_id, $_type, $_num, $_localisation, $_commentaire, $_description)
    {
        /* Transforme les données du rue en tableau */

        $data_rue = [$_id, $_type, $_num, $_localisation, $_commentaire, $_description];
        return $data_rue;
    }

    /* Pour update et Delete, il existe des fonctions en php/mySql préécrites. Est-ce qu'on peut les utiliser ? 
   DELETE : $this->query(" DELETE FROM table " );  
   UPDATE : $this->query(" UPDATE table SET nom = '$_nom', prenom = '$_prenom' "; */

    public function update_rue($_id, $_nom, $_adresse, $_localisation, $_commentaire, $_description)
    {
    }
    public function delete_rue($_id)
    {
    }
    public function insert_commentaire_rue($_id)
    {
        //contiendrait l'auteur / le contenu / la date...
    }
    public function delete_commentaire_rue($_id, $_commentaire)
    {
    }
}
