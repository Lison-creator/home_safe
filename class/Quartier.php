<?php
class Quartier
{

    /* Demander à Mélanie / Loïc */
    /* Est-ce qu'on doit rendre les noms plus précis ? Ou bien les classes appellées suffisent pour utiliser des propriétés similaires d'une classe à l'autre ? */

    /* Propriétés */
    protected $id;
    protected $nom;
    protected $adresse;
    protected $localisation; /* coordonnées géographiques */
    protected $commentaire; /* Une note donnée par les utilisateur.ice.s ? */
    protected $description; /* Texte de description du quartier */

    /* CONSTRUCTEUR */

    public function __construct($_id, $_nom, $_adresse, $_localisation, $_commentaire, $_description)
    {
        $this->id = $_id;
        $this->nom = $_nom;
        $this->adresse = $_adresse;
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

    public function setNom($_nom)
    {
        $this->nom = $_nom;
    }
    public function getNom()
    {
        return $this->nom;
    }

    public function setLocalisation($_localisation)
    {
        $this->localisation = $_localisation;
    }
    public function getLocalisation()
    {
        return $this->localisation;
    }

    public function setQuotation($_commentaire)
    {
        $this->commentaire = $_commentaire;
    }
    public function getQuotation()
    {
        return $this->quotation;
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
     * @param{text}$_nom;
     * @param{text}$_adresse;
     * @param{text}$_localisation;
     * @param{text}$_commentaire;
     * @param{text}$_description;
     * @returns {array} Renvoie un tableau avec les données
     */

    public function get_quartier($_id, $_nom, $_adresse, $_localisation, $_commentaire, $_description)
    {
        /* Transforme les données du quartier en tableau */

        $data_quartier = [$_id, $_nom, $_adresse, $_localisation, $_commentaire, $_description];
        return $data_quartier;
    }

    /* Pour update et Delete, il existe des fonctions en php/mySql préécrites. Est-ce qu'on peut les utiliser ? 
   DELETE : $this->query(" DELETE FROM table " );  
   UPDATE : $this->query(" UPDATE table SET nom = '$_nom', prenom = '$_prenom' "; */

    public function update_quartier($_id, $_nom, $_adresse, $_localisation, $_commentaire, $_description)
    {
    }
    public function delete_quartier($_id)
    {
    }
    public function insert_commentaire_quartier($_id)
    {
    }
    public function delete_commentaire_quartier($_id, $_commentaire)
    {
    }
}
