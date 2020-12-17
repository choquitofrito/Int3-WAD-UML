<?php

class Societe {
    public $nom;
    public $adresse;

    public $employes =[]; // array de Personnes

    public function __construct($nom, $adresse){
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
     * Get the value of employes
     */ 
    public function getEmployes()
    {
        return $this->employes;
    }

    /**
     * Set the value of employes
     *
     * @return  self
     */ 
    public function setEmployes($employes)
    {
        $this->employes = $employes;

        return $this;
    }

    public function addEmploye ($employe){
        $this->employes[] = $employe; // rajouter un employé à la liste dans Societe
        // possible de faire les deux liens d'un coup
        $employe->addEmployeur($this); // rajouter cette societé (this) à la liste dans 
                                // l'objet Personne que je reçoit en paramètre
    }
}
