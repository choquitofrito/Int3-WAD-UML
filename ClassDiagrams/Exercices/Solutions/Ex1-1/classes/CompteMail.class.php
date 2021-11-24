<?php

class CompteMail {
    public int $id;
    public string $adresse;
    public int $capacite;
    // implementer la rélation
    public Utilisateur $utilisateur;

    public function __construct (int $id, string $adresse, int $capacite){
        $this->id = $id;
        $this->adresse = $adresse;
        $this->capacite = $capacite;
    }

    /**
     * Get the value of utilisateur
     */ 
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }


    // cette méthode sera appelée à chaque fois qu'on rajoute 
    // un CompteMail à un Utilisateur (regardez le code de addCompteMail dans Utilisateur)
    /**
     * Set the value of utilisateur
     *
     * @return  self
     */ 
    public function setUtilisateur($utilisateur)
    {
        $this->utilisateur = $utilisateur;

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
     * Get the value of capacite
     */ 
    public function getCapacite()
    {
        return $this->capacite;
    }

    /**
     * Set the value of capacite
     *
     * @return  self
     */ 
    public function setCapacite($capacite)
    {
        $this->capacite = $capacite;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}