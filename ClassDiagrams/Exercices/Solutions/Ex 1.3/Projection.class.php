<?php

include_once "./Cinema.class.php";
include_once "./Film.class.php";
include_once "./Salle.class.php";


class Projection
{
    private $dateProjection;

    private Cinema $cinema;
    private Film $film;
    private Salle $salle;

    // on a choisi l'injection de dépendances dans le constructeur
    public function __construct ($dateProjection, Cinema $cinema, Film $film, Salle $salle){
        $this->dateProjection = $dateProjection;
        $this->cinema = $cinema;
        $this->film = $film;
        $this->salle = $salle;
        // possibilité de rajouter cette projection au: cinema, film et salle
        $film->addProjection($this);
        $cinema->addProjection($this);
        $salle->addProjection($this);

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

    /**
     * Get the value of film
     */ 
    public function getFilm()
    {
        return $this->film;
    }

    /**
     * Set the value of film
     *
     * @return  self
     */ 
    public function setFilm($film)
    {
        $this->film = $film;

        return $this;
    }

    /**
     * Get the value of salle
     */ 
    public function getSalle()
    {
        return $this->salle;
    }

    /**
     * Set the value of salle
     *
     * @return  self
     */ 
    public function setSalle($salle)
    {
        $this->salle = $salle;

        return $this;
    }
}
