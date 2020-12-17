<?php

class Film
{

    private $nom;

    private $listeProjections = []; // Association: liste de projections

    public function __construct($nom)
    {
        $this->nom = $nom;
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

    // cette méthode est faite à la main et sert à rajouter une projection
    public function addProjection ($projection){
        $this->listeProjections[] = $projection;
    }
}
