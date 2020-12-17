<?php
include_once "Cinema.class.php";

class Salle
{

    private $nom;

    private Cinema $cinema; // Aggregation : cinema qui contient cette salle
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

    /**
     * Get the value of cinema
     */ 
    public function getCinema()
    {
        return $this->cinema;
    }

    /**
     * Set the value of cinema
     *
     * @return  self
     */ 
    public function setCinema($cinema)
    {
        $this->cinema = $cinema;

        return $this;
    }
}
