<?php
class Restaurant extends Lieu
{
    /* Propriétés */

    protected $id;
    protected $nom;
    protected $adresse; 
    protected $localisation; 
    protected $commentaire; 
    protected $description;

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
}
