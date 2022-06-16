<?php

class Cinema {
    public int $id;
    public string $nom;
    public string $ville;

    // implementer la relation
    public array $films = [];

    public function __construct (int $id, string $nom, string $ville){
        $this->id = $id;
        $this->nom = $nom;
        $this->ville = $ville;
    }

    public function addFilm (Film $film){
        $this->films[] = $film;
        $film->setCinema ($this);
    }

}