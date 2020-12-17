<?php

include_once "Personne.class.php";
include_once "Societe.class.php";


class Contrat {
    public $dateEmbauche;
    public $salaire;

    // on a rajouté les types de données pour les définitions des propriétés
    public Personne $employe; // un objet de la classe Personne
    public Societe $employeur; // un objet de la classe Societe

    public function __construct ($salaire, $dateEmbauche, Personne $employe, Societe $employeur){
        $this->salaire = $salaire;
        $this->dateEmbauche = $dateEmbauche;
        // on affecte les dépendances
        $this->employe = $employe;
        $this->employeur = $employeur;
    }

    /**
     * Get the value of dateEmbauche
     */ 
    public function getDateEmbauche()
    {
        return $this->dateEmbauche;
    }

    /**
     * Set the value of dateEmbauche
     *
     * @return  self
     */ 
    public function setDateEmbauche($dateEmbauche)
    {
        $this->dateEmbauche = $dateEmbauche;

        return $this;
    }

    /**
     * Get the value of employe
     */ 
    public function getEmploye()
    {
        return $this->employe;
    }

    /**
     * Set the value of employe
     *
     * @return  self
     */ 
    public function setEmploye(Personne $employe)
    {
        $this->employe = $employe;

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