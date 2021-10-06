<?php

class Lieu
{
    // PROPRIETES
    protected $id;
    protected $nom;
    protected $adresse;
    protected $contact;
    protected $note;
    protected $commentaire;
    protected $horaires;
    protected $queer_friendly;
    protected $racise_friendly;
    protected $type;
    protected $bio;


    // CONSTRUCTEUR
    public function __construct($_id, $_nom, $_adresse, $_contact, $_note, $_commentaire, $_horaires, $_queer_friendly, $_racise_friendly, $_type, $_bio)
    {
        $this->id = $_id;
        $this->id = $_nom;
        $this->adresse = $_adresse;
        $this->adresse = $_contact;
        $this->adresse = $_note;
        $this->commentaire = $_commentaire;
        $this->commentaire = $_horaires;
        $this->commentaire = $_queer_friendly;
        $this->commentaire = $_racise_friendly;
        $this->adresse = $_type;
        $this->adresse = $_bio;
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

    public function setLocalisation($_adresse)
    {
        $this->localisation = $_adresse;
    }
    public function getLocalisation()
    {
        return $this->localisation;
    }

    public function setContact($_contact)
    {
        $this->contact = $_contact;
    }
    public function getContact()
    {
        return $this->contact;
    }

    public function setNote($_note)
    {
        $this->note = $_note;
    }
    public function getNote()
    {
        return $this->note;
    }

    public function setCommentaire($_commentaire)
    {
        $this->commentaire = $_commentaire;
    }
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    public function setHoraires($_horaires)
    {
        $this->horaires = $_horaires;
    }
    public function getHoraires()
    {
        return $this->horaires;
    }

    public function setQueer_friendly($_queer_friendly)
    {
        $this->queer_friendly = $_queer_friendly;
    }
    public function getQueer_friendly()
    {
        return $this->queer_friendly;
    }

    public function setRacise_friendly($_racise_friendly)
    {
        $this->racise_friendly = $_racise_friendly;
    }
    public function getRacise_friendly()
    {
        return $this->racise_friendly;
    }

    public function setType($_type)
    {
        $this->type = $_type;
    }
    public function getType()
    {
        return $this->type;
    }

    public function setBio($_bio)
    {
        $this->bio = $_bio;
    }
    public function getBio()
    {
        return $this->bio;
    }


    /* Fonctions */

    /** Renvoie les données du lieu sous forme de tableau
     * @param{text}$_id;
     * @param{text}$_nom;
     * @param{text}$_adresse;
     * @param{text}$_contact;
     * @param{text}$_note;
     * @param{text}$_commentaire;
     * @param{text}$_horaires;
     * @param{text}$_queer_friendly;
     * @param{text}$_racise_friendly;
     * @param{text}$_description;
     * @param{text}$_note;
     * @param{text}$_bio;
     * @returns {array} Renvoie un tableau avec les données
     */

    public function get_lieu($_id, $_nom, $_adresse,$_contact, $_note, $_commentaire, $_horaires, $_queer_friendly, $_racise_friendly, $_type, $_bio)
    {
        /* Transforme les données du lieu en tableau */

        $data_lieu = [$_id, $_nom, $_adresse, $_contact, $_note, $_commentaire, $_horaires, $_queer_friendly, $_racise_friendly, $_type, $_bio];
        return $data_lieu;
    }
}

        // MÉTHODES
    /*     public lieuAjoute(){
            return '<p>'. $this->type . ' ' . $this->adresse . ' ' . $this->description . '</p>';
        } */
        /* public lieuModifie(){

        }
        public lieuPartage(){
        }  
        public adresseEntiere(){
            return $this->rue . ' ' . $this->num . ' , boîte ' . $this->boite . '<br />' . $this->zip . ' ' . $this->localite; 
        }
    
        */
?>