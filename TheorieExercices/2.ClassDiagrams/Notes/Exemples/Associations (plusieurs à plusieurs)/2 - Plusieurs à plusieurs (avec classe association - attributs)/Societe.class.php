<?php


class Societe {

    private $nom;
    private $adresse;

    private $contrats = []; // array d'objets Contrats

    
    public function __construct($nom,$adresse) {
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
     * Get the value of contrats
     */ 
    public function getContrats()
    {
        return $this->contrats;
    }

    /**
     * Set the value of contrats
     *
     * @return  self
     */ 
    public function setContrats($contrats)
    {
        $this->contrats = $contrats;

        return $this;
    }

    public function addContrat($unContrat){
        $this->contrats[] = $unContrat;
    }
}