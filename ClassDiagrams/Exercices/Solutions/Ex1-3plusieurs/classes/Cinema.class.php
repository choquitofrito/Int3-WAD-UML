<?php

class Cinema {
    public int $id;
    public string $nom;
    public string $ville;

    // implementer la relation : les diffusions qui ont lieu dans ce Cinema
    public array $cinemaDiffusions = [];

    public function __construct (int $id, string $nom, string $ville){
        $this->id = $id;
        $this->nom = $nom;
        $this->ville = $ville;
    }

 


}