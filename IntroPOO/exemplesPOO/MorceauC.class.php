<?php

class MorceauC {
    // structure de données : proprietés de la classe
    public string $titre;
    public int $duree;
    public float $prix;

    // fonctionnalité : méthodes de la classe

    // constructeur reçoit les valeurs des propriétés
    public function __construct (string $t, int $d, float $p){
        echo "\nOn crée un morceau\n";
        $this->titre = $t;
        $this->prix = $p;
        $this->duree = $d;
    }

    public function afficher (){
        echo "\nLe titre : " . $this->titre;
        echo "\nLa durée : " . $this->duree;
        echo "\nLe prix : " . $this->prix;
    }

    public function afficherTitre (){
        echo "\nLe titre : " . $this->titre;
    }
}