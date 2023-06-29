<?php

class Personne {

    // propriétés
    public string $nom;
    public string $hobby;

    // méthodes
    public function sePresenter(){
        print ("<h3>Bonjour, je suis " . $this->nom .  
        " et j'aime " . $this->hobby .  "</h3>");
    }

}