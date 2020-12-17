<?php

class Cinema {

    private $nom;

    private $listeSalles = []; // Aggregation: liste de salles
    private $listeProjections = []; // Association: liste de projections

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
     * Get the value of listeSalles
     */ 
    public function getListeSalles()
    {
        return $this->listeSalles;
    }

    /**
     * Set the value of listeSalles
     *
     * @return  self
     */ 
    public function setListeSalles($listeSalles)
    {
        $this->listeSalles = $listeSalles;

        return $this;
    }

    /**
     * Get the value of listeProjections
     */ 
    public function getListeProjections()
    {
        return $this->listeProjections;
    }

    /**
     * Set the value of listeProjections
     *
     * @return  self
     */ 
    public function setListeProjections($listeProjections)
    {
        $this->listeProjections = $listeProjections;

        return $this;
    }
}