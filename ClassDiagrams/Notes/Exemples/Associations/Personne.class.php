<?php

class Personne {
    public $nom; 

    public $employeur; // un seul objet Societe qui agit comme employeur

    public function __construct($nom){
        $this->nom = $nom;
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
     * Get the value of employeur
     */ 
    public function getEmployeur()
    {
        return $this->employeur;
    }

    /**
     * Set the value of employeur
     *
     * @return  self
     */ 
    public function setEmployeur($employeur)
    {
        $this->employeur = $employeur;

        return $this;
    }
}


