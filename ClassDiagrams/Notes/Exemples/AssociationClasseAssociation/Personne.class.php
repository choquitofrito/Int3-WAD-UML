<?php

class Personne
{
    public $nom;
    public $adresse;

    public $employeurs = []; // liste d'objets Societe

    public function __construct($nom, $adresse)
    {
        $this->nom = $nom;
        $this->adresse = $adresse;
    }

    /**
     * Get the value of nom
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of adresse
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set the value of adresse
     *
     * @return  self
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get the value of employeurs
     */
    public function getEmployeurs()
    {
        return $this->employeurs;
    }

    /**
     * Set the value of employeurs
     *
     * @return  self
     */
    public function setEmployeurs($employeurs)
    {
        $this->employeurs = $employeurs;

        return $this;
    }

    public function addEmployeur($societe)
    {
        $this->employeurs[] = $societe; // rajouter un objet Societe à la liste d'employeurs
        // boucle infini, à ne pas faire : 
        // $societe->addEmploye($this); // rajouter un objet Personne (this) à la liste d'employés
    }
}
