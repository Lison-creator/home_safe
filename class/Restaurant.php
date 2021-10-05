<?php
class Restaurant extends Lieu
{
    /* Propriétés */

    protected $id;
    protected $menu;

    /* CONSTRUCTEUR */

    public function __construct($_id, $_menu)
    {
        $this->id = $_id;
        $this->nom = $_menu;
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

    public function setMenu($_menu)
    {
        $this->menu = $_menu;
    }
    public function getMenu()
    {
        return $this->menu;
    }

    /* Fonctions */

    /** Renvoie les données du restaurant sous forme de tableau
     * @param{text}$_id;
     * @param{text}$_menu;
     * @param{text}$_nom;
     * @param{text}$_adresse;
     * @param{text}$_contact;
     * @param{text}$_note;
     * @param{text}$_commentaire;
     * @param{text}$_horaires;
     * @param{text}$_queer_friendly;
     * @param{text}$_racise_friendly;
     * @param{text}$_type;
     * @param{text}$_bio;
     * @returns {array} Renvoie un tableau avec les données
     */
    /* Comme la classe Restaurant est une extension de la classe "Lieu", elle récupère ses propriétés */

    public function get_restaurant($_id, $_menu, $_nom, $_adresse,$_contact, $_note, $_commentaire, $_horaires, $_queer_friendly, $_racise_friendly, $_type, $_bio)
    {
        /* Transforme les données du restaurant en tableau.  */

        $data_restaurant = [$_id, $_menu, $_nom, $_adresse, $_contact, $_note, $_commentaire, $_horaires, $_queer_friendly, $_racise_friendly, $_type, $_bio];
        return $data_restaurant;
    }

    /* Pour update et Delete, il existe des fonctions en php/mySql préécrites. Est-ce qu'on peut les utiliser ? 
       DELETE : $this->query(" DELETE FROM table " );  
       UPDATE : $this->query(" UPDATE table SET nom = '$_nom', prenom = '$_prenom' "; */

    public function update_restaurant($_id, $_nom, $_adresse, $_localisation, $_commentaire, $_description)
    {
    }
    public function delete_restaurant($_id)
    {
    }
    public function insert_commentaire_restaurant($_id)
    {
    }
    public function delete_commentaire_restaurant($_id, $_commentaire)
    {
    }
}
