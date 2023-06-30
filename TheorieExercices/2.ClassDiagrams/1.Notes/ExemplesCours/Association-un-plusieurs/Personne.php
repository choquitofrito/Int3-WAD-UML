<?php

class Personne {

    // propriétés
    public string $nom;
    public string $hobby;

    // association 1 avec Societe
    public Societe $societe;

    // méthodes
    public function sePresenter() : void {
        print ("<h3>Bonjour, je suis " . $this->nom .  
        " et j'aime " . $this->hobby .  "</h3>");
    }

    public function setSociete (Societe $s)
    {
        $this->societe = $s;
    }

    public function obtenirSociete(){
        // renvoyer l'objet Societe 
        // qui correspond à cette Personne
        return $this->societe;
    }

}